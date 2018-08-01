	<?php
		$settings = get_icon();
        $id = $settings->languages;
        $query = $this->db->query("SELECT * FROM  language_set WHERE  id ='$id'");
        $kk = $query->row();
        $textFile = $kk->languages;
        $extension = ".php"; 
        require 'admin/includes/'.$textFile.$extension;
		echo $map['js']; ?>
<!--viewprofile-->


    <!-- Page Content -->
    <div class="container">

      <!-- Portfolio Item Heading -->
      <h1 class="my-4"><span>Dr. <?php echo $view_doctor->doctor_firstname; ?> <?php echo $view_doctor->doctor_lastname;?></span>
          
      </h1>
      
        <div class="gc-ratting" data-rate="<?php echo $review->rating; ?>" ></div> 

      <!-- Portfolio Item Row -->
      <div class="row">

        <div class="col-md-8"> 

                <?php if($view_doctor->display_image != ""){ ?>
                    <img class="img-fluid" src="<?php echo base_url(); ?>admin/<?php echo $view_doctor->display_image;?>" alt="">
				<?php }else{ ?>
				    <img class="img-fluid" src="<?php echo base_url(); ?>assets/images/home/man.png" alt="">
				<?php } ?>             
          
        </div>

        <div class="col-md-4">
          <h3 class="my-3">Sobre</h3>
          <p><?php if(!empty($view_doctor->about_doctor )){ echo $view_doctor->about_doctor; }else { echo "Sem mais detalhes sobre este profissional."; }?> </p>
          <h3 class="my-3">Especialidades</h3>
            <?php $arry_select = explode(",", $view_doctor->specialty); ?>
          <ul>
            <li><?php if($view_doctor->degree_name != ""){ echo $view_doctor->degree_name; }else { echo "No Details Found"; }?> , <?php  foreach($specialtydetails as $detailsspecialty){ if (in_array($detailsspecialty->id, $arry_select)) {   echo $detailsspecialty->specialty_name;  ?>, <?php  }}  ?> </li>								              
          </ul>
        </div>

      </div>
      <!-- /.row -->

      <!-- Related Projects Row -->
      <h3 class="my-4">Galeria de imagens</h3>

      <div class="row">

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
                <?php if(! empty ($view_galpic[1] )){ ?>
                    <img class="img-fluid" src="<?php echo base_url(); ?>admin/<?php echo $view_galpic[1]->image;?>" alt="">
				<?php }else{ ?>
				    <img class="img-fluid" src="http://placehold.it/500x300" alt="">
				<?php } ?> 
          </a>
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
                <?php if(! empty ($view_galpic[2] )){ ?>
                    <img class="img-fluid" src="<?php echo base_url(); ?>admin/<?php echo $view_galpic[2]->image;?>" alt="">
				<?php }else{ ?>
				    <img class="img-fluid" src="http://placehold.it/500x300" alt="">
				<?php } ?> 
          </a>
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
                <?php if(! empty ($view_galpic[3] )){ ?>
                    <img class="img-fluid" src="<?php echo base_url(); ?>admin/<?php echo $view_galpic[3]->image;?>" alt="">
				<?php }else{ ?>
				    <img class="img-fluid" src="http://placehold.it/500x300" alt="">
				<?php } ?> 
          </a>
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
                <?php if(! empty ($view_galpic[4] )){ ?>
                    <img class="img-fluid" src="<?php echo base_url(); ?>admin/<?php echo $view_galpic[4]->image;?>" alt="">
				<?php }else{ ?>
				    <img class="img-fluid" src="http://placehold.it/500x300" alt="">
				<?php } ?> 
          </a>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->



<!--viewprofile-->
<!--
<div class="container-fluid cont-hospital">
	<div class="container">
		<div class="row">
			<div class="col-lg-1"></div>
			<div class="col-lg-5">
				<div class="hospital-left">
					<h3><?php if($this->lang->line('doctorprofile_slide_A2')){ ?><?php echo $this->lang->line('doctorprofile_slide_A2'); }else{ ?>Hospital Affiliations<?php } ?></h3>
					<h5><?php echo $view_doctor->hospital_name;?> </h5>
				</div>
				<div class="hospital-left">
					<h3><?php if($this->lang->line('doctorprofile_slide_A3')){ ?><?php echo $this->lang->line('doctorprofile_slide_A3'); }else{ ?>Work Experience<?php } ?></h3>
					<h5><?php echo $view_doctor->doctor_experience;?>  </h5>
				</div>
				<div class="hospital-left">
					<h3><?php if($this->lang->line('doctorprofile_slide_A4')){ ?><?php echo $this->lang->line('doctorprofile_slide_A4'); }else{ ?>Awards and Publications<?php } ?></h3>
					<h5><?php echo $view_doctor->doctor_awards;?> </h5>
				</div>
				<div class="hospital-left">
					<h3><?php if($this->lang->line('doctorprofile_slide_A7')){ ?><?php echo $this->lang->line('doctorprofile_slide_A7'); }else{ ?>Professional Memberships<?php } ?></h3>
					<h5><?php echo $view_doctor->doctor_memberships;?>  </h5>
				</div>
			</div>
			<div class="col-lg-6">				
				<div class="hospital-right">
					<h3>Book Appointment</h3>
					<div class="col-lg-10 evt-br-1" id="calendar_blk">
						<?php pull_doccalendar($view_doctor->id); ?>
					</div>
				</div>
			</div>
			<div class="col-lg-6">				
				<div class="hospital-right">											
					<h3><?php if($this->lang->line('doctorprofile_slide_A8')){ ?><?php echo $this->lang->line('doctorprofile_slide_A8'); }else{ ?>Patient Reviews for <?php } ?><span>Dr. <?php echo $view_doctor->doctor_firstname; ?> <?php echo $view_doctor->doctor_lastname;?></span></h3>
					<div class="row review-page-docto">
						<?php   if(!empty($review_doctor)){
						foreach ($review_doctor as $review){  ?>
						<div class="col-lg-3">
							<div class="img-ph-hospital">
								<img src= "<?php echo base_url(); ?>admin/<?php echo $review->patient_display_image;?>" / >  
							</div>
						</div></br>
						<div class="clearfix"></div>
						<div class="col-lg-9">
							<div class="right-patient">
								<h4><span class="by-span"><?php if($this->lang->line('doctorprofile_slide_A5')){ ?><?php echo $this->lang->line('doctorprofile_slide_A5'); }else{ ?>By<?php } ?></span> <?php echo $review->patient_firstname; ?> <span class="date-spn"><?php echo $review->date;?></span> </h4>
								<div class="row">
									<div class="col-lg-5">
										<h5><?php if($this->lang->line('doctorprofile_slide_A6')){ ?><?php echo $this->lang->line('doctorprofile_slide_A6'); }else{ ?>Rating<?php } ?></h5>
									</div>
									<div class="col-lg-6">
										<div class="gc-ratting" data-rate="<?php echo $review->rating; ?>" ></div>  
									</div>
								</div>
								<div class="row">
									<div class="col-lg-5">
										<h5><?php if($this->lang->line('doctorprofile_slide_A12')){ ?><?php echo $this->lang->line('doctorprofile_slide_A12'); }else{ ?>Comments<?php } ?></h5>
									</div>
									<div class="col-lg-6">
										<span><?php echo $review->review;?></span>
									</div>
								</div>
							</div>
						</div>					
						<div class="clearfix"></div>					
						<?php } }else{
							if($lgdpqbapp7){ echo $lgdpqbapp7; }else { 
								?>
								<div class="col-lg-6">
										<span>No Reviews Found</span>
									</div>
							<?php } ?>
						<?php } ?>
					</div>					
				</div>		
			</div>
			<div class="clearfix"></div><div class="col-lg-1"></div>
		</div>
	</div>
</div>	-->	
<!----- for modal ---->
<div class="modal bookingdoc fade" id="myModal-calendar" role="dialog">
	<div class="modal-dialog">    
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"><?php if($this->lang->line('search_tab_A3')){ ?><?php echo $this->lang->line('search_tab_A3'); }else{ ?>Appointment Details<?php } ?></h4>
			</div>
			<div class="modal-body" id="bookingdoc" >
				<p>Some text in the modal.</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><?php if($this->lang->line('search_tab_A3')){ ?><?php echo $this->lang->line('search_tab_A3'); }else{ ?>Close<?php } ?></button>
			</div>
		</div>
	</div>
</div>
<!----- for modal ---->	 