<!-- BEGIN PAGE HEADER-->
<div class="row-fluid">
   <div class="span12">
      <!-- BEGIN STYLE CUSTOMIZER -->
      <div class="color-panel hidden-phone">
         <div class="color-mode-icons icon-color"></div>
         <div class="color-mode-icons icon-color-close"></div>
         <div class="color-mode">
            <p>THEME COLOR</p>
            <ul class="inline">
               <li class="color-black current color-default" data-style="default"></li>
               <li class="color-blue" data-style="blue"></li>
               <li class="color-brown" data-style="brown"></li>
               <li class="color-purple" data-style="purple"></li>
               <li class="color-white color-light" data-style="light"></li>
            </ul>
            <label class="hidden-phone">
            <input type="checkbox" class="header" checked value="" />
            <span class="color-mode-label">Fixed Header</span>
            </label>                   
         </div>
      </div>
      <!-- END BEGIN STYLE CUSTOMIZER -->
      <!-- BEGIN PAGE TITLE & BREADCRUMB-->
      <h3 class="page-title">
         User Approval SPB  Setup <small>Pengaturan Approval</small>
      </h3>
      <ul class="breadcrumb">
         <li>
            <i class="icon-home"></i>
            <a href="<?php echo site_url('dashboard'); ?>">Home</a> 
            <i class="icon-angle-right"></i>
         </li>
         <li><a href="#">User Administrator</a><i class="icon-angle-right"></i></li>  
         <li><a href="#">User Approval SPB</a></li> 
      </ul>
      <!-- END PAGE TITLE & BREADCRUMB-->
   </div>
</div>
<!-- END PAGE HEADER-->

<!-- BEGIN EXAMPLE TABLE PORTLET -->
<div class="portlet box blue" id="wrapper-table">
   <div class="portlet-title">
      <div class="caption"><i class="icon-globe"></i>User Appoval List Table</div>
      <div class="tools">
         <a href="javascript:;" class="collapse"></a>
      </div>
   </div>
   <div class="portlet-body">
      <div class="clearfix">
         <!-- <div class="btn-group">
            <button id="btn_add" class="btn green">
            Add New <i class="icon-plus"></i>
            </button>
         </div>
         <div class="btn-group">
            <button id="btn_delete" class="btn red">
              Delete Role <i class="icon-remove"></i>
            </button>
         </div> -->
      </div>

      <!-- TABLE DISINI -->
      <!-- ELEMENT : approval_spb_table -->
      <table class="table table-striped table-bordered table-hover" id="approval_spb_table"> 
         <thead>
            <tr>
               <th width="5%">No</th>
               <th width="10%">Username</th>
               <th width="25%">Fullname</th>
               <th width="15%">Jabatan</th>
               <th width="15%" class="hidden-480">Approval Mode</th>
               <th width="15%" style="text-align:center;">Approvle No</th>
               <th width="8%">&nbsp;</th>
            </tr>
         </thead>
         <tbody>
         </tbody>
      </table>

   </div>
</div>
<!-- END EXAMPLE TABLE PORTLET -->

<!-- BEGIN ADD -->
<div id="add" class="hide">
   
   <div class="portlet box green">
      <div class="portlet-title">
         <div class="caption"><i class="icon-reorder"></i>Add New Role</div>
         <div class="tools">
            <a href="javascript:;" class="collapse"></a>
         </div>
      </div>
      <div class="portlet-body form">
         <!-- BEGIN FORM-->
         <form action="#" id="form_add" class="form-horizontal">

            <div class="alert alert-error hide">
               <button class="close" data-dismiss="alert"></button>
               You have some form errors. Please check below.
            </div>
            <div class="alert alert-success hide">
               <button class="close" data-dismiss="alert"></button>
               New Role has been Created !
            </div>
            <br>
            <div class="control-group">
               <label class="control-label">Role Name<span class="required">*</span></label>
               <div class="controls">
                  <input type="text" name="role_name" data-required="1" class="medium m-wrap"/>
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">Role Description<span class="required">*</span></label>
               <div class="controls">
                  <textarea name="role_desc" data-required="1" class="large m-wrap" rows="4"></textarea>
               </div>
            </div>
            <div class="form-actions">
               <button type="submit" class="btn green">Save</button>
               <button type="button" class="btn" id="cancel">Back</button>
            </div>
         </form>
         <!-- END FORM-->
      </div>
   </div>

</div>
<!-- END ADD -->

<!-- BEGIN EDIT -->
<div id="edit" class="hide">
   
   <div class="portlet box purple">
      <div class="portlet-title">
         <div class="caption"><i class="icon-reorder"></i>Edit Role</div>
         <div class="tools">
            <a href="javascript:;" class="collapse"></a>
         </div>
      </div>
      <div class="portlet-body form">
         <!-- BEGIN FORM-->
         <form action="#" id="form_edit" class="form-horizontal">
            <input type="hidden" id="role_id" name="role_id">
            <div class="alert alert-error hide">
               <button class="close" data-dismiss="alert"></button>
               You have some form errors. Please check below.
            </div>
            <div class="alert alert-success hide">
               <button class="close" data-dismiss="alert"></button>
               Edit Role Successful!
            </div>

            <div class="control-group">
               <label class="control-label">Role Name<span class="required">*</span></label>
               <div class="controls">
                  <input type="text" name="role_name" data-required="1" class="medium m-wrap"/>
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">Role Description<span class="required">*</span></label>
               <div class="controls">
                  <textarea id="role_desc" name="role_desc" class="large m-wrap" rows="4"></textarea>
               </div>
            </div>
            <div class="form-actions">
               <button type="submit" class="btn purple">Save</button>
               <button type="button" class="btn" id="cancel">Back</button>
            </div>
         </form>
         <!-- END FORM-->
      </div>
   </div>

</div>
<!-- END EDIT -->


<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->

<?php $this->load->view('_jscore'); ?>

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo base_url(); ?>assets/plugins/data-tables/jquery.dataTables.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/plugins/data-tables/DT_bootstrap.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/jquery-validation/dist/additional-methods.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url(); ?>assets/scripts/jquery.json-2.2.js" type="text/javascript"></script>        
<script src="<?php echo base_url(); ?>assets/scripts/app.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/scripts/index.js" type="text/javascript"></script>        
<!-- END PAGE LEVEL SCRIPTS -->  

<script>
   jQuery(document).ready(function() {    
      App.init(); // initlayout and core plugins
      
   });
</script>



<!-- JAVASCRIPT LAINNYA (DEVELOP) -->
<script type="text/javascript">
$(function(){

      // fungsi untuk reload data table
      // di dalam fungsi ini ada variable tbl_id
      // gantilah value dari tbl_id ini sesuai dengan element nya
      var dTreload = function()
      {
        var tbl_id = 'approval_spb_table';
        $("select[name='"+tbl_id+"_length']").trigger('change');
        $(".paging_bootstrap li:first a").trigger('click');
        $("#"+tbl_id+"_filter input").val('').trigger('keyup');
      }

      // fungsi untuk check all
      /*jQuery('#approval_spb_table .group-checkable').live('change',function () {
          var set = jQuery(this).attr("data-set");
          var checked = jQuery(this).is(":checked");
          jQuery(set).each(function () {
              if (checked) {
                  $(this).attr("checked", true);
              } else {
                  $(this).attr("checked", false);
              }
          });
          jQuery.uniform.update(set);
      });*/

      /*$("#approval_spb_table .checkboxes").livequery(function(){
        $(this).uniform();
      });*/

      // begin dataTable script
      $('#approval_spb_table').dataTable({
          "bProcessing": true,
          "bServerSide": true,
          "sAjaxSource": site_url+"administration/datatable_user_approval_spb",
          "aoColumns": [
            null,
            null,
            null,
            null,
            null,
            null,
            null
          ],
          "aLengthMenu": [
              [5, 15, 20, -1],
              [5, 15, 20, "All"] // change per page values here
          ],
          // set the initial value
          "iDisplayLength": 15,
          "sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span6'i><'span6'p>>",
          "sPaginationType": "bootstrap",
          "oLanguage": {
              "sLengthMenu": "_MENU_ records per page",
              "oPaginate": {
                  "sPrevious": "Prev",
                  "sNext": "Next"
              }
          },
          "aoColumnDefs": [{
                  'bSortable': false,
                  'aTargets': [0]
              },
              {
                  'bSortable': false,
                  'aTargets': [3]
              }
          ]
      });

      jQuery('#role_table_wrapper .dataTables_filter input').addClass("m-wrap medium"); // modify table search input
      jQuery('#role_table_wrapper .dataTables_length select').addClass("m-wrap small"); // modify table per page dropdown

      // end dataTable script

      // // fungsi untuk delete records
      // $("#btn_delete").click(function(){

      //   var role_id = [];
      //   var $i = 0;
      //   $("input#checkbox:checked").each(function(){

      //     role_id[$i] = $(this).val();

      //     $i++;

      //   });

      //   if(role_id.length==0){

      //     alert("Please select some row to delete !");

      //   }else{

      //     var conf = confirm('Are you sure to delete this rows ?');

      //     if(conf){

      //       $.ajax({
      //         type: "POST",
      //         url: site_url+"administration/delete_role",
      //         dataType: "json",
      //         data: {role_id:role_id},
      //         success: function(response){
      //           if(response.success==true){
      //             alert("Deleted!");
      //             dTreload(); // memanggil fungsi reload
      //           }else{
      //             alert("Delete Failed!");
      //           }
      //         },
      //         error: function(){
      //           alert("Failed to Connect into Database, Please Check ur Connection or Try Again Latter")
      //         }
      //       });

      //     }

      //   }

      // });

      // // event button Add New ketika di tekan
      // $("#btn_add").click(function(){
      //   $("#wrapper-table").hide();
      //   $("#add").show();
      // });

      // // BEGIN FORM ADD VALIDATION
      // var form1 = $('#form_add');
      // var error1 = $('.alert-error', form1);
      // var success1 = $('.alert-success', form1);

      // form1.validate({
      //     errorElement: 'span', //default input error message container
      //     errorClass: 'help-inline', // default input error message class
      //     focusInvalid: false, // do not focus the last invalid input
      //     ignore: "",
      //     rules: {
      //         role_name: {
      //             required: true
      //         },
      //         role_desc: {
      //             required: true
      //         }
      //     },

      //     invalidHandler: function (event, validator) { //display error alert on form submit              
      //         success1.hide();
      //         error1.show();
      //         App.scrollTo(error1, -200);
      //     },

      //     highlight: function (element) { // hightlight error inputs
      //         $(element)
      //             .closest('.help-inline').removeClass('ok'); // display OK icon
      //         $(element)
      //             .closest('.control-group').removeClass('success').addClass('error'); // set error class to the control group
      //     },

      //     unhighlight: function (element) { // revert the change dony by hightlight
      //         $(element)
      //             .closest('.control-group').removeClass('error'); // set error class to the control group
      //     },

      //     success: function (label) {
      //         label
      //             .addClass('valid').addClass('help-inline ok') // mark the current input as valid and display OK icon
      //         .closest('.control-group').removeClass('error').addClass('success'); // set success class to the control group
      //     },

      //     submitHandler: function (form) {

      //       $.ajax({
      //         type: "POST",
      //         url: site_url+"administration/add_role",
      //         dataType: "json",
      //         data: form1.serialize(),
      //         success: function(response){
      //           if(response.success==true){
      //             success1.show();
      //             error1.hide();
      //             form1.trigger('reset');
      //             form1.children('div').removeClass('success');
      //             $("#cancel",form_add).trigger('click')
      //             alert('Successfully Saved Data');
      //           }else{
      //             success1.hide();
      //             error1.show();
      //           }
      //         },
      //         error:function(){
      //             success1.hide();
      //             error1.show();
      //         }
      //       });

      //     }
      // });

      // // event untuk kembali ke tampilan data table (ADD FORM)
      // $("#cancel","#form_add").click(function(){
      //   success1.hide();
      //   error1.hide();
      //   $("#add").hide();
      //   $("#wrapper-table").show();
      //   dTreload();
      // });

      // // event button Edit ketika di tekan
      // $("a#link-edit").live('click',function(){
      //   $("#wrapper-table").hide();
      //   $("#edit").show();
      //   var role_id = $(this).attr('role_id');
      //   $.ajax({
      //     type: "POST",
      //     dataType: "json",
      //     data: {role_id:role_id},
      //     url: site_url+"administration/get_role_by_role_id",
      //     success: function(response){
      //       $("#form_edit input[name='role_id']").val(response.role_id);
      //       $("#form_edit input[name='role_name']").val(response.role_name);
      //       $("#form_edit textarea[name='role_desc']").val(response.role_desc);
      //     }
      //   })

      // });

      // // BEGIN FORM EDIT VALIDATION
      // var form2 = $('#form_edit');
      // var error2 = $('.alert-error', form2);
      // var success2 = $('.alert-success', form2);

      // form2.validate({
      //     errorElement: 'span', //default input error message container
      //     errorClass: 'help-inline', // default input error message class
      //     focusInvalid: false, // do not focus the last invalid input
      //     ignore: "",
      //     rules: {
      //         role_name: {
      //             required: true
      //         },
      //         role_desc: {
      //           required: true
      //         }
      //     },

      //     invalidHandler: function (event, validator) { //display error alert on form submit              
      //         success2.hide();
      //         error2.show();
      //         App.scrollTo(error2, -200);
      //     },

      //     highlight: function (element) { // hightlight error inputs
      //         $(element)
      //             .closest('.help-inline').removeClass('ok'); // display OK icon
      //         $(element)
      //             .closest('.control-group').removeClass('success').addClass('error'); // set error class to the control group
      //     },

      //     unhighlight: function (element) { // revert the change dony by hightlight
      //         $(element)
      //             .closest('.control-group').removeClass('error'); // set error class to the control group
      //     },

      //     success: function (label) {
      //         label
      //             .addClass('valid').addClass('help-inline ok') // mark the current input as valid and display OK icon
      //         .closest('.control-group').removeClass('error').addClass('success'); // set success class to the control group
      //     },

      //     submitHandler: function (form) {


      //       // PROSES KE FUNCTION DI CONTROLLER, APABILA VALIDASI BERHASIL
      //       $.ajax({
      //         type: "POST",
      //         url: site_url+"administration/edit_role",
      //         dataType: "json",
      //         data: form2.serialize(),
      //         success: function(response){
      //           if(response.success==true){
      //             success2.show();
      //             error2.hide();
      //             form2.children('div').removeClass('success');
      //             $("#menu_table_filter input").val('');
      //             dTreload();
      //             $("#cancel",form_edit).trigger('click')
      //             alert('Successfully Updated Data');
      //           }else{
      //             success2.hide();
      //             error2.show();
      //           }
      //         },
      //         error:function(){
      //             success2.hide();
      //             error2.show();
      //         }
      //       });

      //     }
      // });
      // //  END FORM EDIT VALIDATION

      // // event untuk kembali ke tampilan data table (EDIT FORM)
      // $("#cancel","#form_edit").click(function(){
      //   $("#edit").hide();
      //   $("#wrapper-table").show();
      //   dTreload();
      //   success2.hide();
      //   error2.hide();
      // });

      // var form3 = $('#form_edit_role_priviledge');
      // var error3 = $('.alert-error', form3);
      // var success3 = $('.alert-success', form3);

      // // event button Edit Priviledge ketika di tekan
      // $("a#link-edit-priviledge").live('click',function(){
      //   $("#wrapper-table").hide();
      //   $("#edit_role_priviledge").show();
      //   var role_id = $(this).attr('role_id');
      //   $.ajax({
      //     type: "POST",
      //     dataType: "html",
      //     data: {role_id:role_id},
      //     url: site_url+"administration/get_menu_by_role",
      //     success: function(response){
      //       $("input[name='role_id']",form3).val(role_id);
      //       $("#menu-role",form3).html(response);
      //     }
      //   });
      // });

      // // event untuk kembali ke tampilan data table (EDIT FORM)
      // $("#cancel",form3).click(function(){
      //   $("#edit_role_priviledge").hide();
      //   $("#wrapper-table").show();
      //   dTreload();
      // });

      // $("#menu-role input#parent",form3).live('click',function(){
      //   if($(this).is(':checked')==true){
      //     $(this).parent().find('input[type="checkbox"]').attr('checked',true);
      //   }else{
      //     $(this).parent().find('input[type="checkbox"]').attr('checked',false);
      //   }
      // });

      // $("#menu-role input#child",form3).live('click',function(){
      //   if($(this).is(':checked')==true){
      //     $(this).parent().find('input#grandchild').attr('checked',true);
      //   }else{
      //     $(this).parent().find('input#grandchild').attr('checked',false);
      //   }
      // });

      // $("#menu-role input#grandchild",form3).live('click',function(){
      //   if($(this).is(':checked')==true){
      //     $(this).parent().parent().parent().find('input#child').attr('checked',true);
      //     $(this).parent().parent().parent().parent().parent().find('input#parent').attr('checked',true);
      //   }else{
      //     if($(this).parent().parent().find('input#grandchild:checked').length==0){
      //       $(this).parent().parent().parent().find('input#child').attr('checked',false);
      //       $(this).parent().parent().parent().parent().parent().find('input#parent').attr('checked',false);
      //     }
      //   }
      // });

      // $("#menu-role input#child",form3).live('click',function(){
      //   if($(this).is(':checked')==true){
      //     $(this).parent().parent().parent().find('input#parent').attr('checked',true);
      //   }else{
      //     if($(this).parent().parent().find('input#child:checked').length==0){
      //       $(this).parent().parent().parent().find('input#parent').attr('checked',false);
      //     }
      //   }
      // });

      // $(form3).submit(function(e){
      //   e.preventDefault();
      //   $.ajax({
      //     type: "POST",
      //     url: site_url+"administration/edit_role_priviledge",
      //     dataType: "json",
      //     data: form3.serialize(),
      //     success: function(response){
      //       if(response.success==true){
      //         success3.show();
      //         error3.hide();
      //         App.scrollTo(0,0);
      //         alert("Save Successfuly!");
      //         window.location.reload()
      //       }else{
      //         error3.show();
      //         success3.hide();
      //       }
      //     },
      //     error: function(){
      //       error3.show();
      //       success3.hide();
      //     }
      //   })
      // });

      // //select all
      // $("#select_all").click(function(){
      //   if($(this).is(':checked')==true)
      //   {
      //     $("#menu-role input[type='checkbox']").attr('checked',true);
      //   }
      //   else
      //   {
      //     $("#menu-role input[type='checkbox']").attr('checked',false);
      //   }
      // })
});
</script>

<!-- END JAVASCRIPTS -->
