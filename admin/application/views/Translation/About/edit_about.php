<?php $id = $this->session->userdata('admin');  ?>
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Edit About Translation 
      </h1>
      <ol class="breadcrumb">
         <li><a href="<?php echo base_url();?>Welcome/"><i class="fa fa-user-md"></i>Home</a></li>
         <li><a href="<?php echo base_url(); ?>About_Translation/view_about"> About Translation </a></li>
         <li class="active">Edit About Translation</li>
      </ol>
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="row">
         <!-- left column -->
		 
         <div class="col-md-12">
            <?php
               if($this->session->flashdata('message')) {
               $message = $this->session->flashdata('message');
               ?>
            <div class="alert alert-<?php echo $message['class']; ?>">
               <button class="close" data-dismiss="alert" type="button">×</button>
               <?php echo $message['message']; ?>
            </div>
            <?php
               }
               ?>
         </div>
		 <?php 	
				$final_lang = '';
				$textFile = $language_name;
				$location = '../application/language/'.$textFile.'/'.'';
				$lang_directory = directory_map($location, FALSE);	
				if(is_bool($lang_directory ) === false):	
					if(in_array('about_lang.php',$lang_directory)):				
						$final_lang = 'about_lang';
					else:
						$this->load->view('error_trans');
						exit();
					endif;
				else:
					$this->load->view('error_trans');
					exit();
				endif;			
				if($final_lang):	
					$extension = ".php";       					
					include '../application/language/'.''.$textFile.'/'.$final_lang.$extension;
				endif;
				?>
	<form role="form"  method="post" id="about_edit">
		<input type="hidden" name="created_by" value="<?php echo $id; ?>">
		<input type="hidden" name="created_date" value="<?php echo date('Y-m-d  H:i:s'); ?>" >
	 <input  type="hidden" name="lang['clinicfilter_lang']" value="clinicfilter_lang" >
	 <input  type="hidden" name="lang['login_lang']" value="login_lang" >
	 <input  type="hidden" name="lang['search_lang']" value="search_lang" >
	 <input  type="hidden" name="lang['doctorfilter_lang']" value="doctorfilter_lang" >
	 <input  type="hidden" name="lang['hospitalprofile_lang']" value="hospitalprofile_lang" >
    <input  type="hidden" name="lang['medicalfilter_lang']" value="medicalfilter_lang" >
	 <input  type="hidden" name="lang['hospitalfilter_lang']" value="hospitalfilter_lang" >
	 <input  type="hidden" name="lang['doctorprofile_lang']" value="doctorprofile_lang" >
	 <input  type="hidden" name="lang['clinicprofile_lang']" value="clinicprofile_lang" >
	 <input  type="hidden" name="lang['medicalprofile_lang']" value="medicalprofile_lang" >
	 <input  type="hidden" name="lang['hospital_lang']" value="hospital_lang" >
	 <input  type="hidden" name="lang['doctor_lang']" value="doctor_lang" >
	 <input  type="hidden" name="lang['patient_lang']" value="patient_lang" >
	  <input  type="hidden" name="lang['home_lang']" value="home_lang" >
	    <input  type="hidden" name="lang['terms_lang']" value="terms_lang" >
         <div class="col-md-12">
            <!-- general form elements -->						 
            <div class="box">
               <div class="box-header with-border">
                  <h3 class="box-title">Edit General About Details</h3>
				  <div class="edituser" tabindex='1'></div>
               </div>
               <!-- /.box-header -->
               <!-- form start -->               
			   
			    <div class="box-body">                 
                     <div class="col-md-12">
					 <input  name="id"  id="id" class="form-control  required regcom sample" value="<?php echo $textFile; ?>" type="hidden">
					 	<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Language Name</label>
                             <input class="form-control  required regcom sample" placeholder="Language Name" name="lang['language']"  type="text" value="<?php if(!empty($lang['language'])): echo $lang['language']; endif;?>" >
                             <span class="glyphicon  form-control-feedback"></span>
                        </div>
                            
					  <input class="form-control  required regcom sample"   placeholder="Page Name" value="about_lang" name="lang['page_name']"  type="hidden">
			<!-------About page ------->
					    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">About Us</label>
                            <input type="text" name="lang['about_A1']"  value="<?php if(!empty($lang['about_A1'])): echo $lang['about_A1']; endif;?>" placeholder="About Us" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
					    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">About Us subtitle one</label>
							<textarea name="lang['about_A2']"  class="form-control required regcom"  placeholder="About Us subtitle one" required=""><?php if(!empty($lang['about_A2'])): echo $lang['about_A2']; endif;?> </textarea>
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
					    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">About Us subtitle two</label>
							<textarea name="lang['about_A3']" class="form-control required regcom"  placeholder="About Us subtitle two" required=""><?php if(!empty($lang['about_A3'])): echo $lang['about_A3']; endif;?> </textarea>
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Easy to Find</label>
                            <input type="text" name="lang['about_A4']"  value="<?php if(!empty($lang['about_A4'])): echo $lang['about_A4']; endif;?>" placeholder="Easy to Find" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Instant Booking</label>
                            <input type="text" name="lang['about_A5']"  value="<?php if(!empty($lang['about_A5'])): echo $lang['about_A5']; endif;?>" placeholder="Instant Booking" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">24 Hours Service</label>
                            <input type="text" name="lang['about_A6']"  value="<?php if(!empty($lang['about_A6'])): echo $lang['about_A6']; endif;?>" placeholder="24 Hours Service" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Read more</label>
                            <input type="text" name="lang['about_A7']"  value="<?php if(!empty($lang['about_A7'])): echo $lang['about_A7']; endif;?>" placeholder="Read more" class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 	
				 </div>
			</div>
			<div class="box">			
			   <div class="form-group has-feedback">                                       
                    <input type="button" class="btn btn-primary" value="Submit"   id="aboutedit">
                     <button type="reset" class="btn btn-primary">Reset </button>
               </div> 
            </div>	
            <!-- /.box -->
         </div>
		 </form>
      </div>
      <!-- /.row -->
   </section>
   <!-- /.content -->
</div>
	<script>
	
	base_url = "<?php echo base_url(); ?>";
	config_url = "<?php echo base_url(); ?>";
	
	</script>

    <script type="text/javascript">

</script>
	 