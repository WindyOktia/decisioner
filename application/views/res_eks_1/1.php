
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
      <h4>Setiap kenaikan Suku Bunga Simpanan, maka simpanan Anda dalam keadaan tidak terjamin dan
      Bank dalam keadaan kesulitan likuiditas
      </h4>
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

<div class=" mt-2 text-center" id="status"><h3><b class="or">[</b> .. Tunggu hingga Responden Saham selesai mengisi .. <b class="or">]</b></h3>
<div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
</div>

<div class="card mt-2" id="eks_1">
    <div class="card-body">
        <table class="table table-responsive-sm">
            <thead>
                <tr>
                    <th class="text-center"><i class="fa fa-info-circle mr-2" style="color:#F44336"></i>Suku Bunga Simpanan (%)</th>
                    <th >Jawaban</th>
                    <th>Keputusan Anda </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th class="text-center text-warning"><h1><b>6</b> %</h1></th>
                    <th id="jwb_1_1">Belum Menjawab</th>
                    <th>
                        <div class="row">
                            <div class="col-md">
                                <button class="btn btn-success btn-block tt_1_1 to_open" onclick="submission( <?php echo $this->session->userdata('id_user');?>,1,1,6,1)"  disabled>Tarik Tabungan</button>
                            </div>
                            <div class="col-md">
                                <button class="btn btn-danger btn-block tmt_1_1 to_open" onclick="submission( <?php echo $this->session->userdata('id_user');?>,1,1,6,0)" disabled>Tidak Menarik Tabungan</button>
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
      <h4>Setiap kenaikan Suku Bunga Simpanan, maka simpanan Anda dalam keadaan tidak terjamin dan
      Bank dalam keadaan kesulitan likuiditas</h4>
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

<script>
    var set_res='';
        $(window).on('load',function(){
        $('#modalShow').modal('show');
        $.ajax({
            url: '<?= base_url('data/getConfig')?>'
            }).done(function(res) {
                var obs = JSON.parse(res);
                console.log(obs[1].val);
                set_res=obs[1].val;
            });
    });
</script>

<script type="text/javascript">
 $(window).on('load',function(){
        $('#modalShow').modal('show');
    });
    
    $(function(){
        function refreshStat(){
        $.ajax({
            url: '<?= base_url('data/getCountSaham')?>/<?php echo $this->session->userdata('session');?>'
            }).done(function(refresh) {
                var isi = JSON.parse(refresh);
                if(isi[0].jml_user==set_res){
                    $("#anu").val('anu');
                    $("#status").removeClass("alert-danger");
                    $("#status").addClass("alert-success");
                    $('#status').html('<h3>Silahkan Mengisi</h3>');
                    $('.to_open').prop('disabled',false);
                } 
                window.setTimeout(refreshStat, 1000);
            });

            }
            window.setTimeout(refreshStat, 1000);
    });

</script>

<script type="text/javascript">
    function submission($id_user,$tipe,$indeks,$persentase,$jawaban){
        $.ajax({
         type: "POST",
         url: "<?=base_url('data/general_insert_eksBank')?>", 
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