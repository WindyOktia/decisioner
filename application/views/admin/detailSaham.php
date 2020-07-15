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
  <?php $i=1; foreach($saham as $sh):?>
    <tr>
        <td><?=$i++?></td>
        <td>
            <?php 
                if($sh['tipe']==1){
                    echo '1 ( tanpa prospek )';
                }elseif($sh['tipe']==2){
                    echo '2 ( dengan prospek )';
                }elseif($sh['tipe']==3){
                    echo '3 ( realtime bank )' ;
                }else{
                    echo '4 ( realtime bank + ref )';
                }
            ?>
        </td>
        <td>
            <?php 
                if($sh['indeks']==1){
                    echo 'Suku Bunga Simpanan';
                }elseif($sh['indeks']==2){
                    echo 'Suku Bunga LPS';
                }else{
                    echo 'Rasio KPMM';
                }
            ?>
        </td>
        <td><?= $sh['persentase']?></td>
        <td>
            <?php 
                if($sh['jawaban']==1){
                    echo 'Jual Saham';
                }elseif($sh['jawaban']==0){
                    echo 'Tahan Saham';
                }else{
                    echo '<b><span class="text-danger">Tidak Terjawab</span></b>';
                }
            ?>
            
        </td>
    </tr>
  <?php endforeach?>

  </tbody>
</table>
