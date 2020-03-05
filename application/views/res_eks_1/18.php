<button class="btn btn-primary mb-1 btn-sm" type="button" data-toggle="collapse" data-target="#cs1" aria-expanded="false" aria-controls="cs1">
    Informasi
</button>
<button class="btn btn-warning mb-1 btn-sm" type="button" data-toggle="collapse" data-target="#cs2" aria-expanded="false" aria-controls="cs2">
    Petunjuk
</button>
<button class="btn btn-secondary mb-1 btn-sm" type="button" data-toggle="collapse" data-target="#cs3" aria-expanded="false" aria-controls="cs3">
    Tentang Referensi
</button>
<div class="collapse" id="cs1">
  <div class="card card-body">
    <ol>
        <li>Anda adalah Nasabah Bank Y,  yang memiliki jumlah simpanan sebesar <b>50 Juta rupiah</b>. Simpanan Anda memberikan tambahan pendapatan sebesar suku bunga berlaku</li>
        <li>Setiap kenaikan suku bunga yang <b>besar presentasenya</b>, menunjukkan Bank dalam keadaan <b>kesulitan likuiditas</b></li>
    </ol>
  </div>
</div>
<div class="collapse" id="cs2">
  <div class="card card-body">
    <ol>
        <li>Untuk setiap perubahan suku bunga berikut anda diminta untuk mengambil keputusan <b>"Menarik Tabungan"</b> atau <b>"Tidak Menarik Tabungan"</b></li>
        <li>Amati Keputusan Kelompok Referensi, dan apabila anda sudah siap untuk mengisi data maka klik tombol buka opsi</li>
        <li>Anda memiliki kesempatan <b>2,5 </b> detik untuk langsung memilih pada kemunculan opsi pertama setelah anda membuka opsi</li>
        <li>atau Anda dapat kembali mepertimbangan keputusan anda dengan menunggu kemunculan opsi kedua</li>
    </ol>
  </div>
</div>
<div class="collapse" id="cs3">
  <div class="card card-body">
        Kelompok Referensi adalah pemilik simpanan dengan nominal diatas <b> 100 juta</b>,dan telah menyimpan uangnya di Bank selama
        lebih dari <b>5 tahun</b>. Kelompok ini memiliki informasi lengkap mengenai kondisi fundamental perbankan, serta memiliki
        kemampuan analisis perbankan yang baik
  </div>
</div>

<div class="alert alert-danger mt-2" id="status">Tunggu hingga Responden selesai mengisi</div>

<input type="hidden" id="val1" value="3">
<input type="hidden" id="val2" value="4">

<div class="card" id="submission2">
    <div class="card-body">
        <div class="row">
            <div class="col-md">
            <legend><b>Presentase Keputusan Referensi</b></legend>
                <canvas id="jajals" width="600" height="350"></canvas>
                <!-- <button class="btn btn-warning float-right buka">Buka Opsi</button> -->
            </div>
            <div class="col-md" >
            <legend class="text-center border-bottom border-info"><b>Rasio KPMM (%)</b></legend>
                <!-- <h4 class="text-center">Suku Bunga Simpanan</h4> -->
                <h1 class="text-center" style="font-size:42px"><b>2</b> % 
                    <span class="float-right">
                        <a href="#" type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary nexts" style="display:none">Selesai <i class="fa fa-arrow-circle-right ml-2"></i></a>
                    </span>
                </h1>
                <!-- <span class="text-danger"><b>*</b> Pelajari Petunjuk sebelum membuka opsi</span><br> -->
                <div class="text-center">
                    <span class="">Keputusan Anda : <span class="jwb">Belum memilih Keputusan</span></span>
                </div>
                <div class="text-center mt-3">
                    <button id="11" class="btn btn-success btn-block  stay" disabled>Tarik Tabungan</button>
                    <button id="12" class="btn btn-danger btn-block stay" disabled>Tidak Menarik Tabungan</button>
                </div>
                <br>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Informasi</h5>
      </div>
      <div class="modal-body">
        <h4>Terimakasih...! Semua Form Sudah Terisi</h4>

      </div>
      <div class="modal-footer">
        <a href="<?= base_url()?>"class="btn btn-primary">Logout</a>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
    $(function(){
        function refreshStat(){
        $.ajax({
            url: '<?= base_url('responden/refresh')?>'
            }).done(function(refresh) {
                $("#status").removeClass("alert-danger");
                $("#status").addClass("alert-success");
                $('#status').html('Silahkan Mengisi');
                $('.to_open').prop('disabled',false);
                $('.stay').prop('disabled',false);
            });

            }
        window.setTimeout(refreshStat, 15000);

    });
    $('#11').click(function() {
        $("#11").prop('disabled', true);
        $("#12").prop('disabled', false);
        $(".jwb").html('<b>Menarik Tabungan</b>');
        $(".nexts").show(300);
    });

    $('#12').click(function() {
        $("#11").prop('disabled', false);
        $("#12").prop('disabled', true);
        $(".jwb").html('<b>Tidak Menarik Tabungan</b>');
        $(".nexts").show(300);
    });

    $('#13').click(function() {
        $("#13").prop('disabled', true);
        $("#14").prop('disabled', false);
        $(".jwb").html('<b>Menarik Tabungan</b>');
        $(".nexts").show(300);
    });

    $('#14').click(function() {
        $("#13").prop('disabled', false);
        $("#14").prop('disabled', true);
        $(".jwb").html('<b>Tidak Menarik Tabungan</b>');
        $(".nexts").show(300);
    });

    // $(window).on('load',function(){
    //     $('#exampleModal').modal('show');
    // });

</script>

<script type="text/javascript">
    var ctx6 = document.getElementById('jajals').getContext('2d');
    var jajals = new Chart(ctx6, {
        type: 'pie',
        data: {
            labels: ['Menarik Tabungan', 'Tidak Menarik Tabungan'],
            datasets: [{
                label: '% of Votes',
                data: [1, 1],
                backgroundColor: [
                    '#4CAF50',
                    '#E4572E'
                ],
                borderWidth: 2
            }]
        },
        options: {
            legend: {
                position: 'top',
                labels: {
                    fontColor: "black"
                }
            }
        }
    });
</script>

<script type="text/javascript">
    $(function(){
        function refreshVal2(){
        $.ajax({
            url: '<?= base_url('data/randBank')?>'
            }).done(function(resultsd) {
                var obj = JSON.parse(resultsd);
                val1s=obj.big;
                val2s=obj.small;
                addData(jajals, [val1s, val2s], 0);
                window.setTimeout(refreshVal2, 1000);
            });

            }
            window.setTimeout(refreshVal2, 1000);
    });

    function addData(chart, data, datasetIndex) {
    chart.data.datasets[datasetIndex].data = data;
    chart.update();
    }

</script>