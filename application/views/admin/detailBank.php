<h4>Detail keputusan responden <b><?= json_encode($user[0]['access_code'])?></b></h4>

<table class="table" id="resSaham">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Pengujian</th>
      <th scope="col">Indeks</th>
      <th scope="col">Persentase ( % )</th>
      <th scope="col">Jawaban</th>
    </tr>
  </thead>
  <tbody>
  <?php $i=1; foreach($bank as $bk):?>
    <tr>
        <td><?=$i++?></td>
        <td>
            <?php 
                if($bk['tipe']==1){
                    echo '1 ( tanpa referensi )';
                }else{
                    echo '4 ( dengan referensi )';
                }
            ?>
        </td>
        <td>
            <?php 
                if($bk['indeks']==1){
                    echo 'Suku Bunga Simpanan';
                }elseif($bk['indeks']==2){
                    echo 'Suku Bunga LPS';
                }else{
                    echo 'Rasio KPMM';
                }
            ?>
        </td>
        <td><?= $bk['persentase']?></td>
        <td>
            <?php 
                if($bk['jawaban']==1){
                    echo 'Tarik Tabungan';
                }elseif($bk['jawaban']==0){
                    echo 'Tahan Tabungan';
                }else{
                    echo '<b><span class="text-danger">Tidak Terjawab</span></b>';
                }
            ?>
            
        </td>
    </tr>
  <?php endforeach?>

  </tbody>
</table>
