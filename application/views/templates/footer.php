</div>
			
			<!-- /content area -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->
	
	<!-- <script  src="<?= base_url('assets/js/script.js')?>"></script> -->
	<script  src="<?= base_url('assets/js/chart.js')?>"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
	<script type="text/javascript">
		$( "#srch" ).click(function() {
			document.getElementById("bigger-search").submit();
		});

		$(document).ready( function () {
			$('#resBank').DataTable();
			$('#resSaham').DataTable();
		} );
		
		toastr.options = {
		"closeButton": true,
		"debug": false,
		"newestOnTop": true,
		"progressBar": true,
		"positionClass": "toast-bottom-right",
		"preventDuplicates": false,
		"onclick": null,
		"showDuration": "300",
		"hideDuration": "1000",
		"timeOut": "5000",
		"extendedTimeOut": "1000",
		"showEasing": "swing",
		"hideEasing": "linear",
		"showMethod": "fadeIn",
		"hideMethod": "fadeOut"
		}
		<?php if($this->session->flashdata('success')){ ?>
			toastr.success("<?php echo $this->session->flashdata('success'); ?>");
		<?php }else if($this->session->flashdata('error')){  ?>
			toastr.error("<?php echo $this->session->flashdata('error'); ?>");
		<?php }else if($this->session->flashdata('warning')){  ?>
			toastr.warning("<?php echo $this->session->flashdata('warning'); ?>");
		<?php }else if($this->session->flashdata('info')){  ?>
			toastr.info("<?php echo $this->session->flashdata('info'); ?>");
		<?php } ?>
	</script>

	<script type="text/javascript">
		$(document).ready(function () {
		

			var max_fields = 50; //maximum input boxes allowed
			var wrapper = $(".input_fields_wrap"); //Fields wrapper
			var wrapperSaham = $(".wrap_saham"); //Fields wrapper
			var add_button = $(".add_field_button"); //Add button ID

			var x = 1; //initlal text box count
			$(add_button).click(function (e) { //on add input button click
				e.preventDefault();
				if (x < max_fields) { //max input box allowed
					x++; //text box increment
					$(wrapper).append('<div class="row mt-1"><div class="col-10"><input type="text" name="mytext[]" class="form-control"/></div><a href="#" class="remove_field col-2 mx-auto my-auto float-right"><i class="fa fa-close text-danger" style="font-size:24px"></i></a></div>'); //add input box
				}
			});
			$('.tbhBank').click(function (e) { //on add input button click
				e.preventDefault();
				if (x < max_fields) { //max input box allowed
					x++; //text box increment
					$(wrapper).append(`
					<div class="row">
							<div class="form-group col-md">
							<input type="number" class="form-control">
							</div> 
							<div class="form-group col-md">
								<input type="number" class="form-control">
							</div> 
							<div class="form-group col-md">
								<input type="number" class="form-control" placeholder="" name="mulai[]" required>
							</div> 
							<a href="" class="form-group col-md-2 remove_field"><button class=" btn btn-danger form-control">Remove</button></a>
						</div>`); //add input box
				}
			});

			$('.tbhSaham').click(function (e) { //on add input button click
				e.preventDefault();
				if (x < max_fields) { //max input box allowed
					x++; //text box increment
					$(wrapperSaham).append(`
					<div class="row">
							<div class="form-group col-md">
							<input type="number" class="form-control">
							</div> 
							<div class="form-group col-md">
								<input type="number" class="form-control">
							</div> 
							<div class="form-group col-md">
								<input type="number" class="form-control" placeholder="" name="mulai[]" required>
							</div> 
							<a href="" class="form-group col-md-2 remove"><button class=" btn btn-danger form-control">Remove</button></a>
						</div>`); //add input box
				}
			});

			$(wrapperSaham).on("click", ".remove", function (e) { //user click on remove text
				e.preventDefault();
				$(this).parent('div').remove();
				x--;
			})
			$(wrapper).on("click", ".remove_field", function (e) { //user click on remove text
				e.preventDefault();
				$(this).parent('div').remove();
				x--;
			})
			

		});

	</script>

	<!-- eksperimen 1 -->
	<script type="text/javascript">
		$('#proceed').delay(2000).fadeIn(1000);
		$(".lanjut").click(function(){
			$("#2").show(300);
			$(".lanjut").hide();
			$(".lanjut2").show();
		});   
		$(".lanjut2").click(function(){
			$("#1").hide();
			$("#2").hide();
			$(".lanjut2").hide();
			$(".selesai").show();
			$("#3").show(500);
		});  
		$('.ulang').click(function() {
			$("#1").show(300);
			$("#2").show(300);
			$("#3").show(300);
			$(".ulang").hide();
			$(".tutup").show();
		});
		$('.tutup').click(function() {
			$("#1").hide(300);
			$("#2").hide(300);
			$("#3").hide(300);
			$(".tutup").hide();
			$(".ulang").show();
		});

		$('.next').click(function() {
			$("#submission").hide();
			$("#ref").delay(300).fadeIn(400);
		});

		$('.ref-lanjut').click(function() {
			$("#submission2").delay(300).fadeIn(400);
			$("#show_opsi").delay(2800).fadeIn();
			$(".ref-lanjut").hide(200);
			$("#22").hide(80);
			$(".ref-buka").show();
			$("#ref").hide();
		});

		$('.tarik').click(function() {
			$('#jawab').html('<b>Menarik Tabungan</b>');
			$('.next').show();
			$(".tarik").prop('disabled', true);
			$(".t-tarik").prop('disabled', false);
		});

		$('.t-tarik').click(function() {
			$('#jawab').html('<b>Tidak Menarik Tabungan</b>');
			$('.next').show();
			$(".tarik").prop('disabled', false);
			$(".t-tarik").prop('disabled', true);
		});

		$('.tarik_ref').click(function() {
			$('#jawab_ref').html('<b>Menarik Tabungan</b>');
			$('.next_ref').show();
			$(".tarik_ref").prop('disabled', true);
			$(".t-tarik_ref").prop('disabled', false);
		});

		$('.t-tarik_ref').click(function() {
			$('#jawab_ref').html('<b>Tidak Menarik Tabungan</b>');
			$('.next_ref').show();
			$(".tarik_ref").prop('disabled', false);
			$(".t-tarik_ref").prop('disabled', true);
		});

		$('.next_ref').click(function() {
			$('#noRef').fadeOut();
			$('#submission2').fadeOut();
		});
		$('.eks1_sub_1').click(function() {
			$('#eks_1').hide(600);
			$('#eks_2').show(600);
		});
		$('.eks1_sub_2').click(function() {
			$('#eks_2').hide(600);
			$('#eks_3').show(600);
		});

	</script>

	<!-- <script type="text/javascript">
		$(".tt_1_1").click(function(){
			$("#jwb_1_1").html("<b>Menarik Tabungan </b>");
			$("#sbs_1").val("Menarik Tabungan");
			$(".tt_1_1").prop('disabled', true);
			$(".tmt_1_1").prop('disabled', false);
			$("#eks1_ops_2").show(300);
		});   

		$(".tmt_1_1").click(function(){
			$("#jwb_1_1").html("<b>Tidak Menarik Tabungan </b>");
			$("#sbs_1").val("Tidak Menarik Tabungan");
			$(".tt_1_1").prop('disabled', false);
			$(".tmt_1_1").prop('disabled', true);
			$("#eks1_ops_2").show(300);
		}); 

		$(".tt_1_2").click(function(){
			$("#jwb_1_2").html("<b>Menarik Tabungan </b>");
			$("#sbs_2").val("Menarik Tabungan");
			$(".tt_1_2").prop('disabled', true);
			$(".tmt_1_2").prop('disabled', false);
			$("#eks1_ops_3").show(300);
		});   

		$(".tmt_1_2").click(function(){
			$("#jwb_1_2").html("<b>Tidak Menarik Tabungan </b>");
			$("#sbs_2").val("Tidak Menarik Tabungan");
			$(".tt_1_2").prop('disabled', false);
			$(".tmt_1_2").prop('disabled', true);
			$("#eks1_ops_3").show(300);
		}); 

		$(".tt_1_3").click(function(){
			$("#jwb_1_3").html("<b>Menarik Tabungan </b>");
			$("#sbs_3").val("Menarik Tabungan");
			$(".tt_1_3").prop('disabled', true);
			$(".tmt_1_3").prop('disabled', false);
			$(".eks1_sub_1").show(300);
		});   

		$(".tmt_1_3").click(function(){
			$("#jwb_1_3").html("<b>Tidak Menarik Tabungan </b>");
			$("#sbs_3").val("Tidak Menarik Tabungan");
			$(".tt_1_3").prop('disabled', false);
			$(".tmt_1_3").prop('disabled', true);
			$(".eks1_sub_1").show(300);
		});   
	</script> -->
	<!-- end of eks 1 -->
	<!-- eksperimen 2 -->
	<script type="text/javascript">
		$(".sah_lanjut1").click(function(){
			$("#sah1").hide(300);
			$("#sah2").show(300);
			$(".sah_lanjut1").hide();
			$(".sah_lanjut2").show();
		});
		$(".semua").click(function(){
			$("#sah1").show(300);
			$("#sah2").show(300);
			$(".semua").hide(300);
			$(".tutups").show(300);
		}); 
		$(".tutups").click(function(){
			$("#sah1").hide(300);
			$("#sah2").hide(300);
			$(".semua").show(300);
			$(".tutups").hide(300);
		}); 

		$(".jual1").click(function(){
			$('#2').delay(300).fadeIn();
			$('.aksi1').hide();
			$('.jawaban').html('<b>Menjual Saham</b>');
			$('.jawaban').delay(100).fadeIn();
		}); 
		$(".tahan1").click(function(){
			$('#2').delay(300).fadeIn();
			$('.aksi1').hide();
			$('.jawaban').html('<b>Menahan Saham</b>');
			$('.jawaban').delay(100).fadeIn();
		}); 
		$(".jual2").click(function(){
			$('#3').delay(300).fadeIn();
			$('.aksi2').hide();
			$('.jawaban2').html('<b>Menjual Saham</b>');
			$('.jawaban2').delay(100).fadeIn();
		}); 
		$(".tahan2").click(function(){
			$('#3').delay(300).fadeIn();
			$('.aksi2').hide();
			$('.jawaban2').html('<b>Menahan Saham</b>');
			$('.jawaban2').delay(100).fadeIn();
		}); 
		$(".jual3").click(function(){
			$('.aksi3').hide();
			$('.jawaban3').html('<b>Menjual Saham</b>');
			$('.jawaban3').delay(100).fadeIn();
			$('.kirim').delay(100).fadeIn();
		}); 
		$(".tahan3").click(function(){
			$('.aksi3').hide();
			$('.jawaban3').html('<b>Menahan Saham</b>');
			$('.jawaban3').delay(100).fadeIn();
			$('.kirim').delay(100).fadeIn();
		}); 
	</script>
	<!-- end of eks 2 -->

	<!-- eksperimen 3 -->
	<script type="text/javascript">
		$(".intro_lanjut1").click(function(){
			$("#intro_2").show(300);
			$(".intro_lanjut1").hide();
			$(".intro_lanjut2").show();
		});

		$(".intro_lanjut2").click(function(){
			$("#intro_1").hide(300);
			$("#intro_2").hide(300);
			$("#intro_3").show(300);
			$(".intro_lanjut2").hide();
			$(".intro_selesai").show();
		});

		$(".semua_3").click(function(){
			$("#intro_1").show(300);
			$("#intro_2").show(300);
			$("#intro_3").show(300);
			$(".tutups_3").show(300);
			$(".semua_3").hide(300);
		});

		$(".tutups_3").click(function(){
			$("#intro_1").hide(300);
			$("#intro_2").hide(300);
			$("#intro_3").hide(300);
			$(".tutups_3").hide(300);
			$(".semua_3").show(300);
		});

		$('.tarik_ref_3').click(function() {
			$('#jawab_ref_3').html('<b>Menarik Tabungan</b>');
			$('.next_ref_3').show(300);
			$(".tarik_ref_3").prop('disabled', true);
			$(".t-tarik_ref_3").prop('disabled', false);
		});

		$('.t-tarik_ref_3').click(function() {
			$('#jawab_ref_3').html('<b>Tidak Menarik Tabungan</b>');
			$('.next_ref_3').show(300);
			$(".tarik_ref_3").prop('disabled', false);
			$(".t-tarik_ref_3").prop('disabled', true);
		});

		$('.tarik_ref_4').click(function() {
			$('#jawab_ref_3').html('<b>Menjual Saham</b>');
			$('.next_ref_3').show(300);
			$(".tarik_ref_4").prop('disabled', true);
			$(".t-tarik_ref_4").prop('disabled', false);
		});

		$('.t-tarik_ref_4').click(function() {
			$('#jawab_ref_3').html('<b>Tidak Menjual Saham</b>');
			$('.next_ref_3').show(300);
			$(".tarik_ref_4").prop('disabled', false);
			$(".t-tarik_ref_4").prop('disabled', true);
		});
	</script>
	<!-- end of eks 3 -->

	<!-- eksperimen 4 -->
	
	<!-- end of eks 4 -->

	
	<script type="text/javascript">
		var ctx7 = document.getElementById('jajals_3').getContext('2d');
		var jajals_3 = new Chart(ctx7, {
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
	
	
</body>

<!-- Mirrored from demo.interface.club/limitless/demo/Template/layout_1/LTR/default/full/uploader_bootstrap.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Nov 2019 15:23:58 GMT -->
</html>
