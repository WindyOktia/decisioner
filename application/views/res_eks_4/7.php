<div class="alert alert-warning" id="alert"><span id="status">Tunggu Sampai Responden Selesai Mengisi</span></div>


<div class="card" id="submission_4" >
    <div class="card-body">
        <legend><b>REFERENSI</b></legend>
        <div class="row">
            <div class="col-md">
                <p>Referensi</p>
                <input type="hidden" id="val1" value="3">
                <input type="hidden" id="val2" value="4">

                <input type="hidden" id="val3" value="3">
                <input type="hidden" id="val4" value="4">
                <canvas id="jajals_4" width="" height=""></canvas>
            </div>
            <span class="border"></span>
            <div class="col-md" style="font-size:14px">
                <p>Kelompok Bank <span class="text-danger">(Pilihan Pertama)</span></p>
                <canvas id="jajals_5" width="" height=""></canvas>
            </div>
            <span class="border"></span>
            <div class="col-md" style="font-size:14px">
                <p>Kelompok Bank <span class="text-danger">(Pilihan Kedua)</span></p>
                <canvas id="jajals_6" width="" height=""></canvas>
            </div>
        </div>
        <div class="row mt-3" id=""  >
            <div class="col-md">
                <legend>Indeks</legend>
                <div class="row">
                    <div class="col">
                        <h4>Prospek Kerugian :</h4>
                    </div>
                    <div class="col mx-auto my-auto">
                        <h1 style="font-size:42px" class="text-warning"><b>2000</b></h1>
                    </div>
                </div>
            </div>
            <div class="col-md ">   
                <legend>Keputusan Anda : <span id="jawab_ref_3">Belum Memilih</span><span><a href="<?= base_url('responden/d8')?>" class="float-right next_ref_3" style="display: none;">Lanjut <i class="ml-1 fa fa-arrow-circle-right"></i></a></span></legend>
                <div class="col-12">
                    <form action="" method="post">
                        <button class="btn btn-danger btn-block tarik_ref_4 show_opsi_4" disabled>Menjual Saham</button>
                        <button class="btn btn-primary btn-block t-tarik_ref_4 show_opsi_4" disabled>Tidak Menjual Saham</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    var ctx8 = document.getElementById('jajals_4').getContext('2d');
    var jajals_4 = new Chart(ctx8, {
        type: 'pie',
        data: {
            labels: ['Menarik Tabungan', 'Tidak Menarik Tabungan'],
            datasets: [{
                label: '% of Votes',
                data: [80, 20],
                backgroundColor: [
                    '#0094C6',
                    '#E4572E'
                ],
                borderWidth: 2
            }]
        },
        options: {
            legend: {
                position: 'right',
                labels: {
                    fontColor: "black"
                }
            }
        }
    });
    var ctx10 = document.getElementById('jajals_6').getContext('2d');
    var jajals_6 = new Chart(ctx10, {
        type: 'pie',
        data: {
            labels: ['Menarik Tabungan', 'Tidak Menarik Tabungan'],
            datasets: [{
                label: '% of Votes',
                data: [12, 19],
                backgroundColor: [
                    '#0094C6',
                    '#E4572E'
                ],
                borderWidth: 2
            }]
        },
        options: {
            legend: {
                position: 'right',
                labels: {
                    fontColor: "black"
                }
            }
        }
    });
</script>

<script type="text/javascript">
    var val1 = document.getElementById('val1').value;
    var val2 = document.getElementById('val2').value;
    var val3 = document.getElementById('val3').value;
    var val4 = document.getElementById('val4').value;
    var ctx9 = document.getElementById('jajals_5').getContext('2d');
    var jajals_5 = new Chart(ctx9, {
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
                position: 'right',
                labels: {
                    fontColor: "black"
                }
            }
        }
    });

</script>

<!-- <script type="text/javascript">
    var val3 = document.getElementById('val3').value;
    var val4 = document.getElementById('val4').value;
    var ctx92 = document.getElementById('jajals_6').getContext('2d');
    var jajals_6 = new Chart(ctx92, {
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
                position: 'right',
                labels: {
                    fontColor: "black"
                }
            }
        }
    });

</script> -->

<script type="text/javascript">
    
    $(function(){
        function refreshStat(){
        $.ajax({
            url: '<?= base_url('responden/refresh')?>'
            }).done(function(refresh) {
                $("#alert").removeClass("alert-warning");
                $("#alert").addClass("alert-success");
                $('#status').html(refresh);
                $('.show_opsi_4').prop('disabled',false);
            });

            }
            window.setTimeout(refreshStat, 15000);
    });

    $(function(){
        function refreshVal1(){
        $.ajax({
            url: '<?= base_url('responden/refreshBank')?>'
            }).done(function(results) {
                $('#val1').val(results);
                val1s=$('#val1').val()
                val2s=$('#val2').val()
                addData(jajals_5, [val1s, val2s], 0);
                window.setTimeout(refreshVal1, 5000);
            });

            }
            window.setTimeout(refreshVal1, 5000);
    });

    $(function(){
        function refreshVal2(){
        $.ajax({
            url: '<?= base_url('responden/refreshBank2')?>'
            }).done(function(resultsd) {
                $('#val2').val(resultsd);
                val1s=$('#val1').val()
                val2s=$('#val2').val()
                addData(jajals_5, [val1s, val2s], 0);
                window.setTimeout(refreshVal2, 5000);
            });

            }
            window.setTimeout(refreshVal2, 5000);
    });

    $(function(){
        function refreshVal3(){
        $.ajax({
            url: '<?= base_url('responden/refreshBank3')?>'
            }).done(function(resultx) {
                $('#val3').val(resultx);
                val3=$('#val3').val()
                val4=$('#val4').val()
                addData2(jajals_6, [val3, val4], 0);
                window.setTimeout(refreshVal3, 5000);
            });

            }
            window.setTimeout(refreshVal3, 5000);
    });

    $(function(){
        function refreshVal3(){
        $.ajax({
            url: '<?= base_url('responden/refreshBank4')?>'
            }).done(function(resultx) {
                $('#val4').val(resultx);
                val3=$('#val3').val()
                val4=$('#val4').val()
                addData2(jajals_6, [val3, val4], 0);
                window.setTimeout(refreshVal3, 5000);
            });

            }
            window.setTimeout(refreshVal3, 5000);
    });

    function addData(chart, data, datasetIndex) {
    chart.data.datasets[datasetIndex].data = data;
    chart.update();
    }

    function addData2(chart, data, datasetIndex) {
    chart.data.datasets[datasetIndex].data = data;
    chart.update();
    }

</script>