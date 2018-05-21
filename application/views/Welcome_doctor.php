<?php   $trial_date=$this->session->userdata['frontend_logged_in']['trial_date'];  
		$end_date=$this->session->userdata['frontend_logged_in']['end_date'];  
		$current_date = date('Y-m-d'); 
		$tab_languages = $languages;
		$settings = get_icon();
        $id = $settings->languages;
        $query = $this->db->query("SELECT * FROM  language_set WHERE  id ='$id'");
        $kk = $query->row();
        $textFile = $kk->languages;
        $extension = ".php"; 
        require 'admin/includes/'.$textFile.$extension;   
		$docto_image =$match_user_details->display_image;
		?>
	<!--patient-login-->
	<div class="container">
		<div class="col-lg-12">
			<?php if($end_date == '' & $trial_date >= $current_date  ){?>					
				<div class="alert">
					<button class="close" data-dismiss="alert" type="button">×</button>
					<h4><span>Aviso:</span></h4>
					<h5> Você está usando uma versão de avaliação gratuita de 15 dias. Depois que o período de avaliação expirar, seus serviços não serão mais apresentados no filtro de pesquisa. Selecione qualquer pacote para estender seu serviço no MarqueHora</h3>
				</div>								                                   
			<?php } elseif($end_date < $current_date) { ?>							
				<div class="alert">
					<button class="close" data-dismiss="alert" type="button">×</button>
					<h3><?php if($lgdoctormod74){ echo $lgdoctormod74; }else { ?>Alert Message<?php } ?>:</h3>
					<h4>  <?php if($lgdoctormod76){ echo $lgdoctormod76; }else { ?>Your Package period is expired . Kindly Select any package to list your details under Bookmydoc.<?php } ?>
					</h4>
				</div>								                                         
			<?php } else{ ?>
			<?php } ?>
			
		</div>
	</div>
	<!-- options -->

<div class="container-fluid srch-patient-log srch-patient-log-clinic">
	<div class="container">
		<div class="sel-clinic-main">	
			<div class="col-lg-12 ">
				<div class="col-lg-12">
					<div class="col-lg-12 pad-zero">
						<div class="row">
							<div class="col-lg-3 pad-zero sel-cl-mn sel-dashboard">
								<div class="sel-clinic-tab dashboard-link">
									<h4>Dashboard Menu</h4>
									<ul>									
										<li data-tab="tab-manage-1" class="li-man">
											<h6><span><img src="<?php echo base_url(); ?>assets/images/dashboard/1.png" /> </span> Sua agenda </h6>
										</li>
										<li data-tab="tab-manage-2" class="li-man" id="triggermap">
											<h6><span><img src="<?php echo base_url(); ?>assets/images/dashboard/2.png" /> </span>Configurar agenda</h6>
										</li>										   
										<li data-tab="tab-manage-3" class="li-man">
											<h6><span><img src="<?php echo base_url(); ?>assets/images/dashboard/3.png" /> </span>Configurações</h6>
										</li>
										
									</ul>
								</div>
							</div>
							<div class="col-lg-9">									
								<div class="manage-ad-inner-main tab-manage-1 ">
									<div class="checkin-homesubhosp"> 
										<div id="calendar">											

										</div>
									</div> 
								</div>
							</div>	
						</div>
					</div>			
				</div>
			</div>
		</div>
	</div>
</div>			