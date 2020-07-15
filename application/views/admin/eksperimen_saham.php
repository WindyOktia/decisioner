
<ul class="nav nav-tabs nav-tabs-bottom border-bottom-0">
	<li class="nav-item"><a href="#bottom-divided-tab1" class="nav-link active" data-toggle="tab">Suku Bunga Simpanan</a></li>
	<li class="nav-item"><a href="#bottom-divided-tab2" class="nav-link" data-toggle="tab">Suku Bunga LPS</a></li>
	<li class="nav-item"><a href="#bottom-divided-tab3" class="nav-link" data-toggle="tab">Rasio KPMM</a></li>
	
</ul>
<div class="tab-content">
	<div class="tab-pane fade show active" id="bottom-divided-tab1">
    <h4><b>Suku Bunga Simpanan</b></h4>
    <legend><h6><b>Grafik Perilaku</b></h6></legend>
		<div class="card card-body">
            <div class="row">
                <div class="col-md-10">
                    <canvas id="SBS6" height="100"></canvas>
                </div>
                <div class="col-md-2">
                <div class="text-center">
                    <h5><b> Data : 6 %</b></h5>
                </div>
                    <div class="row">
                        <div class="col-md-4"><b>Uji</b></div>
                        <div class="col-md-4"><b>Jual</b></div>
                        <div class="col-md-4"><b>Tahan</b></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">1</div>
                        <div class="col-md-4"><?= json_encode($saham[0]['jual']);?></div>
                        <div class="col-md-4"><?= json_encode($saham[0]['tahan']);?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">2</div>
                        <div class="col-md-4"><?= json_encode($saham[9]['jual']);?></div>
                        <div class="col-md-4"><?= json_encode($saham[9]['tahan']);?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">3</div>
                        <div class="col-md-4"><?= json_encode($saham[18]['jual']);?></div>
                        <div class="col-md-4"><?= json_encode($saham[18]['tahan']);?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">4</div>
                        <div class="col-md-4"><?= json_encode($saham[27]['jual']);?></div>
                        <div class="col-md-4"><?= json_encode($saham[27]['tahan']);?></div>
                    </div>
                </div>
            </div>
        </div>

		<div class="card card-body">
            <div class="row">
                <div class="col-md-10">
                    <canvas id="SBS16" height="100"></canvas>
                </div>
                <div class="col-md-2">
                <div class="text-center">
                <h5><b> Data : 16 %</b></h5>
                </div>
                    <div class="row">
                        <div class="col-md-4"><b>Uji</b></div>
                        <div class="col-md-4"><b>Jual</b></div>
                        <div class="col-md-4"><b>Tahan</b></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">1</div>
                        <div class="col-md-4"><?= json_encode($saham[1]['jual']);?></div>
                        <div class="col-md-4"><?= json_encode($saham[1]['tahan']);?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">2</div>
                        <div class="col-md-4"><?= json_encode($saham[10]['jual']);?></div>
                        <div class="col-md-4"><?= json_encode($saham[10]['tahan']);?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">3</div>
                        <div class="col-md-4"><?= json_encode($saham[19]['jual']);?></div>
                        <div class="col-md-4"><?= json_encode($saham[19]['tahan']);?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">4</div>
                        <div class="col-md-4"><?= json_encode($saham[28]['jual']);?></div>
                        <div class="col-md-4"><?= json_encode($saham[28]['tahan']);?></div>
                    </div>
                </div>
            </div>
        </div>

		<div class="card card-body">
            <div class="row">
                <div class="col-md-10">
                    <canvas id="SBS30" height="100"></canvas>
                </div>
                <div class="col-md-2">
                <div class="text-center">
                    <h5><b> Data : 30 %</b></h5>
                </div>
                    <div class="row">
                        <div class="col-md-4"><b>Uji</b></div>
                        <div class="col-md-4"><b>Jual</b></div>
                        <div class="col-md-4"><b>Tahan</b></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">1</div>
                        <div class="col-md-4"><?= json_encode($saham[2]['jual']);?></div>
                        <div class="col-md-4"><?= json_encode($saham[2]['tahan']);?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">2</div>
                        <div class="col-md-4"><?= json_encode($saham[11]['jual']);?></div>
                        <div class="col-md-4"><?= json_encode($saham[11]['tahan']);?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">3</div>
                        <div class="col-md-4"><?= json_encode($saham[20]['jual']);?></div>
                        <div class="col-md-4"><?= json_encode($saham[20]['tahan']);?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">4</div>
                        <div class="col-md-4"><?= json_encode($saham[29]['jual']);?></div>
                        <div class="col-md-4"><?= json_encode($saham[29]['tahan']);?></div>
                    </div>
                </div>
            </div>
        </div>
       
        <legend><h6><b>Grafik per pengujian</b></h6></legend>

        <div class="card card-body">
            <div class="row">
                <div class="col-md-9">
                    <canvas id="SBS_uji_1" height="100"></canvas>
                </div>
                <div class="col-md-3">
                    <div class="text-center">
                        <h5><b> Pengujian 1</b></h5>
                        <div class="row">
                            <div class="col-md-5">Persentase</div>
                            <div class="col-md-3">Jual</div>
                            <div class="col-md-4">Tahan</div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">6 %</div>
                            <div class="col-md-3"> <?= json_encode($saham[0]['jual'])?></div>
                            <div class="col-md-4"><?= json_encode($saham[0]['tahan'])?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">16 %</div>
                            <div class="col-md-3"><?= json_encode($saham[1]['jual'])?></div>
                            <div class="col-md-4"><?= json_encode($saham[1]['tahan'])?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">30 %</div>
                            <div class="col-md-3"><?= json_encode($saham[2]['jual'])?></div>
                            <div class="col-md-4"><?= json_encode($saham[2]['tahan'])?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card card-body">
            <div class="row">
                <div class="col-md-9">
                    <canvas id="SBS_uji_2" height="100"></canvas>
                </div>
                <div class="col-md-3">
                    <div class="text-center">
                        <h5><b> Pengujian 2</b></h5>
                        <div class="row">
                            <div class="col-md-5">Persentase</div>
                            <div class="col-md-3">Jual</div>
                            <div class="col-md-4">Tahan</div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">6 %</div>
                            <div class="col-md-3"> <?= json_encode($saham[9]['jual'])?></div>
                            <div class="col-md-4"><?= json_encode($saham[9]['tahan'])?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">16 %</div>
                            <div class="col-md-3"><?= json_encode($saham[10]['jual'])?></div>
                            <div class="col-md-4"><?= json_encode($saham[10]['tahan'])?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">30 %</div>
                            <div class="col-md-3"><?= json_encode($saham[11]['jual'])?></div>
                            <div class="col-md-4"><?= json_encode($saham[11]['tahan'])?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card card-body">
            <div class="row">
                <div class="col-md-9">
                    <canvas id="SBS_uji_3" height="100"></canvas>
                </div>
                <div class="col-md-3">
                    <div class="text-center">
                        <h5><b> Pengujian 3</b></h5>
                        <div class="row">
                            <div class="col-md-5">Persentase</div>
                            <div class="col-md-3">Jual</div>
                            <div class="col-md-4">Tahan</div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">6 %</div>
                            <div class="col-md-3"> <?= json_encode($saham[18]['jual'])?></div>
                            <div class="col-md-4"><?= json_encode($saham[18]['tahan'])?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">16 %</div>
                            <div class="col-md-3"><?= json_encode($saham[19]['jual'])?></div>
                            <div class="col-md-4"><?= json_encode($saham[19]['tahan'])?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">30 %</div>
                            <div class="col-md-3"><?= json_encode($saham[20]['jual'])?></div>
                            <div class="col-md-4"><?= json_encode($saham[20]['tahan'])?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card card-body">
            <div class="row">
                <div class="col-md-9">
                    <canvas id="SBS_uji_4" height="100"></canvas>
                </div>
                <div class="col-md-3">
                    <div class="text-center">
                        <h5><b> Pengujian 4</b></h5>
                        <div class="row">
                            <div class="col-md-5">Persentase</div>
                            <div class="col-md-3">Jual</div>
                            <div class="col-md-4">Tahan</div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">6 %</div>
                            <div class="col-md-3"> <?= json_encode($saham[27]['jual'])?></div>
                            <div class="col-md-4"><?= json_encode($saham[27]['tahan'])?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">16 %</div>
                            <div class="col-md-3"><?= json_encode($saham[28]['jual'])?></div>
                            <div class="col-md-4"><?= json_encode($saham[28]['tahan'])?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">30 %</div>
                            <div class="col-md-3"><?= json_encode($saham[29]['jual'])?></div>
                            <div class="col-md-4"><?= json_encode($saham[29]['tahan'])?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

	</div>

	<div class="tab-pane fade show" id="bottom-divided-tab2">
        <h4><b>Suku Bunga LPS</b></h4>
        <legend><h6><b>Grafik Perilaku</b></h6></legend>
        <div class="card card-body">
            <div class="row">
                <div class="col-md-10">
                    <canvas id="LPS6" height="100"></canvas>
                </div>
                <div class="col-md-2">
                <div class="text-center">
                    <h5><b> Data : 6 %</b></h5>
                </div>
                    <div class="row">
                        <div class="col-md-4"><b>Uji</b></div>
                        <div class="col-md-4"><b>Jual</b></div>
                        <div class="col-md-4"><b>Tahan</b></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">1</div>
                        <div class="col-md-4"><?= json_encode($saham[3]['jual']);?></div>
                        <div class="col-md-4"><?= json_encode($saham[3]['tahan']);?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">2</div>
                        <div class="col-md-4"><?= json_encode($saham[12]['jual']);?></div>
                        <div class="col-md-4"><?= json_encode($saham[12]['tahan']);?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">3</div>
                        <div class="col-md-4"><?= json_encode($saham[21]['jual']);?></div>
                        <div class="col-md-4"><?= json_encode($saham[21]['tahan']);?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">4</div>
                        <div class="col-md-4"><?= json_encode($saham[30]['jual']);?></div>
                        <div class="col-md-4"><?= json_encode($saham[30]['tahan']);?></div>
                    </div>
                </div>
            </div>
        </div>

		<div class="card card-body">
            <div class="row">
                <div class="col-md-10">
                    <canvas id="LPS15" height="100"></canvas>
                </div>
                <div class="col-md-2">
                <div class="text-center">
                <h5><b> Data : 15 %</b></h5>
                </div>
                    <div class="row">
                        <div class="col-md-4"><b>Uji</b></div>
                        <div class="col-md-4"><b>Jual</b></div>
                        <div class="col-md-4"><b>Tahan</b></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">1</div>
                        <div class="col-md-4"><?= json_encode($saham[4]['jual']);?></div>
                        <div class="col-md-4"><?= json_encode($saham[4]['tahan']);?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">2</div>
                        <div class="col-md-4"><?= json_encode($saham[13]['jual']);?></div>
                        <div class="col-md-4"><?= json_encode($saham[13]['tahan']);?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">3</div>
                        <div class="col-md-4"><?= json_encode($saham[22]['jual']);?></div>
                        <div class="col-md-4"><?= json_encode($saham[22]['tahan']);?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">4</div>
                        <div class="col-md-4"><?= json_encode($saham[31]['jual']);?></div>
                        <div class="col-md-4"><?= json_encode($saham[31]['tahan']);?></div>
                    </div>
                </div>
            </div>
        </div>

		<div class="card card-body">
            <div class="row">
                <div class="col-md-10">
                    <canvas id="LPS25" height="100"></canvas>
                </div>
                <div class="col-md-2">
                <div class="text-center">
                    <h5><b> Data : 25 %</b></h5>
                </div>
                    <div class="row">
                        <div class="col-md-4"><b>Uji</b></div>
                        <div class="col-md-4"><b>Jual</b></div>
                        <div class="col-md-4"><b>Tahan</b></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">1</div>
                        <div class="col-md-4"><?= json_encode($saham[5]['jual']);?></div>
                        <div class="col-md-4"><?= json_encode($saham[5]['tahan']);?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">2</div>
                        <div class="col-md-4"><?= json_encode($saham[14]['jual']);?></div>
                        <div class="col-md-4"><?= json_encode($saham[14]['tahan']);?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">3</div>
                        <div class="col-md-4"><?= json_encode($saham[23]['jual']);?></div>
                        <div class="col-md-4"><?= json_encode($saham[23]['tahan']);?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">4</div>
                        <div class="col-md-4"><?= json_encode($saham[32]['jual']);?></div>
                        <div class="col-md-4"><?= json_encode($saham[32]['tahan']);?></div>
                    </div>
                </div>
            </div>
        </div>

         <legend><h6><b>Grafik per pengujian</b></h6></legend>

        <div class="card card-body">
            <div class="row">
                <div class="col-md-9">
                    <canvas id="LPS_uji_1" height="100"></canvas>
                </div>
                <div class="col-md-3">
                    <div class="text-center">
                        <h5><b> Pengujian 1</b></h5>
                        <div class="row">
                            <div class="col-md-5">Persentase</div>
                            <div class="col-md-3">Jual</div>
                            <div class="col-md-4">Tahan</div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">6 %</div>
                            <div class="col-md-3"> <?= json_encode($saham[3]['jual'])?></div>
                            <div class="col-md-4"><?= json_encode($saham[3]['tahan'])?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">15 %</div>
                            <div class="col-md-3"><?= json_encode($saham[4]['jual'])?></div>
                            <div class="col-md-4"><?= json_encode($saham[4]['tahan'])?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">25 %</div>
                            <div class="col-md-3"><?= json_encode($saham[5]['jual'])?></div>
                            <div class="col-md-4"><?= json_encode($saham[5]['tahan'])?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card card-body">
            <div class="row">
                <div class="col-md-9">
                    <canvas id="LPS_uji_2" height="100"></canvas>
                </div>
                <div class="col-md-3">
                    <div class="text-center">
                        <h5><b> Pengujian 2</b></h5>
                        <div class="row">
                            <div class="col-md-5">Persentase</div>
                            <div class="col-md-3">Jual</div>
                            <div class="col-md-4">Tahan</div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">6 %</div>
                            <div class="col-md-3"> <?= json_encode($saham[12]['jual'])?></div>
                            <div class="col-md-4"><?= json_encode($saham[12]['tahan'])?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">15 %</div>
                            <div class="col-md-3"><?= json_encode($saham[13]['jual'])?></div>
                            <div class="col-md-4"><?= json_encode($saham[13]['tahan'])?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">25 %</div>
                            <div class="col-md-3"><?= json_encode($saham[14]['jual'])?></div>
                            <div class="col-md-4"><?= json_encode($saham[14]['tahan'])?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card card-body">
            <div class="row">
                <div class="col-md-9">
                    <canvas id="LPS_uji_3" height="100"></canvas>
                </div>
                <div class="col-md-3">
                    <div class="text-center">
                        <h5><b> Pengujian 3</b></h5>
                        <div class="row">
                            <div class="col-md-5">Persentase</div>
                            <div class="col-md-3">Jual</div>
                            <div class="col-md-4">Tahan</div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">6 %</div>
                            <div class="col-md-3"> <?= json_encode($saham[21]['jual'])?></div>
                            <div class="col-md-4"><?= json_encode($saham[21]['tahan'])?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">15 %</div>
                            <div class="col-md-3"><?= json_encode($saham[22]['jual'])?></div>
                            <div class="col-md-4"><?= json_encode($saham[22]['tahan'])?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">25 %</div>
                            <div class="col-md-3"><?= json_encode($saham[23]['jual'])?></div>
                            <div class="col-md-4"><?= json_encode($saham[23]['tahan'])?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card card-body">
            <div class="row">
                <div class="col-md-9">
                    <canvas id="LPS_uji_4" height="100"></canvas>
                </div>
                <div class="col-md-3">
                    <div class="text-center">
                        <h5><b> Pengujian 4</b></h5>
                        <div class="row">
                            <div class="col-md-5">Persentase</div>
                            <div class="col-md-3">Jual</div>
                            <div class="col-md-4">Tahan</div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">6 %</div>
                            <div class="col-md-3"> <?= json_encode($saham[30]['jual'])?></div>
                            <div class="col-md-4"><?= json_encode($saham[30]['tahan'])?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">15 %</div>
                            <div class="col-md-3"><?= json_encode($saham[31]['jual'])?></div>
                            <div class="col-md-4"><?= json_encode($saham[31]['tahan'])?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">25 %</div>
                            <div class="col-md-3"><?= json_encode($saham[32]['jual'])?></div>
                            <div class="col-md-4"><?= json_encode($saham[32]['tahan'])?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>	
		
	</div>

	<div class="tab-pane fade show" id="bottom-divided-tab3">
        <h4><b>Rasio KPMM</b></h4>
        <legend><h6><b>Grafik Perilaku</b></h6></legend>

        <div class="card card-body">
            <div class="row">
                <div class="col-md-10">
                    <canvas id="KPMM8" height="100"></canvas>
                </div>
                <div class="col-md-2">
                <div class="text-center">
                    <h5><b> Data : 8 %</b></h5>
                </div>
                    <div class="row">
                        <div class="col-md-4"><b>Uji</b></div>
                        <div class="col-md-4"><b>Jual</b></div>
                        <div class="col-md-4"><b>Tahan</b></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">1</div>
                        <div class="col-md-4"><?= json_encode($saham[8]['jual']);?></div>
                        <div class="col-md-4"><?= json_encode($saham[8]['tahan']);?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">2</div>
                        <div class="col-md-4"><?= json_encode($saham[17]['jual']);?></div>
                        <div class="col-md-4"><?= json_encode($saham[17]['tahan']);?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">3</div>
                        <div class="col-md-4"><?= json_encode($saham[26]['jual']);?></div>
                        <div class="col-md-4"><?= json_encode($saham[26]['tahan']);?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">4</div>
                        <div class="col-md-4"><?= json_encode($saham[35]['jual']);?></div>
                        <div class="col-md-4"><?= json_encode($saham[35]['tahan']);?></div>
                    </div>
                </div>
            </div>
        </div>

		<div class="card card-body">
            <div class="row">
                <div class="col-md-10">
                    <canvas id="KPMM4" height="100"></canvas>
                </div>
                <div class="col-md-2">
                <div class="text-center">
                <h5><b> Data : 4 %</b></h5>
                </div>
                    <div class="row">
                        <div class="col-md-4"><b>Uji</b></div>
                        <div class="col-md-4"><b>Jual</b></div>
                        <div class="col-md-4"><b>Tahan</b></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">1</div>
                        <div class="col-md-4"><?= json_encode($saham[7]['jual']);?></div>
                        <div class="col-md-4"><?= json_encode($saham[7]['tahan']);?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">2</div>
                        <div class="col-md-4"><?= json_encode($saham[16]['jual']);?></div>
                        <div class="col-md-4"><?= json_encode($saham[16]['tahan']);?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">3</div>
                        <div class="col-md-4"><?= json_encode($saham[25]['jual']);?></div>
                        <div class="col-md-4"><?= json_encode($saham[25]['tahan']);?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">4</div>
                        <div class="col-md-4"><?= json_encode($saham[34]['jual']);?></div>
                        <div class="col-md-4"><?= json_encode($saham[34]['tahan']);?></div>
                    </div>
                </div>
            </div>
        </div>

		<div class="card card-body">
            <div class="row">
                <div class="col-md-10">
                    <canvas id="KPMM2" height="100"></canvas>
                </div>
                <div class="col-md-2">
                <div class="text-center">
                    <h5><b> Data : 2 %</b></h5>
                </div>
                    <div class="row">
                        <div class="col-md-4"><b>Uji</b></div>
                        <div class="col-md-4"><b>Jual</b></div>
                        <div class="col-md-4"><b>Tahan</b></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">1</div>
                        <div class="col-md-4"><?= json_encode($saham[6]['jual']);?></div>
                        <div class="col-md-4"><?= json_encode($saham[6]['tahan']);?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">2</div>
                        <div class="col-md-4"><?= json_encode($saham[15]['jual']);?></div>
                        <div class="col-md-4"><?= json_encode($saham[15]['tahan']);?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">3</div>
                        <div class="col-md-4"><?= json_encode($saham[24]['jual']);?></div>
                        <div class="col-md-4"><?= json_encode($saham[24]['tahan']);?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">4</div>
                        <div class="col-md-4"><?= json_encode($saham[33]['jual']);?></div>
                        <div class="col-md-4"><?= json_encode($saham[33]['tahan']);?></div>
                    </div>
                </div>
            </div>
        </div>

        <legend><h6><b>Grafik per pengujian</b></h6></legend>

        <div class="card card-body">
            <div class="row">
                <div class="col-md-9">
                    <canvas id="KPMM_uji_1" height="100"></canvas>
                </div>
                <div class="col-md-3">
                    <div class="text-center">
                        <h5><b> Pengujian 1</b></h5>
                        <div class="row">
                            <div class="col-md-5">Persentase</div>
                            <div class="col-md-3">Jual</div>
                            <div class="col-md-4">Tahan</div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">8 %</div>
                            <div class="col-md-3"> <?= json_encode($saham[8]['jual'])?></div>
                            <div class="col-md-4"><?= json_encode($saham[8]['tahan'])?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">4 %</div>
                            <div class="col-md-3"><?= json_encode($saham[7]['jual'])?></div>
                            <div class="col-md-4"><?= json_encode($saham[7]['tahan'])?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">2 %</div>
                            <div class="col-md-3"><?= json_encode($saham[6]['jual'])?></div>
                            <div class="col-md-4"><?= json_encode($saham[6]['tahan'])?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card card-body">
            <div class="row">
                <div class="col-md-9">
                    <canvas id="KPMM_uji_2" height="100"></canvas>
                </div>
                <div class="col-md-3">
                    <div class="text-center">
                        <h5><b> Pengujian 2</b></h5>
                        <div class="row">
                            <div class="col-md-5">Persentase</div>
                            <div class="col-md-3">Jual</div>
                            <div class="col-md-4">Tahan</div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">8 %</div>
                            <div class="col-md-3"> <?= json_encode($saham[17]['jual'])?></div>
                            <div class="col-md-4"><?= json_encode($saham[17]['tahan'])?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">4 %</div>
                            <div class="col-md-3"><?= json_encode($saham[16]['jual'])?></div>
                            <div class="col-md-4"><?= json_encode($saham[16]['tahan'])?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">2 %</div>
                            <div class="col-md-3"><?= json_encode($saham[15]['jual'])?></div>
                            <div class="col-md-4"><?= json_encode($saham[15]['tahan'])?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card card-body">
            <div class="row">
                <div class="col-md-9">
                    <canvas id="KPMM_uji_3" height="100"></canvas>
                </div>
                <div class="col-md-3">
                    <div class="text-center">
                        <h5><b> Pengujian 3</b></h5>
                        <div class="row">
                            <div class="col-md-5">Persentase</div>
                            <div class="col-md-3">Jual</div>
                            <div class="col-md-4">Tahan</div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">8 %</div>
                            <div class="col-md-3"> <?= json_encode($saham[26]['jual'])?></div>
                            <div class="col-md-4"><?= json_encode($saham[26]['tahan'])?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">4 %</div>
                            <div class="col-md-3"><?= json_encode($saham[25]['jual'])?></div>
                            <div class="col-md-4"><?= json_encode($saham[25]['tahan'])?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">2 %</div>
                            <div class="col-md-3"><?= json_encode($saham[24]['jual'])?></div>
                            <div class="col-md-4"><?= json_encode($saham[24]['tahan'])?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card card-body">
            <div class="row">
                <div class="col-md-9">
                    <canvas id="KPMM_uji_4" height="100"></canvas>
                </div>
                <div class="col-md-3">
                    <div class="text-center">
                        <h5><b> Pengujian 4</b></h5>
                        <div class="row">
                            <div class="col-md-5">Persentase</div>
                            <div class="col-md-3">Jual</div>
                            <div class="col-md-4">Tahan</div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">8 %</div>
                            <div class="col-md-3"> <?= json_encode($saham[35]['jual'])?></div>
                            <div class="col-md-4"><?= json_encode($saham[35]['tahan'])?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">4 %</div>
                            <div class="col-md-3"><?= json_encode($saham[34]['jual'])?></div>
                            <div class="col-md-4"><?= json_encode($saham[34]['tahan'])?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">2 %</div>
                            <div class="col-md-3"><?= json_encode($saham[33]['jual'])?></div>
                            <div class="col-md-4"><?= json_encode($saham[33]['tahan'])?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
	</div>
</div>


<script>
var SBS6 = document.getElementById('SBS6');
var myChart = new Chart(SBS6, {
    type: 'line',
    data: {
        labels: ['Pengujian 1', 'Pengujian 2', 'Pengujian 3', 'Pengujian 4'],
        datasets: [{
            label: 'Jual Saham',
            data: [<?= json_encode($saham[0]['jual']);?>, <?= json_encode($saham[9]['jual']);?>, <?= json_encode($saham[18]['jual']);?>, <?= json_encode($saham[27]['jual']);?>],
          
            borderColor: [
                '#23CE6B',
            ],
            borderWidth: 2,
            fill: false
        },{
            label: 'Tahan Saham',
            data: [<?= json_encode($saham[0]['tahan']);?>, <?= json_encode($saham[9]['tahan']);?>, <?= json_encode($saham[18]['tahan']);?>, <?= json_encode($saham[27]['tahan']);?>],
           
            borderColor: [
                'rgba(255, 99, 132, 1)'
            ],
            borderWidth: 2,
            fill: false
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

var SBS16 = document.getElementById('SBS16');
var myChart = new Chart(SBS16, {
    type: 'line',
    data: {
        labels: ['Pengujian 1', 'Pengujian 2', 'Pengujian 3', 'Pengujian 4'],
        datasets: [{
            label: 'Jual Saham',
            data: [<?= json_encode($saham[1]['jual']);?>, <?= json_encode($saham[10]['jual']);?>, <?= json_encode($saham[19]['jual']);?>, <?= json_encode($saham[28]['jual']);?>],
          
            borderColor: [
                '#23CE6B',
            ],
            borderWidth: 2,
            fill: false
        },{
            label: 'Tahan Saham',
            data: [<?= json_encode($saham[1]['tahan']);?>, <?= json_encode($saham[10]['tahan']);?>, <?= json_encode($saham[19]['tahan']);?>, <?= json_encode($saham[28]['tahan']);?>],
           
            borderColor: [
                'rgba(255, 99, 132, 1)'
            ],
            borderWidth: 2,
            fill: false
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

var SBS30 = document.getElementById('SBS30');
var myChart = new Chart(SBS30, {
    type: 'line',
    data: {
        labels: ['Pengujian 1', 'Pengujian 2', 'Pengujian 3', 'Pengujian 4'],
        datasets: [{
            label: 'Jual Saham',
            data: [<?= json_encode($saham[2]['jual']);?>, <?= json_encode($saham[11]['jual']);?>, <?= json_encode($saham[20]['jual']);?>, <?= json_encode($saham[29]['jual']);?>],
          
            borderColor: [
                '#23CE6B',
            ],
            borderWidth: 2,
            fill: false
        },{
            label: 'Tahan Saham',
            data: [<?= json_encode($saham[2]['tahan']);?>, <?= json_encode($saham[11]['tahan']);?>, <?= json_encode($saham[20]['tahan']);?>, <?= json_encode($saham[29]['tahan']);?>],
           
            borderColor: [
                'rgba(255, 99, 132, 1)'
            ],
            borderWidth: 2,
            fill: false
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

var LPS6 = document.getElementById('LPS6');
var myChart = new Chart(LPS6, {
    type: 'line',
    data: {
        labels: ['Pengujian 1', 'Pengujian 2', 'Pengujian 3', 'Pengujian 4'],
        datasets: [{
            label: 'Jual Saham',
            data: [<?= json_encode($saham[3]['jual']);?>, <?= json_encode($saham[12]['jual']);?>, <?= json_encode($saham[21]['jual']);?>, <?= json_encode($saham[30]['jual']);?>],
          
            borderColor: [
                '#23CE6B',
            ],
            borderWidth: 2,
            fill: false
        },{
            label: 'Tahan Saham',
            data: [<?= json_encode($saham[3]['tahan']);?>, <?= json_encode($saham[12]['tahan']);?>, <?= json_encode($saham[21]['tahan']);?>, <?= json_encode($saham[30]['tahan']);?>],
           
            borderColor: [
                'rgba(255, 99, 132, 1)'
            ],
            borderWidth: 2,
            fill: false
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

var LPS15 = document.getElementById('LPS15');
var myChart = new Chart(LPS15, {
    type: 'line',
    data: {
        labels: ['Pengujian 1', 'Pengujian 2', 'Pengujian 3', 'Pengujian 4'],
        datasets: [{
            label: 'Jual Saham',
            data: [<?= json_encode($saham[4]['jual']);?>, <?= json_encode($saham[13]['jual']);?>, <?= json_encode($saham[22]['jual']);?>, <?= json_encode($saham[31]['jual']);?>],
          
            borderColor: [
                '#23CE6B',
            ],
            borderWidth: 2,
            fill: false
        },{
            label: 'Tahan Saham',
            data: [<?= json_encode($saham[4]['tahan']);?>, <?= json_encode($saham[13]['tahan']);?>, <?= json_encode($saham[22]['tahan']);?>, <?= json_encode($saham[31]['tahan']);?>],
           
            borderColor: [
                'rgba(255, 99, 132, 1)'
            ],
            borderWidth: 2,
            fill: false
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

var LPS25 = document.getElementById('LPS25');
var myChart = new Chart(LPS25, {
    type: 'line',
    data: {
        labels: ['Pengujian 1', 'Pengujian 2', 'Pengujian 3', 'Pengujian 4'],
        datasets: [{
            label: 'Jual Saham',
            data: [<?= json_encode($saham[5]['jual']);?>, <?= json_encode($saham[14]['jual']);?>, <?= json_encode($saham[23]['jual']);?>, <?= json_encode($saham[32]['jual']);?>],
          
            borderColor: [
                '#23CE6B',
            ],
            borderWidth: 2,
            fill: false
        },{
            label: 'Tahan Saham',
            data: [<?= json_encode($saham[5]['tahan']);?>, <?= json_encode($saham[14]['tahan']);?>, <?= json_encode($saham[23]['tahan']);?>, <?= json_encode($saham[32]['tahan']);?>],
           
            borderColor: [
                'rgba(255, 99, 132, 1)'
            ],
            borderWidth: 2,
            fill: false
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

var KPMM8 = document.getElementById('KPMM8');
var myChart = new Chart(KPMM8, {
    type: 'line',
    data: {
        labels: ['Pengujian 1', 'Pengujian 2', 'Pengujian 3', 'Pengujian 4'],
        datasets: [{
            label: 'Jual Saham',
            data: [<?= json_encode($saham[8]['jual']);?>, <?= json_encode($saham[17]['jual']);?>, <?= json_encode($saham[26]['jual']);?>, <?= json_encode($saham[35]['jual']);?>],
          
            borderColor: [
                '#23CE6B',
            ],
            borderWidth: 2,
            fill: false
        },{
            label: 'Tahan Saham',
            data: [<?= json_encode($saham[8]['tahan']);?>, <?= json_encode($saham[17]['tahan']);?>, <?= json_encode($saham[26]['tahan']);?>, <?= json_encode($saham[35]['tahan']);?>],
           
            borderColor: [
                'rgba(255, 99, 132, 1)'
            ],
            borderWidth: 2,
            fill: false
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

var KPMM4 = document.getElementById('KPMM4');
var myChart = new Chart(KPMM4, {
    type: 'line',
    data: {
        labels: ['Pengujian 1', 'Pengujian 2', 'Pengujian 3', 'Pengujian 4'],
        datasets: [{
            label: 'Jual Saham',
            data: [<?= json_encode($saham[7]['jual']);?>, <?= json_encode($saham[16]['jual']);?>, <?= json_encode($saham[25]['jual']);?>, <?= json_encode($saham[34]['jual']);?>],
          
            borderColor: [
                '#23CE6B',
            ],
            borderWidth: 2,
            fill: false
        },{
            label: 'Tahan Saham',
            data: [<?= json_encode($saham[7]['tahan']);?>, <?= json_encode($saham[16]['tahan']);?>, <?= json_encode($saham[25]['tahan']);?>, <?= json_encode($saham[34]['tahan']);?>],
           
            borderColor: [
                'rgba(255, 99, 132, 1)'
            ],
            borderWidth: 2,
            fill: false
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

var KPMM2 = document.getElementById('KPMM2');
var myChart = new Chart(KPMM2, {
    type: 'line',
    data: {
        labels: ['Pengujian 1', 'Pengujian 2', 'Pengujian 3', 'Pengujian 4'],
        datasets: [{
            label: 'Jual Saham',
            data: [<?= json_encode($saham[6]['jual']);?>, <?= json_encode($saham[15]['jual']);?>, <?= json_encode($saham[24]['jual']);?>, <?= json_encode($saham[33]['jual']);?>],
          
            borderColor: [
                '#23CE6B',
            ],
            borderWidth: 2,
            fill: false
        },{
            label: 'Tahan Saham',
            data: [<?= json_encode($saham[6]['tahan']);?>, <?= json_encode($saham[15]['tahan']);?>, <?= json_encode($saham[24]['tahan']);?>, <?= json_encode($saham[33]['tahan']);?>],
           
            borderColor: [
                'rgba(255, 99, 132, 1)'
            ],
            borderWidth: 2,
            fill: false
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

var SBS_uji_1 = document.getElementById('SBS_uji_1');
var myChart = new Chart(SBS_uji_1, {
    type: 'line',
    data: {
        labels: ['6 %', '16 %', '30 %'],
        datasets: [{
            label: 'Jual Saham',
            data: [<?= json_encode($saham[0]['jual']);?>, <?= json_encode($saham[1]['jual']);?>, <?= json_encode($saham[2]['jual']);?>],
          
            borderColor: [
                '#23CE6B',
            ],
            borderWidth: 2,
            fill: false
        },{
            label: 'Tahan Saham',
            data: [<?= json_encode($saham[0]['tahan']);?>, <?= json_encode($saham[1]['tahan']);?>, <?= json_encode($saham[2]['tahan']);?>],
           
            borderColor: [
                'rgba(255, 99, 132, 1)'
            ],
            borderWidth: 2,
            fill: false
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

var SBS_uji_2 = document.getElementById('SBS_uji_2');
var myChart = new Chart(SBS_uji_2, {
    type: 'line',
    data: {
        labels: ['6 %', '16 %', '30 %'],
        datasets: [{
            label: 'Jual Saham',
            data: [<?= json_encode($saham[9]['jual']);?>, <?= json_encode($saham[10]['jual']);?>, <?= json_encode($saham[11]['jual']);?>],
          
            borderColor: [
                '#23CE6B',
            ],
            borderWidth: 2,
            fill: false
        },{
            label: 'Tahan Saham',
            data: [<?= json_encode($saham[9]['tahan']);?>, <?= json_encode($saham[10]['tahan']);?>, <?= json_encode($saham[11]['tahan']);?>],
           
            borderColor: [
                'rgba(255, 99, 132, 1)'
            ],
            borderWidth: 2,
            fill: false
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

var SBS_uji_3 = document.getElementById('SBS_uji_3');
var myChart = new Chart(SBS_uji_3, {
    type: 'line',
    data: {
        labels: ['6 %', '16 %', '30 %'],
        datasets: [{
            label: 'Jual Saham',
            data: [<?= json_encode($saham[18]['jual']);?>, <?= json_encode($saham[19]['jual']);?>, <?= json_encode($saham[20]['jual']);?>],
          
            borderColor: [
                '#23CE6B',
            ],
            borderWidth: 2,
            fill: false
        },{
            label: 'Tahan Saham',
            data: [<?= json_encode($saham[18]['tahan']);?>, <?= json_encode($saham[19]['tahan']);?>, <?= json_encode($saham[20]['tahan']);?>],
           
            borderColor: [
                'rgba(255, 99, 132, 1)'
            ],
            borderWidth: 2,
            fill: false
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

var SBS_uji_4 = document.getElementById('SBS_uji_4');
var myChart = new Chart(SBS_uji_4, {
    type: 'line',
    data: {
        labels: ['6 %', '16 %', '30 %'],
        datasets: [{
            label: 'Jual Saham',
            data: [<?= json_encode($saham[27]['jual']);?>, <?= json_encode($saham[28]['jual']);?>, <?= json_encode($saham[29]['jual']);?>],
          
            borderColor: [
                '#23CE6B',
            ],
            borderWidth: 2,
            fill: false
        },{
            label: 'Tahan Saham',
            data: [<?= json_encode($saham[27]['tahan']);?>, <?= json_encode($saham[28]['tahan']);?>, <?= json_encode($saham[29]['tahan']);?>],
           
            borderColor: [
                'rgba(255, 99, 132, 1)'
            ],
            borderWidth: 2,
            fill: false
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

var LPS_uji_1 = document.getElementById('LPS_uji_1');
var myChart = new Chart(LPS_uji_1, {
    type: 'line',
    data: {
        labels: ['6 %', '15 %', '25 %'],
        datasets: [{
            label: 'Jual Saham',
            data: [<?= json_encode($saham[3]['jual']);?>, <?= json_encode($saham[4]['jual']);?>, <?= json_encode($saham[5]['jual']);?>],
          
            borderColor: [
                '#23CE6B',
            ],
            borderWidth: 2,
            fill: false
        },{
            label: 'Tahan Saham',
            data: [<?= json_encode($saham[3]['tahan']);?>, <?= json_encode($saham[4]['tahan']);?>, <?= json_encode($saham[5]['tahan']);?>],
           
            borderColor: [
                'rgba(255, 99, 132, 1)'
            ],
            borderWidth: 2,
            fill: false
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

var LPS_uji_2 = document.getElementById('LPS_uji_2');
var myChart = new Chart(LPS_uji_2, {
    type: 'line',
    data: {
        labels: ['6 %', '15 %', '25 %'],
        datasets: [{
            label: 'Jual Saham',
            data: [<?= json_encode($saham[12]['jual']);?>, <?= json_encode($saham[13]['jual']);?>, <?= json_encode($saham[14]['jual']);?>],
          
            borderColor: [
                '#23CE6B',
            ],
            borderWidth: 2,
            fill: false
        },{
            label: 'Tahan Saham',
            data: [<?= json_encode($saham[12]['tahan']);?>, <?= json_encode($saham[13]['tahan']);?>, <?= json_encode($saham[14]['tahan']);?>],
           
            borderColor: [
                'rgba(255, 99, 132, 1)'
            ],
            borderWidth: 2,
            fill: false
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

var LPS_uji_3 = document.getElementById('LPS_uji_3');
var myChart = new Chart(LPS_uji_3, {
    type: 'line',
    data: {
        labels: ['6 %', '15 %', '25 %'],
        datasets: [{
            label: 'Jual Saham',
            data: [<?= json_encode($saham[21]['jual']);?>, <?= json_encode($saham[22]['jual']);?>, <?= json_encode($saham[23]['jual']);?>],
          
            borderColor: [
                '#23CE6B',
            ],
            borderWidth: 2,
            fill: false
        },{
            label: 'Tahan Saham',
            data: [<?= json_encode($saham[21]['tahan']);?>, <?= json_encode($saham[22]['tahan']);?>, <?= json_encode($saham[23]['tahan']);?>],
           
            borderColor: [
                'rgba(255, 99, 132, 1)'
            ],
            borderWidth: 2,
            fill: false
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

var LPS_uji_4 = document.getElementById('LPS_uji_4');
var myChart = new Chart(LPS_uji_4, {
    type: 'line',
    data: {
        labels: ['6 %', '15 %', '25 %'],
        datasets: [{
            label: 'Jual Saham',
            data: [<?= json_encode($saham[30]['jual']);?>, <?= json_encode($saham[31]['jual']);?>, <?= json_encode($saham[32]['jual']);?>],
          
            borderColor: [
                '#23CE6B',
            ],
            borderWidth: 2,
            fill: false
        },{
            label: 'Tahan Saham',
            data: [<?= json_encode($saham[30]['tahan']);?>, <?= json_encode($saham[31]['tahan']);?>, <?= json_encode($saham[32]['tahan']);?>],
           
            borderColor: [
                'rgba(255, 99, 132, 1)'
            ],
            borderWidth: 2,
            fill: false
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

var KPMM_uji_1 = document.getElementById('KPMM_uji_1');
var myChart = new Chart(KPMM_uji_1, {
    type: 'line',
    data: {
        labels: ['8 %', '4 %', '2 %'],
        datasets: [{
            label: 'Jual Saham',
            data: [<?= json_encode($saham[8]['jual']);?>, <?= json_encode($saham[7]['jual']);?>, <?= json_encode($saham[6]['jual']);?>],
          
            borderColor: [
                '#23CE6B',
            ],
            borderWidth: 2,
            fill: false
        },{
            label: 'Tahan Saham',
            data: [<?= json_encode($saham[8]['tahan']);?>, <?= json_encode($saham[7]['tahan']);?>, <?= json_encode($saham[6]['tahan']);?>],
           
            borderColor: [
                'rgba(255, 99, 132, 1)'
            ],
            borderWidth: 2,
            fill: false
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

var KPMM_uji_2 = document.getElementById('KPMM_uji_2');
var myChart = new Chart(KPMM_uji_2, {
    type: 'line',
    data: {
        labels: ['8 %', '4 %', '2 %'],
        datasets: [{
            label: 'Jual Saham',
            data: [<?= json_encode($saham[17]['jual']);?>, <?= json_encode($saham[16]['jual']);?>, <?= json_encode($saham[15]['jual']);?>],
          
            borderColor: [
                '#23CE6B',
            ],
            borderWidth: 2,
            fill: false
        },{
            label: 'Tahan Saham',
            data: [<?= json_encode($saham[17]['tahan']);?>, <?= json_encode($saham[16]['tahan']);?>, <?= json_encode($saham[15]['tahan']);?>],
           
            borderColor: [
                'rgba(255, 99, 132, 1)'
            ],
            borderWidth: 2,
            fill: false
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

var KPMM_uji_3 = document.getElementById('KPMM_uji_3');
var myChart = new Chart(KPMM_uji_3, {
    type: 'line',
    data: {
        labels: ['8 %', '4 %', '2 %'],
        datasets: [{
            label: 'Jual Saham',
            data: [<?= json_encode($saham[26]['jual']);?>, <?= json_encode($saham[25]['jual']);?>, <?= json_encode($saham[24]['jual']);?>],
          
            borderColor: [
                '#23CE6B',
            ],
            borderWidth: 2,
            fill: false
        },{
            label: 'Tahan Saham',
            data: [<?= json_encode($saham[26]['tahan']);?>, <?= json_encode($saham[25]['tahan']);?>, <?= json_encode($saham[24]['tahan']);?>],
           
            borderColor: [
                'rgba(255, 99, 132, 1)'
            ],
            borderWidth: 2,
            fill: false
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

var KPMM_uji_4 = document.getElementById('KPMM_uji_4');
var myChart = new Chart(KPMM_uji_4, {
    type: 'line',
    data: {
        labels: ['8 %', '4 %', '2 %'],
        datasets: [{
            label: 'Jual Saham',
            data: [<?= json_encode($saham[35]['jual']);?>, <?= json_encode($saham[34]['jual']);?>, <?= json_encode($saham[33]['jual']);?>],
          
            borderColor: [
                '#23CE6B',
            ],
            borderWidth: 2,
            fill: false
        },{
            label: 'Tahan Saham',
            data: [<?= json_encode($saham[35]['tahan']);?>, <?= json_encode($saham[34]['tahan']);?>, <?= json_encode($saham[33]['tahan']);?>],
           
            borderColor: [
                'rgba(255, 99, 132, 1)'
            ],
            borderWidth: 2,
            fill: false
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>



