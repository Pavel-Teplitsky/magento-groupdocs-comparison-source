<script>
    // Insert GroupDocs File ID at cms edit page
    function gdfileid(){
        var anchor = document.getElementsByTagName("a");
        // Switch the right tab
        for (var i = 0; i < anchor.length; i++){   
            if (anchor[i].className.match(/tab-item-link/) || anchor[i].className.match(/tab-item-link active/)){
                if (anchor[i].title!="Content"){
                    anchor[i].className ="tab-item-link";
                    var tab1 = document.getElementById('page_tabs_main_section_content');
                    var tab3 = document.getElementById('page_tabs_design_section_content');
                    var tab4 = document.getElementById('page_tabs_meta_section_content');
                    tab1.style.display = 'none';
                    tab3.style.display = 'none';
                    tab4.style.display = 'none';
                } else {
                    anchor[i].className ="tab-item-link active";
                    var tab2 = document.getElementById('page_tabs_content_section_content');
                    tab2.style.display = 'block';
                    var form = document.createElement('div');
                    form.setAttribute("id", "groupdocs")
                    form.innerHTML = '<form action="#" name="form">' +
                                        '<label for="embedKey">Embed Key</label><br />'+
                                        '<input type="text", name="embedKey" value="" /><br />'+
                                        '<label for="fileId">File ID</label><br />'+
                                        '<input type="text" name="fileid" value=""><br />'+
                                        '<input type="button" name="doRequest" value="Make request" onClick="insertIframe();">'+
                                        '<input type="button" name="cancel" value="Cancel" onClick="delForm()">'+
                                    '</form>'+
                                    '<br />'+
                                    '<a target="blank" href="http://groupdocs.com/docs/display/gendoc/FAQs">See our FAQ</a> to learn how to use Comparison.';
                            tab2.appendChild(form);
                }
            }
        }
        // Enter GroupDocs File ID
//        var form = popWin('groupdocscomparison/form.php', 'GroupDocs Compare', 'width=450,height=260, resizable=no, scrollbars=no');
        // all good continue
      
//        var cmsName = 'Magento'
//        var cmsVersion = '1.7'
//        var iframe = '<iframe src="https://apps.groupdocs.com/signature/forms/SignEmbed/'+ans+'?&referer='+cmsName+'/'+cmsVersion+'" frameborder="0" width="600" height="400"></iframe>';
//        var tinyMceContent = tinyMCE.activeEditor.getContent();
//        // set content
//        tinyMCE.activeEditor.setContent(tinyMceContent+iframe);
//        

    }
   
</script>
<?php
class Gdc_Groupdocscomparison_Block_Adminhtml_Cms_Page_Edit extends Mage_Adminhtml_Block_Cms_Page_Edit {
    public function  __construct() {

        parent::__construct();
      
        $head = Mage::app()->getFrontController()
            ->getAction()
            ->getLayout()
            ->getBlock('root')
            ->getChild('head');
        $head->addJs('../app/code/local/Gdc/Groupdocscomparison/js/insert.js');
        $this->_addButton('button_id', array(
            'label'     => Mage::helper('cms')->__('GroupDocs Comparison'),
            'onclick'   => "gdfileid()",
            'class'     => 'go'
        ), 0, 100, 'footer', 'header');
       
    }
}
