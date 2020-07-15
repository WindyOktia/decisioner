<table class="table" id="resSaham">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kode Akses</th>
      <th scope="col">Terjawab</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php $i=1; foreach($bank as $bk):?>
    <tr>
      <th scope="row"><?=$i++?></th>
      <td><?= $bk['access_code']?></td>
      <td><?= $bk['COUNT(eks_bank.id_user)']?></td>
      <td><a href="<?= base_url('admin/detailBank')?>/<?=$bk['id_user']?>" class="btn btn-sm btn-info">detail</a></td>
    </tr>
<?php endforeach ?>
   
  </tbody>
</table>
