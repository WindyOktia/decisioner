
    <div class="card card-body">
        <legend>Trigger Buka Form</legend>
        <p>Pengaturan minimum jumlah pengguna untuk membuka form</p>
        <p>Konfigurasi Saat Ini: </p>
        <ul>
            <?php foreach($config as $con):?>
                <li><?= $con['config']?> &nbsp : <?= $con['val']?>
                    / <span><a href="#" type="button" data-toggle="modal" data-target="#modalEdit<?= $con['id_config']?>">Ubah</a></span>
                </li>
            <?php endforeach?>
        </ul>
    </div>

<?php foreach($config as $mod):?>
<div class="modal fade" id="modalEdit<?= $mod['id_config']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form action="<?= base_url('admin/updateConfig')?>" method="post">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ubah Konfigurasi</h5>
      </div>
      <div class="modal-body">
        <label for=""><?= $mod['config']?></label>
        <input type="hidden" name="id" id="" value="<?= $mod['id_config']?>">
        <input type="number" name="val" class="form-control" value="<?= $mod['val']?>">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-clear" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-info">Ubah</button>
      </div>
    </form>
    </div>
  </div>
</div>
<?php endforeach?>

<legend><div class="text-danger">Reset Area (for testing only)</div></legend>

<a href="<?=base_url('admin/resetTable')?>" class="btn btn-danger btn-sm">Reset Data</a>