<div id="uji3_bank">
    <div class="alert alert-info clearfix">
        <p id="info_uji3"><strong><i class="fa fa-info-circle mr-2"></i> INTRO </strong>
            <span>
                <a href="#" class="float-right semua_3" style="display:none">Tampilkan Semua</a>
                <a href="#" class="float-right tutups_3" style="display:none">Tutup</a>
            </span>
        </p>
        <h4 id="intro_1">- Anda adalah Nasabah Bank Y,  yang memiliki jumlah simpanan sebesar <b>60 Juta rupiah</b>. Simpanan Anda memberikan tambahan pendapatan sebesar suku bunga berlaku</h4>
        <h4 id="intro_2" style="display: none;">- Setiap kenaikan suku bunga yang <b>besar presentasenya</b>, menunjukkan Bank dalam keadaan <b>kesulitan likuiditas</b></h4>
        <h4 id="intro_3" style="display: none;">- Untuk setiap perubahan suku bunga berikut anda diminta untuk mengambil keputusan <b>"Menarik Tabungan"</b> atau <b>"Tidak Menarik Tabungan"</b></h4>
        <a href="#" class="btn btn-danger btn-lg float-right intro_lanjut1">Selanjutnya</a>
        <a href="#" class="btn btn-danger btn-lg float-right intro_lanjut2" style="display: none;">Selanjutnya</a>
        <a href="#" class="btn btn-danger btn-lg float-right intro_selesai" style="display: none;">Mulai</a>
    </div>
</div>

<div class="card" id="submission_3" style="display: none;">
    <div class="card-body">
        <legend><b>REFERENSI</b></legend>
        <div class="row">
            <div class="col-md">
                <p>Presentase Keputusan</p>
                <canvas id="jajals_3" width="400" height="200"></canvas>
            </div>
            <div class="col-md" style="font-size:14px">
                <h4>Deskripsi</h4>
                Kelompok Referensi adalah pemilik simpanan dengan nominal diatas <b>100 juta</b>, dan telah menyimpan uangnya di Bank selama
                lebih dari <b>5 tahun</b>. Kelompok ini memiliki informasi lengkap mengenai kondisi fundamental perbankan, serta memiliki
                kemampuan analisis perbankan yang baik
            </div>
        </div>
        <div class="row mt-3" id="show_opsi_3" style="display: none;">
            <div class="col-md">
                <legend>Indeks</legend>
                <div class="row">
                    <div class="col">
                        <h4>Suku Bunga Simpanan</h4>
                    </div>
                    <div class="col mx-auto my-auto">
                        <h4><b>: 6 %</b></h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h4>Suku Bunga LPS</h4>
                    </div>
                    <div class="col mx-auto my-auto">
                        <h4><b>: 6 %</b></h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h4>Rasio KPMM</h4>
                    </div>
                    <div class="col mx-auto my-auto">
                        <h4><b>: 8 %</b></h4>
                    </div>
                </div>
            </div>
            <div class="col-md ">   
                <legend>Keputusan Anda : <span id="jawab_ref_3">Belum Memilih</span><span><a href="#" class="float-right next_ref_3" style="display: none;">Lanjut <i class="ml-1 fa fa-arrow-circle-right"></i></a></span></legend>
                <div class="col-12">
                    <form action="" method="post">
                        <button class="btn btn-danger btn-block tarik_ref_3">Menarik Tabungan</button>
                        <button class="btn btn-primary btn-block t-tarik_ref_3">Tidak Menarik Tabungan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>