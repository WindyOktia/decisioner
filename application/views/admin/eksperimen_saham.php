<form action="" method="get">
    <div class="row">
        <div class="col-3">
            <select name="sesi" id="" class="form-control">
                <option value="">Pilih Sesi</option>
                <option value="1">Sesi 1</option>
                <option value="2">Sesi 2</option>
                <option value="3">Sesi 3</option>
                <option value="4">Sesi 4</option>
                <option value="5">Sesi 5</option>
                <option value="6">Sesi 6</option>
            </select>
        </div>

        <div class="col-3">
            <select name="tipe" id="" class="form-control">
                <option value="">Pilih Tipe</option>
                <option value="1">Tanpa Prospek</option>
                <option value="2">Dengan Prospek</option>
                <option value="3">Realtime Data Bank - Tanpa Referensi</option>
                <option value="4">Realtime Data Bank - Dengan Referensi</option>
            </select>
        </div>

        <div class="col-2">
            <button type="submit" class="btn btn-info">Filter</button>
        </div>
        <!-- <div class="col">
            <button type="submit" class="btn btn-success">Export Excel</button>
        </div> -->
    </div>
</form>

<ul class="nav nav-tabs nav-tabs-bottom border-bottom-0 mt-3">
	<li class="nav-item"><a href="#bottom-divided-tab1" class="nav-link active" data-toggle="tab">Suku Bunga Simpanan</a></li>
	<li class="nav-item"><a href="#bottom-divided-tab2" class="nav-link" data-toggle="tab">Suku Bunga LPS</a></li>
	<li class="nav-item"><a href="#bottom-divided-tab3" class="nav-link" data-toggle="tab">Rasio KPMM</a></li>
	
</ul>
<div class="tab-content">
	<div class="tab-pane fade show active" id="bottom-divided-tab1">	
		<div class="row">
			<div class="col-md-4">
				<div class="card border border-info">
					<div class="card-header">
						<h6 class="card-title text-center"><b>6%</b></h6>
					</div>
					<div class="card-body">
						<canvas id="SBS_6" width="400" height="200"></canvas>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card border border-info">
					<div class="card-header">
						<h6 class="card-title text-center"><b>16%</b></h6>
					</div>

					<div class="card-body">
						<canvas id="SBS_16" width="400" height="200"></canvas>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card border border-info">
					<div class="card-header">
						<h6 class="card-title text-center"><b>30%</b></h6>
					</div>

					<div class="card-body">
						<canvas id="SBS_30" width="400" height="200"></canvas>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="tab-pane fade show" id="bottom-divided-tab2">	
		<div class="row">
			<div class="col-md-4">
				<div class="card border border-info">
					<div class="card-header">
						<h6 class="card-title text-center"><b>6%</b></h6>
					</div>
					<div class="card-body">
						<canvas id="SBL_6" width="400" height="200"></canvas>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card border border-info">
					<div class="card-header">
						<h6 class="card-title text-center"><b>15%</b></h6>
					</div>

					<div class="card-body">
						<canvas id="SBL_15" width="400" height="200"></canvas>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card border border-info">
					<div class="card-header">
						<h6 class="card-title text-center"><b>25%</b></h6>
					</div>

					<div class="card-body">
						<canvas id="SBL_25" width="400" height="200"></canvas>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="tab-pane fade show" id="bottom-divided-tab3">	
		<div class="row">
			<div class="col-md-4">
				<div class="card border border-info">
					<div class="card-header">
						<h6 class="card-title text-center"><b>8%</b></h6>
					</div>
					<div class="card-body">
						<canvas id="Ras_8" width="400" height="200"></canvas>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card border border-info">
					<div class="card-header">
						<h6 class="card-title text-center"><b>4%</b></h6>
					</div>

					<div class="card-body">
						<canvas id="Ras_4" width="400" height="200"></canvas>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card border border-info">
					<div class="card-header">
						<h6 class="card-title text-center"><b>2%</b></h6>
					</div>

					<div class="card-body">
						<canvas id="Ras_2" width="400" height="200"></canvas>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
    var SBS_6 = document.getElementById('SBS_6').getContext('2d');
    var SBS_16 = document.getElementById('SBS_16').getContext('2d');
    var SBS_30 = document.getElementById('SBS_30').getContext('2d');
    var SBL_6 = document.getElementById('SBL_6').getContext('2d');
    var SBL_15 = document.getElementById('SBL_15').getContext('2d');
    var SBL_25 = document.getElementById('SBL_25').getContext('2d');
    var Ras_8 = document.getElementById('Ras_8').getContext('2d');
    var Ras_4 = document.getElementById('Ras_4').getContext('2d');
    var Ras_2 = document.getElementById('Ras_2').getContext('2d');

    var SBS_6_ch = new Chart(SBS_6, {
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
    var SBS_16_ch = new Chart(SBS_16, {
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
    var SBS_30_ch = new Chart(SBS_30, {
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
    var SBL_6_ch = new Chart(SBL_6, {
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
	var SBL_15_ch = new Chart(SBL_15, {
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
	var SBL_25_ch = new Chart(SBL_25, {
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
	var Ras_8_ch = new Chart(Ras_8, {
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
	var Ras_4_ch = new Chart(Ras_4, {
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
	var Ras_2_ch = new Chart(Ras_2, {
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

