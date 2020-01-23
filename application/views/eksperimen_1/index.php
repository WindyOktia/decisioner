<a href="<?= base_url('admin/addEks_1')?>">
	<button type="button" class="btn btn-primary"><i class="fa fa-plus-circle mr-2"></i> Tambah Simulasi</button>
</a>

<h4 class="mt-3"></h4>

<ul class="nav nav-tabs nav-tabs-bottom border-bottom-0">
	<li class="nav-item"><a href="#bottom-divided-tab1" class="nav-link active" data-toggle="tab">Eksperimen 1</a></li>
	<li class="nav-item"><a href="#bottom-divided-tab2" class="nav-link" data-toggle="tab">Eksperimen 2</a></li>
	<li class="nav-item"><a href="#bottom-divided-tab3" class="nav-link" data-toggle="tab">Eksperimen 3</a></li>
	
</ul>
<div class="tab-content">
	<div class="tab-pane fade show active" id="bottom-divided-tab1">	
		<div class="row">
			<div class="col-md-6">
				<div class="card border border-info">
					<div class="card-header">
						<h6 class="card-title"><b>Perbankan</b> - Tanpa Referensi</h6>
					</div>
					<div class="card-body">
					<canvas id="bankNoRef" width="400" height="200"></canvas>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card border border-info">
					<div class="card-header">
						<h6 class="card-title"><b>Perbankan</b> - Dengan Referensi</h6>
					</div>

					<div class="card-body">
					<canvas id="bankRef" width="400" height="200"></canvas>
					</div>

					<!-- settings -->
						<input type="hidden" id="opsi1_1" value="Tarik">			
						<input type="hidden" id="opsi1_2" value="Tetap Simpan">

						<input type="hidden" id="opsi2_1" value="Tarik">			
						<input type="hidden" id="opsi2_2" value="Tetap Simpan">
					<!-- settings -->
					
				</div>
			</div>
		</div>
		
	</div>
	<div class="tab-pane fade" id="bottom-divided-tab2">
		<div class="row">
			<div class="col-md-6">
				<div class="card border border-info">
					<div class="card-header">
						<h6 class="card-title"><b>Pasar Saham</b></h6>
					</div>
					<div class="card-body">
					<canvas id="psSaham" width="400" height="200"></canvas>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="tab-pane fade" id="bottom-divided-tab3">
		<div class="row">
			<div class="col-md-6">
				<div class="card border border-info">
					<div class="card-header">
						<h6 class="card-title"><b>Perbankan</b></h6>
					</div>
					<div class="card-body">
					<canvas id="reBank" width="400" height="200"></canvas>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card border border-info">
					<div class="card-header">
						<h6 class="card-title"><b>Saham</b></h6>
					</div>
					<div class="card-body">
					<canvas id="reSaham" width="400" height="200"></canvas>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="card">
	<div class="card-header header-elements-inline">
		<h5 class="card-title">Daftar Simulasi</h5>
	</div>
	<table class="table datatable-show-all">
		<thead>
			<tr>
				<th>No</th>
				<th>Judul Simulasi</th>
				<th>Suku Bunga Simpanan</th>
				<th>Suku Bunga LPS</th>
				<th>Rasio KPMM</th>
				<th>Status</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td><b>Manipulasi 1</b></td>
				<td>6 %</td>
				<td>6 %</td>
				<td>8 %</td>
				<td><span class="badge badge-info">Open</span></td>
				<td>
					<a href="<?= base_url('admin/detail')?>"class="btn btn-primary btn-sm">Detail</a>
				</td>
			</tr>
			<tr>
				<td>2</td>
				<td><b>Manipulasi 2</b></td>
				<td>16 %</td>
				<td>15 %</td>
				<td>4 %</td>
				<td><span class="badge badge-danger">Closed</span></td>
				<td>
					<a href="<?= base_url('admin/detail')?>"class="btn btn-primary btn-sm">Detail</a>
				</td>
			</tr>
			<tr>
				<td>3</td>
				<td><b>Manipulasi 3</b></td>
				<td>30 %</td>
				<td>25 %</td>
				<td>2 %</td>
				<td><span class="badge badge-danger">Closed</span></td>
				<td>
					<a href="<?= base_url('admin/detail')?>"class="btn btn-primary btn-sm">Detail</a>
				</td>
			</tr>
			
			
		</tbody>
	</table>
</div>
