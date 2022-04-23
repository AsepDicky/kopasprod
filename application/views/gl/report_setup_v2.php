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
    <h3 class="page-title">
      Report Setup <small>Untuk melakukan konfigurasi Report</small>
    </h3>
    <input type="hidden" id="gl_report_item_id" name="gl_report_item_id">
    <!-- [BEGIN] REPORT -->
    <div class="row-fluid">
      <div class="span6">
        <div class="portlet box green">
          <div class="portlet-title">
             <div class="caption"><i class="icon-reorder"></i>Report Setup</div>
             <div class="tools">
                <a href="javascript:;" class="collapse"></a>
             </div>
          </div>
          <div class="portlet-body">
              <div class="clearfix">
                <div class="btn-group pull-right">
                  <a href="#dialog_add_report" data-toggle="modal" id="btn_add" class="btn green mini" style="padding:7px 10px;"> Add Report <i class="icon-plus"></i></a>
                  <a href="#dialog_edit_report" data-toggle="modal" id="btn_edit" class="btn purple mini" style="padding:7px 10px;"> Edit Report <i class="icon-pencil"></i></a>
                  <a href="javascript:void(0);" id="btn_delete" class="btn red mini" style="padding:7px 10px;"> Delete Report <i class="icon-remove"></i></a>
                </div>
              </div>
              <table id="jqgrid_report_setup"></table>
              <div id="pager_jqgrid_report_setup"></div>
          </div>
        </div>
      </div>
      <div class="span6">
       <div class="portlet box green">
        <div class="portlet-title">
           <div class="caption"><i class="icon-reorder"></i><span id="title_report_item">Item</span></div>
           <div class="tools">
              <a href="javascript:;" class="collapse"></a>
           </div>
        </div>
        <div class="portlet-body">
            <div class="clearfix">
              <div class="btn-group pull-right">
                <a href="#dialog_add_report_item" data-toggle="modal" id="btn_add_item" class="btn green mini" style="padding:7px 10px;"> Add Item <i class="icon-plus"></i></a>
                <a href="#dialog_edit_report_item" data-toggle="modal" id="btn_edit_item" class="btn purple mini" style="padding:7px 10px;"> Edit Item <i class="icon-pencil"></i></a>
                <a href="javascript:void(0);" id="btn_delete_item" class="btn red mini" style="padding:7px 10px;"> Delete Item <i class="icon-remove"></i></a>
              </div>
            </div>
            <table id="jqgrid_item_of_report"></table>
            <div id="pager_jqgrid_item_of_report"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- [BEGIN] ACCOUNT -->
    <div class="row-fluid">
      <div class="span12">
        <div class="portlet box green">
          <div class="portlet-title">
             <div class="caption"><i class="icon-reorder"></i>Account of Report Item <span id="title_report_item_account"></span></div>
             <div class="tools">
                <a href="javascript:;" class="collapse"></a>
             </div>
          </div>
          <div class="portlet-body">
            <div class="clearfix">
              <div class="span5">

                <div class="clearfix">
                  <div class="form-body span12">
                    <div class="form-group">
                      <select id="account_type_out" class="span12">
                        <option value="all">ALL ACCOUNTS</option>
                        <option value="1">Aset</option>
                        <option value="2">Utang</option>
                        <option value="3">Modal</option>
                        <option value="4">Pendapatan</option>
                        <option value="5">Beban</option>
                      </select>
                    </div>
                  </div>
                </div>

                <table id="jqgrid_account_out"></table>
                <div id="pager_jqgrid_account_out"></div>
              </div>
              <div class="span2" align="center" style="height:200px;padding-top:80px;">
                <div style="margin-bottom:10px;"><a href="javascript:void(0);" id="move_to_right" class="btn blue">Move to Right</a></div>
                <div><a href="javascript:void(0);" id="move_to_left" class="btn green">Move to Left</a></div>
              </div>
              <div class="span5">

                <div class="clearfix">
                  <div class="form-body span12">
                    <div class="form-group">
                      <select id="account_type_in" class="span12">
                        <option value="all">ALL ACCOUNTS</option>
                        <option value="1">Aset</option>
                        <option value="2">Utang</option>
                        <option value="3">Modal</option>
                        <option value="4">Pendapatan</option>
                        <option value="5">Beban</option>
                      </select>
                    </div>
                  </div>
                </div>

                <table id="jqgrid_account_in"></table>
                <div id="pager_jqgrid_account_in"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ADD REPORT FORM -->
    <div id="dialog_add_report" class="modal hide fade" data-width="400" style="margin-top:-200px; margin-left:-200px; width:400px; ">
       <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
          <h3>ADD REPORT</h3>
       </div>
       <div class="modal-body">
          <div class="row-fluid">
             <div class="span12">
                <h5 style="margin-bottom:3px; margin-left:2px;">Kode</h5>
                <p><input type="text" name="report_code" id="report_code" class="span3 m-wrap"></p>
                <h5 style="margin-bottom:3px; margin-left:2px;">Nama Report</h5>
                <p><input type="text" name="report_name" id="report_name" class="span12 m-wrap"></p>
                <h5 style="margin-bottom:3px; margin-left:2px;">Jenis Report</h5>
                <p><select name="report_type" id="report_type" class="span12 m-wrap">
                   <option value="">SILAHKAN PILIH</option>
                   <option value="0">NERACA</option>
                   <option value="1">LABA RUGI</option>
                </select></p>
             </div>
          </div>
       </div>
       <div class="modal-footer">
          <button type="button" id="save" class="btn blue">Save</button>
          <button type="button" id="close" data-dismiss="modal" class="btn">Close</button>
       </div>
    </div>
    
    <!-- EDIT REPORT FORM -->
    <div id="dialog_edit_report" class="modal hide fade" data-width="400" style="margin-top:-200px; margin-left:-200px; width:400px; ">
       <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
          <h3>EDIT REPORT</h3>
       </div>
       <div class="modal-body">
          <div class="row-fluid">
             <div class="span12">
                <input type="hidden" id="gl_report_id" name="gl_report_id">
                <h5 style="margin-bottom:3px; margin-left:2px;">Kode</h5>
                <p><input type="text" name="report_code" id="report_code" class="span3 m-wrap"></p>
                <h5 style="margin-bottom:3px; margin-left:2px;">Nama Report</h5>
                <p><input type="text" name="report_name" id="report_name" class="span12 m-wrap"></p>
                <h5 style="margin-bottom:3px; margin-left:2px;">Jenis Report</h5>
                <p><select name="report_type" id="report_type" class="span12 m-wrap">
                   <option value="">SILAHKAN PILIH</option>
                   <option value="0">NERACA</option>
                   <option value="1">LABA RUGI</option>
                </select></p>
             </div>
          </div>
       </div>
       <div class="modal-footer">
          <button type="button" id="save" class="btn blue">Save</button>
          <button type="button" id="close" data-dismiss="modal" class="btn">Close</button>
       </div>
    </div>
    <!-- [END] REPORT -->

    
    <!-- ADD REPORT ITEM FORM -->
    <div id="dialog_add_report_item" class="modal hide fade" data-width="400" style="margin-top:-200px; margin-left:-200px; width:400px; ">
       <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
          <h3>ADD REPORT ITEM</h3>
       </div>
       <div class="modal-body">
          <div class="row-fluid">
             <div class="span12">
                <input type="hidden" name="report_code" id="report_code">
                <h5 style="margin-bottom:3px; margin-left:2px;">Item Code</h5>
                <p><input type="text" name="item_code" id="item_code" class="span3 m-wrap"></p>
                <h5 style="margin-bottom:3px; margin-left:2px;">Item Name</h5>
                <p><input type="text" name="item_name" id="item_name" class="span12 m-wrap"></p>
                <h5 style="margin-bottom:3px; margin-left:2px;">Item Type</h5>
                <p><select name="item_type" id="item_type" class="span12 m-wrap">
                   <option value="">SILAHKAN PILIH</option>
                   <option value="0">Title</option>
                   <option value="1">Summary</option>
                   <option value="2">Formula</option>
                   <option value="3">Total</option>
                </select></p>
                <h5 style="margin-bottom:3px; margin-left:2px;">Posisi</h5>
                <p><select name="posisi" id="posisi" class="span12 m-wrap">
                   <option value="">SILAHKAN PILIH</option>
                   <option value="0">Posisi 0</option>
                   <option value="1">Posisi 1</option>
                   <option value="2">Posisi 2</option>
                </select></p>
                <h5 style="margin-bottom:3px; margin-left:2px;">Display Saldo</h5>
                <p><select name="display_saldo" id="display_saldo" class="span12 m-wrap">
                   <option value="">SILAHKAN PILIH</option>
                   <option value="0">Normal</option>
                   <option value="1">Reverse (dikalikan -1)</option>
                </select></p>
                <div id="wrap-formula" style="display:none">
                  <h5 style="margin-bottom:3px; margin-left:2px;">Formula</h5>
                  <p><input type="text" name="formula" id="formula" class="span12 m-wrap"></p>
                  <h5 style="margin-bottom:3px; margin-left:2px;">Text Tebal</h5>
                  <p><select name="formula_text_bold" id="formula_text_bold" class="span12 m-wrap">
                     <option value="">SILAHKAN PILIH</option>
                     <option value="0">Tidak</option>
                     <option value="1">Ya</option>
                  </select></p>
                </div>
             </div>
          </div>
       </div>
       <div class="modal-footer">
          <button type="button" id="save" class="btn blue">Save</button>
          <button type="button" id="close" data-dismiss="modal" class="btn">Close</button>
       </div>
    </div>
    
    <!-- EDIT REPORT ITEM FORM -->
    <div id="dialog_edit_report_item" class="modal hide fade" data-width="400" style="margin-top:-200px; margin-left:-200px; width:400px; ">
       <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
          <h3>EDIT REPORT ITEM</h3>
       </div>
       <div class="modal-body">
          <div class="row-fluid">
             <div class="span12">
                <input type="hidden" id="gl_report_item_id" name="gl_report_item_id">
                <h5 style="margin-bottom:3px; margin-left:2px;">Item Code</h5>
                <p><input type="text" name="item_code" id="item_code" class="span3 m-wrap"></p>
                <h5 style="margin-bottom:3px; margin-left:2px;">Item Name</h5>
                <p><input type="text" name="item_name" id="item_name" class="span12 m-wrap"></p>
                <h5 style="margin-bottom:3px; margin-left:2px;">Item Type</h5>
                <p><select name="item_type" id="item_type" class="span12 m-wrap">
                   <option value="">SILAHKAN PILIH</option>
                   <option value="0">Title</option>
                   <option value="1">Summary</option>
                   <option value="2">Formula</option>
                   <option value="3">Total</option>
                </select></p>
                <h5 style="margin-bottom:3px; margin-left:2px;">Posisi</h5>
                <p><select name="posisi" id="posisi" class="span12 m-wrap">
                   <option value="">SILAHKAN PILIH</option>
                   <option value="0">Posisi 0</option>
                   <option value="1">Posisi 1</option>
                   <option value="2">Posisi 2</option>
                </select></p>
                <h5 style="margin-bottom:3px; margin-left:2px;">Display Saldo</h5>
                <p><select name="display_saldo" id="display_saldo" class="span12 m-wrap">
                   <option value="">SILAHKAN PILIH</option>
                   <option value="0">Normal</option>
                   <option value="1">Reverse (dikalikan -1)</option>
                </select></p>
                <div id="wrap-formula" style="display:none">
                  <h5 style="margin-bottom:3px; margin-left:2px;">Formula</h5>
                  <p><input type="text" name="formula" id="formula" class="span12 m-wrap"></p>
                  <h5 style="margin-bottom:3px; margin-left:2px;">Text Tebal</h5>
                  <p><select name="formula_text_bold" id="formula_text_bold" class="span12 m-wrap">
                     <option value="">SILAHKAN PILIH</option>
                     <option value="0">Tidak</option>
                     <option value="1">Ya</option>
                  </select></p>
                </div>
             </div>
          </div>
       </div>
       <div class="modal-footer">
          <button type="button" id="save" class="btn blue">Save</button>
          <button type="button" id="close" data-dismiss="modal" class="btn">Close</button>
       </div>
    </div>
    <!-- [END] REPORT ITEM -->

   </div>
</div>
<!-- END PAGE HEADER-->

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
<!-- // <script src="<?php echo base_url(); ?>assets/scripts/index.js" type="text/javascript"></script>         -->
<!-- // <script src="<?php echo base_url(); ?>assets/scripts/jquery.form.js" type="text/javascript"></script>         -->
<!-- // <script src="<?php echo base_url(); ?>assets/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js" type="text/javascript"></script>    -->
<!-- END PAGE LEVEL SCRIPTS -->  

<script>
jQuery(document).ready(function() {    
  App.init(); // initlayout and core plugins
  // $("#mask_date").inputmask("y/m/d", {autoUnmask: true});  //direct mask
  $.uniform.restore();
});
</script>

<script type="text/javascript">
/* 
| REPORT SETUP 
*/
$("#jqgrid_report_setup").jqGrid({
    url: site_url+'/gl/jqgrid_gl_report',
    mtype: "GET",
    datatype: "json",
    colModel: [
        { label: 'ID', name: 'gl_report_id', key: true, width: 100, hidden:true },
        { label: 'Report Code', name: 'report_code', width: 100, align:'center' },
        { label: 'Report Name', name: 'report_name', width: 150, align:'center' },
        { label: 'Report Type', name: 'report_type', width: 100, align:'center', formatter:function(cellvalue){
            switch(cellvalue){
                case "0":
                return '<span class="label label-sm label-info">Neraca</span>';
                break;
                case "1":
                return '<span class="label label-sm label-info">Laba Rugi</span>';
                break;

                default:
                return cellvalue;
                break;
            }
        } }
    ],
    viewrecords: true,
    autowidth: true,
    height: 200,
    rowNum: 20,
    rownumbers: true,
    shrinkToFit: false,
    toolbar: [false, "top"],
    sortname: "gl_report_id",
    sortorder: "asc",
    multiselect: false,
    pager: "#pager_jqgrid_report_setup",
    ondblClickRow:function(row_id){
        var data = $("#jqgrid_report_setup").jqGrid('getRowData',row_id);
        var report_code=data.report_code;
        var report_name=data.report_name;
        $('#jqgrid_item_of_report').setGridParam({postData:{report_code:report_code}}).trigger('reloadGrid',[{page:1}]);
        $("#report_code","#dialog_add_report_item").val(report_code);
        $('#title_report_item').text('Item \"'+report_name+'\"');
    }
});

$("#t_jqgrid_report_setup").append('<button class="jqGrid_add" id="btn_add" title="Tambah Report"></button> <button class="jqGrid_edit" id="btn_edit" title="Edit Report"></button> <button class="jqGrid_delete" id="btn_delete" title="Hapus Report"></button>');

/*
| ITEM OF REPORT
*/
$("#jqgrid_item_of_report").jqGrid({
    url: site_url+'/gl/jqgrid_gl_report_item',
    mtype: "GET",
    datatype: "json",
    colModel: [
        { label: 'ID', name: 'gl_report_item_id', key: true, width: 100, hidden:true },
        { label: 'Report Code', name: 'report_code', hidden:true },
        { label: 'Item Code', name: 'item_code', width: 80, align:'center' },
        { label: 'Item Name', name: 'item_name', width: 200, align:'left' },
        { label: 'Item Type', name: 'item_type', width: 80, align:'center', formatter:function(cellvalue) {
            switch(cellvalue) {
                case "0":
                return "Title";
                break;
                case "1":
                return "Summary";
                break;
                case "2":
                return "Formula";
                break;
                case "3":
                return "Total";
                break;

                default:
                return cellvalue;
                break;
            }
        } },
        { label: 'Posisi', name: 'posisi', width: 100, align:'center', formatter:function(cellvalue) {
            switch(cellvalue) {
                case "0":
                return "Posisi 0";
                break;
                case "1":
                return "Posisi 1";
                break;
                case "2":
                return "Posisi 2";
                break;
                case "3":
                return "Posisi 3";
                break;

                default:
                return cellvalue;
                break;
            }
        } }
    ],
    viewrecords: true,
    autowidth: true,
    height: 200,
    rowNum: 20,
    // rownumbers: true,
    shrinkToFit: false,
    toolbar: [false, "top"],
    sortname: "gl_report_item_id",
    sortorder: "asc",
    multiselect: false,
    pager: "#pager_jqgrid_item_of_report",
    ondblClickRow:function(row_id){
        var data = $("#jqgrid_item_of_report").jqGrid('getRowData',row_id);
        var gl_report_item_id=data.gl_report_item_id;
        var item_name=data.item_name;
        $('#jqgrid_account_out').setGridParam({postData:{gl_report_item_id:gl_report_item_id}}).trigger('reloadGrid',[{page:1}]);
        $('#jqgrid_account_in').setGridParam({postData:{gl_report_item_id:gl_report_item_id}}).trigger('reloadGrid',[{page:1}]);
        $('#title_report_item_account').text('\"'+item_name+'\"');
        $('#gl_report_item_id').val(gl_report_item_id);
    }
});

$("#t_jqgrid_item_of_report").append('<button class="jqGrid_add" id="btn_add2" title="Tambah Report"></button> <button class="jqGrid_edit" id="btn_edit2" title="Edit Report"></button> <button class="jqGrid_delete" id="btn_delete2" title="Hapus Report"></button>');

/* add report */
$('#save','#dialog_add_report').click(function(){
  var report_code = $('#report_code','#dialog_add_report').val();
  var report_name = $('#report_name','#dialog_add_report').val();
  var report_type = $('#report_type','#dialog_add_report').val();
  $.ajax({
    type: "POST",
    dataType: "json",
    url: site_url+"gl/add_report_setup",
    data: {
      report_code:report_code,
      report_name:report_name,
      report_type:report_type
    },
    async: false,
    error: function(){
      alert("Failed to Conenct into Databases !")
    },
    success: function(response){
      if(response.success==true){
        alert("Add New Report Successed !");
        $("#close","#dialog_add_report").trigger('click');
        $('#jqgrid_report_setup').trigger('reloadGrid')
      }else{
        alert("Add New Report Failed !");
      }
    }
  })
})
$("#btn_edit").click(function(){
    var gl_report_id = $('#jqgrid_report_setup').jqGrid('getGridParam','selrow');
    if (gl_report_id) {
      $.ajax({
        type: "POST",
        dataType: "json",
        data: {gl_report_id:gl_report_id},
        url: site_url+"gl/ajax_get_report_setup",
        async: false,
        error: function(){
          alert("Failed to Conenct into Databases !")
        },
        success: function(response){
          $("#gl_report_id","#dialog_edit_report").val(response.gl_report_id);
          $("#report_code","#dialog_edit_report").val(response.report_code);
          $("#report_name","#dialog_edit_report").val(response.report_name);
          $("#report_type","#dialog_edit_report").val(response.report_type);
        }
      });
    } else {
      App.WarningAlert('Please select a row');
    }
  });

  $("#save","#dialog_edit_report").live('click',function(){
    gl_report_id = $("#gl_report_id","#dialog_edit_report").val();
    report_code = $("#report_code","#dialog_edit_report").val();
    report_name = $("#report_name","#dialog_edit_report").val();
    report_type = $("#report_type","#dialog_edit_report").val();

    $.ajax({
      type: "POST",
      dataType: "json",
      url: site_url+"gl/edit_report_setup",
      data: {
        gl_report_id:gl_report_id,
        report_code:report_code,
        report_name:report_name,
        report_type:report_type
      },
      async: false,
      error: function(){
        alert("Failed to Conenct into Databases !")
      },
      success: function(response){
        if(response.success==true){
          alert("EDIT Report Successed !");
          $("#close","#dialog_edit_report").trigger('click');
          $('#jqgrid_report_setup').trigger('reloadGrid');
        }else{
          alert("EDIT Report Failed !");
        }
      }
    })
  });

$('#btn_delete').click(function(){
  selrow = $('#jqgrid_report_setup').jqGrid('getGridParam','selrow');
  if (selrow) {
    $.confirm({
      title:"Delete Report",icon:'icon-warning-sign',backgroundDismiss:false,
      content:"Deleting Report, Are You Sure?",
      confirmButtonClass:'btn green',
      cancelButtonClass:'btn red',
      confirm:function(){
        $.ajax({
          type:"POST",dataType:"json",data:{
            gl_report_id:selrow
          },
          url: site_url+'/gl/delete_report_setup',
          success:function(response) {
            if (response.success===true) {
              $.alert({
                title:"Success",icon:'icon-check',backgroundDismiss:false,
                content:"Delete Report Success",
                confirmButtonClass:'btn green',
                confirm:function(){
                  $("#jqgrid_report_setup").trigger('reloadGrid');
                }
              })
            }
          },
          error: function(){
            App.WarningAlert("Failed to connect into databases. please contact your administrator.")
          }
        })
      }
    })
  } else {
    App.WarningAlert('Please select a row to DELETE');
  }
})

$("#save","#dialog_add_report_item").click(function(){
  report_code = $("#report_code","#dialog_add_report_item").val();
  item_code = $("#item_code","#dialog_add_report_item").val();
  item_name = $("#item_name","#dialog_add_report_item").val();
  item_type = $("#item_type","#dialog_add_report_item").val();
  posisi = $("#posisi","#dialog_add_report_item").val();
  display_saldo = $("#display_saldo","#dialog_add_report_item").val();
  formula = $("#formula","#dialog_add_report_item").val();
  formula_text_bold = $("#formula_text_bold","#dialog_add_report_item").val();

  $.ajax({
    type: "POST",
    dataType: "json",
    url: site_url+"gl/add_report_item_setup",
    data: {
      report_code:report_code,
      item_code:item_code,
      item_name:item_name,
      item_type:item_type,
      posisi:posisi,
      display_saldo:display_saldo,
      formula:formula,
      formula_text_bold:formula_text_bold
    },
    async: false,
    error: function(){
      App.WarningAlert("Failed to Conenct into Databases !")
    },
    success: function(response){
      if(response.success==true){
        alert("Add New Item Successed !");
        $("#close","#dialog_add_report_item").trigger('click');
        $('#jqgrid_item_of_report').trigger('reloadGrid');
      }else{
        alert("Add New Item Failed !");
      }
    }
  })
});


$('#btn_delete_item').click(function(){
  selrow = $('#jqgrid_item_of_report').jqGrid('getGridParam','selrow');
  if (selrow) {
    $.confirm({
      title:"Delete Item",icon:'icon-warning-sign',backgroundDismiss:false,
      content:"Deleting Item, Are You Sure?",
      confirmButtonClass:'btn green',
      cancelButtonClass:'btn red',
      confirm:function(){
        $.ajax({
          type:"POST",dataType:"json",data:{
            gl_report_item_id:selrow
          },
          url: site_url+'/gl/delete_report_item_setup',
          success:function(response) {
            if (response.success===true) {
              $.alert({
                title:"Success",icon:'icon-check',backgroundDismiss:false,
                content:"Delete Item Success",
                confirmButtonClass:'btn green',
                confirm:function(){
                  $("#jqgrid_item_of_report").trigger('reloadGrid');
                }
              })
            }
          },
          error: function(){
            App.WarningAlert("Failed to connect into databases. please contact your administrator.")
          }
        })
      }
    })
  } else {
    App.WarningAlert('Please select a row to DELETE');
  }
})

/*
| ACCOUNT OUT
*/
$("#jqgrid_account_out").jqGrid({
    url: site_url+'/gl/jqgrid_gl_report_item_member_out',
    mtype: "GET",
    datatype: "json",
    colModel: [
        { label: 'Account Code', name: 'account_code', key: true, width: 100, align:'center' },
        { label: 'Account Name', name: 'account_name', width: 300, align:'left' },
    ],
    viewrecords: true,
    autowidth: true,
    height: 200,
    rowNum: 999999999,
    rownumbers: true,
    shrinkToFit: false,
    toolbar: [false, "top"],
    sortname: "account_code",
    sortorder: "asc",
    multiselect: true,
    pager: "#pager_jqgrid_account_out"
});

/*
| ACCOUNT IN
*/
$("#jqgrid_account_in").jqGrid({
    url: site_url+'/gl/jqgrid_gl_report_item_member_in',
    mtype: "GET",
    datatype: "json",
    colModel: [
        { label: 'ID', name: 'gl_report_item_member', key: true, width: 100, hidden:true },
        { label: 'Account Code', name: 'account_code', width: 100, align:'center' },
        { label: 'Account Name', name: 'account_name', width: 300, align:'left' }
    ],
    viewrecords: true,
    autowidth: true,
    height: 200,
    rowNum: 999999999,
    rownumbers: true,
    shrinkToFit: false,
    toolbar: [false, "top"],
    sortname: "account_code",
    sortorder: "asc",
    multiselect: true,
    pager: "#pager_jqgrid_account_in"
});

$('#account_type_out').change(function(){
  $('#jqgrid_account_out').setGridParam({postData:{account_type:$(this).val()}}).trigger('reloadGrid',[{page:1}]);
})

$('#account_type_in').change(function(){
  $('#jqgrid_account_in').setGridParam({postData:{account_type:$(this).val()}}).trigger('reloadGrid',[{page:1}]);
})

$("#btn_edit_item").live('click',function(){
    var gl_report_item_id = $('#jqgrid_item_of_report').jqGrid('getGridParam','selrow');
    if (gl_report_item_id) {
      $.ajax({
        type: "POST",
        dataType: "json",
        data: {gl_report_item_id:gl_report_item_id},
        url: site_url+"gl/ajax_get_report_item_setup",
        async: false,
        error: function(){
          alert("Failed to Conenct into Databases !")
        },
        success: function(response){
          $("#gl_report_item_id","#dialog_edit_report_item").val(response.gl_report_item_id);
          $("#item_code","#dialog_edit_report_item").val(response.item_code);
          $("#item_name","#dialog_edit_report_item").val(response.item_name);
          $("#item_type","#dialog_edit_report_item").val(response.item_type);
          $("#posisi","#dialog_edit_report_item").val(response.posisi);
          $("#display_saldo","#dialog_edit_report_item").val(response.display_saldo);
          $("#formula","#dialog_edit_report_item").val(response.formula);
          $("#formula_text_bold","#dialog_edit_report_item").val(response.formula_text_bold);
          if(response.item_type=='2'){
            $("#wrap-formula","#dialog_edit_report_item").show();
          }else{
            $("#wrap-formula","#dialog_edit_report_item").hide();
          }
        }
      });
    } else {
      App.WarningAlert('Please select a row');
    }
  });

  $("#save","#dialog_edit_report_item").live('click',function(){
    gl_report_item_id = $("#gl_report_item_id","#dialog_edit_report_item").val();
    item_code = $("#item_code","#dialog_edit_report_item").val();
    item_name = $("#item_name","#dialog_edit_report_item").val();
    item_type = $("#item_type","#dialog_edit_report_item").val();
    posisi = $("#posisi","#dialog_edit_report_item").val();
    display_saldo = $("#display_saldo","#dialog_edit_report_item").val();
    formula = $("#formula","#dialog_edit_report_item").val();
    formula_text_bold = $("#formula_text_bold","#dialog_edit_report_item").val();

    $.ajax({
      type: "POST",
      dataType: "json",
      url: site_url+"gl/edit_report_item_setup",
      data: {
        gl_report_item_id:gl_report_item_id,
        item_code:item_code,
        item_name:item_name,
        item_type:item_type,
        posisi:posisi,
        display_saldo:display_saldo,
        formula:formula,
        formula_text_bold:formula_text_bold
      },
      async: false,
      error: function(){
        alert("Failed to Conenct into Databases !")
      },
      success: function(response){
        if(response.success==true){
          alert("EDIT Item Successed !");
          $("#close","#dialog_edit_report_item").trigger('click');
          $('#jqgrid_item_of_report').trigger('reloadGrid');
        }else{
          alert("EDIT Item Failed !");
        }
      }
    })
  });
  


/*
| BEGIN (FORM ACCOUNT OUT TO ITEM)
*/
$('#move_to_right').click(function(){
    gl_report_item_id = $('#gl_report_item_id').val();
    selarrrow = $('#jqgrid_account_out').jqGrid('getGridParam','selarrrow');
    if (selarrrow.length>0) {
        $.ajax({
            type:"POST",dataType:"json",data:{accounts:selarrrow,gl_report_item_id:gl_report_item_id},
            url:site_url+'gl/insert_item_member_gl_report',
            success:function(response) {
                if (response.success===true) {
                    $.alert({
                        title:"Success",icon:'fa fa-check',backgroundDismiss:false,
                        content:'The Selected Account Has Been Successfuly MOVED!',
                        confirmButtonClass:'btn-success',
                        confirm:function(){
                            $('#jqgrid_account_out').trigger('reloadGrid',[{page:1}]);
                            $('#jqgrid_account_in').trigger('reloadGrid',[{page:1}]);
                        }
                    })
                } else {
                    Template.WarningAlert(response.error);
                }
            },
            error:function() {
                Template.WarningAlert('Failed to connect into databases, please contact your administrator.');
            }
        })
    } else {
        Template.WarningAlert('No Row Selected.');
    }
})
/*
| END (FORM ACCOUNT OUT TO ITEM)
*/
/*
| BEGIN (FORM ACCOUNT IN TO ITEM)
*/
$('#move_to_left').click(function(){
    selarrrow = $('#jqgrid_account_in').jqGrid('getGridParam','selarrrow');
    if (selarrrow.length>0) {
        $.ajax({
            type:"POST",dataType:"json",data:{id:selarrrow},
            url:site_url+'gl/remove_item_member_gl_report',
            success:function(response) {
                if (response.success===true) {
                    $.alert({
                        title:"Success",icon:'fa fa-check',backgroundDismiss:false,
                        content:'The Selected Account Has Been Successfuly RE-MOVED!',
                        confirmButtonClass:'btn-success',
                        confirm:function(){
                            $('#jqgrid_account_out').trigger('reloadGrid',[{page:1}]);
                            $('#jqgrid_account_in').trigger('reloadGrid',[{page:1}]);
                        }
                    })
                } else {
                    Template.WarningAlert(response.error);
                }
            },
            error:function() {
                Template.WarningAlert('Failed to connect into databases, please contact your administrator.');
            }
        })
    } else {
        Template.WarningAlert('No Row Selected.');
    }
});
/*
| END (FORM ACCOUNT IN TO ITEM)
*/


</script>