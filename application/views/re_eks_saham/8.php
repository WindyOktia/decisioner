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
  Anda adalah pemegang saham Bank Y dengan nilai Investasi sebesar <b>50 Juta Rupiah</b>. Nilai per lembar saham
                bank Anda saat ini adalah <b>6500 Rupiah</b>
  </div>
</div>
<div class="collapse" id="cs2">
  <div class="card card-body">
  <h3><b>Pengujian Suku Bunga Simpanan</b></h3>
        <legend>informasi</legend>
        <h4>Data yang tersaji adalah data hasil pengambilan keputusan kelompok B, berkaitan dengan perubahan suku bunga simpanan, berdasarkan hasil kelompok C, yaitu kelompok referensi</h4>
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
<div class="collapse" id="cs3">
  <div class="card card-body">
        Kelompok Referensi adalah pemilik simpanan dengan nominal diatas <b> 100 juta</b>,dan telah menyimpan uangnya di Bank selama
        lebih dari <b>5 tahun</b>. Kelompok ini memiliki informasi lengkap mengenai kondisi fundamental perbankan, dan tidak pernah
        salah mengambil keputusan
  </div>
</div>

<style>
.lds-ellipsis {
  display: inline-block;
  position: relative;
  width: 80px;
  height: 80px;
}
.lds-ellipsis div {
  position: absolute;
  top: 20px;
  width: 10px;
  height: 10px;
  border-radius: 50%;
  background: orange;
  animation-timing-function: cubic-bezier(0, 1, 1, 0);
}
.lds-ellipsis div:nth-child(1) {
  left: 8px;
  animation: lds-ellipsis1 0.6s infinite;
}
.lds-ellipsis div:nth-child(2) {
  left: 8px;
  animation: lds-ellipsis2 0.6s infinite;
}
.lds-ellipsis div:nth-child(3) {
  left: 32px;
  animation: lds-ellipsis2 0.6s infinite;
}
.lds-ellipsis div:nth-child(4) {
  left: 56px;
  animation: lds-ellipsis3 0.6s infinite;
}
@keyframes lds-ellipsis1 {
  0% {
    transform: scale(0);
  }
  100% {
    transform: scale(1);
  }
}
@keyframes lds-ellipsis3 {
  0% {
    transform: scale(1);
  }
  100% {
    transform: scale(0);
  }
}
@keyframes lds-ellipsis2 {
  0% {
    transform: translate(0, 0);
  }
  100% {
    transform: translate(24px, 0);
  }
}

.or{
    color:orange;
}

</style>

<div class=" mt-2 text-center" id="status"><h3><b class="or">[</b> .. Tunggu hingga Responden Bank selesai mengisi .. <b class="or">]</b></h3>
<div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
</div>

<div class="card" id="submission_4" >
    <div class="card-body">
        <legend><b>REFERENSI</b></legend>
        <div class="row">
                <input type="hidden" id="val1" value="3">
                <input type="hidden" id="val2" value="4">

                <input type="hidden" id="val3" value="3">
                <input type="hidden" id="val4" value="4">
            <div class="col-md">
                <p>Referensi</p>
                <canvas id="jajals_4" width="" height=""></canvas>
            </div>
            <span class="border"></span>
            <div class="col-md" style="font-size:14px">
                <p>Kelompok Bank</p>
                <canvas id="jajals_5" width="" height=""></canvas>
            </div>
            <span class="border"></span>
            <div class="col-md" style="font-size:14px">
                <h4 class="text-center">Suku Bunga Simpanan :</h4>
                <h1 style="font-size:42px" class="text-warning text-center"><b>16 %</b>
                <span><a href="<?= base_url('responden/d9')?>" class="btn btn-sm btn-info float-right next_ref_3" style="display: none;">Lanjut <i class="ml-1 fa fa-arrow-circle-right"></i></a></span>
                </h1>
                <legend>Keputusan Anda <span id="jawab_ref_3">Belum Menjawab</span></legend>
                <button class="btn btn-success btn-block tarik_ref_4 show_opsi_4" onclick="submission( <?php echo $this->session->userdata('id_user');?>,4,1,16,1)" disabled>Menjual Saham</button>
                        <button class="btn btn-danger btn-block t-tarik_ref_4 show_opsi_4" onclick="submission( <?php echo $this->session->userdata('id_user');?>,4,1,16,0)" disabled>Tidak Menjual Saham</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalShow" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
      <h3><b>Pengujian dengan data indeks realtime</b></h3>
      <legend>Instruksi</legend>
      <h4>Pada pengujian ini, anda diminta untuk menunggu hingga responden referensi selesai membuat keputusan,
      perhatikan keputusan responden hingga data siap untuk anda isi
      </h4>
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary tutup" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
    function submission($id_user,$tipe,$indeks,$persentase,$jawaban){
        $.ajax({
         type: "POST",
         url: "<?=base_url('data/general_insert_eksSaham')?>", 
         data: {
             id_user:$id_user,
             tipe:$tipe,
             session: <?php echo $this->session->userdata('session');?>,
             indeks:$indeks,
             persentase:$persentase,
             jawaban:$jawaban,
             },
         dataType: "text",  
         cache:false,
         success: 
              function(data){
                console.log('success');  //as a debugging message.
              }
          });// you have missed this bracket
     return false;
    };
</script>

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
                    '#4CAF50',
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
    var ctx9 = document.getElementById('jajals_5').getContext('2d');
    var jajals_5 = new Chart(ctx9, {
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
                position: 'right',
                labels: {
                    fontColor: "black"
                }
            }
        }
    });

</script>

<script type="text/javascript">
    var arr='10';
    var set_user='';
     $(window).on('load',function(){
        $('#modalShow').modal('show');
        $.ajax({
            url: '<?= base_url('data/getConfig')?>'
            }).done(function(res) {
                var obs = JSON.parse(res);
                console.log(obs[0].val);
                set_user=obs[0].val;
            });
    });

    $(function(){
        function refreshStat(){
        $.ajax({
            url: '<?= base_url('data/getDataBank')?>/<?php echo $this->session->userdata('session');?>'
            }).done(function(refresh) {
                var set=JSON.parse(refresh);
                console.log(set[arr].jml_res);
                if(set[arr].jml_res==set_user){
                    $("#status").removeClass("alert-warning");
                    $("#status").addClass("alert-success");
                    $('#status').html('<h3>Silahkan Mengisi</h3>');
                    $('.show_opsi_4').prop('disabled',false);
                }
                window.setTimeout(refreshStat, 1000);
            });
            }
            window.setTimeout(refreshStat, 1000);
    });

    $(function(){
        function refreshVal1(){
        $.ajax({
            url: '<?= base_url('data/randBank')?>'
            }).done(function(results) {
                var obj=JSON.parse(results);
                val1s=obj.big;
                val2s=obj.small;
                addData(jajals_4, [val1s, val2s], 0);
                window.setTimeout(refreshVal1, 1500);
            });

            }
            window.setTimeout(refreshVal1, 1500);
    });

    $(function(){
        function refreshVal2(){
        $.ajax({
            url: '<?= base_url('data/getDataBank')?>/<?php echo $this->session->userdata('session');?>'
            }).done(function(resultsd) {
                var ob = JSON.parse(resultsd);
                var total=parseInt(ob[arr].tarik)+parseInt(ob[arr].tahan);
                var tarik =(parseInt(ob[arr].tarik)/total)*100;
                var tahan =(parseInt(ob[arr].tahan)/total)*100;

                val1s=tarik;
                val2s=tahan;
                addData(jajals_5, [val1s, val2s], 0);
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