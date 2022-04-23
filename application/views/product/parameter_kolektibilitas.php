<?php 
  $CI = get_instance();
?>
<style type="text/css">
.table th, .table td {
    border-top: 1px solid #fff;
    border-bottom: 1px solid #ddd;
    line-height: 12px;
    padding: 5px;
    text-align: left;
    vertical-align: top;
    font: 12px Tahoma;
}
</style>
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
      Product Setup <small>Setting Parameter Kolektibilitas</small>
    </h3>
    <ul class="breadcrumb">
      <li>
        <i class="icon-home"></i>
        <a href="<?php echo site_url('dashboard'); ?>">Home</a> 
        <i class="icon-angle-right"></i>
      </li>
         <li><a href="#">Product</a><i class="icon-angle-right"></i></li>  
      <li><a href="#">Parameter Kolektibilitas</a></li> 
    </ul>
      <!-- END PAGE TITLE & BREADCRUMB-->
   </div>
</div>
<!-- END PAGE HEADER-->



<!-- BEGIN EXAMPLE TABLE PORTLET-->
<div class="portlet box blue" id="wrapper-table">
   <div class="portlet-title">
      <div class="caption"><i class="icon-globe"></i>Parameter Kolektibilitas</div>
      <div class="tools">
         <a href="javascript:;" class="collapse"></a>
      </div>
   </div>
   <div class="portlet-body">
      <div class="clearfix">
         <div class="btn-group">
            <button id="btn_add" class="btn green">
            Add Paramter <i class="icon-plus"></i>
            </button>
         </div>
         <div class="btn-group">
            <button id="btn_delete" class="btn red">
              Delete <i class="icon-remove"></i>
            </button>
         </div>
         <!-- <div class="btn-group pull-right">
            <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="icon-angle-down"></i>
            </button>
            <ul class="dropdown-menu pull-right">
               <li><a href="#">Print</a></li>
               <li><a href="#">Save as PDF</a></li>
               <li><a href="#">Export to Excel</a></li>
            </ul>
         </div> -->
      </div>
      <table class="table table-striped table-bordered table-hover" id="produk_pembiayaan">
         <thead>
            <tr>
               <th style="width:8px;"><input type="checkbox" class="group-checkable" data-set="#produk_pembiayaan .checkboxes" /></th>
               <th width="35%">PAR/Kolektibilitas</th>
               <th width="15%">Tunggakkan Min (Hari)</th>
               <th width="20%">Tunggakkan Max (Hari)</th>
               <th width="20%">CPP (%)</th>
               <th>Edit</th>
            </tr>
         </thead>
         <tbody>
            
         </tbody>
      </table>
   </div>
</div>
<!-- END EXAMPLE TABLE PORTLET-->




<!-- BEGIN ADD USER -->
<div id="add" class="hide">
   
   <div class="portlet box green">
      <div class="portlet-title">
         <div class="caption"><i class="icon-reorder"></i>Add Parameter Kolektibilitas</div>
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
               Parameter Kolektibilitas Baru berhasil ditambahkan !
            </div>
            <br>
            <div class="control-group">
               <label class="control-label">PAR/Kolektibilitas<span class="required">*</span></label>
               <div class="controls">
                  <textarea class="m-wrap" id="par_desc" name="par_desc"></textarea>
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">Tunggakkan Min (Hari)<span class="required">*</span></label>
               <div class="controls">
                  <input type="text" name="jumlah_hari_1" id="jumlah_hari_1" data-required="1" class="small m-wrap" maxlength="5" />
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">Tunggakkan Max (Hari)<span class="required">*</span></label>
               <div class="controls">
                  <input type="text" name="jumlah_hari_2" id="jumlah_hari_2" data-required="1" class="small m-wrap" maxlength="5" />
               </div>
            </div>
            <div class="control-group">
              <label class="control-label">CPP (%)<span class="required">*</span></label>
               <div class="controls">
                    <div class="input-append">
                     <input type="text" class="small m-wrap" id="cpp" name="cpp" value="0">
                     <span class="add-on">%</span>
                    </div>
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
<!-- END ADD USER -->


<!-- DIALOG DETAIL -->
<div id="dialog_detail" class="modal hide fade" tabindex="-1" data-width="500" style="margin-top:-250px;">
 <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
    <h3>Detail Produk Pembiayaan</h3>
 </div>
 <div class="modal-body">
    <div class="row-fluid">
       <div class="span12">
          <label id="gl_detail"></label> 
       </div>
    </div>
 </div>
 <div class="modal-footer">
    <button type="button" id="close" data-dismiss="modal" class="btn">Close</button>
 </div>
</div>  
<!-- END DIALOG DETAIL -->




<!-- BEGIN EDIT USER -->
<div id="edit" class="hide">
   
   <div class="portlet box purple">
      <div class="portlet-title">
         <div class="caption"><i class="icon-reorder"></i>Edit Produk Pembiayaan</div>
         <div class="tools">
            <a href="javascript:;" class="collapse"></a>
         </div>
      </div>
      <div class="portlet-body form">
         <!-- BEGIN FORM-->
         <form action="#" id="form_edit" class="form-horizontal">
          <input type="hidden" id="param_par_id" name="param_par_id">
            <div class="alert alert-error hide">
               <button class="close" data-dismiss="alert"></button>
               You have some form errors. Please check below.
            </div>
            <div class="alert alert-success hide">
               <button class="close" data-dismiss="alert"></button>
               Produk Pembiayaan Berhasil Di Edit !
            </div>
            </br>
            <div class="control-group">
               <label class="control-label">PAR/Kolektibilitas<span class="required">*</span></label>
               <div class="controls">
                  <textarea class="m-wrap" id="par_desc" name="par_desc"></textarea>
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">Tunggakkan Min (Hari)<span class="required">*</span></label>
               <div class="controls">
                  <input type="text" name="jumlah_hari_1" id="jumlah_hari_1" data-required="1" class="small m-wrap" maxlength="5" />
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">Tunggakkan Max (Hari)<span class="required">*</span></label>
               <div class="controls">
                  <input type="text" name="jumlah_hari_2" id="jumlah_hari_2" data-required="1" class="small m-wrap" maxlength="5" />
               </div>
            </div>
            <div class="control-group">
              <label class="control-label">CPP (%)<span class="required">*</span></label>
               <div class="controls">
                    <div class="input-append">
                     <input type="text" class="small m-wrap" id="cpp" name="cpp" value="0">
                     <span class="add-on">%</span>
                    </div>
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
<!-- END EDIT USER -->


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
<script src="<?php echo base_url(); ?>assets/scripts/jquery.form.js" type="text/javascript"></script>       
<script src="<?php echo base_url(); ?>assets/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js" type="text/javascript"></script>   
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
        var tbl_id = 'produk_pembiayaan';
        $("select[name='"+tbl_id+"_length']").trigger('change');
        $(".paging_bootstrap li:first a").trigger('click');
        $("#"+tbl_id+"_filter input").val('').trigger('keyup');
      }

      // fungsi untuk check all
      jQuery('#produk_pembiayaan .group-checkable').live('change',function () {
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
      });

      $("#produk_pembiayaan .checkboxes").livequery(function(){
        $(this).uniform();
      });


      // BEGIN FORM ADD USER VALIDATION
      var form1 = $('#form_add');
      var error1 = $('.alert-error', form1);
      var success1 = $('.alert-success', form1);

      
      $("#btn_add").click(function(){
        $("#wrapper-table").hide();
        $("#add").show();
        form1.trigger('reset');
      });


      form1.validate({
          errorElement: 'span', //default input error message container
          errorClass: 'help-inline', // default input error message class
          focusInvalid: false, // do not focus the last invalid input
          errorPlacement: function(error, element) {
            error.appendTo( element.closest(".controls") );
           },
          // ignore: "",
          rules: {
              jumlah_hari_1:{required:true,number:true},
              jumlah_hari_2:{required:true,number:true},
              par_desc:{required:true},
              cpp:{required:true,number:true}
          },

          invalidHandler: function (event, validator) { //display error alert on form submit              
              success1.hide();
              error1.show();
              App.scrollTo(error1, -200);
          },

          highlight: function (element) { // hightlight error inputs
              $(element)
                  .closest('.help-inline').removeClass('ok'); // display OK icon
              $(element)
                  .closest('.control-group').removeClass('success').addClass('error'); // set error class to the control group
          },

          unhighlight: function (element) { // revert the change dony by hightlight
              $(element)
                  .closest('.control-group').removeClass('error'); // set error class to the control group
          },

          success: function (label) {
            // if(label.closest('.input-append').length==0)
            // {
            //   label
            //       .addClass('valid').addClass('help-inline ok') // mark the current input as valid and display OK icon
            //   .closest('.control-group').removeClass('error').addClass('success'); // set success class to the control group
            // }
            // else
            // {
            //    label.closest('.control-group').removeClass('error').addClass('success')
            //    label.remove();
            // }
          },

          submitHandler: function (form) {

            $.ajax({
              type: "POST",
              url: site_url+"product/add_parameter_kolektibilitas",
              dataType: "json",
              data: form1.serialize(),
              success: function(response){
                if(response.success==true){
                  success1.show();
                  error1.hide();
                  form1.trigger('reset');
                  form1.children('div').removeClass('success');
                  $("#cancel",form_add).trigger('click')
                  alert('Successfully Saved Data');
                }else{
                  success1.hide();
                  error1.show();
                }
              },
              error:function(){
                  success1.hide();
                  error1.show();
              }
            });

          }
      });

      // event untuk kembali ke tampilan data table (ADD FORM)
      $("#cancel","#form_add").click(function(){
        success1.hide();
        error1.hide();
        $("#add").hide();
        $("#wrapper-table").show();
        dTreload();
      });





       // event button Edit ketika di tekan
      $("a#link-edit").live('click',function(){
        $("#wrapper-table").hide();
        $("#edit").show();
        var param_par_id = $(this).attr('param_par_id');

        $.ajax({
          type: "POST",
          dataType: "json",
          data: {param_par_id:param_par_id},
          url: site_url+"product/get_parameter_kolektibilitas_by_id",
          success: function(response)
          {
            $("#param_par_id, #form_edit").val(response.param_par_id);
            $("#jumlah_hari_1, #form_edit").val(response.jumlah_hari_1);
            $("#jumlah_hari_2, #form_edit").val(response.jumlah_hari_2);
            $("#par_desc, #form_edit").val(response.par_desc);
            $("#cpp, #form_edit").val(response.cpp);
          }
        })

      });

      // BEGIN FORM EDIT VALIDATION
      var form2 = $('#form_edit');
      var error2 = $('.alert-error', form2);
      var success2 = $('.alert-success', form2);

      form2.validate({
          errorElement: 'span', //default input error message container
          errorClass: 'help-inline', // default input error message class
          focusInvalid: false, // do not focus the last invalid input
          errorPlacement: function(error, element) {
            error.appendTo( element.closest(".controls") );
           },
          ignore: "",
          rules: {
              jumlah_hari_1:{required:true,number:true},
              jumlah_hari_2:{required:true,number:true},
              par_desc:{required:true},
              cpp:{required:true,number:true}
          },

          
          invalidHandler: function (event, validator) { //display error alert on form submit              
              success1.hide();
              error1.show();
              App.scrollTo(error1, -200);
          },

          highlight: function (element) { // hightlight error inputs
              $(element)
                  .closest('.help-inline').removeClass('ok'); // display OK icon
              $(element)
                  .closest('.control-group').removeClass('success').addClass('error'); // set error class to the control group
          },

          unhighlight: function (element) { // revert the change dony by hightlight
              $(element)
                  .closest('.control-group').removeClass('error'); // set error class to the control group
          },

          success: function (label) {
            // if(label.closest('.input-append').length==0)
            // {
            //   label
            //       .addClass('valid').addClass('help-inline ok') // mark the current input as valid and display OK icon
            //   .closest('.control-group').removeClass('error').addClass('success'); // set success class to the control group
            // }
            // else
            // {
            //    label.closest('.control-group').removeClass('error').addClass('success')
            //    label.remove();
            // }
          },

          submitHandler: function (form) {

            // PROSES KE FUNCTION DI CONTROLLER, APABILA VALIDASI BERHASIL
            $.ajax({
              type: "POST",
              url: site_url+"product/edit_parameter_kolektibilitas",
              dataType: "json",
              data: form2.serialize(),
              success: function(response){
                if(response.success==true){
                  success2.show();
                  error2.hide();
                  form2.children('div').removeClass('success');
                  $("#produk_pembiayaan_filter input").val('');
                  dTreload();
                  $("#cancel",form_edit).trigger('click')
                  alert('Successfully Updated Data');
                }else{
                  success2.hide();
                  error2.show();
                }
              },
              error:function(){
                  success2.hide();
                  error2.show();
              }
            });

          }
      });
      //  END FORM EDIT VALIDATION

      // event untuk kembali ke tampilan data table (EDIT FORM)
      $("#cancel","#form_edit").click(function(){
        $("#edit").hide();
        $("#wrapper-table").show();
        dTreload();
        success2.hide();
        error2.hide();
      });

      // fungsi untuk delete records
      $("#btn_delete").click(function(){

        var param_par_id = [];
        var $i = 0;
        $("input#checkbox:checked").each(function(){

          param_par_id[$i] = $(this).val();

          $i++;

        });

        if(param_par_id.length==0){
          alert("Please select some row to delete !");
        }else{
          var conf = confirm('Are you sure to delete this rows ?');
          if(conf){
            $.ajax({
              type: "POST",
              url: site_url+"product/delete_parameter_kolektibilitas",
              dataType: "json",
              data: {param_par_id:param_par_id},
              success: function(response){
                if(response.success==true){
                  alert("Deleted!");
                  dTreload();
                }else{
                  alert("Delete Failed!");
                }
              },
              error: function(){
                alert("Failed to Connect into Database, Please Check ur Connection or Try Again Latter")
              }
            })
          }
        }

      });


      // begin first table
      $('#produk_pembiayaan').dataTable({
          "bProcessing": true,
          "bServerSide": true,
          "sAjaxSource": site_url+"product/datatable_parameter_kolektibilitas",
          "aoColumns": [
            { "bSortable": false, "bSearchable": false }
            ,null
            ,null
            ,null
            ,null
            ,{ "bSortable": false, "bSearchable": false }
          ],
          "aLengthMenu": [
              [15, 30, 45, -1],
              [15, 30, 45, "All"] // change per page values here
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
              }
          ]
      });

      


      jQuery('#kantor_cabang_table_wrapper .dataTables_filter input').addClass("m-wrap medium"); // modify table search input
      jQuery('#kantor_cabang_table_wrapper .dataTables_length select').addClass("m-wrap small"); // modify table per page dropdown
      //jQuery('#sample_1_wrapper .dataTables_length select').select2(); // initialzie select2 dropdown


      $("#type_bya_adm",form_add).change(function(){
        type_bya_adm = $(this).val();
        if(type_bya_adm=='1')
        {
          $("#rate_bya_adm",form_add).closest('.control-group').show();
          $("#rate_bya_adm",form_add).val('');
          $("#nominal_bya_adm",form_add).closest('.control-group').hide();
          $("#nominal_bya_adm",form_add).val('');
        }
        else if(type_bya_adm=='2')
        {
          $("#rate_bya_adm",form_add).closest('.control-group').hide();
          $("#rate_bya_adm",form_add).val('');
          $("#nominal_bya_adm",form_add).closest('.control-group').show();
          $("#nominal_bya_adm",form_add).val('');
        }
        else
        {
          $("#rate_bya_adm",form_add).closest('.control-group').hide();
          $("#rate_bya_adm",form_add).val('');
          $("#nominal_bya_adm",form_add).closest('.control-group').hide();
          $("#nominal_bya_adm",form_add).val('');
        }
      });

      $("#type_bya_adm",form_edit).change(function(){
        type_bya_adm = $(this).val();
        if(type_bya_adm=='1')
        {
          $("#rate_bya_adm",form_edit).closest('.controls').show();
          $("#rate_bya_adm",form_edit).closest('.control-group').show();
          $("#rate_bya_adm",form_edit).val('');
          $("#nominal_bya_adm",form_edit).closest('.control-group').hide();
          $("#nominal_bya_adm",form_edit).val('');
        }
        else if(type_bya_adm=='2')
        {
          $("#rate_bya_adm",form_edit).closest('.control-group').hide();
          $("#rate_bya_adm",form_edit).val('');
          $("#nominal_bya_adm",form_edit).closest('.control-group').show();
          $("#nominal_bya_adm",form_edit).val('');
        }
        else
        {
          $("#rate_bya_adm",form_edit).closest('.control-group').hide();
          $("#rate_bya_adm",form_edit).val('');
          $("#nominal_bya_adm",form_edit).closest('.control-group').hide();
          $("#nominal_bya_adm",form_edit).val('');
        }
      });

      $("#flag_asuransi1","#form_add").change(function(){
        var flag_asuransi1 = $(this).val();
        if(flag_asuransi1=='1'){
          $("#insurance_product_code","#form_add").attr('disabled',false);
          $("#insurance_product_code","#form_add").css('backgroundColor','#fff');
          $("#insurance_product_code_no","#form_add").val('');

          $("#flag_manfaat_asuransi","#form_add").attr('disabled',false);
          $("#flag_manfaat_asuransi","#form_add").css('backgroundColor','#fff');
        }else{
          $("#insurance_product_code","#form_add").val('');
          $("#insurance_product_code","#form_add").attr('disabled',true);
          $("#insurance_product_code","#form_add").css('backgroundColor','#eee');
          $("#insurance_product_code_no","#form_add").val('0');

          $("#flag_manfaat_asuransi","#form_add").val('');
          $("#flag_manfaat_asuransi","#form_add").attr('disabled',true);
          $("#flag_manfaat_asuransi","#form_add").css('backgroundColor','#eee');
        }
      })

      $("#flag_asuransi",form_edit).change(function(){
        var flag_asuransi1 = $(this).val();
        if(flag_asuransi1=='1'){
          $("#produk_asuransi").show();
          $("#insurance_product_code",form_edit).attr('disabled',false);
          $("#insurance_product_code",form_edit).css('backgroundColor','#fff');
          $("#insurance_product_code_no",form_edit).val('');

          $("#flag_manfaat_asuransi",form_edit).attr('disabled',false);
          $("#flag_manfaat_asuransi",form_edit).css('backgroundColor','#fff');
        }else{
          $("#produk_asuransi").hide();
          $("#insurance_product_code",form_edit).val('');
          $("#insurance_product_code",form_edit).attr('disabled',true);
          $("#insurance_product_code",form_edit).css('backgroundColor','#eee');
          $("#insurance_product_code_no",form_edit).val('0');
          
          $("#flag_manfaat_asuransi",form_edit).val('');
          $("#flag_manfaat_asuransi",form_edit).attr('disabled',true);
          $("#flag_manfaat_asuransi",form_edit).css('backgroundColor','#eee');
        }
      })

});
</script>
<!-- END JAVASCRIPTS -->

