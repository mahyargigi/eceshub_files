<?php

/**
 * @author Seyed Ismail Mirvakili
 * Date: 6/14/2017
 * Time: 11:12 AM
 */
class IISCHANGETRANSLATION_CTRL_Admin extends ADMIN_CTRL_Abstract
{
    public function index(array $params = array())
    {
        $language = OW::getLanguage();
        $this->setPageHeading($language->text('iischangetranslation', 'admin_page_heading'));
        $this->setPageTitle($language->text('iischangetranslation', 'admin_page_title'));

        $importLangForm = new Form('import');
        $importLangForm->setMethod('post');
        $importLangForm->setEnctype(Form::ENCTYPE_MULTYPART_FORMDATA);
        $fileField = new FileField('file');
        $fileField->setLabel(OW::getLanguage()->text('iischangetranslation', 'lang_file'));
        $importLangForm->addElement($fileField);
        $commandHidden = new HiddenField('command');
        $importLangForm->addElement($commandHidden->setValue('upload-lp'));
        $submit = new Submit('submit');
        $importLangForm->addElement($submit->setValue(OW::getLanguage()->text('iischangetranslation', 'submit')));
        $importLangForm->setAction(OW::getRouter()->urlForRoute('iischangetranslation.admin') . "#lang_import");
        $this->addForm($importLangForm);

        if ( isset($_POST['command']) && $_POST['command'] == 'upload-lp' ) {
            $this->import();
        }
    }

    public function import()
    {
        /** @var IISCHANGETRANSLATION_BOL_Service $service */
        $service = IISCHANGETRANSLATION_BOL_Service::getInstance();

        if (empty($_FILES['file']) || (int)$_FILES['file']['error'] !== 0 || !is_uploaded_file($_FILES['file']['tmp_name'])) {
            OW::getFeedback()->error(OW::getLanguage()->text('iischangetranslation', 'import_failed'));
            $this->redirect();
        }

        $this->cleanImportDir($service->getImportPath());

        $tmpName = $_FILES['file']['tmp_name'];

        $uploadFilePath = $service->getImportPath() . $_FILES['file']['name'];
        move_uploaded_file($tmpName, $uploadFilePath);

        if (file_exists($tmpName)) {
            unlink($tmpName);
        }
        if (!$service->importUploadedFile($uploadFilePath)) {
            OW::getFeedback()->error(OW::getLanguage()->text('iischangetranslation', 'import_failed'));
            $this->redirect();
        }
        OW::getFeedback()->info(OW::getLanguage()->text('iischangetranslation', 'import_success'));
    }

    private function cleanImportDir($dir)
    {
        $dh = opendir($dir);

        while (false !== ($node = readdir($dh))) {
            if ($node == '.' || $node == '..')
                continue;

            if (is_dir($dir . $node)) {
                UTIL_File::removeDir($dir . $node);
                continue;
            }

            unlink($dir . $node);
        }
    }
}