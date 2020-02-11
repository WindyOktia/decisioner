<button class="btn btn-primary mb-1 btn-sm" type="button" data-toggle="collapse" data-target="#cs1" aria-expanded="false" aria-controls="cs1">
    Informasi
</button>
<button class="btn btn-warning mb-1 btn-sm" type="button" data-toggle="collapse" data-target="#cs2" aria-expanded="false" aria-controls="cs2">
    Petunjuk
</button>

<div class="collapse" id="cs1">
  <div class="card card-body">
  Anda adalah pemegang saham sebuah Bank dengan nilai investasi sebesar <b>50 juta rupiah</b>. Nilai per
            lembar saham anda saat ini adalah <b>6500 Rupiah</b>. Perubahan tingkat Suku Bunga Simpanan, Suku Bunga LPS,
            dan Rasio KPMM menunjukkan Bank dalam kesulitan likuiditas dan probabilitas


  </div>
</div>
<div class="collapse" id="cs2">
  <div class="card card-body">
    <h3><b>Pengujian Suku Bunga Simpanan</b></h3>
      <legend>informasi</legend>
      <h4>Setiap kenaikan Suku Bunga Simpanan, menandakan Bank dalam kesulitan likuiditas</h4>
      <legend>Petunjuk</legend>
      <h4>Untuk setiap kenaikan Suku Bunga Simpanan, anda diminta untuk mengambil keputusan dengan menekan tombol:
        <ul>
            <li>
                <a href="#" class="btn btn-success btn-sm">Jual Saham</a> untuk
                <b>Menjual Saham</b> , atau
            </li>
            <li>
                <a href="#" class="btn btn-sm btn-danger mt-2" >Tahan Saham</a> untuk
                <b>Tidak Menjual Saham</b>
            </li>
        </ul>
      </h4>
  </div>
</div>

<div class="card mt-2" id="eks_1">
    <div class="card-body">
        <table class="table table-responsive-sm">
            <thead>
                <tr>
                    <th class="text-center"><i class="fa fa-info-circle mr-2" style="color:#F44336"></i>Suku Bunga Simpanan (%)</th>
                    <!-- <th>Prospek (+)</th> -->
                    <th>Jawaban</th>
                    <th>Pilihan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th class="text-center text-warning"><h1><b>6</b> %</h1></th>
                    <!-- <th ><h1><b>1500</b></h1></th> -->
                    <th ><span id="a1">Belum Menjawab</span></th>
                    <th style="width:30%">
                        <div class="row">
                            <div class="col-md">
                                <button class="btn btn-success btn-sm j1">Jual Saham</button>
                            </div>
                            <div class="col-md">
                                <button class="btn btn-danger btn-sm t1">Tahan Saham</button>
                            </div>
                        </div>
                    </th>
                </tr>
                <tr id="ops2" style="display:none">
                    <th class="text-center text-warning"><h1><b>16</b> %</h1></th>
                    <!-- <th ><h1><b>1000</b></h1></th> -->
                    <th ><span id="a2">Belum Menjawab</span></th>
                    <th style="width:30%">
                        <div class="row">
                            <div class="col-md">
                                <button class="btn btn-success btn-sm j2">Jual Saham</button>
                            </div>
                            <div class="col-md">
                                <button class="btn btn-danger btn-sm t2">Tahan Saham</button>
                            </div>
                        </div>
                    </th>
                </tr>
                <tr id="ops3" style="display:none">
                    <th class="text-center text-warning"><h1><b>30</b> %</h1></th>
                    <!-- <th ><h1><b>500</b></h1></th> -->
                    <th ><span id="a3">Belum Menjawab</span></th>
                    <th style="width:30%">
                        <div class="row">
                            <div class="col-md">
                                <button class="btn btn-success btn-sm j3">Jual Saham</button>
                            </div>
                            <div class="col-md">
                                <button class="btn btn-danger btn-sm t3">Tahan Saham</button>
                            </div>
                        </div>
                    </th>
                </tr>
            </tbody>
        </table>
        <a href="<?= base_url('responden/d2')?>" type="button" onclick="return confirm('Yakin? Jawaban tidak dapat diubah setelah dikirim!');" class="btn btn-primary float-right mt-3 submit" style="display:none"><i class="fa fa-location-arrow mr-2"></i> Kirim Jawaban</a>
    </div>
        <!-- <a href="<?= base_url('responden/b2')?>" onclick="return confirm('Yakin? Jawaban tidak dapat diubah setelah dikirim!');" class="btn btn-primary float-right mt-3 submit" style="display:none"><i class="fa fa-location-arrow mr-2"></i> Kirim Jawaban</a> -->
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
                <a href="#" class="btn btn-success btn-sm">Jual Saham</a> untuk
                <b>Menjual Saham</b> , atau
            </li>
            <li>
                <a href="#" class="btn btn-sm btn-danger mt-2" >Tahan Saham</a> untuk
                <b>Tidak Menjual Saham</b>
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
    $(window).on('load',function(){
        $('#modalShow').modal('show');
    });
    $('.j1').click(function() {
        $("#a1").html('<b> <kbd style="background-color:green">Menjual Saham</kbd> </b>');
        $(".j1").prop('disabled', true);
        $(".t1").prop('disabled', false);
        $("#ops2").show(300);
    });

    $('.t1').click(function() {
        $("#a1").html('<b> <kbd style="background-color:red">Tidak Menjual Saham</kbd> </b>');
        $(".j1").prop('disabled', false);
        $(".t1").prop('disabled', true);
        $("#ops2").show(300);
    });

    $('.j2').click(function() {
        $("#a2").html('<b><kbd style="background-color:green">Menjual Saham</kbd>  </b>');
        $(".j2").prop('disabled', true);
        $(".t2").prop('disabled', false);
        $("#ops3").show(300);
    });

    $('.t2').click(function() {
        $("#a2").html('<b> <kbd style="background-color:red">Tidak Menjual Saham</kbd></b>');
        $(".j2").prop('disabled', false);
        $(".t2").prop('disabled', true);
        $("#ops3").show(300);
    });

    $('.j3').click(function() {
        $("#a3").html('<b><kbd style="background-color:green">Menjual Saham</kbd>  </b>');
        $(".j3").prop('disabled', true);
        $(".t3").prop('disabled', false);
        $(".submit").show(300);
    });

    $('.t3').click(function() {
        $("#a3").html('<b> <kbd style="background-color:red">Tidak Menjual Saham</kbd></b>');
        $(".j3").prop('disabled', false);
        $(".t3").prop('disabled', true);
        $(".submit").show(300);
    });
</script>