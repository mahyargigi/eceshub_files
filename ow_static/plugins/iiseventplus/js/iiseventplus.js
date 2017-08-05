var uploadFileIntoEventFormComponent;

function showUploadFileIntoEventForm($eventId){
    uploadFileIntoEventFormComponent = OW.ajaxFloatBox('IISEVENTPLUS_CMP_FileUploadFloatBox', {iconClass: 'ow_ic_add',eventId: $eventId})
}

function closeUploadFileIntoEventForm(){
    if(uploadFileIntoEventFormComponent){
        uploadFileIntoEventFormComponent.close();
    }
}