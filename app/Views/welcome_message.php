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

	<meta property="og:url"           content="http://rc.regina.ac.th/Festival/krathong_online/" />
	<meta property="og:type"          content="website" />
	<meta property="og:title"         content="ชวนลอยกระทงออนไลน์" />
	<meta property="og:description"   content="Regina Coeli College" />
    <meta property="og:image"         content="<?php echo base_url();?>/img/krathong2.jpg" />


	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
  
	<link href="<?php echo base_url();?>/Template/global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>/Template/layout_1/LTR/default/full/assets/css/all.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="<?php echo base_url();?>/Template/global_assets/js/main/jquery.min.js"></script>
	<script src="<?php echo base_url();?>/Template/global_assets/js/main/bootstrap.bundle.min.js"></script>
	<!-- /core JS files -->

	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v18.0" nonce="JYOJky8t"></script>

	<!-- Theme JS files -->
	<script src="<?php echo base_url();?>/Template/global_assets/js/plugins/extensions/jquery_ui/core.min.js"></script>
	<script src="<?php echo base_url();?>/Template/global_assets/js/plugins/forms/selects/select2.min.js"></script>
	<script src="<?php echo base_url();?>/Template/global_assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script src="<?php echo base_url();?>/Template/global_assets/js/plugins/notifications/pnotify.min.js"></script>
	<script src="<?php echo base_url();?>/Template/global_assets/js/plugins/notifications/noty.min.js"></script>
	<script src="<?php echo base_url();?>/Template/global_assets/js/plugins/notifications/jgrowl.min.js"></script>
	<!-- /theme JS files -->

	<!-- Theme JS files -->
	<script src="<?php echo base_url();?>/Template/global_assets/js/plugins/notifications/bootbox.min.js"></script>
	<!--<script src="<?php echo base_url();?>/Template/global_assets/js/demo_pages/components_modals.js"></script>-->
	<!-- /theme JS files -->

	<script src="<?php echo base_url();?>/Template/global_assets/js/plugins/notifications/sweet_alert.min.js"></script>





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
					document.getElementById("Print_Sum_Kra").innerHTML=
					'<h6 class="card-title">จำนวนกระทงที่ลอยแล้ว ' +txt_sum_kra+ ' กระทง</h6>'
					+'<h6 class="card-title">'+txt_sum_kra+' Krathongs has been floated</h6>';
				}else{}
		})
	</script>

	

</head>

<body style="background-color: #012a4a;">

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
								<div>Loy Krathong prayers</div>
								<div>In this Loy Krathong, We pray to follow buddhist ways which locate in the north of Nammatanti. With this Krathong we wish good things and happiness to happened in my life.</div>
							</div>
						</div>
					</div>

					<div class="row" >
						<div class="col-md-12">
							<div class="card card-body border-top-dark" style="background-color: #0e5277;">
							
								<div class="row">

									<div class="col-md-3">
										<div class="card border border-purple">
											<div class="card-header header-elements-inline bg-dark text-white">
												<div id="Print_Sum_Kra"></div>
											</div>
										</div>

										<div class="card border border-purple">
											<div class="card-header header-elements-inline bg-dark text-white">
												<div class="fb-share-button" data-href="http://rc.regina.ac.th/Festival/krathong_online/" data-layout="" data-size=""><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Frc.regina.ac.th%2FFestival%2Fkrathong_online%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">แชร์</a></div>
											</div>
										</div>

									</div>

									<div class="col-md-9">
										<div class="card border border-purple">
											<div class="card-header header-elements-inline bg-dark text-white">
												<h6 class="card-title">
													<div>เลือกกระทงที่ต้องการลอย พร้อมกับตั้งจิตอธิษฐาน</div>
													<div>Choose Krathong that you need to float and pray.</div>
												</h6>
											</div>

											<div class="card-body">
												


												<div class="row">
		<?php
			$Call_img=new manage_img("loop","-","-","-","-");
			foreach($Call_img->Print_img() as $rc_k=>$img_row){	?>

													<div class="col-md-4">
														<center>
															<input type="image" name="run_kra" id="run_kra"  data-toggle="modal" data-target="#modal_krathong<?php echo $img_row["kf_key"];?>" src="<?php echo base_url();?>/img/<?php echo $img_row["kf_img"];?>" style="width: 240px; height: auto;" border="1">
														</center>
													</div>

		            <!-- Disabled backdrop -->
													<div id="modal_krathong<?php echo $img_row["kf_key"];?>" class="modal fade" data-backdrop="false" tabindex="-1">
														<div class="modal-dialog">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">กระทงของคุณ</h5>
																	<button type="button" class="close" data-dismiss="modal">&times;</button>
																</div>

																<div class="modal-body">

																	<div class="row">
																		<div class="col-md-4">
																			<img src="<?php echo base_url();?>/img/<?php echo $img_row["kf_img"];?>" class="rounded" alt="krathong" style="width: 120px; height: auto;"> 
																		</div>
																		<div class="col-md-8">
																			<fieldset class="mb-3">
																				<div class="form-group row">
																					<label class="col-form-label col-md-3">ชื่อ</label>
																					<div class="col-md-9">
																						<input type="text" name="krathong_name<?php echo $img_row["kf_key"];?>" id="krathong_name<?php echo $img_row["kf_key"];?>" class="form-control" maxlength="100" title="ชื่อ" placeholder="ชื่อ">
																					</div>
																				</div>
																			</fieldset>
																			<fieldset class="mb-3">
																				<div class="form-group row">
																					<label class="col-form-label col-md-3">คำอธิษฐาน</label>
																					<div class="col-md-9">
																						<textarea  name="krathong_wish<?php echo $img_row["kf_key"];?>" id="krathong_wish<?php echo $img_row["kf_key"];?>" rows="3" cols="3" class="form-control" maxlength="600" title="คำอธิษฐาน" placeholder="คำอธิษฐาน"></textarea>
																					</div>
																				</div>
																			</fieldset>
																		</div>
																	</div>

																	<input type="hidden" name="krathong_kf<?php echo $img_row["kf_key"];?>" id="krathong_kf<?php echo $img_row["kf_key"];?>" value="<?php echo $img_row["kf_key"];?>">


																</div>

																<div class="modal-footer">
																	<button type="button" class="btn btn-link" data-dismiss="modal">ปิด Close</button>
																	<button type="button" data-dismiss="modal" name="button_img<?php echo $img_row["kf_key"];?>" id="button_img<?php echo $img_row["kf_key"];?>" class="btn btn-primary">พร้อมกับตั้งจิตอธิษฐาน ลอยกระทง</button>
																</div>
															</div>
														</div>
													</div>
					<!-- /disabled backdrop -->

	<script>
		$(document).ready(function(){

// Defaults
				var swalInitUpdataKrathong = swal.mixin({
                    buttonsStyling: false,
                        customClass: {
                            confirmButton: 'btn btn-primary',
                            cancelButton: 'btn btn-light',
                            denyButton: 'btn btn-light',
                            input: 'form-control'
                        }
                });




// Defaults End   

			$("#button_img<?php echo $img_row["kf_key"];?>").on("click",function(){
				var krathong_name=$("#krathong_name<?php echo $img_row["kf_key"];?>").val();
				var krathong_wish=$("#krathong_wish<?php echo $img_row["kf_key"];?>").val();
				var krathong_kf=$("#krathong_kf<?php echo $img_row["kf_key"];?>").val();
				var compile="add";
				var count_error=0;

					if(krathong_name===""){
						count_error=count_error+1
					}else{
						count_error=count_error+0
					}

					if(krathong_wish===""){
						count_error=count_error+1
					}else{
						count_error=count_error+0
					}

					if(krathong_kf===""){
						count_error=count_error+1
					}else{
						count_error=count_error+0
					}

					if(count_error>=1){

					}else{
						$.post("<?php echo base_url();?>/process/sql_pdo/"+compile,{
							krathong_name:krathong_name,
							krathong_wish:krathong_wish,
							krathong_kf:krathong_kf,
							compile:compile
						},function(run_code){
							var run_code=run_code.trim();
								if(run_code==="no_error"){

	
									let timerInterval;
                                    swalInitUpdataKrathong.fire({
                                        title: 'ลอยกระทงสำเร็จ',
                                        //html: 'I will close in <b></b> milliseconds.',
                                        timer: 1200,
                                        icon: 'success',
                                        timerProgressBar: true,
                                        didOpen: function() {
                                            Swal.showLoading()
                                            timerInterval = setInterval(function() {
                                                const content = Swal.getContent();
                                                if (content) {
                                                    const b_profile = content.querySelector('b_profile')
                                                    if (b_profile) {
                                                        b_profile.textContent = Swal.getTimerLeft();
                                                    }else{}
                                                }else{}
                                            }, 100);
                                        },
                                        willClose: function() {
                                            clearInterval(timerInterval)
                                        }
                                    }).then(function (result) {
                                        if (result.dismiss === Swal.DismissReason.timer) {
                                             location.reload();
                                        }else{}
                                    });
       
									
								}else{}
						})
					}	

			})
		})
	</script>


		<?php	} ?>
												</div>

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
						<button type="button" class="navbar-toggler " data-toggle="collapse" data-target="#navbar-footer">
							&copy; 2023 <a href="http://www.regina.ac.th/">Regina Coeli College</a> by <a href="" target="_blank">Regina ICT</a>
						</button>
					</div>

					<div class="navbar-collapse collapse" >
						<span class="navbar-text">
							&copy; 2023 <a href="http://www.regina.ac.th/">Regina Coeli College</a> by <a href="" target="_blank">Regina ICT</a>
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