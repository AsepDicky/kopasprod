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
      Product Setup <small>Produk Pembiayaan</small>
    </h3>
    <ul class="breadcrumb">
      <li>
        <i class="icon-home"></i>
        <a href="<?php echo site_url('dashboard'); ?>">Home</a> 
        <i class="icon-angle-right"></i>
      </li>
         <li><a href="#">Product</a><i class="icon-angle-right"></i></li>  
      <li><a href="#">financing Setup</a></li> 
    </ul>
      <!-- END PAGE TITLE & BREADCRUMB-->
   </div>
</div>
<!-- END PAGE HEADER-->



<!-- BEGIN EXAMPLE TABLE PORTLET-->
<div class="portlet box blue" id="wrapper-table">
   <div class="portlet-title">
      <div class="caption"><i class="icon-globe"></i>Produk Pembiayaan</div>
      <div class="tools">
         <a href="javascript:;" class="collapse"></a>
      </div>
   </div>
   <div class="portlet-body">
      <div class="clearfix">
         <div class="btn-group">
            <button id="btn_add" class="btn green">
            Add New <i class="icon-plus"></i>
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
               <th width="15%">Kode Produk</th>
               <th width="20%">Nama Produk</th>
               <th width="20%">Jenis Pembiayaan</th>
               <th width="20%">GL Code</th>
               <th>Detail</th>
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
         <div class="caption"><i class="icon-reorder"></i>Tambah Produk Pembiayaan</div>
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
               Produk Pembiayaan Berhasil Ditambahkan !
            </div>
            <br>
            <div class="control-group">
               <label class="control-label">Kode Produk<span class="required">*</span></label>
               <div class="controls">
                  <input type="text" name="product_code" id="product_code" data-required="1" class="medium m-wrap" maxlength="5" />
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">Nama Produk<span class="required">*</span></label>
               <div class="controls">
                  <input type="text" name="product_name" id="product_name" data-required="1" class="medium m-wrap" maxlength="50" />
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">Nick Name<span class="required">*</span></label>
               <div class="controls">
                  <input type="text" name="nick_name" id="nick_name" data-required="1" class="medium m-wrap" maxlength="10" />
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">Jenis Pembiayaan<span class="required">*</span></label>
               <div class="controls">
                  <select name="jenis_pembiayaan" id="jenis_pembiayaan" class="medium m-wrap" data-required="1">
                     <option value="">Pilih</option>
                     <option value="0">Individu</option>
                     <option value="1">Kelompok</option>
                  </select>
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">Akad<span class="required">*</span></label>
               <div class="controls">
                  <select name="akad_code" id="akad_code" class="medium m-wrap" data-required="1">
                     <option value="">Pilih</option>
                     <?php foreach($akadata as $akad){ ?>
                     <option value="<?php echo $akad['akad_code'] ?>" jenispendapatan="<?php echo $akad['jenis_keuntungan']; ?>"><?php echo $akad['akad_code'].' - '.$akad['akad_name'] ?></option>
                     <?php } ?>
                  </select>
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">Flag Asuransi<span class="required">*</span></label>
               <div class="controls">
                  <select name="flag_asuransi" id="flag_asuransi1" class="small m-wrap">
                    <option value="">Pilih</option>
                    <option value="0">0 - No</option>
                    <option value="1">1 - Yes</option>
                  </select>
                  <!-- <input type="text" name="flag_asuransi" id="flag_asuransi" data-required="1" class="small m-wrap" maxlength="1" /> -->
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">Produk Asuransi<span class="required">*</span></label>
               <div class="controls">
                  <select name="insurance_product_code" id="insurance_product_code" class="medium m-wrap" data-required="1">
                     <option value="">Pilih</option>
                     <?php foreach ($produk_asuransi as $data):
                     ?>
                     <option value="<?php echo $data['product_code'];?>"><?php echo $data['product_name'];?></option>
                     <?php endforeach;?>
                  </select>
                  <input type="hidden" name="insurance_product_code_no" id="insurance_product_code_no">
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">Manfaat Asuransi<span class="required">*</span></label>
               <div class="controls">
                  <select name="flag_manfaat_asuransi" id="flag_manfaat_asuransi" class="medium m-wrap" data-required="1">
                     <option value="">Pilih</option>
                     <option value="0">Pokok</option>
                     <option value="1">Pokok + Margin</option>
                  </select>
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">Tipe Biaya Admin<span class="required">*</span></label>
               <div class="controls">
                  <select name="type_bya_adm" id="type_bya_adm" class="medium m-wrap" data-required="1">
                     <option value="">Pilih</option>
                     <option value="0">Tidak Ada Biaya</option>
                     <option value="1">Rate % Dari Plafon</option>
                     <option value="2">Nominal</option>
                     <option value="3">Berdasarkan Besar Plafon</option>
                  </select>
               </div>
            </div>
            <div class="control-group" style="display:none">
               <label class="control-label">Rate Biaya Admin<span class="required">*</span></label>
               <div class="controls">
                  <div class="input-append">
                    <input type="text" name="rate_bya_adm" id="rate_bya_adm" data-required="1" value="0" class="small m-wrap" maxlength="8" />
                    <span class="add-on">%</span>
                  </div>
               </div>
            </div>
            <div class="control-group" style="display:none">
              <label class="control-label">Nominal Biaya Admin<span class="required">*</span></label>
                 <div class="controls">
                    <div class="input-prepend input-append">
                       <span class="add-on">Rp</span>
                          <input type="text" class="medium m-wrap mask-money" id="nominal_bya_adm" name="nominal_bya_adm" value="0">
                       <span class="add-on">,00</span>
                    </div>
                 </div>
            </div> 
            <div class="control-group">
               <label class="control-label">GL Code<span class="required">*</span></label>
               <div class="controls">
                  <select name="product_financing_gl_code" id="product_financing_gl_code" class="medium m-wrap" data-required="1">
                     <option value="">Pilih</option>
                     <?php foreach ($gl_code as $data):
                     ?>
                     <option value="<?php echo $data['product_financing_gl_code'];?>"><?php echo $data['description'];?></option>
                     <?php endforeach;?>
                  </select>
               </div>
            </div>
            <div class="control-group">
              <label class="control-label">Periode Angsuran<span class="required">*</span></label>
                 <div class="controls">
                    <div class="input-prepend input-append">
                       <select data-required="1" class="small m-wrap" name="periode_angsuran" id="periode_angsuran">                     
                        <option value="">PILIH</option>                    
                        <option value="0">Harian</option>                    
                        <option value="1">Mingguan</option>                    
                        <option value="2">Bulanan</option>                    
                        <option value="3">Jatuh Tempo</option>
                      </select>
                    </div>
                 </div>
            </div>
            <div class="control-group hide">
              <label class="control-label">Min Rate Margin<span class="required">*</span></label>
                 <div class="controls">
                    <div class="input-append">
                       <input type="text" class="small m-wrap" id="min_rate_margin" name="min_rate_margin" value="0">
                       <span class="add-on">%</span>
                    </div>
                    <span style="color:red;">*) Per tahun</span>
                 </div>
            </div> 
            <div class="control-group hide">
              <label class="control-label">Max Rate Margin<span class="required">*</span></label>
               <div class="controls">
                    <div class="input-append">
                     <input type="text" class="small m-wrap" id="max_rate_margin" name="max_rate_margin" value="0">
                     <span class="add-on">%</span>
                    </div>
              </div>
              <span style="color:red;">*) Per tahun</span>
            </div>
            <div class="control-group hide">
              <label class="control-label">Bagi Hasil Nisbah<span class="required">*</span></label>
                 <div class="controls">
                    <div class="input-append">
                       <input type="text" class="small m-wrap" id="bagihasil_nasabah" name="bagihasil_nasabah" value="0">
                       <span class="add-on">%</span>
                    </div>
                 </div>
            </div> 
            <div class="control-group hide">
              <label class="control-label">Bagi Hasil Perusahaan<span class="required">*</span></label>
               <div class="controls">
                    <div class="input-append">
                     <input type="text" class="small m-wrap" id="bagihasil_perusahaan" name="bagihasil_perusahaan" value="0">
                     <span class="add-on">%</span>
                    </div>
              </div>
            </div> 
            <div class="control-group">
              <label class="control-label">Menggunakan Scoring ? <span class="required">*</span></label>
               <div class="controls">
                 <select class="small m-wrap" name="flag_scoring" id="flag_scoring">
                   <option value="">PILIH</option>
                   <option value="0">Tidak</option>
                   <option value="1">Ya</option>
                 </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Rate Simp. Wajib Pinjam <span class="required">*</span></label>
               <div class="controls">
                <div class="input-append">
                 <input type="text" class="small m-wrap" id="rate_simpanan_wajib_pinjam" name="rate_simpanan_wajib_pinjam" value="0">
                 <span class="add-on">%</span>
                </div>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Rate Biaya Jasa Layanan <span class="required">*</span></label>
               <div class="controls">
                <div class="input-append">
                 <input type="text" class="small m-wrap" id="jasa_layanan" name="jasa_layanan" value="0">
                 <span class="add-on">%</span>
                </div>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Bunga<span class="required">*</span></label>
                 <div class="controls">
                    <div class="input-prepend input-append">
                       <select data-required="1" class="small m-wrap" name="jenis_margin" id="jenis_margin">                     
                        <option value="1">Flat</option>                    
                        <option value="2">Efektif</option>                    
                        <option value="3">Anuitas</option>                    
                      </select>
                    </div>
                 </div>
            </div>
            <div class="control-group">
               <label class="control-label">Underwriting<span class="required">*</span></label>
               <div class="controls">
                  <select name="uw_code" id="uw_code" class="medium m-wrap" data-required="1">
                     <option value="">Pilih</option>
                     <?php foreach ($underwritings as $underwriting):
                     ?>
                     <option value="<?php echo $underwriting['uw_code'];?>"><?php echo $underwriting['uw_name'];?></option>
                     <?php endforeach;?>
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
          <input type="hidden" id="product_financing_id" name="product_financing_id">
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
               <label class="control-label">Kode Produk<span class="required">*</span></label>
               <div class="controls">
                  <input type="text" name="product_code" id="product_code" data-required="1" class="medium m-wrap"  />
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">Nama Produk<span class="required">*</span></label>
               <div class="controls">
                  <input type="text" name="product_name" id="product_name" data-required="1" class="medium m-wrap" maxlength="50" />
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">Nick Name<span class="required">*</span></label>
               <div class="controls">
                  <input type="text" name="nick_name" id="nick_name" data-required="1" class="medium m-wrap" maxlength="10" />
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">Jenis Pembiayaan<span class="required">*</span></label>
               <div class="controls">
                  <select name="jenis_pembiayaan" id="jenis_pembiayaan" class="medium m-wrap" data-required="1">
                     <option value="">Pilih</option>
                     <option value="0">Individu</option>
                     <option value="1">Kelompok</option>
                  </select>
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">Akad<span class="required">*</span></label>
               <div class="controls">
                  <select name="akad_code" id="akad_code" class="medium m-wrap" data-required="1">
                     <option value="">Pilih</option>
                     <?php foreach($akadata as $akad){ ?>
                     <option value="<?php echo $akad['akad_code'] ?>" jenispendapatan="<?php echo $akad['jenis_keuntungan']; ?>"><?php echo $akad['akad_code'].' - '.$akad['akad_name'] ?></option>
                     <?php } ?>
                  </select>
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">Flag Asuransi<span class="required">*</span></label>
               <div class="controls">
                  <select name="flag_asuransi" id="flag_asuransi" class="small m-wrap">
                    <option value="">Pilih</option>
                    <option value="0">0 - No</option>
                    <option value="1">1 - Yes</option>
                  </select>
                  <!-- <input type="text" name="flag_asuransi" id="flag_asuransi" data-required="1" class="small m-wrap" maxlength="1" /> -->
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">Produk Asuransi<span class="required">*</span></label>
               <div class="controls">
                  <select name="insurance_product_code" id="insurance_product_code" class="medium m-wrap" data-required="1">
                     <option value="">Pilih</option>
                     <?php foreach ($produk_asuransi as $data):
                     ?>
                     <option value="<?php echo $data['product_code'];?>"><?php echo $data['product_name'];?></option>
                     <?php endforeach;?>
                  </select>
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">Manfaat Asuransi<span class="required">*</span></label>
               <div class="controls">
                  <select name="flag_manfaat_asuransi" id="flag_manfaat_asuransi" class="medium m-wrap" data-required="1">
                     <option value="">Pilih</option>
                     <option value="0">Pokok</option>
                     <option value="1">Pokok + Margin</option>
                  </select>
               </div>
            </div>
            <div class="control-group">
               <label class="control-label">Tipe Biaya Admin<span class="required">*</span></label>
               <div class="controls">
                  <select name="type_bya_adm" id="type_bya_adm" class="medium m-wrap" data-required="1">
                     <option value="">Pilih</option>
                     <option value="0">Tidak Ada Biaya</option>
                     <option value="1">Rate % Dari Plafon</option>
                     <option value="2">Nominal</option>
                     <option value="3">Berdasarkan Besar Plafon</option>
                  </select>
               </div>
            </div>
            <div class="control-group" style="display:none">
               <label class="control-label">Rate Biaya Admin<span class="required">*</span></label>
               <div class="controls">
               <div class="input-append">
                  <input type="text" name="rate_bya_adm" id="rate_bya_adm" data-required="1" value="0" class="small m-wrap" maxlength="8" />
                  <span class="add-on">%</span>
                  </div>
               </div>
            </div>
            <div class="control-group" style="display:none">
              <label class="control-label">Nominal Biaya Admin<span class="required">*</span></label>
                 <div class="controls">
                    <div class="input-prepend input-append">
                       <span class="add-on">Rp</span>
                          <input type="text" class="medium m-wrap mask-money" id="nominal_bya_adm" name="nominal_bya_adm" value="0" maxlength="7">
                       <span class="add-on">,00</span>
                    </div>
                 </div>
            </div> 
            <div class="control-group">
               <label class="control-label">GL Code<span class="required">*</span></label>
               <div class="controls">
                  <select name="product_financing_gl_code" id="product_financing_gl_code" class="medium m-wrap" data-required="1">
                     <option value="">Pilih</option>
                     <?php foreach ($gl_code as $data):
                     ?>
                     <option value="<?php echo $data['product_financing_gl_code'];?>"><?php echo $data['description'];?></option>
                     <?php endforeach;?>
                  </select>
               </div>
            </div>
            <div class="control-group">
              <label class="control-label">Periode Angsuran<span class="required">*</span></label>
                 <div class="controls">
                    <div class="input-prepend input-append">
                       <select data-required="1" class="small m-wrap" name="periode_angsuran" id="periode_angsuran">                     
                        <option value="">PILIH</option>                    
                        <option value="0">Harian</option>                    
                        <option value="1">Mingguan</option>                    
                        <option value="2">Bulanan</option>                    
                        <option value="3">Jatuh Tempo</option>
                      </select>
                    </div>
                 </div>
            </div> 
            <div class="control-group hide">
              <label class="control-label">Min Rate Margin<span class="required">*</span></label>
                 <div class="controls">
                  <div class="input-append">
                       <input type="text" class="small m-wrap" id="min_rate_margin" name="min_rate_margin" value="0">
                       <span class="add-on">%</span>
                       </div>
                       <span style="color:red;font-size:11px;">*) Per tahun</span>
                 </div>
            </div> 
            <div class="control-group hide">
              <label class="control-label">Max Rate Margin<span class="required">*</span></label>
                 <div class="controls">
                 <div class="input-append">
                       <input type="text" class="small m-wrap" id="max_rate_margin" name="max_rate_margin" value="0">
                       <span class="add-on">%</span>
                       </div>
                       <span style="color:red;font-size:11px;">*) Per tahun</span>
                </div>
            </div> 
            <div class="control-group hide">
              <label class="control-label">Bagi Hasil Nisbah<span class="required">*</span></label>
                 <div class="controls">
                    <div class="input-append">
                       <input type="text" class="small m-wrap" id="bagihasil_nasabah" name="bagihasil_nasabah" value="0">
                       <span class="add-on">%</span>
                    </div>

                 </div>
            </div> 
            <div class="control-group hide">
              <label class="control-label">Bagi Hasil Perusahaan<span class="required">*</span></label>
               <div class="controls">
                    <div class="input-append">
                     <input type="text" class="small m-wrap" id="bagihasil_perusahaan" name="bagihasil_perusahaan" value="0">
                     <span class="add-on">%</span>
                    </div>

              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Menggunakan Scoring ? <span class="required">*</span></label>
                 <div class="controls">
                   <select class="small m-wrap" name="flag_scoring" id="flag_scoring">
                     <option value="">PILIH</option>
                     <option value="0">Tidak</option>
                     <option value="1">Ya</option>
                   </select>
                </div>
            </div>
            <div class="control-group">
              <label class="control-label">Rate Simp. Wajib Pinjam <span class="required">*</span></label>
               <div class="controls">
                <div class="input-append">
                 <input type="text" class="small m-wrap" id="rate_simpanan_wajib_pinjam" name="rate_simpanan_wajib_pinjam" value="0">
                 <span class="add-on">%</span>
                </div>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Rate Biaya Jasa Layanan <span class="required">*</span></label>
               <div class="controls">
                <div class="input-append">
                 <input type="text" class="small m-wrap" id="jasa_layanan" name="jasa_layanan" value="0">
                 <span class="add-on">%</span>
                </div>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Bunga<span class="required">*</span></label>
                 <div class="controls">
                    <div class="input-prepend input-append">
                       <select data-required="1" class="small m-wrap" name="jenis_margin" id="jenis_margin">                     
                        <option value="1">Flat</option>                    
                        <option value="2">Efektif</option>                    
                        <option value="3">Anuitas</option>                    
                      </select>
                    </div>
                 </div>
            </div>
            <div class="control-group">
               <label class="control-label">Underwriting<span class="required">*</span></label>
               <div class="controls">
                  <select name="uw_code" id="uw_code" class="medium m-wrap" data-required="1">
                     <option value="">Pilih</option>
                     <?php foreach ($underwritings as $underwriting):
                     ?>
                     <option value="<?php echo $underwriting['uw_code'];?>"><?php echo $underwriting['uw_name'];?></option>
                     <?php endforeach;?>
                  </select>
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



      /** 
      *-------------------------------------------------
      * AKAD EVENTS
      *-------------------------------------------------
      * UNTUK FORM ADD 
      *
      */
      $("#akad_code","#form_add").change(function(){
        jenispendapatan=$(this).find('option:selected').attr('jenispendapatan');
        switch(jenispendapatan){
          case"0": // tidak ada keuntungan
          $("#bagihasil_perusahaan","#form_add").closest('.control-group').hide();
          $("#bagihasil_perusahaan","#form_add").val(0);
          $("#bagihasil_nasabah","#form_add").closest('.control-group').hide();
          $("#bagihasil_nasabah","#form_add").val(0);
          $("#min_rate_margin","#form_add").closest('.control-group').hide();
          $("#min_rate_margin","#form_add").val(0);
          $("#max_rate_margin","#form_add").closest('.control-group').hide();
          $("#max_rate_margin","#form_add").val(0);
          break;
          case"1": // margin
          $("#bagihasil_perusahaan","#form_add").closest('.control-group').hide();
          $("#bagihasil_perusahaan","#form_add").val(0);
          $("#bagihasil_nasabah","#form_add").closest('.control-group').hide();
          $("#bagihasil_nasabah","#form_add").val(0);
          $("#min_rate_margin","#form_add").closest('.control-group').show();
          $("#min_rate_margin","#form_add").val(0);
          $("#max_rate_margin","#form_add").closest('.control-group').show();
          $("#max_rate_margin","#form_add").val(0);
          break;
          case"2": // bagi hasil
          $("#bagihasil_perusahaan","#form_add").closest('.control-group').show();
          $("#bagihasil_perusahaan","#form_add").val(0);
          $("#bagihasil_nasabah","#form_add").closest('.control-group').show();
          $("#bagihasil_nasabah","#form_add").val(0);
          $("#min_rate_margin","#form_add").closest('.control-group').hide();
          $("#min_rate_margin","#form_add").val(0);
          $("#max_rate_margin","#form_add").closest('.control-group').hide();
          $("#max_rate_margin","#form_add").val(0);
          break;
        }
      })

      /**
      * UNTUK FORM EDIT 
      *
      */
      $("#akad_code","#form_edit").change(function(){
        jenispendapatan=$(this).find('option:selected').attr('jenispendapatan');
        switch(jenispendapatan){
          case"0": // tidak ada keuntungan
          $("#bagihasil_perusahaan","#form_edit").closest('.control-group').hide();
          $("#bagihasil_perusahaan","#form_edit").val(0);
          $("#bagihasil_nasabah","#form_edit").closest('.control-group').hide();
          $("#bagihasil_nasabah","#form_edit").val(0);
          $("#min_rate_margin","#form_edit").closest('.control-group').hide();
          $("#min_rate_margin","#form_edit").val(0);
          $("#max_rate_margin","#form_edit").closest('.control-group').hide();
          $("#max_rate_margin","#form_edit").val(0);
          break;
          case"1": // margin
          $("#bagihasil_perusahaan","#form_edit").closest('.control-group').hide();
          $("#bagihasil_perusahaan","#form_edit").val(0);
          $("#bagihasil_nasabah","#form_edit").closest('.control-group').hide();
          $("#bagihasil_nasabah","#form_edit").val(0);
          $("#min_rate_margin","#form_edit").closest('.control-group').show();
          $("#min_rate_margin","#form_edit").val(0);
          $("#max_rate_margin","#form_edit").closest('.control-group').show();
          $("#max_rate_margin","#form_edit").val(0);
          break;
          case"2": // bagi hasil
          $("#bagihasil_perusahaan","#form_edit").closest('.control-group').show();
          $("#bagihasil_perusahaan","#form_edit").val(0);
          $("#bagihasil_nasabah","#form_edit").closest('.control-group').show();
          $("#bagihasil_nasabah","#form_edit").val(0);
          $("#min_rate_margin","#form_edit").closest('.control-group').hide();
          $("#min_rate_margin","#form_edit").val(0);
          $("#max_rate_margin","#form_edit").closest('.control-group').hide();
          $("#max_rate_margin","#form_edit").val(0);
          break;
        }
      })


      /**
      * VALIDATOR bagihasil
      * untuk ADD & EDIT
      */

      jQuery.validator.addMethod("bagihasil_validate_add", function(value, element) {
          id=element.id;
          id=$("#"+id);
          if(id.is(':visible')==false){
            return true;
          }
          bagihasil_nasabah = $("#bagihasil_nasabah","#form_add").val();
          bagihasil_perusahaan = $("#bagihasil_perusahaan","#form_add").val();

          total_bagihasil=parseFloat(bagihasil_perusahaan)+parseFloat(bagihasil_nasabah);
          if(parseFloat(total_bagihasil)==100){
            return true;
          }else{
            return false;
          }

      }, "Nilai Bagi Hasil harus mencapai 100%");
      jQuery.validator.addMethod("bagihasil_validate_edit", function(value, element) {
          id=element.id;
          id=$("#"+id);
          if(id.is(':visible')==false){
            return true;
          }
          bagihasil_nasabah = $("#bagihasil_nasabah","#form_edit").val();
          bagihasil_perusahaan = $("#bagihasil_perusahaan","#form_edit").val();

          total_bagihasil=parseFloat(bagihasil_perusahaan)+parseFloat(bagihasil_nasabah);
          if(parseFloat(total_bagihasil)==100){
            return true;
          }else{
            return false;
          }
      }, "Nilai Bagi Hasil harus mencapai 100%");

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
        $("#rencana").hide();
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
              product_code: {
                  required: true
              },
              product_name: {
                  required: true
              },
              nick_name: {
                  required: true
              },
              jenis_pembiayaan: {
                  required: true
              },
              flag_asuransi: {
                  required: true
              },
              insurance_product_code: {
                  required: true
              },
              type_bya_adm: {
                  required: true
              },
              akad_code: {
                  required: true
              },
              rate_bya_adm: {
                  required: true
              },
              nominal_bya_adm: {
                  required: true
              },
              flag_manfaat_asuransi: {
                  required: true
              },
              product_financing_gl_code: {
                  required: true
              },
              min_rate_margin: {
                  required: true
              },
              max_rate_margin: {
                  required: true
              },
              periode_angsuran: {
                  required: true
              },
              flag_scoring: {
                  required: true
              },
              rate_simpanan_wajib_pinjam: {
                  required: true
              },
              bagihasil_nasabah: {
                  required: true
              },
              bagihasil_perusahaan: {
                  required: true,
                  bagihasil_validate_add: true
              },
              jasa_layanan: {
                  required: true,
                  number: true
              },
              uw_code: {
                  required: true
              }
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
              url: site_url+"product/add_produk_financing",
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
        var product_financing_id = $(this).attr('product_financing_id');

        $.ajax({
          type: "POST",
          dataType: "json",
          data: {product_financing_id:product_financing_id},
          url: site_url+"product/get_financing_by_product_id",
          success: function(response)
          {
            $("#product_financing_id, #form_edit").val(response.product_financing_id);
            $("#product_code, #form_edit").val(response.product_code);
            $("#product_name, #form_edit").val(response.product_name);
            $("#nick_name, #form_edit").val(response.nick_name);
            $("#jenis_pembiayaan, #form_edit").val(response.jenis_pembiayaan);
            $("#flag_asuransi, #form_edit").val(response.flag_asuransi);
            if(response.flag_asuransi==0){ //no
              $("#insurance_product_code","#form_edit").val('');
              $("#insurance_product_code","#form_edit").attr('disabled',true);
              $("#insurance_product_code","#form_edit").css('backgroundColor','#eee');

              $("#flag_manfaat_asuransi","#form_edit").val('');
              $("#flag_manfaat_asuransi","#form_edit").attr('disabled',true);
              $("#flag_manfaat_asuransi","#form_edit").css('backgroundColor','#eee');
            }else{ //yes
              $("#insurance_product_code","#form_edit").attr('disabled',false);
              $("#insurance_product_code","#form_edit").css('backgroundColor','#fff');
              $("#insurance_product_code","#form_edit").val(response.insurance_product_code);

              $("#flag_manfaat_asuransi","#form_edit").attr('disabled',false);
              $("#flag_manfaat_asuransi","#form_edit").css('backgroundColor','#fff');
              $("#flag_manfaat_asuransi","#form_edit").val(response.flag_manfaat_asuransi);
            }

            $("#akad_code, #form_edit").val(response.akad_code);
            $("#type_bya_adm, #form_edit").val(response.type_bya_adm);
            if(response.type_bya_adm=="1"){
              $("#rate_bya_adm","#form_edit").closest('.control-group').show();
              $("#nominal_bya_adm","#form_edit").closest('.control-group').hide();
            }else if(response.type_bya_adm=="2"){
              $("#rate_bya_adm","#form_edit").closest('.control-group').hide();
              $("#nominal_bya_adm","#form_edit").closest('.control-group').show();
            }else{
              $("#rate_bya_adm","#form_edit").closest('.control-group').hide();
              $("#nominal_bya_adm","#form_edit").closest('.control-group').hide();
            }
            // if(response.type_bya_adm=="2")
            // {
            //   $("#rate_bya_adm","#form_edit").closest('.control-group').hide();
            //   $("#rate_bya_adm","#form_edit").val(response.rate_bya_adm);
            //   $("#nominal_bya_adm","#form_edit").closest('.control-group').show();
            //   $("#nominal_bya_adm","#form_edit").val(response.nominal_bya_adm);
            // }
            // else
            // {
            //   $("#rate_bya_adm","#form_edit").closest('.control-group').hide();
            //   $("#rate_bya_adm","#form_edit").val(response.rate_bya_adm);
            //   $("#nominal_bya_adm","#form_edit").closest('.control-group').hide();
            //   $("#nominal_bya_adm","#form_edit").val(response.nominal_bya_adm);
            // }

            // $("#rate_bya_adm, #form_edit").val(response.rate_bya_adm);
            
            $("#nominal_bya_adm, #form_edit").val(response.nominal_bya_adm);
            $("#product_financing_gl_code, #form_edit").val(response.product_financing_gl_code);
            $("#periode_angsuran, #form_edit").val(response.periode_angsuran);
            $("#flag_scoring, #form_edit").val(response.flag_scoring);
            $("#rate_simpanan_wajib_pinjam, #form_edit").val(response.rate_simpanan_wajib_pinjam);
            $("#jasa_layanan, #form_edit").val(response.jasa_layanan);
            $("#jenis_margin, #form_edit").val(response.jenis_margin);
            $("#uw_code, #form_edit").val(response.uw_code);

                $("#min_rate_margin, #form_edit").val(response.rate_margin1);
                $("#max_rate_margin, #form_edit").val(response.rate_margin2);
                $("#bagihasil_nasabah, #form_edit").val(response.bagihasil_nasabah);
                $("#bagihasil_perusahaan, #form_edit").val(response.bagihasil_perusahaan);

            switch(response.jenis_keuntungan){
              case"0": //tidak ada keuntungan
                $("#min_rate_margin, #form_edit").closest('.control-group').hide().val(0);
                $("#max_rate_margin, #form_edit").closest('.control-group').hide().val(0);
                $("#bagihasil_nasabah, #form_edit").closest('.control-group').hide().val(0);
                $("#bagihasil_perusahaan, #form_edit").closest('.control-group').hide().val(0);
              break;
              case"1": //margin
                $("#min_rate_margin, #form_edit").closest('.control-group').show();
                $("#max_rate_margin, #form_edit").closest('.control-group').show();
                $("#bagihasil_nasabah, #form_edit").closest('.control-group').hide().val(0);
                $("#bagihasil_perusahaan, #form_edit").closest('.control-group').hide().val(0);
              break;
              case"2": //bagihasil
                $("#min_rate_margin, #form_edit").closest('.control-group').hide().val(0);
                $("#max_rate_margin, #form_edit").closest('.control-group').hide().val(0);
                $("#bagihasil_nasabah, #form_edit").closest('.control-group').show();
                $("#bagihasil_perusahaan, #form_edit").closest('.control-group').show();
              break;
            }
            
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
              product_code: {
                  required: true
              },
              product_name: {
                  required: true
              },
              nick_name: {
                  required: true
              },
              jenis_pembiayaan: {
                  required: true
              },
              flag_asuransi: {
                  required: true
              },
              // insurance_product_code: {
              //     required: true
              // },
              type_bya_adm: {
                  required: true
              },
              akad_code: {
                  required: true
              },
              // rate_bya_adm: {
              //     required: true
              // },
              // nominal_bya_adm: {
              //     required: true
              // },
              // flag_manfaat_asuransi: {
              //     required: true
              // },
              product_financing_gl_code: {
                  required: true
              },
              min_rate_margin: {
                  required: true
              },
              max_rate_margin: {
                  required: true
              },
              periode_angsuran: {
                  required: true
              },
              flag_scoring: {
                  required: true
              },
              rate_simpanan_wajib_pinjam: {
                  required: true,
              },
              bagihasil_nasabah: {
                  required: true
              },
              bagihasil_perusahaan: {
                  required: true,
                  bagihasil_validate_edit: true
              },
              jasa_layanan: {
                  required: true,
                  number: true
              },
              uw_code: {required:true}
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
              url: site_url+"product/edit_produk_financing",
              dataType: "json",
              data: form2.serialize(),
              success: function(response){
                if(response.success==true){
                  success2.show();
                  error2.hide();
                  form2.children('div').removeClass('success');
                  $("#produk_pembiayaan_filter input").val('');
                  dTreload();
                  $("#cancel","#form_edit").trigger('click')
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



      // event button DETAIL ketika di tekan
      $("a#link-detail").live('click',function(){
        var product_financing_id = $(this).attr('product_financing_id');
        
        $.ajax({
          type: "POST",
          dataType: "json",
          data: {product_financing_id:product_financing_id},
          url: site_url+"product/get_financing_by_product_id",
          success: function(response)
          {
            var a = response.jenis_pembiayaan;   
            if(a==0){
              jenis_pembiayaan = "Individu";
            } else {
              jenis_pembiayaan = "Kelompok";
            }

            var b = response.type_bya_adm;   
            if(b==0){
              type_bya_adm = "Tidak Ada Biaya";
            }else if (b==1){
              type_bya_adm = "Rate % Dari Plafon";
            }else if (b==2){
              type_bya_adm = "Nominal";
            }else if (b==3){
              type_bya_adm = "Berdasarkan Besar Plafon";
            }

            var c = response.periode_angsuran;
            switch(c){
              case "0":
              var periode_angsuran="Harian";
              break;
              case "1":
              var periode_angsuran="Mingguan";
              break;
              case "2":
              var periode_angsuran="Bulanan";
              break;
              case "3":
              var periode_angsuran="Jatuh Tempo";
              break;
              default:
              var periode_angsuran="-";
              break;
            }

            var d = response.flag_scoring;
            if(d==1){
              flag_scoring="Ya";
            }else{
              flag_scoring="Tidak";
            }
            manfaat_asuransi='-';
            switch(response.flag_manfaat_asuransi){
              case"0":
              manfaat_asuransi='Pokok';
              break;
              case"1":
              manfaat_asuransi='Pokok + Margin';
              break;
            }
            jenis_margin='-';
            switch(response.jenis_margin){
              case"1":
              jenis_margin='Flat';
              break;
              case"2":
              jenis_margin='Efektif';
              break;
              case"3":
              jenis_margin='Anuitas';
              break;
            }

            var html = ' \
                        <table class="table"> \
                        <tr>  \
                          <td width="40%">Kode Produk</td> \
                          <td style="width:5px;">:</td> \
                          <td style="text-align:left;">'+response.product_code+'</td> \
                        </tr> \
                        <tr>  \
                          <td width="40%">Nama Produk</td> \
                          <td style="width:5px;">:</td> \
                          <td style="text-align:left;">'+response.product_name+'</td> \
                        </tr> \
                        <tr>  \
                          <td width="40%">Nick Name</td> \
                          <td style="width:5px;">:</td> \
                          <td style="text-align:left;">'+response.nick_name+'</td> \
                        </tr> \
                        <tr>  \
                          <td width="40%">Jenis Pembiayaan</td> \
                          <td style="width:5px;">:</td> \
                          <td style="text-align:left;">'+jenis_pembiayaan+'</td> \
                        </tr> \
                        <tr>  \
                          <td width="40%">Flag Asuransi</td> \
                          <td style="width:5px;">:</td> \
                          <td style="text-align:left;">'+((response.flag_asuransi=="0")?"No":"Yes")+'</td> \
                        </tr> \
                        <tr>  \
                          <td width="40%">Produk Asuransi</td> \
                          <td style="width:5px;">:</td> \
                          <td style="text-align:left;">'+((response.insurance_name==null)?"-":response.insurance_name)+'</td> \
                        </tr> \
                        <tr>  \
                          <td width="40%">Type Biaya Admin</td> \
                          <td style="width:5px;">:</td> \
                          <td style="text-align:left;">'+type_bya_adm+'</td> \
                        </tr> \
                        <tr>  \
                          <td width="40%">Rate Biaya Admin</td> \
                          <td style="width:5px;">:</td> \
                          <td style="text-align:left;">'+response.rate_bya_adm+'</td> \
                        </tr> \
                        <tr>  \
                          <td width="40%">Nominal Biaya Admin</td> \
                          <td style="width:5px;">:</td> \
                          <td style="text-align:left;">'+((response.nominal_bya_adm>0)?'Rp. '+number_format(response.nominal_bya_adm,2,',','.'):"-")+'</td> \
                        </tr> \
                        <tr>  \
                          <td width="40%">Manfaat Asuransi</td> \
                          <td style="width:5px;">:</td> \
                          <td style="text-align:left;">'+manfaat_asuransi+'</td> \
                        </tr> \
                        <tr>  \
                          <td width="40%">GL Code</td> \
                          <td style="width:5px;">:</td> \
                          <td style="text-align:left;">'+response.gl_description+'</td> \
                        </tr> \
                        <tr>  \
                          <td width="40%">Min. Rate Margin</td> \
                          <td style="width:5px;">:</td> \
                          <td style="text-align:left;">'+response.rate_margin1+'%</td> \
                        </tr> \
                        <tr>  \
                          <td width="40%">Max. Rate Margin</td> \
                          <td style="width:5px;">:</td> \
                          <td style="text-align:left;">'+response.rate_margin2+'%</td> \
                        </tr> \
                        <tr>  \
                          <td width="40%">Bagi hasil Nisbah</td> \
                          <td style="width:5px;">:</td> \
                          <td style="text-align:left;">'+response.bagihasil_nasabah+'%</td> \
                        </tr> \
                        <tr>  \
                          <td width="40%">Bagi Hasil Perusahaan</td> \
                          <td style="width:5px;">:</td> \
                          <td style="text-align:left;">'+response.bagihasil_perusahaan+'%</td> \
                        </tr> \
                        <tr>  \
                          <td width="40%">Periode Angsuran</td> \
                          <td style="width:5px;">:</td> \
                          <td style="text-align:left;">'+periode_angsuran+'</td> \
                        </tr> \
                        <tr>  \
                          <td width="40%">Menggunakan Scoring?</td> \
                          <td style="width:5px;">:</td> \
                          <td style="text-align:left;">'+flag_scoring+'</td> \
                        </tr> \
                        <tr>  \
                          <td width="40%">Rate Simp. Wajib Pinjam</td> \
                          <td style="width:5px;">:</td> \
                          <td style="text-align:left;">'+response.rate_simpanan_wajib_pinjam+'%</td> \
                        </tr> \
                        <tr>  \
                          <td width="40%">Rate Biaya Jasa Layanan</td> \
                          <td style="width:5px;">:</td> \
                          <td style="text-align:left;">'+response.jasa_layanan+'%</td> \
                        </tr> \
                        <tr>  \
                          <td width="40%">Jenis Margin</td> \
                          <td style="width:5px;">:</td> \
                          <td style="text-align:left;">'+jenis_margin+'</td> \
                        </tr> \
                        </table> ';
            $("#gl_detail").html(html);     
          }
        });

      });



      // fungsi untuk delete records
      $("#btn_delete").click(function(){

        var product_financing_id = [];
        var $i = 0;
        $("input#checkbox:checked").each(function(){

          product_financing_id[$i] = $(this).val();

          $i++;

        });

        if(product_financing_id.length==0){
          alert("Please select some row to delete !");
        }else{
          var conf = confirm('Are you sure to delete this rows ?');
          if(conf){
            $.ajax({
              type: "POST",
              url: site_url+"product/delete_produk_pembiayaan",
              dataType: "json",
              data: {product_financing_id:product_financing_id},
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
          "sAjaxSource": site_url+"product/datatable_produk_pembiayaan",
          "aoColumns": [
            { "bSortable": false, "bSearchable": false }
            ,null
            ,null
            ,null
            ,null
            ,{ "bSortable": false, "bSearchable": false }
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

      $("#type_bya_adm","#form_edit").change(function(){
        type_bya_adm = $(this).val();
        if(type_bya_adm=='1')
        {
          $("#rate_bya_adm","#form_edit").closest('.controls').show();
          $("#rate_bya_adm","#form_edit").closest('.control-group').show();
          $("#rate_bya_adm","#form_edit").val('');
          $("#nominal_bya_adm","#form_edit").closest('.control-group').hide();
          $("#nominal_bya_adm","#form_edit").val('');
        }
        else if(type_bya_adm=='2')
        {
          $("#rate_bya_adm","#form_edit").closest('.control-group').hide();
          $("#rate_bya_adm","#form_edit").val('');
          $("#nominal_bya_adm","#form_edit").closest('.control-group').show();
          $("#nominal_bya_adm","#form_edit").val('');
        }
        else
        {
          $("#rate_bya_adm","#form_edit").closest('.control-group').hide();
          $("#rate_bya_adm","#form_edit").val('');
          $("#nominal_bya_adm","#form_edit").closest('.control-group').hide();
          $("#nominal_bya_adm","#form_edit").val('');
        }
      });

      $("#flag_asuransi1","#form_add").change(function(){
        var flag_asuransi1 = $(this).val();
        if(flag_asuransi1=='1'){ //yes
          $("#insurance_product_code","#form_add").attr('disabled',false);
          $("#insurance_product_code","#form_add").css('backgroundColor','#fff');
          $("#insurance_product_code_no","#form_add").val('0'); //hidden input

          $("#flag_manfaat_asuransi","#form_add").attr('disabled',false);
          $("#flag_manfaat_asuransi","#form_add").css('backgroundColor','#fff');
        }else{//no
          $("#insurance_product_code","#form_add").val('');
          $("#insurance_product_code","#form_add").attr('disabled',true);
          $("#insurance_product_code","#form_add").css('backgroundColor','#eee');
          $("#insurance_product_code_no","#form_add").val('0'); //hidden input

          $("#flag_manfaat_asuransi","#form_add").val('');
          $("#flag_manfaat_asuransi","#form_add").attr('disabled',true);
          $("#flag_manfaat_asuransi","#form_add").css('backgroundColor','#eee');
        }
      })

      $("#flag_asuransi","#form_edit").change(function(){
        var flag_asuransi = $(this).val();
        if(flag_asuransi=='1'){ //yes
          $("#insurance_product_code","#form_edit").attr('disabled',false);
          $("#insurance_product_code","#form_edit").css('backgroundColor','#fff');
          $("#insurance_product_code_no","#form_edit").val('0');

          $("#flag_manfaat_asuransi","#form_edit").attr('disabled',false);
          $("#flag_manfaat_asuransi","#form_edit").css('backgroundColor','#fff');
        }else{//no
          $("#insurance_product_code","#form_edit").val('');
          $("#insurance_product_code","#form_edit").attr('disabled',true);
          $("#insurance_product_code","#form_edit").css('backgroundColor','#eee');
          $("#insurance_product_code_no","#form_edit").val('0');
          
          $("#flag_manfaat_asuransi","#form_edit").val('');
          $("#flag_manfaat_asuransi","#form_edit").attr('disabled',true);
          $("#flag_manfaat_asuransi","#form_edit").css('backgroundColor','#eee');
        }
      })

});
</script>
<!-- END JAVASCRIPTS -->

