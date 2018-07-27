<?php
	$tab_languages = $languages;
	$settings = get_icon();
	$id = $settings->languages;
	$query = $this->db->query("SELECT * FROM  language_set WHERE  id ='$id'");
	$kk = $query->row();
	$textFile = $kk->languages;
	$extension = ".php"; 
	require 'admin/includes/'.$textFile.$extension;
?>
<!--patient-login search-->
<div class="container-fluid srch-patient-log" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="doctor">
                    <h4><?php if($this->lang->line('doctorfilter_slide_A12')){ ?><?php echo $this->lang->line('doctorfilter_slide_A12'); }else{ ?>Doctors near by You<?php } ?></h4>
                </div>
            </div>
            <div class="col-lg-12 srch-main">			
				<form role="form" action="" method="post"  id="form_doctor" class="form_doctor formap" enctype="multipart/form-data">
					<div class="row">
						<div class="col-lg-12">
							<div class="row row-frm">
								<div class="col-lg-4">							
									<div class="form-group">
										<label for="exampleSelect1"><?php if($this->lang->line('doctorfilter_slide_A1')){ ?><?php echo $this->lang->line('doctorfilter_slide_A1'); }else{ ?>City<?php } ?></label>
										<select   name="cities_id" class="form-control filter-field" id="exampleSelect1" required ="" >
											<option selected="selected" value="-1"><?php if($this->lang->line('doctorfilter_slide_A2')){ ?><?php echo $this->lang->line('doctorfilter_slide_A2'); }else{ ?>Select city<?php } ?> </option>
											<?php foreach($cities as $row_cities){ $selected = ($post_data['main_city'] == $row_cities->id ? "selected" : "" ); ?>
											<option value="<?php echo $row_cities->id;?>" <?php echo $selected; ?>><?php echo $row_cities->city;?></option> 
											<?php }  ?>
										</select>       
									</div>
								</div>								
								<div class="col-lg-4">						
									<div class="form-group">
										<label for="exampleSelect1"><?php if($this->lang->line('doctorfilter_slide_A3')){ ?><?php echo $this->lang->line('doctorfilter_slide_A3'); }else{ ?>Specialty<?php } ?></label>
										<select   onchange="selectReason(this.options[this.selectedIndex].value)" name="specialty" class="form-control filter-field" id="exampleSelect1"  required =" ">
											<option selected="selected" value="-1"><?php if($this->lang->line('doctorfilter_slide_A4')){ ?><?php echo $this->lang->line('doctorfilter_slide_A4'); }else{ ?>Select specialty<?php } ?></option>                                 
											<?php if(!empty($specialties) and isset($specialties)) { foreach($specialties as $row_specialty){ $selected = ($post_data['specialty'] == $row_specialty->id ? "selected" : "" ); ?>
											<option value="<?php echo $row_specialty->id;?>" <?php echo $selected; ?>><?php echo $row_specialty->specialty_name;?></option> 
											<?php } } ?>                             							
										</select>
									</div>
								</div>
																								
								
								
								<div class="col-lg-4">
									<div class="form-group">
										<label for="exampleSelect1"><?php if($this->lang->line('doctorfilter_slide_A11')){ ?><?php echo $this->lang->line('doctorfilter_slide_A11'); }else{ ?>Gender<?php } ?></label>
										<select class="form-control filter-field" id="exampleSelect1" name="gender" required="">  
											<option selected="selected" value=""><?php if($this->lang->line('doctorfilter_slide_A11')){ ?><?php echo $this->lang->line('doctorfilter_slide_A11'); }else{ ?>Gender<?php } ?></option>								
											<option value="Female" <?php if($post_data['gender'] == 'Female'){ echo "selected"; } ?> ><?php if($this->lang->line('doctorfilter_slide_A19')){ ?><?php echo $this->lang->line('doctorfilter_slide_A19'); }else{ ?> Female <?php } ?></option>
											<option value="Male" <?php if($post_data['gender'] == 'Male'){ echo "selected"; } ?> > <?php if($this->lang->line('doctorfilter_slide_A20')){ ?><?php echo $this->lang->line('doctorfilter_slide_A20'); }else{ ?>Male <?php } ?></option>										
										</select>
									</div>
								</div>
							</div>
						</div>                        						
					</div>
                    <div class="row">
                        <div class="col-lg-12 row-pat">
							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-pat"><img src="<?php echo base_url(); ?>assets/images/patient-login/10.png"> Buscar </button>
							</div>
						</div>                        
                    </div>
				</form>
            </div>

        </div>
    </div>
</div>
<!--patient-login search-->
<div class="container-fluid mapfordoctor">
	<div class="google-map-doctor">
		<div class="img-responsive " id="canvas1">
		<?php echo $map['js']; ?>
		<?php echo $map['html']; ?>			
		</div>
    </div>
</div>
<!--doctor-->
<div class="container">
<!--
    <div class="doctor-sub">
		<h3><img src="<?php echo base_url(); ?>assets/images/patient-login/12.png"  ></h3>
        <h4><?php if($this->lang->line('doctorfilter_slide_A13')){ ?><?php echo $this->lang->line('doctorfilter_slide_A13'); }else{ ?>Select a Speciality Doctor <?php } ?></h4>
    </div>
-->
    <div class="doctor-pat-srch">     
        <div class="row">
			<input type="hidden" value='<?php echo $actual_data;?>' id="actual_data">
            <div class="evnt-mn doctor" id="updates">
				<?php if(!empty($doctors)) { 
						if(isset($doctors)) { ?>
				<div class="col-lg-6" style="padding-right: 0px;">
				<?php foreach($doctors as $doctor_detail){ ?>
					<div class="evt-br doctor">				
						<div class="left-events left-img-ph">
							<?php if($doctor_detail->display_image != ""){ ?>
							<img src= "<?php echo base_url().'admin/'.$doctor_detail->display_image;?>" >
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
									<h6> <?php if(!empty($doctor_detail->city_name)): ?><?php echo $doctor_detail->city_name;?>,<?php endif; ?><?php if(!empty($doctor_detail->state_name)): ?><?php echo $doctor_detail->state_name;?>, <?php endif; ?><?php echo $doctor_detail->country_name;?> <?php echo $doctor_detail->doctor_office_zip;?></h6>
								</div>
							</div>
						</div>
                    </div>
                    <div class="view-prf">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="<?php echo base_url(); ?>assets/images/patient-login/14.png" />
                                <h6><a href ="<?php echo base_url(); ?>Doctor/Profile/<?php echo $doctor_detail->id; ?>"><?php if($this->lang->line('doctorfilter_slide_A14')){ ?><?php echo $this->lang->line('doctorfilter_slide_A14'); }else{ ?>View Profile<?php } ?></a></h6>
                            </div>
                            <div class="col-lg-4">
                                <img src="<?php echo base_url(); ?>assets/images/patient-login/15.png" />
                                <h6><a class ="modalbookapp" href ="javascript:void(0);" id="<?php echo $doctor_detail->id; ?>" ><?php if($this->lang->line('doctorfilter_slide_A15')){ ?><?php echo $this->lang->line('doctorfilter_slide_A15'); }else{ ?>Book Online<?php } ?></a></h6>
                            </div>
                        </div>
                    </div>
				</div>
				<?php } ?>
			</div>
			<div class="col-lg-5 evt-br-1" id="calendar_blk">
			<?php foreach($doctors as $doctor_detail){ 
				pull_doccalendar($doctor_detail->id);  } ?>
			</div>
			<?php  } } else { ?>						
				<div class="error"><h1><?php if($this->lang->line('doctorfilter_slide_A17')){ ?><?php echo $this->lang->line('doctorfilter_slide_A17'); }else{ ?>Sorry, No records found. Please try with different keywords.<?php } ?> </h1></div>
				<div class="clearfix"></div>												
			<?php  } ?>
            </div>
		</div>		
	</div>
</div>
<!--doctor-->
<!----- modal ---->		
<div class="modal bookingdoc fade" id="myModal-calendar" role="dialog">
    <div class="modal-dialog">    
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title"><?php if($this->lang->line('doctorfilter_slide_A18')){ ?><?php echo $this->lang->line('doctorfilter_slide_A18'); }else{ ?>Appointment Details<?php } ?></h4>
			</div>
			<div class="modal-body" id="bookingdoc" >
			  <p>Some text in the modal.</p>
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-default" data-dismiss="modal"><?php if($this->lang->line('doctorfilter_slide_A16')){ ?><?php echo $this->lang->line('doctorfilter_slide_A16'); }else{ ?>Close<?php } ?></button>
			</div>
		</div>
	</div>
</div>
<div class="clearfix"></div>	