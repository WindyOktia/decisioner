<a href="<?= base_url('admin')?>"> <h5 class="" style="color:black"><i class="	fa fa-arrow-circle-left mr-2"></i>Back</h5></a>

<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="panel-title"><i class="fa fa-plus-circle mr-2" style="color:#4CAF50"></i> Tambah Simulasi</h5>
        
    </div>

    <div class="card-body">
        <!-- <p>Some Text</p><br> -->
        <form action="#" method="post" enctype="multipart/form-data">
        <fieldset class="mb-3">
            <legend >INFORMASI UMUM</legend>
            <div class="form-group row">
                <label class="col-form-label col-lg-2">Judul</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" placeholder="Title" name="judul" required autofocus>
                </div>
            </div>
            
            <div class="form-group row">
                <label class="col-form-label col-lg-2 ">Deskripsi</label>
                <div class="col-lg-10">
                    <textarea rows="3" cols="3" class="form-control"
                        placeholder="Description" name="deskripsi" required></textarea>
                </div>
            </div>

            <legend class="border-bottom border-warning">EKSPERIMEN PERBANKAN</legend>

            <div class="input_fields_wrap">
                <div class="row">
                    <div class="col-md">
                        <div class="form-group">
                            <label for="">Suku Bunga Simpanan (%)</label>
                            <input type="number" class="form-control">
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-group">
                            <label for="">Suku Bunga LPS (%)</label>
                            <input type="number" class="form-control">
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-group">
                            <label for="">Rasio KPPM (%)</label>
                            <input type="number" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="">Aksi</label>
                            <a href="" class="tbhBank btn btn-success btn-block">Add More</a>
                        </div>
                    </div>
                </div>
            </div>

            <legend class="border-bottom border-warning">EKSPERIMEN SAHAM</legend>

            <div class="wrap_saham">
                <div class="row">
                    <div class="col-md">
                        <div class="form-group">
                            <label for="">Suku Bunga Simpanan (%)</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-group">
                            <label for="">Prospek (-)</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-group">
                            <label for="">Prospek (+)</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="">Aksi</label>
                            <a href="" class="btn btn-success btn-block tbhSaham">Add More</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="form-group row">
                <label class="col-form-label col-lg-3">Suku Bunga Simpanan (%)</label>
                <div class="col-lg-5">
                    <input type="number" class="form-control" placeholder="Suku Bunga Simpanan" name="" required autofocus>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-form-label col-lg-3">Suku Bunga LPS (%)</label>
                <div class="col-lg-5">
                    <input type="number" class="form-control" placeholder="Suku Bunga LPS" name="" required autofocus>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-lg-3">Rasio KPMM (%)</label>
                <div class="col-lg-5">
                    <input type="number" class="form-control" placeholder="Rasio KPMM" name="" required autofocus>
                </div>
            </div> -->

            <!-- <div class="form-group row">
                <label class="col-form-label col-lg-2">Parameter</label>
                <div class="col-lg-10">
                    <div class="input_fields_wrap">
                        <div class="row">
                        <div class="col-10 mx-auto my-auto">
                            <input type="text" placeholder="Daftar Parameter" class="form-control" name="mytext[]" required>
                        </div>
                        <div class="col-2 mx-auto my-auto">
                            <a href="" class="add_field_button"><i class="fa fa-plus-circle text-success" style="font-size:24px"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div> -->
            
            <!-- <div class="form-group row">
                <label class="col-form-label col-lg-2">Status</label>
                <div class="form-check form-check-inline ml-3">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="status" value="available" checked required>
                        Available
                    </label>
                </div>

                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="status" value="sold">
                        Sold
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="status" value="works">
                        Works
                    </label>
                </div>
            </div> -->
            </fieldset>

            <div class="text-right">
                <!-- <button type="submit" class="btn btn-primary">Submit </button> -->
                <a href="<?= base_url('admin')?>" class="btn btn-primary">Submit</a>
            </div>
            
            
        </form>
    </div>
</div>

