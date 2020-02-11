<button class="btn btn-primary mb-1 btn-sm" type="button" data-toggle="collapse" data-target="#cs1" aria-expanded="false" aria-controls="cs1">
    Informasi
</button>
<button class="btn btn-warning mb-1 btn-sm" type="button" data-toggle="collapse" data-target="#cs2" aria-expanded="false" aria-controls="cs2">
    Petunjuk
</button>
<div class="collapse" id="cs1">
  <div class="card card-body">
        Anda adalah pemegang saham Bank Y dengan nilai Investasi sebesar <b>50 Juta Rupiah</b>. Nilai per lembar saham
                bank Anda saat ini adalah <b>6500 Rupiah</b>
  </div>
</div>
<div class="collapse" id="cs2">
  <div class="card card-body">
  <h3><b>Pengujian Suku Bunga Simpanan</b></h3>
        <legend>informasi</legend>
        <h4>Data yang tersaji adalah data hasil pengambilan keputusan kelompok B, berkaitan dengan perubahan suku bunga simpanan</h4>
        <legend>Petunjuk</legend>
        <h4>Untuk setiap data yang tersaji, Anda diminta untuk mengambil keputusan dengan menekan tombol:
            <ul>
                <li>
                    <a href="#" class="btn btn-success btn-sm">Menjual Saham</a> untuk
                    <b>Menjual Saham</b> , atau
                </li>
                <li>
                    <a href="#" class="btn btn-sm btn-danger mt-2" >Tidak Menjual Saham</a> untuk
                    <b>Tidak Menjual Saham</b>
                </li>
            </ul>
        </h4>
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
                <h1 class="text-center" style="font-size:42px"><b>6</b> % 
                    <span class="float-right">
                        <a href="<?= base_url('responden/d6_2')?>" class="btn btn-primary nexts" style="display:none">Next <i class="fa fa-arrow-circle-right ml-2"></i></a>
                    </span>
                </h1>
                <!-- <span class="text-danger"><b>*</b> Pelajari Petunjuk sebelum membuka opsi</span><br> -->
                <div class="text-center">
                    <span class="">Keputusan Anda : <span class="jwb">Belum memilih Keputusan</span></span>
                </div>
                <div class="text-center mt-3">
                    <button id="11" class="btn btn-success btn-block  stay" disabled>Menjual Saham</button>
                    <button id="12" class="btn btn-danger btn-block stay" disabled>Tidak Menjual Saham</button>
                </div>
                <br>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalShow" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
      <h3><b>Pengujian dengan indeks data realtime</b></h3>
      <legend>Instruksi</legend>
      <h4>Pada pengujian ini, anda diminta untuk menunggu hingga responden Kelompok Bank selesai membuat keputusan,
      perhatikan keputusan responden hingga data siap untuk anda isi
      </h4>
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary tutup" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalShow1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h3><b>Informasi</b></h3>
        <h5>
        <ul>
            <li>
            Anda adalah pemegang saham Bank Y dengan nilai Investasi sebesar <b>50 Juta Rupiah</b>. Nilai per lembar saham
                bank Anda saat ini adalah <b>6500 Rupiah</b>
            </li>
        </ul>
        </h5>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalNew" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h3><b>Pengujian Suku Bunga Simpanan</b></h3>
        <legend>informasi</legend>
        <h4>Data yang tersaji adalah data hasil pengambilan keputusan kelompok B, berkaitan dengan perubahan suku bunga simpanan</h4>
        <legend>Petunjuk</legend>
        <h4>Untuk setiap kenaikan Suku Bunga Simpanan, Anda diminta untuk mengambil keputusan dengan menekan tombol:
            <ul>
                <li>
                    <a href="#" class="btn btn-success btn-sm">Menjual Saham</a> untuk
                    <b>Menjual Saham</b> , atau
                </li>
                <li>
                    <a href="#" class="btn btn-sm btn-danger mt-2" >Tidak Menjual Saham</a> untuk
                    <b>Tidak Menjual Saham</b>
                </li>
            </ul>
        </h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
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
                $('.stay').prop('disabled',false);
                // show();
            });

            }
        window.setTimeout(refreshStat, 15000);

    });
    $('#11').click(function() {
        $("#11").prop('disabled', true);
        $("#12").prop('disabled', false);
        $(".jwb").html('<b><kbd style="background-color:green">Menjual Saham</kbd></b>');
        $(".nexts").show(300);
    });

    $('#12').click(function() {
        $("#11").prop('disabled', false);
        $("#12").prop('disabled', true);
        $(".jwb").html('<b><kbd style="background-color:red">Tidak Menjual Saham</kbd></b>');
        $(".nexts").show(300);
    });

    

    $(window).on('load',function(){
        $('#modalShow').modal('show');
    });
    $('#modalShow').on('hidden.bs.modal', function () {
  // Load up a new modal...
        $('#modalShow1').modal('show');
    })
    $('#modalShow1').on('hidden.bs.modal', function () {
  // Load up a new modal...
        $('#modalNew').modal('show');
    })

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