<?php
	$settings = get_icon();
	$id = $settings->languages;
	$query = $this->db->query("SELECT * FROM  language_set WHERE  id ='$id'");
	$kk = $query->row();
	$textFile = $kk->languages;
	$extension = ".php"; 
	require 'admin/includes/'.$textFile.$extension;       
	?>
<?php echo $map['js']; ?>
<!--patient-login search-->
<div class="container-fluid srch-patient-log srch-patient-log-clinic">
    <div class="container">
        <div class="sel-clinic-main">
            <div class="col-lg-12">
				<div class="col-lg-1"></div>
				<div class="col-lg-11 pad-zero">
					<div class="row">
						<div class="col-lg-4">
                            <div class="sel-clinic-group">
								<?php if(isset($view_medical->display_image) && !empty($view_medical->display_image)): ?>	
                                <img src= "<?php echo base_url(); ?>admin/<?php echo  $view_medical->display_image;?>" alt="" class="img-responsive sel-log-img"/>
								<?php else: ?>
								  <img src= "<?php echo base_url(); ?>assets/images/sel-clinic/1.jpg" class="img-responsive sel-log-img">
								  <?php endif; ?>
                                <p><?php if(!empty($view_medical->medical_address)): ?><?php echo $view_medical->medical_address; ?>, <?php endif; ?><?php echo $view_medical->city_name;?>
                                   <?php if(!empty($view_medical->state_name)): ?><?php echo $view_medical->state_name;?>,<?php endif; ?><?php echo $view_medical->country_name;?> <?php echo $view_medical->medical_zip;?>
                                </p>
                                <h4>Rate Us</h4>
								<div class="gc-ratting" data-rate="<?php echo $view_medical->avg_rating; ?>" ></div>
							</div>
						</div>
						<div class="col-lg-8 pad-zero">
							<div class="row">
								<div class="col-lg-3 pad-zero sel-cl-mn">
									<div class="sel-clinic-tab">
										<ul>
											<li data-tab="tab-manage-1" class="li-man">
											<h5><?php if($this->lang->line('medicalprofile_slide_A1')){ ?><?php echo $this->lang->line('medicalprofile_slide_A1'); }else{ ?>Gallery<?php } ?></h5>
											</li>
											<li data-tab="tab-manage-2" class="li-man">
                                            <h5><?php if($this->lang->line('medicalprofile_slide_A2')){ ?><?php echo $this->lang->line('medicalprofile_slide_A2'); }else{ ?>About<?php } ?></h5>
											</li>
											<li data-tab="tab-manage-3" class="li-man">
											<h5><?php if($this->lang->line('medicalprofile_slide_A3')){ ?><?php echo $this->lang->line('medicalprofile_slide_A3'); }else{ ?>Specialities<?php } ?></h5>
											</li>
											<li data-tab="tab-manage-4" class="li-man">
											<h5><?php if($this->lang->line('medicalprofile_slide_A4')){ ?><?php echo $this->lang->line('medicalprofile_slide_A4'); }else{ ?>Amenities<?php } ?></h5>
											</li>
											<li data-tab="tab-manage-5" class="li-man">
											<h5><?php if($this->lang->line('medicalprofile_slide_A5')){ ?><?php echo $this->lang->line('medicalprofile_slide_A5'); }else{ ?>Insurance Partner<?php } ?></h5>
											</li>
											<li data-tab="tab-manage-6" class="li-man">
											<h5><?php if($this->lang->line('medicalprofile_slide_A6')){ ?><?php echo $this->lang->line('medicalprofile_slide_A6'); }else{ ?>Affiliations<?php } ?></h5>
											</li>
											<li data-tab="tab-manage-7" class="li-man">
											<h5><?php if($this->lang->line('medicalprofile_slide_A7')){ ?><?php echo $this->lang->line('medicalprofile_slide_A7'); }else{ ?>Memberships<?php } ?></h5>
											</li>
											<li data-tab="tab-manage-8" class="li-man">
											<h5><?php if($this->lang->line('medicalprofile_slide_A8')){ ?><?php echo $this->lang->line('medicalprofile_slide_A8'); }else{ ?>Awards<?php } ?></h5>
											</li>
										</ul>
									</div>
								</div>
								<div class="col-lg-9">
									<div class="manage-ad-inner-main tab-manage-1">
										<div class="image-large-gallery">
											<div class="view-img-large">
												<?php if(!empty ($view_medicalgallery[0])){ ?>
													<img src= "<?php echo base_url(); ?>admin/<?php echo  $view_medicalgallery[0]->image;?>" id="DataDisplay" class="img-responsive" />
												<?php }else{ ?>
													<img src="<?php echo base_url(); ?>assets/images/sel-clinic/1.jpg" id="DataDisplay" class="img-responsive" />
												<?php }?>
											</div>
											<div class="thumnail-slider-large"><br>
												<div id="myCarousel" class="carousel fdi-Carousel slide">
													<!-- Carousel items -->
													<div class="carousel fdi-Carousel slide" id="eventCarousel" data-interval="0">
														<div class="carousel-inner onebyone-carosel">
															<div class="item active">
																<div class="col-md-4 small-thumbnail">
																	<?php if(!empty ($view_medicalgallery[1])){ ?>
																	<img src= "<?php echo base_url(); ?>admin/<?php echo  $view_medicalgallery[1]->image;?>" />
																	<?php }else{ ?>
																	<img src="<?php echo base_url(); ?>assets/images/sel-clinic/1.jpg"  />
																	<?php }?>
																</div>
															</div>
															<div class="item ">
																<div class="col-md-4 small-thumbnail">
																	<?php if(!empty ($view_medicalgallery[2])){ ?>
																	<img src= "<?php echo base_url(); ?>admin/<?php echo  $view_medicalgallery[2]->image;?>" />
																	<?php }else{ ?>
																	<img src="<?php echo base_url(); ?>assets/images/sel-clinic/1.jpg"  />
																	<?php }?>
																</div>
															</div>
															<div class="item">
																<div class="col-md-4 small-thumbnail">
																	<?php if(!empty ($view_medicalgallery[3])){ ?>
																	<img src= "<?php echo base_url(); ?>admin/<?php echo  $view_medicalgallery[3]->image;?>" />
																	<?php }else{ ?>
																	<img src="<?php echo base_url(); ?>assets/images/sel-clinic/1.jpg"  />
																	<?php }?>
																</div>
															</div>
															<div class="item">
																<div class="col-md-4 small-thumbnail">
																	<?php if(!empty ($view_medicalgallery[4])){ ?>
																	<img src= "<?php echo base_url(); ?>admin/<?php echo  $view_medicalgallery[4]->image;?>" />
																	<?php }else{ ?>
																	<img src="<?php echo base_url(); ?>assets/images/sel-clinic/1.jpg"  />
																	<?php }?>
																</div>
															</div>
															<div class="item">
																<div class="col-md-4 small-thumbnail">
																	<?php if(!empty ($view_medicalgallery[5])){ ?>
																	<img src= "<?php echo base_url(); ?>admin/<?php echo  $view_medicalgallery[5]->image;?>" />
																	<?php }else{ ?>
																	<img src="<?php echo base_url(); ?>assets/images/sel-clinic/1.jpg"  />
																	<?php }?>
																</div>
															</div>
															<div class="item">
																<div class="col-md-4 small-thumbnail">
																	<?php if(!empty ($view_medicalgallery[6])){ ?>
																	<img src= "<?php echo base_url(); ?>admin/<?php echo  $view_medicalgallery[6]->image;?>" />
																	<?php }else{ ?>
																	<img src="<?php echo base_url(); ?>assets/images/sel-clinic/1.jpg"  />
																	<?php }?>
																</div>
															</div>
														</div>
														<a class="left left-sr-clinic" href="#eventCarousel" data-slide="prev">
														<img src="<?php echo base_url(); ?>assets/images/sel-clinic/1.png" /></a>
														<a class="right right-sr-clinic" href="#eventCarousel" data-slide="next">
														<img src="<?php echo base_url(); ?>assets/images/sel-clinic/2.png" /></a>
													</div>
													<!--/carousel-inner-->
												</div><!--/myCarousel-->
											</div>
										</div>
									</div>
									<div class="manage-ad-inner-main tab-manage-2">
										<div class="sel-inner-sec-tab">
											<?php if(isset($view_medical->about_medical) && !empty($view_medical->about_medical)): ?>
											<h3><?php echo strtoupper ($view_medical->medical_name); ?></h3>
                                            <p><?php echo $view_medical->about_medical;?></p>
											<?php else: ?>
											<h3>NO Records Found</h3>
											<?php endif; ?>
										</div>
									</div>
									<div class="manage-ad-inner-main tab-manage-3">
										<div class="sel-inner-sec-tab">
											<?php if(isset($view_medical->specialty_name) && !empty($view_medical->specialty_name)): ?>
											<h3><?php echo strtoupper($view_medical->medical_name); ?></h3>
                                            <p><?php echo $view_medical->specialty_name; ?></p>
											<?php else: ?>
											<h3>NO Records Found</h3>
											<?php endif; ?>
                                        </div>
                                    </div>
									<div class="manage-ad-inner-main tab-manage-4">
										<div class="sel-inner-sec-tab">
											<?php if(isset($view_medical->facility_name) && !empty($view_medical->facility_name)): ?>
											<h3><?php echo strtoupper($view_medical->medical_name); ?></h3>
                                            <p><?php echo $view_medical->facility_name; ?></p>
											<?php else: ?>
											<h3>NO Records Found</h3>
											<?php endif; ?>
										</div>
									</div>
									<div class="manage-ad-inner-main tab-manage-5">
										<div class="sel-inner-sec-tab">
											<?php if(isset($view_medical->insurance_name) && !empty($view_medical->insurance_name)): ?>
                                            <h3><?php echo strtoupper($view_medical->medical_name); ?></h3>
                                            <p><?php echo $view_medical->insurance_name; ?></p>
											<?php else: ?>
											<h3>NO Records Found</h3>
											<?php endif; ?>
                                        </div>
                                    </div>
									<div class="manage-ad-inner-main tab-manage-6">
                                        <div class="sel-inner-sec-tab">
											<?php if(isset($view_medical->affhospital_name) && !empty($view_medical->affhospital_name)): ?>
                                            <h3><?php echo strtoupper($view_medical->medical_name); ?></h3>
                                            <p><?php echo $view_medical->affhospital_name; ?></p>
											<?php else: ?>
											<h3>NO Records Found</h3>
											<?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="manage-ad-inner-main tab-manage-7">
                                        <div class="sel-inner-sec-tab">
											<?php if(isset($view_medical->medical_memberships) && !empty($view_medical->medical_memberships)): ?>
                                            <h3><?php echo strtoupper($view_medical->medical_name); ?></h3>
                                            <p><?php echo $view_medical->medical_memberships; ?></p>
											<?php else: ?>
											<h3>NO Records Found</h3>
											<?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="manage-ad-inner-main tab-manage-8">
                                        <div class="sel-inner-sec-tab">
											<?php if(isset($view_medical->medical_awards) && !empty($view_medical->medical_awards)): ?>
                                            <h3><?php echo strtoupper($view_medical->medical_name); ?></h3>
                                            <p><?php echo $view_medical->medical_awards; ?></p>
											<?php else: ?>
											<h3>NO Records Found</h3>
											<?php endif; ?>
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
<!--patient-login search-->
<div class="container-fluid mapfordoctor">
	<div class="google-map-doctor">
		<div class="img-responsive " id="canvas1">
			<?php echo $map['html']; ?>			
		</div>
	</div>
</div>
<!--doctor-->
<div class="container">
    <div class="doctor-sub">
		<h3><img src="<?php echo base_url(); ?>assets/images/patient-login/12.png"  ></h3>
        <h4><?php if($this->lang->line('medicalprofile_slide_A14')){ ?><?php echo $this->lang->line('medicalprofile_slide_A14'); }else{ ?>Select a Speciality Doctor <?php } ?> </h4>
    </div>
	<div class="doctor-pat-srch">     
		<div class="row">
			<input type="hidden" value='<?php echo $actual_data;?>' id="actual_data">
			<div class="evnt-mn doctor" id="updates">
				<div class="col-lg-6" style="padding-right: 0px;">
					<?php if(!empty($doctors)) {
						if(isset($doctors)) {						
							foreach($doctors as $doctor_detail){
						?>
					<div class="evt-br doctor">				
						<div class="left-events left-img-ph">
							<?php if($doctor_detail->display_image != ""){ ?>
							<img src= "<?php echo base_url(); ?>admin/<?php echo  $doctor_detail->display_image;?>" >
							<?php }else{ ?>
							<img src="<?php echo base_url(); ?>assets/images/home/man.png">
							<?php  }?>
						</div>
						<div class="left-events">
							<h5>Dr. <?php echo $doctor_detail->doctor_firstname;?> <?php echo $doctor_detail->doctor_lastname;?></h5>
							<div class="gc-ratting" data-rate="<?php echo $doctor_detail->avg_rating; ?>" ></div> 
							<div class="pt-ent">
								<div class="row">
									<div class="col-lg-1">
										<img src="<?php echo base_url(); ?>assets/images/patient-login/13.png" />
									</div>
									<div class="col-lg-4">
										<h6> <?php echo $doctor_detail->city_name;?>,<?php echo $doctor_detail->state_name;?>, <?php echo $doctor_detail->country_name;?> <?php echo $doctor_detail->doctor_office_zip;?></h6>
									</div>
								</div>
							</div>	
						</div>
						<div class="view-prf">
							<div class="row">
								<div class="col-lg-4">
									<img src="<?php echo base_url(); ?>assets/images/patient-login/14.png" />
									<h6><a href ="<?php echo base_url(); ?>Doctor/Perfil/<?php echo $doctor_detail->id; ?>"><?php if($this->lang->line('medicalprofile_slide_A9')){ ?><?php echo $this->lang->line('medicalprofile_slide_A9'); }else{ ?>Ver Perfil<?php } ?></a></h6>
								</div>
								<div class="col-lg-4">
									<img src="<?php echo base_url(); ?>assets/images/patient-login/15.png" />
									<h6><a class ="modalbookapp" href ="javascript:void(0);" id="<?php echo $doctor_detail->id; ?>" ><?php if($this->lang->line('medicalprofile_slide_A10')){ ?><?php echo $this->lang->line('medicalprofile_slide_A10'); }else{ ?>Agende Online<?php } ?></a></h6>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
				<div class="col-lg-5 evt-br-1" id="calendar_blk">
					<?php foreach($doctors as $doctor_detail){ 
					get_doccalendar($doctor_detail->id); } ?>
				</div>
				<?php  
					}				
						} else {
							?>						
				<div class="error"><h1><?php if($this->lang->line('medicalprofile_slide_A11')){ ?><?php echo $this->lang->line('medicalprofile_slide_A11'); }else{ ?>Sorry, No records found. Please try with different keywords. <?php } ?> </h1></div>
				<div class="clearfix"></div>												
				<?php  }	?>
			</div>
		</div>									
		<!----- for modal ---->	
		<div class="container">
			<!-- Modal -->
			<div class="modal fade bac-modal" id="myModalbook-app" role="dialog">
				<div class="modal-dialog">
					<!-- Modal content-->
					<div class="modal-content login-modal">
						<button type="button" class="btn btn-default close-mdl" data-dismiss="modal"><img src="<?php echo base_url(); ?>assets/images/login/2.png" /> </button>
							<!----- dummy---->
							<div class="container">
								<div class="doctor-pat-srch">     
									<div class="row">
										<div class="evnt-mn doctor" id="updates">
											<div class="col-lg-5 evt-br-1" id="calendar_blk">					
												<div class="date-head">
													<div class="previouscalapp" id="<?php echo $doctor_detail->id; ?>" data-date="<?php echo $date;?>" data-selected="true">
														<img id="previouscalapp" src="<?php echo base_url(); ?>assets/images/career/cal-left.png" />
													</div>
													<div class="dttime">
														<ul>
															<div class="dttime-list">
																<li> <h5><?php echo $date= date('D Y-m-d');?></h5></li>
															</div>
															<div class="dttime-list">
																<li> <h5><?php echo date('D Y-m-d', strtotime($date. ' + 1 days')) ?></h5></li>
															</div>
															<div class="dttime-list">	
																<li> <h5><?php echo date('D Y-m-d', strtotime($date. ' + 2 days')) ?></h5></li>
															</div>
														</ul>
													</div>
													<div class="nextcalapp " id="<?php echo $doctor_detail->id; ?>" data-date="<?php echo $date;?>" data-selected="true">
														<img id="nextcalapp" src="<?php echo base_url(); ?>assets/images/career/cal-right.png" />
													</div>
													<div class="clearfix"></div>
												</div>					
												<div class="date-inner-mn">
													<div class="date-inner-mn-list">
														<ul>						 
															<li class="active">9 : 00 am</li>
															<li>9 : 00 am</li>
															<li>Break</li>
															<li>Break</li>
															<li>Break</li>
															<li>Break</li>
															<li>Break</li>
															<li>Break</li>
															<li>Break</li>
															<li>Break</li>
														</ul>
													</div>
													<div class="date-inner-mn-list">
														<ul>
															<li>9 : 00 am</li>
															<li>9 : 00 am</li>
															<li>Break</li>
															<li>Break</li>
															<li>Break</li>
															<li>Break</li>
															<li>Break</li>
															<li>Break</li>
															<li>Break</li>
															<li>Break</li>
														</ul>
													</div>
													<div class="date-inner-mn-list">
														<ul>
															<li>9 : 00 am</li>
															<li>9 : 00 am</li>
															<li>Break</li>
															<li>Break</li>
															<li>Break</li>
															<li>Break</li>
															<li>Break</li>
															<li>Break</li>
															<li>Break</li>
															<li>Break</li>
														</ul>
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
		</div>
	<!--doctor-->
</div>
<!----- for modal ---->		
<div class="modal bookingdoc fade" id="myModal-calendar" role="dialog">
	<div class="modal-dialog">    
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"><?php if($this->lang->line('medicalprofile_slide_A12')){ ?><?php echo $this->lang->line('medicalprofile_slide_A12'); }else{ ?>Appointment Details<?php } ?></h4>
			</div>
			<div class="modal-body" id="bookingdoc" >
				<p>Some text in the modal.</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><?php if($this->lang->line('medicalprofile_slide_A13')){ ?><?php echo $this->lang->line('medicalprofile_slide_A13'); }else{ ?>Close<?php } ?></button>
			</div>
		</div>
	</div>
</div>     
</div> 