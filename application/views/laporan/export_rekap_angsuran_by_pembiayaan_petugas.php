<style type="text/css">
<!--
#hor-minimalist-b
{
  
  font-size: 12px;
  background: #fff;
  margin: 10px;
  margin-top: 10px;
  margin-left: 5px;
  border-collapse: collapse;
  text-align: left;
}
#hor-minimalist-b th
{
  font-size: 15px;
  font-weight: normal;
  color: #000;
  padding: 10px 8px;
  border-top: 2px solid #6678b1;
  border-bottom: 2px solid #6678b1;
}
#hor-minimalist-b .no
{
  border: 1px solid #262626;
  color: #000;
  width: 5%;
  font-weight: bold;
  text-align: center;
}
#hor-minimalist-b .anggota
{
  border: 1px solid #262626;
  color: #000;
  width: 20%;
  padding: 10px;
  font-weight: bold;
  text-align: center;
}
#hor-minimalist-b .jumlah
{
  border: 1px solid #262626;
  color: #000;
  width: 10%;
  padding: 10px;
  font-weight: bold;
  text-align: center;
}
#hor-minimalist-b .pokok
{
  border: 1px solid #262626;
  color: #000;
  width: 20%;
  padding: 10px;
  font-weight: bold;
  text-align: center;
}
#hor-minimalist-b .nominal
{
  border-bottom: 1px solid #262626;
  border-left: 1px solid #262626;
  border-top: 1px solid #262626;
  border-right: 1px solid #262626;
  color: #000;
  width: 20%;
  text-align: right;
  padding: 6px 8px;
}

/*value*/
.value
{
  font-size: 11px;
}
#hor-minimalist-b .val_no
{
  border-bottom: 1px solid #262626;
  border-right: 1px solid #262626;
  border-left: 1px solid #262626;
  border-top: 1px solid #262626;
  color: #000;
  text-align: center;
  padding: 6px 8px;
}
#hor-minimalist-b .val_anggota
{
  border-bottom: 1px solid #262626;
  border-right: 1px solid #262626;
  border-left: 1px solid #262626;
  border-top: 1px solid #262626;
  color: #000;
  text-align: center;
  padding: 6px 8px;
}
#hor-minimalist-b .val_jumlah
{
  border: 1px solid #262626;
  color: #000;
  text-align: center;
  padding: 6px 8px;
}
#hor-minimalist-b .val_pokok
{
  border-bottom: 1px solid #262626;
  border-right: 1px solid #262626;
  border-top: 1px solid #262626;
  color: #000;
  padding: 6px 20px;
  text-align: right;
}
#hor-minimalist-b .val_kosong
{
  border-bottom: 1px solid #fff;
  border-right: 1px solid #fff;
  border-top: 1px solid #fff;
  color: #000;
  padding: 6px 8px;
  text-align: center;
}
#hor-minimalist-b .val_kosong2
{
  border-bottom: 1px solid #fff;
  border-right: 1px solid #262626;
  border-top: 1px solid #fff;
  color: #000;
  padding: 6px 8px;
  text-align: center;
}
-->
</style>
<page>
      <div style="width:100%;">
        <div style="text-align:center;padding-top:10px;font-family:Arial;font-size:20px;">
        <?php echo strtoupper($this->session->userdata('institution_name')) ;?>
        </div>
        <div style="text-align:center;padding-top:10px;font-family:Arial;font-size:16px;">
        <?php echo $cabang;?>
        </div>
        <div style="text-align:center;padding-top:10px;font-family:Arial;font-size:16px;">
        Rekap Pembayaran Angsuran Berdasarkan Petugas
        </div>
        <div style="text-align:left;padding-top:20px;font-family:Arial;font-size:12px;">
        Tanggal : <?php echo $tanggal1_;?> s/d <?php echo $tanggal2_;?>
        </div>
        <hr>
      </div>
<table id="hor-minimalist-b" align="center">
    <tbody>
      <tr>
            <td class="no" style="width:30px;">NO</td>
            <td class="anggota" style="width:150px;">Keterangan</td>
            <td class="jumlah" style="width:30px;">Jumlah</td>
            <td class="pokok" style="width:100px;">Pokok</td>
            <td class="pokok" style="width:100px;">Margin</td>
            <td class="pokok" style="width:120px;">Total</td>
      </tr>
      <?php
      $no = 1; 
      $jumlah = 0;
      $pokokA = 0;
      $marginA = 0;
      $totalA = 0;
        foreach ($result as $data):     
        $jumlah+=$data['jumlah'];     
        $pokokA+=$data['pokok'];     
        $marginA+=$data['margin'];     
        $totalA+=$data['total'];        
      ?>
      <tr class="value">
            <td class="val_anggota" style="padding:2px;padding-left:10px;" align="left"><?php echo $no++;?></td>
            <td class="val_anggota" style="padding:2px;padding-left:10px;" align="left"><?php echo $data['fa_name'];?></td>
            <td class="val_jumlah" style="padding:2px;"><?php echo $data['jumlah'];?></td>
            <td class="val_pokok" style="padding:2px;adding-right:10px">Rp. <?php echo number_format($data['pokok'],0,',','.');?></td>
            <td class="val_pokok" style="padding:2px;adding-right:10px">Rp. <?php echo number_format($data['margin'],0,',','.');?></td>
            <td class="val_pokok" style="padding:2px;adding-right:10px">Rp. <?php echo number_format($data['total'],0,',','.');?></td>
      </tr>
    <?php 
        endforeach;
    ?>      
      <tr class="value">
            <td class="val_kosong" style="padding:2px;">&nbsp;</td>
            <td class="val_kosong2" style="padding:2px;">&nbsp;</td>
            <td class="val_jumlah" style="padding:2px;"><?php echo $jumlah;?></td>
            <td class="val_pokok" style="padding:2px;adding-right:10px">Rp. <?php echo number_format($pokokA,0,',','.');?></td>
            <td class="val_pokok" style="padding:2px;adding-right:10px">Rp. <?php echo number_format($marginA,0,',','.');?></td>
            <td class="val_pokok" style="padding:2px;adding-right:10px">Rp. <?php echo number_format($totalA,0,',','.');?></td>
      </tr>
    </tbody>
</table>
</page>