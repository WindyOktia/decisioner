<button class="btn btn-primary mb-1 btn-sm" type="button" data-toggle="collapse" data-target="#cs1" aria-expanded="false" aria-controls="cs1">
    Informasi
</button>
<button class="btn btn-warning mb-1 btn-sm" type="button" data-toggle="collapse" data-target="#cs2" aria-expanded="false" aria-controls="cs2">
    Petunjuk
</button>
<div class="collapse" id="cs1">
  <div class="card card-body">
    <ol>
        <li>Anda adalah Nasabah Bank Y,  yang memiliki jumlah simpanan sebesar <b>60 Juta rupiah</b>. Simpanan Anda memberikan tambahan pendapatan sebesar suku bunga berlaku</li>
        <li>Setiap kenaikan suku bunga yang <b>besar presentasenya</b>, menunjukkan Bank dalam keadaan <b>kesulitan likuiditas</b></li>
    </ol>
  </div>
</div>
<div class="collapse" id="cs2">
  <div class="card card-body">
    <ol>
        <li>Untuk setiap perubahan suku bunga berikut anda diminta untuk mengambil keputusan <b>"Menarik Tabungan"</b> atau <b>"Tidak Menarik Tabungan"</li>
    </ol>
  </div>
</div>

<div class="card mt-2" id="eks_1">
    <div class="card-body">
        <table class="table table-responsive-sm">
            <thead>
                <tr>
                    <th class="text-center"><i class="fa fa-info-circle mr-2" style="color:#F44336"></i>Suku Bunga Simpanan (%)</th>
                    <th >Jawaban</th>
                    <th>Keputusan Anda</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th class="text-center text-warning"><h1><b>30</b> %</h1></th>
                    <th id="jwb_1_1">Belum Menjawab</th>
                    <th>
                        <div class="row">
                            <div class="col-md">
                                <button class="btn btn-success btn-block tt_1_1">Tarik Tabungan</button>
                            </div>
                            <div class="col-md">
                                <button class="btn btn-danger btn-block tmt_1_1">Tidak Menarik Tabungan</button>
                            </div>
                        </div>
                    </th>
                </tr>
            </tbody>
        </table>
        <button type="button" class="btn btn-primary float-right mt-3 submit" data-toggle="modal" data-target="#exampleModal" style="display:none"><i class="fa fa-location-arrow mr-2"></i> Kirim Jawaban</button>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h5 class="modal-title" id="exampleModalLabel">Informasi</h5> -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h4>Pengujian Selanjutnya adalah mengenai <b>Suku Bunga LPS</b></h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="<?= base_url('responden/a14')?>"class="btn btn-primary">Lanjutkan</a>
      </div>
    </div>
  </div>
</div>



<script type="text/javascript">
    $('.tt_1_1').click(function() {
        $("#jwb_1_1").html('<b> Menarik Tabungan </b>');
        $(".submit").show();
        $(".tt_1_1").prop('disabled', true);
        $(".tmt_1_1").prop('disabled', false);
    });

    $('.tmt_1_1').click(function() {
        $("#jwb_1_1").html('<b> Tidak Menarik Tabungan </b>');
        $(".submit").show();
        $(".tt_1_1").prop('disabled', false);
        $(".tmt_1_1").prop('disabled', true);
    });
</script>