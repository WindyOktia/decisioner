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
  <?php $i=1; foreach($saham as $sh):?>
    <tr>
      <th scope="row"><?=$i++?></th>
      <td><?= $sh['access_code']?></td>
      <td><?= $sh['COUNT(eks_saham.id_user)']?></td>
      <td><a href="<?= base_url('admin/detailSaham')?>/<?=$sh['id_user']?>" class="btn btn-sm btn-info">detail</a></td>
    </tr>
<?php endforeach ?>
   
  </tbody>
</table>
