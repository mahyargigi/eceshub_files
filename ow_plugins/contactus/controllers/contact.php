<?php
class CONTACTUS_CTRL_Contact extends OW_ActionController
{
	public function index()
	{
		$this->setPageTitle(OW::getLanguage()->text('contactus', 'index_page_title'));
		$this->setPageHeading(OW::getLanguage()->text('contactus', 'index_page_heading'));
	} 
}