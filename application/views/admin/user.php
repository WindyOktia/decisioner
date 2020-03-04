<h4>Tambah User</h4>
<form action="<?= base_url('admin/addUser')?>" method="post">
    <div class="row">
        <div class="col-2">
            <select name="sesi" id="" class="form-control">
                <option value="0" disabled selected>Pilih Sesi</option>
                <option value="1">Sesi 1</option>
                <option value="2">Sesi 2</option>
                <option value="3">Sesi 3</option>
                <option value="4">Sesi 4</option>
                <option value="5">Sesi 5</option>
                <option value="6">Sesi 6</option>
                <option value="7">Sesi 7</option>
                <option value="8">Sesi 8</option>
            </select>
        </div>
        <div class="col-2">
            <select name="tipe" id="" class="form-control">
                <option value="0" disabled selected>Tipe Responden</option>
                <option value="2">Responden Saham</option>
                <option value="3">Responden Bank</option>
            </select>
        </div>
        <div class="col-2">
            <input type="number" class="form-control" name="jumlah" placeholder="jumlah" required>
        </div>
        <div class="col">
            <button class="btn btn-info mb-3">Tambah User</button>
        </div>
    </div>
</form>




<div class="card card-body">
    <h4>Daftar User</h4>
    <form action="" method="get" id="bigger-search">
        <div class="row">
            <div class="col-2">
                <select name="filter_sesi" id="" class="form-control">
                    <option value="" >Semua Sesi</option>
                    <option value="1" <?php if($this->input->get('filter_sesi')=='1'){echo 'selected';}?>>Sesi 1</option>
                    <option value="2" <?php if($this->input->get('filter_sesi')=='2'){echo 'selected';}?>>Sesi 2</option>
                    <option value="3" <?php if($this->input->get('filter_sesi')=='3'){echo 'selected';}?>>Sesi 3</option>
                    <option value="4" <?php if($this->input->get('filter_sesi')=='4'){echo 'selected';}?>>Sesi 4</option>
                    <option value="5" <?php if($this->input->get('filter_sesi')=='5'){echo 'selected';}?>>Sesi 5</option>
                    <option value="6" <?php if($this->input->get('filter_sesi')=='6'){echo 'selected';}?>>Sesi 6</option>
                    <option value="7" <?php if($this->input->get('filter_sesi')=='7'){echo 'selected';}?>>Sesi 7</option>
                    <option value="8" <?php if($this->input->get('filter_sesi')=='8'){echo 'selected';}?>>Sesi 8</option>
                </select>
            </div>
            <div class="col-2">
                <select name="filter_status" id="" class="form-control">
                    <option value="" selected>Semua Status</option>
                    <option value="1">Active Account</option>
                    <option value="0">Inactive Account</option>
                </select>
            </div>
            <div class="col-2">
                <input type="text" name="filter_code" class="form-control align-center" placeholder="Access Code (optional)">
            </div>
            <div class="col-2">
                <button type="button" id="srch" class="btn btn-info mb-3 ">Cari</button>
            </div>
        </div>
    </form>
    <table class="table table-responsive-sm">
        <thead>
            <tr>
                <th>No</th>
                <th>Session</th>
                <th>Role</th>
                <th>Access Code</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php if(isset($user)){?>
            <?php $i=1; foreach($user as $us):?>
            <tr>
                <td><?=$i++?></td>
                <td><?=$us['session']?></td>
                <td>
                    <?php if($us['role']=='1'){echo'Admin';}?>
                    <?php if($us['role']=='2'){echo'Responden Saham';}?>
                    <?php if($us['role']=='3'){echo'Responden Bank';}?>
                </td>
                <td><?=$us['access_code']?></td>
                <td>
                    <?php if($us['status']=='1'){echo'Active';}?>
                    <?php if($us['status']=='0'){echo'Inactive';}?>
                </td>
                <td>
                <?php if($us['role']!=1){?>
                    <!-- <a href="<?=base_url('admin/editUser')?>/<?=$us['id_user']?>" class="btn btn-sm btn-info">Edit</a> -->
                    <a href="<?=base_url('admin/deleteUser')?>/<?=$us['id_user']?>" class="btn btn-sm btn-danger">Delete</a>
                <?php }?>
                </td>
            </tr>
            <?php endforeach ?>
        <?php } ?>
        </tbody>
    </table>
</div>

