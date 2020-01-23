<div id="saham_noRef">
    <div class="alert alert-info clearfix">
        <p id="infod"><strong><i class="fa fa-info-circle mr-2"></i> INFORMASI </strong>
            <span>
                <a href="#" class="float-right semua" style="display:none">Tampilkan Semua</a>
                <a href="#" class="float-right tutups" style="display:none">Tutup</a>
            </span>
        </p>
        <h4 id="sah1">
            - Anda adalah pemegang saham sebuah Bank dengan nilai investasi sebesar <b>50 juta rupiah</b>. Nilai per
            lembar saham anda saat ini adalah <b>6500 Rupiah</b>. Perubahan tingkat Suku Bunga Simpanan, Suku Bunga LPS,
            dan Rasio KPMM akan mempengaruhi tingkat pendapatan anda
        </h4>
        <h4 id="sah2" style="display:none">
            - Untuk perubahan setiap Suku Bunga(dan parameter lainnya), beserta dengan prospek keuntungan dan kerugian
            anda diminta untuk mengambil keputusan <b>"Menjual"</b> atau <b>"Menahan"</b> saham.
        </h4>
        <a href="#" class="btn btn-danger float-right sah_lanjut1">Selanjutnya</a>
        <a href="#" class="btn btn-danger float-right sah_lanjut2"  style="display:none">Mulai</a>
    </div>
</div>

<div id="submis" style="display:none">
    <div class="card" >
        <div class="card-body">
            <legend>Keputusan Anda</legend>
            <table class="table table-responsive-sm">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Suku Bunga Simpanan (%)</th>
                        <th>Prospek (+)</th>
                        <th>Prospek (-)</th>
                        <th style="width:20%">Keputusan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr id="1">
                        <td>01</td>
                        <td>6 %</td>
                        <td>1500</td>
                        <td>2000</td>
                        <td class="aksi1">
                            <div class="row">
                                <div class="col-md">
                                    <a href="#" class="btn btn-sm btn-success jual1" >Jual</a>
                                </div>
                                <div class="col-md">
                                    <a href="#" class="btn btn-sm btn-danger tahan1">Tahan</a>
                                </div>
                            </div>
                        </td>
                        <td class="jawaban" style="display:none"></td>
                    </tr>
                    <tr style="display:none" id="2">
                        <td>02</td>
                        <td>16 %</td>
                        <td>1000</td>
                        <td>3000</td>
                        <td class="aksi2">
                            <div class="row">
                                <div class="col-md">
                                    <a href="#" class="btn btn-sm btn-success jual2">Jual</a>
                                </div>
                                <div class="col-md">
                                    <a href="#" class="btn btn-sm btn-danger tahan2">Tahan</a>
                                </div>
                            </div>
                        </td>
                        <td class="jawaban2" style="display:none"></td>
                    </tr>
                    <tr style="display:none" id="3">
                        <td>03</td>
                        <td>30 %</td>
                        <td>500</td>
                        <td>5000</td>
                        <td class="aksi3">
                            <div class="row">
                                <div class="col-md">
                                    <a href="#" class="btn btn-sm btn-success jual3">Jual</a>
                                </div>
                                <div class="col-md">
                                    <a href="#" class="btn btn-sm btn-danger tahan3">Tahan</a>
                                </div>
                            </div>
                        </td>
                        <td class="jawaban3" style="display:none"></td>
                    </tr>
                </tbody>
            </table>
            <a href="#" class="btn btn-primary float-right mt-3 kirim" style="display:none">Kirim Jawaban</a>
        </div>
    </div>
</div>