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
  <h3><b>Pengujian Suku Bunga Simpanan</b></h3>
      <legend>informasi</legend>
      <h4>Setiap kenaikan Suku Bunga Simpanan, menandakan Bank dalam kesulitan likuiditas</h4>
      <legend>Petunjuk</legend>
      <ul>
        <li>
            <h4>Anda diminta untuk menunggu hingga responden selesai mengisi</h4>
        </li>
        <li>
            <h4><b>Kesempatan anda untuk menjawab pada opsi pertama adalah 2,5 detik</b></h4>
        </li>
        <li>
            <h4>Anda dapat melewati opsi pertama dan menunggu hingga opsi kedua muncul</h4>
        </li>
      </ul>
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
            <legend class="text-center border-bottom border-info"><b>Suku Bunga Simpanan</b></legend>
                <!-- <h4 class="text-center">Suku Bunga Simpanan</h4> -->
                <h1 class="text-center" style="font-size:42px"><b>16</b> % 
                    <span class="float-right">
                        <a href="<?= base_url('responden/a22')?>" class="btn btn-primary nexts" style="display:none">Next <i class="fa fa-arrow-circle-right ml-2"></i></a>
                    </span>
                </h1>
                <!-- <span class="text-danger"><b>*</b> Pelajari Petunjuk sebelum membuka opsi</span><br> -->
                <div class="text-center">
                    <span class="">Keputusan Anda : <span class="jwb">Belum memilih Keputusan</span></span>
                </div>
                <div class="text-center mt-3">
                    <button id="11" class="btn btn-primary  stay" disabled>Tarik Tabungan</button>
                    <button id="12" class="btn btn-danger  stay" disabled>Tidak Menarik Tabungan</button>
                </div>
                <br>
                <!-- <span class="delay" >> Opsi 2</span> -->
                <legend class="text-center">Opsi 2 ( apabila opsi 1 sudah tidak bisa diklik )</legend>
                <div class="text-center">
                    <button id='13' class="btn btn-primary delay" disabled>Tarik Tabungan</button>
                    <button id='14' class="btn btn-danger delay" disabled>Tidak Menarik Tabungan</button>
                </div>
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
                show();
            });

            }
        window.setTimeout(refreshStat, 15000);

        function show(){
            $('.stay').show(300);
            $('.buka').hide(300);
            delays = setTimeout(function () {
                $('.delay').prop('disabled',false);
            }, 10000);

            var $elt = $('.stay').attr('disabled', false);

            cancel = setTimeout(function () {
                $elt.attr('disabled', true);
            }, 5000);
        }
    });
    // $('.buka').click(function() {
    //     $('.stay').show(300);
    //     $('.buka').hide(300);
    //     delays = setTimeout(function () {
    //         $('.delay').show(300);
    //     }, 10000);

    //     var $elt = $('.stay').attr('disabled', false);

    //     cancel = setTimeout(function () {
    //         $elt.attr('disabled', true);
    //     }, 5000);
    // });
    $('#11').click(function() {
        clearTimeout(delays);
        clearTimeout(cancel);
        $("#11").prop('disabled', true);
        $("#12").prop('disabled', false);
        $(".jwb").html('<b>Menarik Tabungan</b>');
        $(".nexts").show(300);
    });

    $('#12').click(function() {
        clearTimeout(delays);
        clearTimeout(cancel);
        $("#11").prop('disabled', false);
        $("#12").prop('disabled', true);
        $(".jwb").html('<b>Tidak Menarik Tabungan</b>');
        $(".nexts").show(300);
    });

    $('#13').click(function() {
        clearTimeout(delays);
        clearTimeout(cancel);
        $("#13").prop('disabled', true);
        $("#14").prop('disabled', false);
        $(".jwb").html('<b>Menarik Tabungan</b>');
        $(".nexts").show(300);
    });

    $('#14').click(function() {
        clearTimeout(delays);
        clearTimeout(cancel);
        $("#13").prop('disabled', false);
        $("#14").prop('disabled', true);
        $(".jwb").html('<b>Tidak Menarik Tabungan</b>');
        $(".nexts").show(300);
    });

    $(window).on('load',function(){
        $('#exampleModal').modal('show');
    });

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
                    '#0094C6',
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
        function refreshVal1(){
        $.ajax({
            url: '<?= base_url('responden/refreshBank')?>'
            }).done(function(results) {
                $('#val1').val(results);
                val1s=$('#val1').val()
                val2s=$('#val2').val()
                addData(jajals_5, [val1s, val2s], 0);
                window.setTimeout(refreshVal1, 3000);
            });

            }
            window.setTimeout(refreshVal1, 3000);
    });

    $(function(){
        function refreshVal2(){
        $.ajax({
            url: '<?= base_url('responden/refreshBank2')?>'
            }).done(function(resultsd) {
                $('#val2').val(resultsd);
                val1s=$('#val1').val()
                val2s=$('#val2').val()
                addData(jajals, [val1s, val2s], 0);
                window.setTimeout(refreshVal2, 3000);
            });

            }
            window.setTimeout(refreshVal2, 3000);
    });

    function addData(chart, data, datasetIndex) {
    chart.data.datasets[datasetIndex].data = data;
    chart.update();
    }

</script>