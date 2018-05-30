<?php
	if ($this->session->userdata('frontend_logged_in')){
		$session_user_email=$this->session->userdata['frontend_logged_in']['email'];
		$match_user_details = get_login_userDetails($session_user_email);
		$match_username = $match_user_details ->username; 
	}	
	$settings = get_icon();
	$id = $settings->languages;
	$query = $this->db->query("SELECT * FROM  language_set WHERE  id ='$id'");
	$kk = $query->row();
	$textFile = $kk->languages;
	$extension = ".php"; 
	require 'admin/includes/'.$textFile.$extension;       
?>
  <nav class="navbar navbar-expand-lg bg-secondary text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="<?php echo base_url(); ?>">MarqueHora</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
<!--  -->
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo base_url(); ?>">Home</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo base_url(); ?>General/aboutus">Sobre nós</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo base_url(); ?>General/contact">Contato</a>
            </li>
			<li class="nav-item mx-0 mx-lg-1">
              <a onclick="mysigninFunction()" data-toggle="modal" data-target="#myModal" class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger">Entrar</a>
            </li>            
			            
          </ul>
        </div>
      </div>
    </nav>
<div class="container">
    <!-- Modal -->
    <div class="modal fade bac-modal" id="myModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content login-modal">
                <button type="button"  onclick="mysigninclickFunction()" class="btn btn-default close-mdl" data-dismiss="modal"><img src="<?php echo base_url(); ?>assets/images/login/2.png" /> </button>
				<div class="row">
					<div class="col-lg-6">
						<div class="errormsg"> </div>
						<div class="login-top">                                            
						<div class="main-lg-new active" id="signinlist">
							<form id="form_login" action="" method="post" data-parsley-validate="" class="validate">
								<div class="col-lg-12">
									<h3><span><img src="<?php echo base_url(); ?>assets/images/home/1.png" /></span><?php if($this->lang->line('login_sigin_A1')){ ?><?php echo $this->lang->line('login_sigin_A1'); }else{ ?>SIGN IN<?php } ?></h3>
								</div>
								<div class="form-group">
									<div class="col-lg-12">
										<input type="email" name="email" class="form-control" id="email" placeholder="<?php if($this->lang->line('login_sigin_A2')){ echo $this->lang->line('login_sigin_A2'); }else{ echo "Email"; } ?>" data-parsley-trigger="change" data-parsley-type="email" required="">
									</div>
								</div>
								<div class="form-group">
									<div class="col-lg-12">
										<input type="password" name="password" class="form-control" id="password" placeholder="<?php if($this->lang->line('login_sigin_A3')){ echo $this->lang->line('login_sigin_A3'); }else{ echo "Password"; } ?>" data-parsley-minlength="6" required="">
									</div>
								</div>
								<div class="form-group">
									<div class="col-lg-12">
										<div class="forget-pass">
											<h4><a href="javascript:void(0);" class="frgt-pass"><?php if($this->lang->line('login_sigin_A4')){ ?><?php echo $this->lang->line('login_sigin_A4'); }else{ ?>Forgot your Password?<?php } ?></a></h4>
											<h4><button type="submit" class="log-in-a"><?php if($this->lang->line('login_sigin_A5')){ ?><?php echo $this->lang->line('login_sigin_A5'); }else{ ?>Signin<?php } ?></button></h4>
										</div>
									</div>							  	
								</div>
							</form>
						</div>						
						<!---- new --->
						<div class="main-lg-reset">
							<form id="form_forgot" action="" method="post" data-parsley-validate="" class="validate">
								<div class="col-lg-12">
									<h3><span><img src="<?php echo base_url(); ?>assets/images/home/2.png" /></span><?php if($this->lang->line('login_patient_sigup_A22')){ ?><?php echo $this->lang->line('login_patient_sigup_A22'); }else{ ?>Forgot Password<?php } ?></h3>
								</div>
								<div class="form-group">
									<div class="col-lg-12">
										<input type="email" name="email" id="femail" class="form-control"  placeholder="<?php if($this->lang->line('login_patient_sigup_A23')){ ?><?php echo $this->lang->line('login_patient_sigup_A23'); }else{ ?><?php echo "Email"; ?><?php } ?>" >
									</div>
								</div>
								<div class="form-group">
									<div class="col-lg-12">
										<div class="forget-pass">
											<h4><button type="submit" class="log-in-a"><?php if($this->lang->line('login_patient_sigup_A24')){ ?><?php echo $this->lang->line('login_patient_sigup_A24'); }else{ ?>Submit<?php } ?></button></h4>
										</div>
									</div>
								</div>
							</form>
						</div>					
					</div>
				</div>			  			  
				<div class="col-lg-6">
					<div class="bac-right-login">
						<h4><?php if($this->lang->line('login_sigin_A6')){ ?><?php echo $this->lang->line('login_sigin_A6'); }else{ ?>I'm new in Bookmydoc<?php } ?></h4>
						<h5>Sign up for a book my doc account to book an appointment right now!</h5>
						<a href = "<?php echo base_url(); ?>Login/presignup"><?php if($this->lang->line('login_sigin_A8')){ ?><?php echo $this->lang->line('login_sigin_A8'); }else{ ?>Sign up Now !<?php } ?></a>
					</div>
				</div>
			</div>
		</div>
        </div>
    </div>
</div>