<?php
    include(APPPATH. "Database_pdo/krathong_pdo.php");
    include(APPPATH. "Database_pdo/krathong_class.php");

	$sum_krathong=new int_krathong();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>ลอยกระทงออนไลน์ </title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
  
	<link href="<?php echo base_url();?>/Template/global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>/Template/layout_1/LTR/default/full/assets/css/all.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="<?php echo base_url();?>/Template/global_assets/js/main/jquery.min.js"></script>
	<script src="<?php echo base_url();?>/Template/global_assets/js/main/bootstrap.bundle.min.js"></script>
	<!-- /core JS files -->


	<!-- Theme JS files -->
	<script src="<?php echo base_url();?>/Template/global_assets/js/plugins/extensions/jquery_ui/core.min.js"></script>
	<script src="<?php echo base_url();?>/Template/global_assets/js/plugins/forms/selects/select2.min.js"></script>
	<script src="<?php echo base_url();?>/Template/global_assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script src="<?php echo base_url();?>/Template/global_assets/js/plugins/notifications/pnotify.min.js"></script>
	<script src="<?php echo base_url();?>/Template/global_assets/js/plugins/notifications/noty.min.js"></script>
	<script src="<?php echo base_url();?>/Template/global_assets/js/plugins/notifications/jgrowl.min.js"></script>


	<!-- /theme JS files -->

	<script>
		$(document).ready(function(){
			var key_kra="run";
			$.post("<?php echo base_url();?>/run_kra",{
				key_kra:key_kra
			},function(run_kra){
				if(run_kra!=""){
					$("#Run_Krathong").html(run_kra);
				}else{}
			})
		})		
	</script>

	<script>
		$(document).ready(function(){
			var sum_kra="<?php echo $sum_krathong->int_kra;?>";
				if(sum_kra!==""){
					var txt_sum_kra=sum_kra.toLocaleString();
					document.getElementById("Print_Sum_Kra").innerHTML='<h6 class="card-title">จำนวนกระทงที่ลอยแล้ว ' +txt_sum_kra+ ' กระทง</h6>';
				}else{}
		})
	</script>


</head>

<body style="background-color: #000000;">

	<!-- Page content -->
	<div class="page-content">
		<!-- Main content -->
		<div class="content-wrapper">
			<!-- Inner content -->
			<div class="content-inner">
				
<!-- Content area -->
				<div class="content">

					<fieldset class="mb-3">
						<div class="row">
							<div class="col-md-12">
                                <div class="rounded" id="Run_Krathong"></div>
							</div>
						</div>
					</fieldset>

					<div class="row">
						<div class="col-md-12">
							<div class="alert alert-purple alert-dismissible">
								<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
								<div>คำแปลคำอธิษฐานลอยกระทง</div>
								<div>ในวันลอยกระทงนี้ ข้าพเจ้าทั้งหลายอธิษฐานและขอบูชารอยพระพุทธบาท ซึ่งตั้งอยู่บริเวณทิศเหนือของแม่น้ำนัมมทานทีด้วยกระทงประทีปนี้ ขอให้เกิดประโยชน์และความสุขแก่ข้าพเจ้าทั้งหลายสิ้นกาลและนานเทอญ</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="card card-body border-top-dark">
							
								<div class="row">
									<div class="col-md-9">
										<div class="card border border-purple">
											<div class="card-header header-elements-inline bg-dark text-white">
												<h6 class="card-title">เลือกกระทงที่ต้องการลอย พร้อมกับตั้งจิตอธิษฐาน</h6>
											</div>

											<div class="card-body">
												Bordered purple card using <code>.bg-dark</code> and <code>.border-purple</code> classes
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="card border border-purple">
											<div class="card-header header-elements-inline bg-dark text-white">
												<div id="Print_Sum_Kra"></div>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				

				</div>
<!-- /content area -->


				<!-- Footer -->
				<div class="navbar navbar-expand-lg navbar-light border-bottom-0 border-top">
					<div class="text-center d-lg-none w-100">
						<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
							<i class="icon-unfold mr-2"></i>
							Footer
						</button>
					</div>

					<div class="navbar-collapse collapse" id="navbar-footer">
						<span class="navbar-text">
							&copy; 2015 - 2018. <a href="#">Limitless Web App Kit</a> by <a href="https://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
						</span>
					</div>
				</div>
				<!-- /footer -->

			</div>
			<!-- /inner content -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->