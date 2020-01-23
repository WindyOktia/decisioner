
<h4 class="mt-3"><a href="<?= base_url('admin')?>"><i class="fa fa-arrow-circle-left mr-2"></i></a> <span>|</span> Detail Data</h4>

<div class="card border border-info">
    <div class="card-body">
        <legend class="text-uppercase font-size-sm font-weight-bold">Informasi</legend>
        <h3>Simulasi 1</h3>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
        </p>
        <div class="row">
            <div class="col text-secondary"><i class="	fa fa-calendar mr-2 mt-3"></i>02-02-2020</div>
        </div> 

    </div>
</div>


<div class="row">
	<div class="col-md-6">
		<div class="card border border-warning">
			<div class="card-header">
				<h6 class="card-title"><b>Tanpa Referensi</b></h6>
			</div>
			
            <div class="card-body">
            <canvas id="myChartf" width="400" height="200"></canvas>
            </div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="card border border-warning">
			<div class="card-header">
				<h6 class="card-title"><b>Dengan Referensi</b></h6>
			</div>
			
            <div class="card-body">
            <canvas id="myChart" width="400" height="200"></canvas>
            </div>
		</div>
    </div>
    <!-- settings -->
		<input type="hidden" id="opsi1_1" value="Tarik">			
		<input type="hidden" id="opsi1_2" value="Tetap Simpan">

		<input type="hidden" id="opsi2_1" value="Jual">			
		<input type="hidden" id="opsi2_2" value="Tetap Simpan">
	<!-- settings -->
</div>

<div class="card">
	<div class="card-header header-elements-inline">
		<h5 class="card-title">Daftar Responden</h5>
	</div>
    <div class="card-body">
        <ul class="nav nav-tabs nav-tabs-bottom border-bottom-0">
            <li class="nav-item"><a href="#bottom-divided-tab1" class="nav-link active" data-toggle="tab">Tanpa Referensi</a></li>
            <li class="nav-item"><a href="#bottom-divided-tab2" class="nav-link" data-toggle="tab">Dengan Referensi</a></li>
            
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="bottom-divided-tab1">	
                <table class="table datatable-show-all">
                    <thead>
                        <tr>
                            <th style="width:10%">No</th>
                            <th style="width:30%">Responden</th>
                            <th style="width:20%">Opsi A</th>
                            <th style="width:20%">Opsi B</th>
                            <th style="width:20%">Keputusan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><b>Responden 1</b></td>
                            <td>2</td>
                            <td>1</td>
                            <td>
                                70% - Opsi <b>A</b>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>2</td>
                            <td><b>Responden 2</b></td>
                            <td>1</td>
                            <td>2</td>
                            <td>
                                70% - Opsi <b>B</b>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
			</div>
            <div class="tab-pane fade" id="bottom-divided-tab2">
				<table class="table datatable-show-all">
                    <thead>
                        <tr>
                            <th style="width:10%">No</th>
                            <th style="width:30%">Responden</th>
                            <th style="width:20%">Opsi A</th>
                            <th style="width:20%">Opsi B</th>
                            <th style="width:20%">Keputusan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><b>Responden 1</b></td>
                            <td>2</td>
                            <td>1</td>
                            <td>
                                70% - Opsi <b>A</b>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>2</td>
                            <td><b>Responden 2</b></td>
                            <td>1</td>
                            <td>2</td>
                            <td>
                                70% - Opsi <b>B</b>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><b>Responden 2</b></td>
                            <td>1</td>
                            <td>2</td>
                            <td>
                                70% - Opsi <b>B</b>
                            </td>
                        </tr>
                    </tbody>
                </table>
			</div>
        </div>
    </div>
	

</div>
