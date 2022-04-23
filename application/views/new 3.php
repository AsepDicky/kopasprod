  <div class="span3 responsive" data-tablet="span6" data-desktop="span3">
                     <div class="dashboard-stat red">
                        <div class="visual">
                           <i class="icon-warning-sign"></i>
                        </div>
                        <div class="details"> 
                           <div class="number"><?php echo $terlambat;?></div>
                           <div class="desc">Pengajuan > 2 Hari</div>
                        </div>
                        <a class="more" style="text-align:right;" data-toggle="modal" href="#dialog_more_2hari" id="browse_more_2hari">
                           <?php 
                              $jml = count($proses_terlambat);
                              $loop = ($jml>3) ? 2 : $jml ;
                              for ($i=0; $i<$loop; $i++) {

                                 if(strlen($proses_terlambat[$i]['kopegtel_code'])==0){
                                    $nama_kopegtel = 'Koptel';
                                 }else{
                                    $nama_kopegtel = $proses_terlambat[$i]['nama_kopegtel'];
                                 }
                                 echo $nama_kopegtel.' : '.$proses_terlambat[$i]['count'];
                                 if($i!=2) echo '<br>';
                              }
                              if($jml>3) echo 'Dan '.($jml-3).' Kopegtel Lainnya';
                           ?>
                        </a>                 
                     </div>
                  </div>