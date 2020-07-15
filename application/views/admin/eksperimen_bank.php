
<ul class="nav nav-tabs nav-tabs-bottom border-bottom-0 ">
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
                        <div class="col-md-4"><b>Tarik</b></div>
                        <div class="col-md-4"><b>Tahan</b></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">1</div>
                        <div class="col-md-4"><?= json_encode($bank[0]['tarik']);?></div>
                        <div class="col-md-4"><?= json_encode($bank[0]['tahan']);?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">2</div>
                        <div class="col-md-4"><?= json_encode($bank[9]['tarik']);?></div>
                        <div class="col-md-4"><?= json_encode($bank[9]['tahan']);?></div>
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
                        <div class="col-md-4"><b>Tarik</b></div>
                        <div class="col-md-4"><b>Tahan</b></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">1</div>
                        <div class="col-md-4"><?= json_encode($bank[1]['tarik']);?></div>
                        <div class="col-md-4"><?= json_encode($bank[1]['tahan']);?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">2</div>
                        <div class="col-md-4"><?= json_encode($bank[10]['tarik']);?></div>
                        <div class="col-md-4"><?= json_encode($bank[10]['tahan']);?></div>
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
                        <div class="col-md-4"><b>Tarik</b></div>
                        <div class="col-md-4"><b>Tahan</b></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">1</div>
                        <div class="col-md-4"><?= json_encode($bank[2]['tarik']);?></div>
                        <div class="col-md-4"><?= json_encode($bank[2]['tahan']);?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">2</div>
                        <div class="col-md-4"><?= json_encode($bank[11]['tarik']);?></div>
                        <div class="col-md-4"><?= json_encode($bank[11]['tahan']);?></div>
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
                            <div class="col-md-3">Tarik</div>
                            <div class="col-md-4">Tahan</div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">6 %</div>
                            <div class="col-md-3"> <?= json_encode($bank[0]['tarik'])?></div>
                            <div class="col-md-4"><?= json_encode($bank[0]['tahan'])?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">16 %</div>
                            <div class="col-md-3"><?= json_encode($bank[1]['tarik'])?></div>
                            <div class="col-md-4"><?= json_encode($bank[1]['tahan'])?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">30 %</div>
                            <div class="col-md-3"><?= json_encode($bank[2]['tarik'])?></div>
                            <div class="col-md-4"><?= json_encode($bank[2]['tahan'])?></div>
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
                            <div class="col-md-3">Tarik</div>
                            <div class="col-md-4">Tahan</div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">6 %</div>
                            <div class="col-md-3"> <?= json_encode($bank[9]['tarik'])?></div>
                            <div class="col-md-4"><?= json_encode($bank[9]['tahan'])?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">16 %</div>
                            <div class="col-md-3"><?= json_encode($bank[10]['tarik'])?></div>
                            <div class="col-md-4"><?= json_encode($bank[10]['tahan'])?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">30 %</div>
                            <div class="col-md-3"><?= json_encode($bank[11]['tarik'])?></div>
                            <div class="col-md-4"><?= json_encode($bank[11]['tahan'])?></div>
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
                        <div class="col-md-4"><b>Tarik</b></div>
                        <div class="col-md-4"><b>Tahan</b></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">1</div>
                        <div class="col-md-4"><?= json_encode($bank[3]['tarik']);?></div>
                        <div class="col-md-4"><?= json_encode($bank[3]['tahan']);?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">2</div>
                        <div class="col-md-4"><?= json_encode($bank[12]['tarik']);?></div>
                        <div class="col-md-4"><?= json_encode($bank[12]['tahan']);?></div>
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
                        <div class="col-md-4"><b>Tarik</b></div>
                        <div class="col-md-4"><b>Tahan</b></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">1</div>
                        <div class="col-md-4"><?= json_encode($bank[4]['tarik']);?></div>
                        <div class="col-md-4"><?= json_encode($bank[4]['tahan']);?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">2</div>
                        <div class="col-md-4"><?= json_encode($bank[13]['tarik']);?></div>
                        <div class="col-md-4"><?= json_encode($bank[13]['tahan']);?></div>
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
                        <div class="col-md-4"><b>Tarik</b></div>
                        <div class="col-md-4"><b>Tahan</b></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">1</div>
                        <div class="col-md-4"><?= json_encode($bank[5]['tarik']);?></div>
                        <div class="col-md-4"><?= json_encode($bank[5]['tahan']);?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">2</div>
                        <div class="col-md-4"><?= json_encode($bank[14]['tarik']);?></div>
                        <div class="col-md-4"><?= json_encode($bank[14]['tahan']);?></div>
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
                            <div class="col-md-3">Tarik</div>
                            <div class="col-md-4">Tahan</div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">6 %</div>
                            <div class="col-md-3"> <?= json_encode($bank[3]['tarik'])?></div>
                            <div class="col-md-4"><?= json_encode($bank[3]['tahan'])?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">15 %</div>
                            <div class="col-md-3"><?= json_encode($bank[4]['tarik'])?></div>
                            <div class="col-md-4"><?= json_encode($bank[4]['tahan'])?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">25 %</div>
                            <div class="col-md-3"><?= json_encode($bank[5]['tarik'])?></div>
                            <div class="col-md-4"><?= json_encode($bank[5]['tahan'])?></div>
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
                            <div class="col-md-3">Tarik</div>
                            <div class="col-md-4">Tahan</div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">6 %</div>
                            <div class="col-md-3"> <?= json_encode($bank[12]['tarik'])?></div>
                            <div class="col-md-4"><?= json_encode($bank[12]['tahan'])?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">15 %</div>
                            <div class="col-md-3"><?= json_encode($bank[13]['tarik'])?></div>
                            <div class="col-md-4"><?= json_encode($bank[13]['tahan'])?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">25 %</div>
                            <div class="col-md-3"><?= json_encode($bank[14]['tarik'])?></div>
                            <div class="col-md-4"><?= json_encode($bank[14]['tahan'])?></div>
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
                        <div class="col-md-4"><b>Tarik</b></div>
                        <div class="col-md-4"><b>Tahan</b></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">1</div>
                        <div class="col-md-4"><?= json_encode($bank[8]['tarik']);?></div>
                        <div class="col-md-4"><?= json_encode($bank[8]['tahan']);?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">2</div>
                        <div class="col-md-4"><?= json_encode($bank[17]['tarik']);?></div>
                        <div class="col-md-4"><?= json_encode($bank[17]['tahan']);?></div>
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
                        <div class="col-md-4"><b>Tarik</b></div>
                        <div class="col-md-4"><b>Tahan</b></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">1</div>
                        <div class="col-md-4"><?= json_encode($bank[7]['tarik']);?></div>
                        <div class="col-md-4"><?= json_encode($bank[7]['tahan']);?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">2</div>
                        <div class="col-md-4"><?= json_encode($bank[16]['tarik']);?></div>
                        <div class="col-md-4"><?= json_encode($bank[16]['tahan']);?></div>
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
                        <div class="col-md-4"><b>Tarik</b></div>
                        <div class="col-md-4"><b>Tahan</b></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">1</div>
                        <div class="col-md-4"><?= json_encode($bank[6]['tarik']);?></div>
                        <div class="col-md-4"><?= json_encode($bank[6]['tahan']);?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">2</div>
                        <div class="col-md-4"><?= json_encode($bank[15]['tarik']);?></div>
                        <div class="col-md-4"><?= json_encode($bank[15]['tahan']);?></div>
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
                            <div class="col-md-3">Tarik</div>
                            <div class="col-md-4">Tahan</div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">8 %</div>
                            <div class="col-md-3"> <?= json_encode($bank[8]['tarik'])?></div>
                            <div class="col-md-4"><?= json_encode($bank[8]['tahan'])?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">4 %</div>
                            <div class="col-md-3"><?= json_encode($bank[7]['tarik'])?></div>
                            <div class="col-md-4"><?= json_encode($bank[7]['tahan'])?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">2 %</div>
                            <div class="col-md-3"><?= json_encode($bank[6]['tarik'])?></div>
                            <div class="col-md-4"><?= json_encode($bank[6]['tahan'])?></div>
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
                            <div class="col-md-3">Tarik</div>
                            <div class="col-md-4">Tahan</div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">8 %</div>
                            <div class="col-md-3"> <?= json_encode($bank[17]['tarik'])?></div>
                            <div class="col-md-4"><?= json_encode($bank[17]['tahan'])?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">4 %</div>
                            <div class="col-md-3"><?= json_encode($bank[16]['tarik'])?></div>
                            <div class="col-md-4"><?= json_encode($bank[16]['tahan'])?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">2 %</div>
                            <div class="col-md-3"><?= json_encode($bank[15]['tarik'])?></div>
                            <div class="col-md-4"><?= json_encode($bank[15]['tahan'])?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       
		
    </div>
		
</div>

<script type="text/javascript">
var SBS6 = document.getElementById('SBS6');
var myChart = new Chart(SBS6, {
    type: 'line',
    data: {
        labels: ['Pengujian 1', 'Pengujian 2'],
        datasets: [{
            label: 'Tarik Tabungan',
            data: [<?= json_encode($bank[0]['tarik']);?>, <?= json_encode($bank[9]['tarik']);?>],
          
            borderColor: [
                '#23CE6B',
            ],
            borderWidth: 2,
            fill: false
        },{
            label: 'Tidak Menarik Tabungan',
            data: [<?= json_encode($bank[0]['tahan']);?>, <?= json_encode($bank[9]['tahan']);?>],
           
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
        labels: ['Pengujian 1', 'Pengujian 2'],
        datasets: [{
            label: 'Tarik Tabungan',
            data: [<?= json_encode($bank[1]['tarik']);?>, <?= json_encode($bank[10]['tarik']);?>],
          
            borderColor: [
                '#23CE6B',
            ],
            borderWidth: 2,
            fill: false
        },{
            label: 'Tidak Menarik Tabungan',
            data: [<?= json_encode($bank[1]['tahan']);?>, <?= json_encode($bank[10]['tahan']);?>],
           
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
        labels: ['Pengujian 1', 'Pengujian 2'],
        datasets: [{
            label: 'Tarik Tabungan',
            data: [<?= json_encode($bank[2]['tarik']);?>, <?= json_encode($bank[11]['tarik']);?>],
          
            borderColor: [
                '#23CE6B',
            ],
            borderWidth: 2,
            fill: false
        },{
            label: 'Tidak Menarik Tabungan',
            data: [<?= json_encode($bank[2]['tahan']);?>, <?= json_encode($bank[11]['tahan']);?>],
           
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
        labels: ['Pengujian 1', 'Pengujian 2'],
        datasets: [{
            label: 'Tarik Tabungan',
            data: [<?= json_encode($bank[3]['tarik']);?>, <?= json_encode($bank[12]['tarik']);?>],
          
            borderColor: [
                '#23CE6B',
            ],
            borderWidth: 2,
            fill: false
        },{
            label: 'Tidak Menarik Tabungan',
            data: [<?= json_encode($bank[3]['tahan']);?>, <?= json_encode($bank[12]['tahan']);?>],
           
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
        labels: ['Pengujian 1', 'Pengujian 2'],
        datasets: [{
            label: 'Tarik Tabungan',
            data: [<?= json_encode($bank[4]['tarik']);?>, <?= json_encode($bank[13]['tarik']);?>],
          
            borderColor: [
                '#23CE6B',
            ],
            borderWidth: 2,
            fill: false
        },{
            label: 'Tidak Menarik Tabungan',
            data: [<?= json_encode($bank[4]['tahan']);?>, <?= json_encode($bank[13]['tahan']);?>],
           
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
        labels: ['Pengujian 1', 'Pengujian 2'],
        datasets: [{
            label: 'Tarik Tabungan',
            data: [<?= json_encode($bank[5]['tarik']);?>, <?= json_encode($bank[14]['tarik']);?>],
          
            borderColor: [
                '#23CE6B',
            ],
            borderWidth: 2,
            fill: false
        },{
            label: 'Tidak Menarik Tabungan',
            data: [<?= json_encode($bank[5]['tahan']);?>, <?= json_encode($bank[14]['tahan']);?>],
           
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
        labels: ['Pengujian 1', 'Pengujian 2'],
        datasets: [{
            label: 'Tarik Tabungan',
            data: [<?= json_encode($bank[8]['tarik']);?>, <?= json_encode($bank[17]['tarik']);?>],
          
            borderColor: [
                '#23CE6B',
            ],
            borderWidth: 2,
            fill: false
        },{
            label: 'Tidak Menarik Tabungan',
            data: [<?= json_encode($bank[8]['tahan']);?>, <?= json_encode($bank[17]['tahan']);?>],
           
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
        labels: ['Pengujian 1', 'Pengujian 2'],
        datasets: [{
            label: 'Tarik Tabungan',
            data: [<?= json_encode($bank[7]['tarik']);?>, <?= json_encode($bank[16]['tarik']);?>],
          
            borderColor: [
                '#23CE6B',
            ],
            borderWidth: 2,
            fill: false
        },{
            label: 'Tidak Menarik Tabungan',
            data: [<?= json_encode($bank[7]['tahan']);?>, <?= json_encode($bank[16]['tahan']);?>],
           
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
        labels: ['Pengujian 1', 'Pengujian 2'],
        datasets: [{
            label: 'Tarik Tabungan',
            data: [<?= json_encode($bank[6]['tarik']);?>, <?= json_encode($bank[15]['tarik']);?>],
          
            borderColor: [
                '#23CE6B',
            ],
            borderWidth: 2,
            fill: false
        },{
            label: 'Tidak Menarik Tabungan',
            data: [<?= json_encode($bank[6]['tahan']);?>, <?= json_encode($bank[15]['tahan']);?>],
           
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
            label: 'Tarik Tabungan',
            data: [<?= json_encode($bank[0]['tarik']);?>, <?= json_encode($bank[1]['tarik']);?>, <?= json_encode($bank[2]['tarik']);?>],
          
            borderColor: [
                '#23CE6B',
            ],
            borderWidth: 2,
            fill: false
        },{
            label: 'Tidak Menarik Tabungan',
            data: [<?= json_encode($bank[0]['tahan']);?>, <?= json_encode($bank[1]['tahan']);?>, <?= json_encode($bank[2]['tahan']);?>],
           
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
            label: 'Tarik Tabungan',
            data: [<?= json_encode($bank[9]['tarik']);?>, <?= json_encode($bank[10]['tarik']);?>, <?= json_encode($bank[11]['tarik']);?>],
          
            borderColor: [
                '#23CE6B',
            ],
            borderWidth: 2,
            fill: false
        },{
            label: 'Tidak Menarik Tabungan',
            data: [<?= json_encode($bank[9]['tahan']);?>, <?= json_encode($bank[10]['tahan']);?>, <?= json_encode($bank[11]['tahan']);?>],
           
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
            label: 'Tarik Tabungan',
            data: [<?= json_encode($bank[3]['tarik']);?>, <?= json_encode($bank[4]['tarik']);?>, <?= json_encode($bank[5]['tarik']);?>],
          
            borderColor: [
                '#23CE6B',
            ],
            borderWidth: 2,
            fill: false
        },{
            label: 'Tidak Menarik Tabungan',
            data: [<?= json_encode($bank[3]['tahan']);?>, <?= json_encode($bank[4]['tahan']);?>, <?= json_encode($bank[5]['tahan']);?>],
           
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
            label: 'Tarik Tabungan',
            data: [<?= json_encode($bank[12]['tarik']);?>, <?= json_encode($bank[13]['tarik']);?>, <?= json_encode($bank[14]['tarik']);?>],
          
            borderColor: [
                '#23CE6B',
            ],
            borderWidth: 2,
            fill: false
        },{
            label: 'Tidak Menarik Tabungan',
            data: [<?= json_encode($bank[12]['tahan']);?>, <?= json_encode($bank[13]['tahan']);?>, <?= json_encode($bank[14]['tahan']);?>],
           
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
            label: 'Tarik Tabungan',
            data: [<?= json_encode($bank[8]['tarik']);?>, <?= json_encode($bank[7]['tarik']);?>, <?= json_encode($bank[6]['tarik']);?>],
          
            borderColor: [
                '#23CE6B',
            ],
            borderWidth: 2,
            fill: false
        },{
            label: 'Tidak Menarik Tabungan',
            data: [<?= json_encode($bank[8]['tahan']);?>, <?= json_encode($bank[7]['tahan']);?>, <?= json_encode($bank[6]['tahan']);?>],
           
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
            label: 'Tarik Tabungan',
            data: [<?= json_encode($bank[17]['tarik']);?>, <?= json_encode($bank[16]['tarik']);?>, <?= json_encode($bank[15]['tarik']);?>],
          
            borderColor: [
                '#23CE6B',
            ],
            borderWidth: 2,
            fill: false
        },{
            label: 'Tidak Menarik Tabungan',
            data: [<?= json_encode($bank[17]['tahan']);?>, <?= json_encode($bank[16]['tahan']);?>, <?= json_encode($bank[15]['tahan']);?>],
           
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

