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
  <h3><b>Pengujian Suku Bunga Simpanan</b></h3>
      <legend>Instruksi</legend>
      <h4>Setiap kenaikan Suku Bunga Simpanan, menandakan Bank dalam kesulitan likuiditas</h4>
      <legend>Petunjuk</legend>
      <h4>Untuk setiap kenaikan Suku Bunga Simpanan, anda diminta untuk mengambil keputusan dengan menekan tombol:
        <ul>
            <li>
                <a href="#" class="btn btn-success btn-sm">Tarik Tabungan</a> untuk
                <b>Menarik Tabungan</b> , atau
            </li>
            <li>
                <a href="#" class="btn btn-sm btn-danger mt-2" >Tidak Menarik Tabungan</a> untuk
                <b>Tidak Menarik Tabungan</b>
            </li>
        </ul>
      </h4>
  </div>
</div>

<div class="alert alert-danger mt-2" id="status">Tunggu sampai kelompok saham selesai mengisi</div>

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
                    <th class="text-center text-warning"><h1><b>6</b> %</h1></th>
                    <th id="jwb_1_1">Belum Menjawab</th>
                    <th>
                        <div class="row">
                            <div class="col-md">
                                <button class="btn btn-success btn-block tt_1_1 to_open" disabled>Tarik Tabungan</button>
                            </div>
                            <div class="col-md">
                                <button class="btn btn-danger btn-block tmt_1_1 to_open" disabled>Tidak Menarik Tabungan</button>
                            </div>
                        </div>
                    </th>
                </tr>
            </tbody>
        </table>
        <!-- <button type="submit" class="btn btn-primary float-right mt-3 submit" style="display:none"><i class="fa fa-location-arrow mr-2"></i> Kirim Jawaban</button> -->
        <a href="<?= base_url('responden/a12')?>" onclick="return confirm('Yakin? Jawaban tidak dapat diubah setelah dikirim!');" class="btn btn-primary float-right mt-3 submit" style="display:none"><i class="fa fa-location-arrow mr-2"></i> Kirim Jawaban</a>
    </div>
</div>

<div class="modal fade" id="modalShow" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
      <h3><b>Pengujian Suku Bunga Simpanan</b></h3>
      <legend>Instruksi</legend>
      <h4>Setiap kenaikan Suku Bunga Simpanan, menandakan Bank dalam kesulitan likuiditas</h4>
      <legend>Petunjuk</legend>
      <h4>Untuk setiap kenaikan Suku Bunga Simpanan, anda diminta untuk mengambil keputusan dengan menekan tombol:
        <ul>
            <li>
                <a href="#" class="btn btn-success btn-sm">Tarik Tabungan</a> untuk
                <b>Menarik Tabungan</b> , atau
            </li>
            <li>
                <a href="#" class="btn btn-sm btn-danger mt-2" >Tidak Menarik Tabungan</a> untuk
                <b>Tidak Menarik Tabungan</b>
            </li>
        </ul>
      </h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary tutup" data-dismiss="modal">Close</button>
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

<script type="text/javascript">
 $(window).on('load',function(){
        $('#modalShow').modal('show');
    });
    
    $(function(){
        function refreshStat(){
        $.ajax({
            url: '<?= base_url('responden/refresh')?>'
            }).done(function(refresh) {
                $("#status").removeClass("alert-danger");
                $("#status").addClass("alert-success");
                $('#status').html('Silahkan Mengisi');
                $('.to_open').prop('disabled',false);
            });

            }
            window.setTimeout(refreshStat, 15000);
    });

</script>