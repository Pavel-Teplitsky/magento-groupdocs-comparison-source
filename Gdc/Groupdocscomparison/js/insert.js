    function insertIframe()
    {
        form = document.forms.form;
        embedId = form.embedKey.value;
        fileId = form.fileid.value;
       if (fileId != "" && embedId != "") {
            var iframe = '<iframe src="https://apps.groupdocs.com/document-comparison/embed/' + embedId + '/' + fileId + '?&referer=Magento/1.0" frameborder="0" width="500" height="650"></iframe>';
            var tinyMceContent = tinyMCE.activeEditor.getContent();
                        // set content
                        console.log(tinyMceContent);
            tinyMCE.activeEditor.setContent(tinyMceContent + iframe);
        } else {
            var tinyMceContent = tinyMCE.activeEditor.getContent();
                        // set content
                       
           tinyMCE.activeEditor.setContent(tinyMceContent + "Something wrong with entered data");
        }
           
    }
    
    function delForm(){
        del = document.getElementById('page_tabs_content_section_content');
        del.removeChild("groupdocs");
    }

