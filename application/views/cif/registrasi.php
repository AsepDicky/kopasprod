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
         Costumer Information File (CIF) <small>Add, Edit, Delet and more</small>
      </h3>
      <ul class="breadcrumb">
         <li>
            <i class="icon-home"></i>
            <a href="<?php echo site_url('dashboard'); ?>">Home</a> 
            <i class="icon-angle-right"></i>
         </li>
         <li><a href="#">Individu</a><i class="icon-angle-right"></i></li>  
         <li><a href="#">Customer Information File (CIF)</a></li>  
      </ul>
      <!-- END PAGE TITLE & BREADCRUMB-->
   </div>
</div>
<!-- END PAGE HEADER-->




<!-- BEGIN EXAMPLE TABLE PORTLET-->
<div class="portlet box blue" id="wrapper-table">
   <div class="portlet-title">
      <div class="caption"><i class="icon-globe"></i>Customer Information File</div>
      <div class="tools">
      </div>
   </div>
   <div class="portlet-body">
      <div class="clearfix">
         <div class="btn-group">
            <button id="btn_add" class="btn green">
            Add New <i class="icon-plus"></i>
            </button>
         </div>
         <!-- <div class="btn-group">
            <button id="btn_delete" class="btn red">
              Delete CIF <i class="icon-remove"></i>
            </button>
         </div> -->
      </div>
      <table class="table table-striped table-bordered table-hover" id="rembug_table">
         <thead>
            <tr>
               <!-- <th width="8"><input type="checkbox" class="group-checkable" data-set="#rembug_table .checkboxes" /></th> -->
               <th width="10%">Kode Divisi</th>
               <th width="10%">Kode Loker</th>
               <th width="25%">Loker</th>
               <th width="10%">NIK</th>
               <th width="25%">Nama</th>
               <th width="12%">Tanggal Lahir</th>
               <th>Edit</th>
            </tr>
         </thead>
         <tbody>
            
         </tbody>
      </table>
   </div>
</div>
<!-- END EXAMPLE TABLE PORTLET-->




<!-- BEGIN ADD REMBUG -->
<div id="add" class="hide">
   
   <div class="portlet box green">
      <div class="portlet-title">
         <div class="caption"><i class="icon-reorder"></i>Add New CIF</div>
         <div class="tools">
            <a href="javascript:;" id="back_add" style="color:white;font-size:15px;"> < Back </a>
         </div>
      </div>
      <div class="portlet-body form">
         <!-- BEGIN FORM-->
         <form action="<?php echo site_url('cif/add_new_cif'); ?>" method="post" enctype="multipart/form-data" id="form_add" class="form-horizontal">

            <div class="alert alert-error hide">
               <button class="close" data-dismiss="alert"></button>
               Terdapat beberapa form yang error. Mohon periksa kembali
            </div>
            <div class="alert alert-success hide">
               <button class="close" data-dismiss="alert"></button>
               CIF Baru berhasil di buat !
            </div>
            <br>
            <div class="control-group">
               <label class="control-label">NIK <span class="required">*</span></label>
               <div class="controls">
                  <input type="text" name="nik" id="nik" data-required="1" maxlength="10" class="large m-wrap" onkeyup="this.value=this.value.toUpperCase()"/>
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">Nama Pegawai <span class="required">*</span></label>
               <div class="controls">
                  <input type="text" name="nama_pegawai" id="nama_pegawai" maxlength="30" data-required="1" class="large m-wrap" onkeyup="this.value=this.value.toUpperCase()"/>
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">Personal Area</label>
               <div class="controls">
                  <input type="text" name="personal_area" id="personal_area" data-required="1" maxlength="10" class="large m-wrap" onkeyup="this.value=this.value.toUpperCase()"/>
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">PSA</label>
               <div class="controls">
                  <input type="text" name="psa" id="psa" data-required="1" maxlength="10" class="large m-wrap" onkeyup="this.value=this.value.toUpperCase()"/>
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">VPSA</label>
               <div class="controls">
                  <input type="text" name="vpsa" id="vpsa" data-required="1" maxlength="50" class="large m-wrap" onkeyup="this.value=this.value.toUpperCase()"/>
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">Kode Divisi</label>
               <div class="controls">
                  <input type="text" name="code_divisi" id="code_divisi" data-required="1" maxlength="10" class="large m-wrap" onkeyup="this.value=this.value.toUpperCase()"/>
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">Kode Loker</label>
               <div class="controls">
                  <input type="text" name="kode_loker" id="kode_loker" data-required="1" maxlength="50" class="large m-wrap" onkeyup="this.value=this.value.toUpperCase()"/>
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">Loker</label>
               <div class="controls">
                  <input type="text" name="loker" id="loker" data-required="1" maxlength="100" class="large m-wrap" onkeyup="this.value=this.value.toUpperCase()"/>
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">Kode Posisi</label>
               <div class="controls">
                  <input type="text" name="kode_posisi" id="kode_posisi" data-required="1" maxlength="50" class="large m-wrap" onkeyup="this.value=this.value.toUpperCase()"/>
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">Posisi</label>
               <div class="controls">
                  <input type="text" name="posisi" id="posisi" data-required="1" maxlength="100" class="large m-wrap" onkeyup="this.value=this.value.toUpperCase()"/>
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">Tgl Mulai Kerja <span class="required">*</span></label>
               <div class="controls">
                  <input type="text" name="tgl_mulai_kerja" id="mask_date" placeholder="dd/mm/yyyy" data-required="1" class="small m-wrap date-picker"/>
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">Kerja Bantu</label>
               <div class="controls">
                  <input type="text" name="kerja_bantu" id="kerja_bantu" data-required="1" maxlength="50" class="large m-wrap" onkeyup="this.value=this.value.toUpperCase()"/>
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">Band</label>
               <div class="controls">
                  <input type="text" name="band" id="band" data-required="1" maxlength="10" class="large m-wrap" onkeyup="this.value=this.value.toUpperCase()"/>
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">Klas</label>
               <div class="controls">
                  <input type="text" name="klas" id="klas" data-required="1" maxlength="10" class="large m-wrap" onkeyup="this.value=this.value.toUpperCase()"/>
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">Tempat Lahir</label>
               <div class="controls">
                  <input type="text" name="tempat_lahir" id="tempat_lahir" data-required="1" maxlength="50" class="large m-wrap" onkeyup="this.value=this.value.toUpperCase()"/>
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">Tgl Lahir <span class="required">*</span></label>
               <div class="controls">
                  <input type="text" name="tgl_lahir" id="mask_date" placeholder="dd/mm/yyyy" data-required="1" class="small m-wrap date-picker"/>
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">Gender <span class="required">*</span></label>
               <div class="controls">
                  <select class="small m-wrap" name="gender" id="gender">
                     <option value="PRIA">PRIA</option>
                     <option value="WANITA">WANITA</option>
                  </select>
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">Tgl Capeg <span class="required">*</span></label>
               <div class="controls">
                  <input type="text" name="tgl_capeg" id="mask_date" placeholder="dd/mm/yyyy" data-required="1" class="small m-wrap date-picker"/>
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">Pensiun Normal <span class="required">*</span></label>
               <div class="controls">
                  <input type="text" name="tgl_pensiun_normal" id="mask_date" placeholder="dd/mm/yyyy" data-required="1" class="small m-wrap date-picker"/>
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">Alamat</label>
               <div class="controls">
                  <input type="text" name="alamat" id="alamat" maxlength="300" data-required="1" class="large m-wrap" onkeyup="this.value=this.value.toUpperCase()"/>
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">Kota</label>
               <div class="controls">
                  <input type="text" name="kota" id="kota" maxlength="50" data-required="1" class="large m-wrap" onkeyup="this.value=this.value.toUpperCase()"/>
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">Status</label>
               <div class="controls">
                  <input type="text" name="status" id="status" maxlength="50" data-required="1" class="large m-wrap" onkeyup="this.value=this.value.toUpperCase()"/>
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">Agama</label>
               <div class="controls">
                  <input type="text" name="agama" id="agama" maxlength="15" data-required="1" class="large m-wrap" onkeyup="this.value=this.value.toUpperCase()"/>
               </div>
            </div>
            <div class="control-group">
              <label class="control-label">Gadas</label>
              <div class="controls">
                 <div class="input-prepend">
                   <span class="add-on">Rp</span>
                   <input type="text" name="gadas" id="gadas" class="medium m-wrap mask-money" value="0" maxlength="12" />
                 </div>
              </div>
            </div>  
            <div class="control-group">
              <label class="control-label">Perumahan</label>
              <div class="controls">
                 <div class="input-prepend">
                   <span class="add-on">Rp</span>
                   <input type="text" name="perumahan" id="perumahan" class="medium m-wrap mask-money" value="0" maxlength="12" />
                 </div>
              </div>
            </div> 
            <div class="control-group">
              <label class="control-label">Koptel</label>
              <div class="controls">
                 <div class="input-prepend">
                   <span class="add-on">Rp</span>
                   <input type="text" name="koptel" id="koptel" class="medium m-wrap mask-money" value="0" maxlength="12" />
                 </div>
              </div>
            </div> 
            <div class="control-group">
              <label class="control-label">THP</label>
              <div class="controls">
                 <div class="input-prepend">
                   <span class="add-on">Rp</span>
                   <input type="text" name="thp" id="thp" class="medium m-wrap mask-money" value="0" maxlength="12" />
                 </div>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">KOPEGTEL</label>
              <div class="controls">
                 <select class="m-wrap large chosen" id="kopegtel_code" name="kopegtel_code">
                    <option value="">- SILAHKAN PILIH -</option>
                    <?php 
                    foreach($kopegtel as $kopeg):
                     echo '<option value="'.$kopeg['kopegtel_code'].'">'.$kopeg['nama_kopegtel'].'</option>';
                    endforeach;
                    ?>
                 </select>
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
<!-- END ADD REMBUG -->




<!-- BEGIN EDIT USER -->
<div id="edit" class="hide">
   
   <div class="portlet box purple">
      <div class="portlet-title">
         <div class="caption"><i class="icon-reorder"></i>Edit CIF</div>
         <div class="tools">
            <a href="javascript:;" id="back_edit" style="color:white;font-size:15px;"> < Back </a>
         </div>
      </div>
      <div class="portlet-body form">
         <!-- BEGIN FORM-->
         <form action="#" id="form_edit" class="form-horizontal">
            <input type="hidden" id="nik" name="nik">
            <input type="hidden" id="pegawai_id" name="pegawai_id">
            <div class="alert alert-error hide">
               <button class="close" data-dismiss="alert"></button>
               Terdapat beberapa form yang error. Mohon periksa kembali
            </div>
            <div class="alert alert-success hide">
               <button class="close" data-dismiss="alert"></button>
               Edit CIF Berhasil !
            </div>

            <div class="control-group">
               <label class="control-label">NIK <span class="required">*</span></label>
               <div class="controls">
                  <input type="text" name="snik" id="snik" data-required="1" class="large m-wrap" readonly="" style="background: #eee;" />
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">Nama Pegawai <span class="required">*</span></label>
               <div class="controls">
                  <input type="text" name="nama_pegawai" id="nama_pegawai" maxlength="30" data-required="1" class="large m-wrap" onkeyup="this.value=this.value.toUpperCase()"/>
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">Personal Area</label>
               <div class="controls">
                  <input type="text" name="personal_area" id="personal_area" data-required="1" maxlength="10" class="large m-wrap" onkeyup="this.value=this.value.toUpperCase()"/>
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">PSA</label>
               <div class="controls">
                  <input type="text" name="psa" id="psa" data-required="1" maxlength="10" class="large m-wrap" onkeyup="this.value=this.value.toUpperCase()"/>
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">VPSA</label>
               <div class="controls">
                  <input type="text" name="vpsa" id="vpsa" data-required="1" maxlength="50" class="large m-wrap" onkeyup="this.value=this.value.toUpperCase()"/>
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">Kode Divisi</label>
               <div class="controls">
                  <input type="text" name="code_divisi" id="code_divisi" data-required="1" maxlength="10" class="large m-wrap" onkeyup="this.value=this.value.toUpperCase()"/>
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">Kode Loker</label>
               <div class="controls">
                  <input type="text" name="kode_loker" id="kode_loker" data-required="1" maxlength="50" class="large m-wrap" onkeyup="this.value=this.value.toUpperCase()"/>
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">Loker</label>
               <div class="controls">
                  <input type="text" name="loker" id="loker" data-required="1" maxlength="100" class="large m-wrap" onkeyup="this.value=this.value.toUpperCase()"/>
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">Kode Posisi</label>
               <div class="controls">
                  <input type="text" name="kode_posisi" id="kode_posisi" data-required="1" maxlength="50" class="large m-wrap" onkeyup="this.value=this.value.toUpperCase()"/>
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">Posisi</label>
               <div class="controls">
                  <input type="text" name="posisi" id="posisi" data-required="1" maxlength="100" class="large m-wrap" onkeyup="this.value=this.value.toUpperCase()"/>
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">Tgl Mulai Kerja <span class="required">*</span></label>
               <div class="controls">
                  <input type="text" name="tgl_mulai_kerja" id="mask_date" placeholder="dd/mm/yyyy" data-required="1" class="small m-wrap date-picker"/>
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">Kerja Bantu</label>
               <div class="controls">
                  <input type="text" name="kerja_bantu" id="kerja_bantu" data-required="1" maxlength="50" class="large m-wrap" onkeyup="this.value=this.value.toUpperCase()"/>
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">Band</label>
               <div class="controls">
                  <input type="text" name="band" id="band" data-required="1" maxlength="10" class="large m-wrap" onkeyup="this.value=this.value.toUpperCase()"/>
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">Klas</label>
               <div class="controls">
                  <input type="text" name="klas" id="klas" data-required="1" maxlength="10" class="large m-wrap" onkeyup="this.value=this.value.toUpperCase()"/>
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">Tempat Lahir</label>
               <div class="controls">
                  <input type="text" name="tempat_lahir" id="tempat_lahir" data-required="1" maxlength="50" class="large m-wrap" onkeyup="this.value=this.value.toUpperCase()"/>
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">Tgl Lahir <span class="required">*</span></label>
               <div class="controls">
                  <input type="text" name="tgl_lahir" id="mask_date" placeholder="dd/mm/yyyy" data-required="1" class="small m-wrap date-picker"/>
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">Gender <span class="required">*</span></label>
               <div class="controls">
                  <select class="small m-wrap" name="gender" id="gender">
                     <option value="PRIA">PRIA</option>
                     <option value="WANITA">WANITA</option>
                  </select>
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">Tgl Capeg <span class="required">*</span></label>
               <div class="controls">
                  <input type="text" name="tgl_capeg" id="mask_date" placeholder="dd/mm/yyyy" data-required="1" class="small m-wrap date-picker"/>
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">Pensiun Normal <span class="required">*</span></label>
               <div class="controls">
                  <input type="text" name="tgl_pensiun_normal" id="mask_date" placeholder="dd/mm/yyyy" data-required="1" class="small m-wrap date-picker"/>
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">Alamat</label>
               <div class="controls">
                  <input type="text" name="alamat" id="alamat" maxlength="300" data-required="1" class="large m-wrap" onkeyup="this.value=this.value.toUpperCase()"/>
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">Kota</label>
               <div class="controls">
                  <input type="text" name="kota" id="kota" maxlength="50" data-required="1" class="large m-wrap" onkeyup="this.value=this.value.toUpperCase()"/>
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">Status</label>
               <div class="controls">
                  <input type="text" name="status" id="status" maxlength="50" data-required="1" class="large m-wrap" onkeyup="this.value=this.value.toUpperCase()"/>
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">Agama</label>
               <div class="controls">
                  <input type="text" name="agama" id="agama" maxlength="15" data-required="1" class="large m-wrap" onkeyup="this.value=this.value.toUpperCase()"/>
               </div>
            </div>
            <div class="control-group">
              <label class="control-label">Gadas</label>
              <div class="controls">
                 <div class="input-prepend">
                   <span class="add-on">Rp</span>
                   <input type="text" name="gadas" id="gadas" class="medium m-wrap mask-money" value="0" maxlength="12" />
                 </div>
              </div>
            </div>  
            <div class="control-group">
              <label class="control-label">Perumahan</label>
              <div class="controls">
                 <div class="input-prepend">
                   <span class="add-on">Rp</span>
                   <input type="text" name="perumahan" id="perumahan" class="medium m-wrap mask-money" value="0" maxlength="12" />
                 </div>
              </div>
            </div> 
            <div class="control-group">
              <label class="control-label">Koptel</label>
              <div class="controls">
                 <div class="input-prepend">
                   <span class="add-on">Rp</span>
                   <input type="text" name="koptel" id="koptel" class="medium m-wrap mask-money" value="0" maxlength="12" />
                 </div>
              </div>
            </div> 
            <div class="control-group">
              <label class="control-label">THP</label>
              <div class="controls">
                 <div class="input-prepend">
                   <span class="add-on">Rp</span>
                   <input type="text" name="thp" id="thp" class="medium m-wrap mask-money" value="0" maxlength="12" />
                 </div>
              </div>
            </div>    
            <div class="control-group">
              <label class="control-label">KOPEGTEL</label>
              <div class="controls">
                 <select class="m-wrap large chosen" id="kopegtel_code1" name="kopegtel_code">
                    <option value="">- SILAHKAN PILIH -</option>
                    <?php 
                    foreach($kopegtel as $kopeg):
                     echo '<option value="'.$kopeg['kopegtel_code'].'">'.$kopeg['nama_kopegtel'].'</option>';
                    endforeach;
                    ?>
                 </select>
              </div>
            </div>

            <div class="form-actions">
               <button type="submit" class="btn purple">Update</button>
               <button type="button" class="btn" id="cancel">Back</button>
            </div>
         </form>
         <!-- END FORM-->
      </div>
   </div>

</div>
<!-- END EDIT REMBUG -->






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
   $(function() {    
      App.init(); // initlayout and core plugins
      Index.init();
      // Index.initCalendar(); // init index page's custom scripts
      // Index.initChat();
      // Index.initDashboardDaterange();
      // Index.initIntro();
      $("input#mask_date").inputmask("d/m/y");  //direct mask        
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
        var tbl_id = 'rembug_table';
        $("select[name='"+tbl_id+"_length']").trigger('change');
        $(".paging_bootstrap li:first a").trigger('click');
        $("#"+tbl_id+"_filter input").val('').trigger('keyup');
      }

      // fungsi untuk check all
      jQuery('#rembug_table .group-checkable').live('change',function () {
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

      $("#rembug_table .checkboxes").livequery(function(){
        $(this).uniform();
      });




      // BEGIN FORM ADD REMBUG VALIDATION
      var form1 = $('#form_add');
      var error1 = $('.alert-error', form1);
      var success1 = $('.alert-success', form1);
      
      $("#back_add").click(function(){
        $("#add").hide();
        $("#wrapper-table").show();
      });

      $("#btn_add").click(function(){
        $("#wrapper-table").hide();
        $("#add").show();
        form1.trigger('reset');
      });

      form1.validate({
          errorElement: 'span', //default input error message container
          errorClass: 'help-inline', // default input error message class
          focusInvalid: false, // do not focus the last invalid input
          // ignore: "",
          rules: {
               nik: 'required'
              ,nama_pegawai: 'required'
              ,tgl_mulai_kerja: 'required'
              ,tgl_lahir: 'required'
              ,tgl_capeg: 'required'
              ,tgl_pensiun_normal: 'required'
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
            if(label.closest('.input-append').length==0)
            {
              label
                  .addClass('valid').addClass('help-inline') // mark the current input as valid and display OK icon
              .closest('.control-group').removeClass('error').addClass('success'); // set success class to the control group
            }
            else
            {
               label.closest('.control-group').removeClass('error').addClass('success')
               label.remove();
            }
          },

          submitHandler: function(){
                form1.ajaxSubmit({
                    data: form1.serialize(),
                    dataType: "json",
                    success: function(response) {
                      if(response.success==true){
                        success1.show();
                        error1.hide();
                        form1.trigger('reset');
                        form1.children('div').removeClass('success');
                        form1.find('div.control-group').removeClass('error');
                        form1.find('div.control-group').removeClass('success');
                        $("#add").hide();
                        $("#wrapper-table").show();
                        dTreload();
                        App.scrollTo($('.page-title'));
                        $("#cancel",form_add).trigger('click')
                        alert('Success');
                      }else{
                        success1.hide();
                        error1.show();
                        App.scrollTo($('.page-title'));
                      }
                    },
                    error:function(){
                        success1.hide();
                        error1.show();
                        App.scrollTo($('.page-title'));
                    }
                });
          }
      });

      // event untuk kembali ke tampilan data table (ADD FORM)
      $("#cancel","#form_add").click(function(){
        success1.hide();
        error1.hide();
        $("#add").hide();
        form1.find('div.control-group').removeClass('error');
        form1.find('div.control-group').removeClass('success');
        $("#wrapper-table").show();
        form1.trigger('reset');
        form1.children('div').removeClass('success');
        $(".help-inline",form1).html('');
        dTreload();
      });


      // BEGIN FORM EDIT USER VALIDATION
      var form2 = $('#form_edit');
      var error2 = $('.alert-error', form2);
      var success2 = $('.alert-success', form2);


      $("#back_edit").click(function(){
        $("#wrapper-table").show();
        $("#edit").hide();
      });

      $("a#link-edit").live('click',function(){
        form2.trigger('reset');
        form2.children('div').removeClass('success');
        form2.find('div.control-group').removeClass('error');
        form2.find('div.control-group').removeClass('success');
        $(".help-inline",form2).html('');
        var pegawai_id = $(this).attr('pegawai_id');
        $.ajax({
          type: "POST",
          dataType: "json",
          async:false,
          data: {pegawai_id:pegawai_id},
          url: site_url+"cif/get_pegawai_by_pegawai_id",
            success: function(response){
               form2.trigger('reset');
               $("input[name='pegawai_id']",form2).val(pegawai_id);
               if (response.tgl_mulai_kerja!=null) {
                  s1 = response.tgl_mulai_kerja.split('-');
                  tgl_mulai_kerja = s1[2]+'/'+s1[1]+'/'+s1[0];
               } else {
                  tgl_mulai_kerja = '';
               }
               $("input[name='tgl_mulai_kerja']",form2).val(tgl_mulai_kerja).trigger('change').datepicker('update');

               if (response.tgl_lahir!=null) {
                  s1 = response.tgl_lahir.split('-');
                  tgl_lahir = s1[2]+'/'+s1[1]+'/'+s1[0];
               } else {
                  tgl_lahir = '';
               }
               $("input[name='tgl_lahir']",form2).val(tgl_lahir).trigger('change').datepicker('update');

               if (response.tgl_capeg!=null) {
                  s1 = response.tgl_capeg.split('-');
                  tgl_capeg = s1[2]+'/'+s1[1]+'/'+s1[0];
               } else {
                  tgl_capeg = '';
               }
               $("input[name='tgl_capeg']",form2).val(tgl_capeg).trigger('change').datepicker('update');

               if (response.tgl_pensiun_normal!=null) {
                  s1 = response.tgl_pensiun_normal.split('-');
                  tgl_pensiun_normal = s1[2]+'/'+s1[1]+'/'+s1[0];
               } else {
                  tgl_pensiun_normal = '';
               }
               $("input[name='tgl_pensiun_normal']",form2).val(tgl_pensiun_normal).trigger('change').datepicker('update');

               $("input[name='nik']",form2).val(response.nik);
               $("input[name='snik']",form2).val(response.nik);
               $("input[name='nama_pegawai']",form2).val(response.nama_pegawai);
               $("input[name='personal_area']",form2).val(response.personal_area);
               $("input[name='psa']",form2).val(response.psa);
               $("input[name='vpsa']",form2).val(response.vpsa);
               $("input[name='code_divisi']",form2).val(response.code_divisi);
               $("input[name='kode_loker']",form2).val(response.kode_loker);
               $("input[name='loker']",form2).val(response.loker);
               $("input[name='kode_posisi']",form2).val(response.kode_posisi);
               $("input[name='posisi']",form2).val(response.posisi);
               // $("input[name='tgl_mulai_kerja']",form2).val(response.tgl_mulai_kerja);
               $("input[name='kerja_bantu']",form2).val(response.kerja_bantu);
               $("input[name='band']",form2).val(response.band);
               $("input[name='klas']",form2).val(response.klas);
               $("input[name='tempat_lahir']",form2).val(response.tempat_lahir);
               // $("input[name='tgl_lahir']",form2).val(response.tgl_lahir);
               $("input[name='gender']",form2).val(response.gender);
               $("#gender",form2).val(response.gender);
               // $("input[name='tgl_capeg']",form2).val(response.tgl_capeg);
               // $("input[name='tgl_pensiun_normal']",form2).val(response.tgl_pensiun_normal);
               $("input[name='alamat']",form2).val(response.alamat);
               $("input[name='kota']",form2).val(response.kota);
               $("input[name='status']",form2).val(response.status);
               $("input[name='agama']",form2).val(response.agama);
               $("input[name='gadas']",form2).val(number_format(response.gadas,0,',','.'));
               $("input[name='perumahan']",form2).val(number_format(response.perumahan,0,',','.'));
               $("input[name='koptel']",form2).val(number_format(response.koptel,0,',','.'));
               $("input[name='thp']",form2).val(number_format(response.thp,0,',','.'));
               $("select[name='kopegtel_code']",form2).val(response.kopegtel_code).trigger('liszt:updated');
            
               $("#wrapper-table").hide();
               $("#edit").show();
            },
            error:function(){
               alert("Error. Hapap hubungi administrator");
               App.scrollTo($('.page-title'));
            }
        })

      });

      form2.validate({
          errorElement: 'span', //default input error message container
          errorClass: 'help-inline', // default input error message class
          focusInvalid: false, // do not focus the last invalid input
          ignore: "",
          rules: {
               nama_pegawai: 'required'
              ,tgl_mulai_kerja: 'required'
              ,tgl_lahir: 'required'
              ,tgl_capeg: 'required'
              ,tgl_pensiun_normal: 'required'
              ,kopegtel_code: 'required'
          },

          invalidHandler: function (event, validator) { //display error alert on form submit              
              success2.hide();
              error2.show();
              App.scrollTo(error2, -200);
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
            if(label.closest('.input-append').length==0)
            {
              label
                  .addClass('valid').addClass('help-inline ok') // mark the current input as valid and display OK icon
              .closest('.control-group').removeClass('error').addClass('success'); // set success class to the control group
            }
            else
            {
               label.closest('.control-group').removeClass('error').addClass('success')
               label.remove();
            }
          },

          submitHandler: function (form) {

            $.ajax({
              type: "POST",
              url: site_url+"cif/update_pegawai",
              dataType: "json",
              async:false,
              data: form2.serialize(),
              success: function(response){
                if(response.success==true){
                  success2.show();
                  error2.hide();
                  form2.children('div').removeClass('success');
                  form2.find('div.control-group').removeClass('error');
                  form2.find('div.control-group').removeClass('success');
                  $("#menu_table_filter input").val('');
                  dTreload();
                  $("#cancel",form_edit).trigger('click')
                  alert('Success');
                }else{
                  success2.hide();
                  error2.show();
                }
                App.scrollTo($('.page-title'));
              },
              error:function(){
                  success2.hide();
                  error2.show();
                  App.scrollTo($('.page-title'));
              }
            });

          }
      });



      // event untuk kembali ke tampilan data table (EDIT FORM)
      $("#cancel","#form_edit").click(function(){
        success2.hide();
        error2.hide();
        $("#edit").hide();
        $("#wrapper-table").show();
        dTreload();
      });


      $("#btn_delete").click(function(){

        var cif_id = [];
        var cif_no = [];
        var $i = 0;
        $("input#checkbox:checked").each(function(){

          cif_id[$i] = $(this).val();
          cif_no[$i] = $(this).attr('cif_no');

          $i++;

        });

        if(cif_id.length==0){
          alert("Please select some row to delete !");
        }else{
          var conf = confirm('Are you sure to delete this rows ?');
          if(conf){
             
            $.ajax({
              type: "POST",
              url: site_url+"cif/delete_cif_individu",
              dataType: "json",
              data: {cif_id:cif_id,cif_no:cif_no},
              success: function(response){
                if(response.num_failed==0){
                  alert("Deleted!");
                  dTreload();
                }else{
                  num_deleted = parseFloat($("input#checkbox:checked").length-response.num_failed)
                  alert(num_deleted+" CIF has been deleted!\r\nNote : "+response.num_failed+" CIF dari "+$("input#checkbox:checked").length+" CIF yang dipilih masih memiliki rekening dan tidak dapat di DELETE!");
                  dTreload();
                }
              },
              error: function(){
                alert("Failed to Connect into Database, Please Check ur Connection or Try Again Latter")
              }
            });

          }
        }

      });


      // begin first table
      $('#rembug_table').dataTable({
          "bProcessing": true,
          "bServerSide": true,
          "sAjaxSource": site_url+"cif/datatable_cif",
          "aoColumns": [
            // { "bSortable": false },
            null,
            null,
            null,
            null,
            null,
            null,
            { "bSortable": false }
          ],
          "aLengthMenu": [
              [15, 30, 50, 100, -1],
              [15, 30, 50, 100, "All"] // change per page values here
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

      jQuery('#user_table_wrapper .dataTables_filter input').addClass("m-wrap medium"); // modify table search input
      jQuery('#user_table_wrapper .dataTables_length select').addClass("m-wrap small"); // modify table per page dropdown
      //jQuery('#sample_1_wrapper .dataTables_length select').select2(); // initialzie select2 dropdown

});
</script>

<!-- END JAVASCRIPTS -->
