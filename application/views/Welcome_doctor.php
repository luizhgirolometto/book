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
		<div class="row">
			<div class="col-lg-12">
				<?php if($end_date == '' & $trial_date >= $current_date  ){?>					
	                
                    <div class="alert alert-danger alert-dismissible fade show" style="margin: 10px;" role="alert">
                        <strong>Você está usando uma versão de avaliação gratuita de 15 dias. Depois que o período de avaliação expirar, seus serviços não serão mais apresentados no filtro de pesquisa. Selecione qualquer pacote para estender seu serviço no MarqueHora.</strong>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>                
				<?php } elseif($end_date < $current_date) { ?>	
                    <div class="alert alert-danger alert-dismissible fade show " style="margin: 10px;" role="alert">
                        <strong>Seu período de pacote expirou. Por favor, selecione qualquer pacote para estender seu serviço no MarqueHora.</strong>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div> 
                
												                                         
				<?php } else{ ?>
				<?php } ?>
				
			</div>
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
									<h4>Seu menu</h4>
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
<!--Begin calendar-->
								<div class="manage-ad-inner-main tab-manage-1 ">
									<div class="checkin-homesubhosp"> 
										<div id='calendar'></div>
                                        
									</div> 
								</div>                                
<!-- End Calendar-->
<!-- Begin settings -->
								<div class="manage-ad-inner-main tab-manage-2">
									<div class="tab-cnt-search">
										<div class="container">
											<div class="row">
												<div class="col-lg-12">
													<ul class="nav nav-tabs  nav-tb dct-inner-tab  dct-inner-tab-1">
														<li class="active"><a data-toggle="tab" href="#homess"><?php if($this->lang->line('doctor_tab_B2')){ ?><?php echo $this->lang->line('doctor_tab_B2'); }else{ ?>Work Plan<?php } ?></a></li>


														<li><a data-toggle="tab" href="#menuss1"><?php if($this->lang->line('doctor_tab_B3')){ ?><?php echo $this->lang->line('doctor_tab_B3'); }else{ ?>Breaks<?php } ?></a></li>
                                                        
														<li><a data-toggle="tab" href="#menuss2"><span></span><?php if($this->lang->line('doctor_tab_B4')){ ?><?php echo $this->lang->line('doctor_tab_B4'); }else{ ?>Vacations<?php } ?></a></li>
													</ul>
												</div>
											</div>
										</div>
										<div class="container-fluid ">
											<div class="container">
												<div class="tab-content tb-patient">
													<div id="homess" class="tab-pane fade in active">
														<?php   if($this->session->flashdata('messagework')) {
																$messagework = $this->session->flashdata('messagework'); ?>
														<div class="alert alert-<?php echo $messagework['class']; ?>">
															<button class="close" data-dismiss="alert" type="button">×</button>
															<?php echo $messagework['messagework']; ?>
														</div>
														<?php }	?>
														<div class="col-lg-12">
															<form  method="post" action="">
																<div class="table-responsive">
																	<table class="table">
																		<thead class="thead-dark">
																			<tr>
<!--																				<th><input type="checkbox" class="checkall" value="" />&nbsp Marcar Todos</th>-->

																				<th><?php if($this->lang->line('doctor_tab_B22')){ ?><?php echo $this->lang->line('doctor_tab_B22'); }else{ ?>Day<?php } ?></th>
																				<th><?php if($this->lang->line('doctor_tab_B23')){ ?><?php echo $this->lang->line('doctor_tab_B23'); }else{ ?>Start<?php } ?></th>
																				<th><?php if($this->lang->line('doctor_tab_B24')){ ?><?php echo $this->lang->line('doctor_tab_B24'); }else{ ?>End<?php } ?></th>
																				<th><?php if($this->lang->line('doctor_tab_B25')){ ?><?php echo $this->lang->line('doctor_tab_B25'); }else{ ?>Actions<?php } ?></th>
																			</tr>
																		</thead>
																		<tbody>
																			<?php $working_time = (!empty($doctor_schedule['working_time'])) ? json_decode($doctor_schedule['working_time'],true) : array();?>				 	
																			<?php foreach ($Days as $key => $value) { ?>
																			<tr>
<!--																				<td ><input type="checkbox" /></td>-->

																				<td><ul><li><span><?php echo $value;?></span></li></ul></td>

																				<div class="timecal1">
																				<td><h4><input  style="width: 80px; font-size: 15px;" type="text" class="timepicker pickwkt" onkeypress="return false;"  name="work[<?php echo $days[$key];?>][start]" value="<?php echo (!empty($working_time)) ? isset($working_time[ $days[$key]]['start']) ? $working_time[ $days[$key]]['start'] :'' : '';?>" readonly></h4></td>

																				<td><h4><input   style="width: 80px; font-size: 15px;" type="text"   class="timepicker pickwkt"  onkeypress="return false;"  name="work[<?php echo $days[$key];?>][end]" value="<?php echo (!empty($working_time)) ? isset($working_time[ $days[$key]]['end']) ? $working_time[ $days[$key]]['end'] :'' : '';?>" readonly></h4></td>

																				
																				</div>
																				<td><a href="javascript:void(0);" class="checkcalworkedit">
	                                                                             <i class="fa fa-pencil edit-link"></i>
																				</a> </td>
																			</tr>
																		<?php } ?>
																		</tbody>
																	</table>
																</div>
                                                                <section class="row nopadding">
                                                                    <div class="mx-auto">
																        <button value="doctorsubmitwork" type="submit" name="doctorsubmitwork" id="checkcalworkbutton" class="btn btn-primary btn-lg checkcalworkbutton">Gravar Horários</button>
                                                                    </div>
                                                                </section>        
                                                                
                                                                
															</form>
														</div>
														
													</div>
													<div id="menuss1" class="tab-pane fade">
													<?php   if($this->session->flashdata('messagebreak')) {
															$messagebreak = $this->session->flashdata('messagebreak'); ?>
														<div class="alert alert-<?php echo $messagebreak['class']; ?>">
															<button class="close" data-dismiss="alert" type="button">×</button>
															<?php echo $messagebreak['messagebreak']; ?>
														</div>
													<?php }	?>
														<div class="col-lg-offset-1 col-lg-10">
															<form  method="post" action="">
																<div class="table-responsive">
																	<table class="table table-custom table-calender checkcalbreaktable" >
																		<thead>
																			<tr>
																				<th><input type="checkbox" class="checkallbreak" value="" /><?php if($this->lang->line('doctor_tab_B21')){ ?><?php echo $this->lang->line('doctor_tab_B21'); }else{ ?>Checkall<?php } ?></th>
																				<th><?php if($this->lang->line('doctor_tab_B22')){ ?><?php echo $this->lang->line('doctor_tab_B22'); }else{ ?>Day<?php } ?></th>
																				<th><?php if($this->lang->line('doctor_tab_B23')){ ?><?php echo $this->lang->line('doctor_tab_B23'); }else{ ?>Start<?php } ?></th>
																				<th><?php if($this->lang->line('doctor_tab_B24')){ ?><?php echo $this->lang->line('doctor_tab_B24'); }else{ ?>End<?php } ?></th>
																				<th><?php if($this->lang->line('doctor_tab_B25')){ ?><?php echo $this->lang->line('doctor_tab_B25'); }else{ ?>Actions<?php } ?></th>
																			</tr>
																		</thead>
																		<?php $break_time = (!empty($doctor_schedule['break_time'])) ? json_decode($doctor_schedule['break_time'],true) : array('mon'=>array(array('start'=>'','end'=>'')),'tue'=>array(array('start'=>'','end'=>'')),'wed'=>array(array('start'=>'','end'=>'')),'thu'=>array(array('start'=>'','end'=>'')),'fri'=>array(array('start'=>'','end'=>'')),'sat'=>array(array('start'=>'','end'=>'')),'sun'=>array(array('start'=>'','end'=>'')));?>
																		<tbody class="parent_class">
																			<?php foreach ($Days as $key => $value) { ?>
																			<?php if (isset($break_time[$days[$key]])){ ?>
																			<?php  foreach ($break_time[$days[$key]] as $br_key => $breaktime) {?>
																			<div target=".<?php echo $value;?>" >
																				<tr class="clone_break" id="dummy">
																					<td ><input type="checkbox" class="daycheckone"name="<?php echo $value;?>"/></td>
																					<td><ul><li><span><?php echo $value;?></span></li></ul></td>
																					<td><h4><input  style="width: 70px;" type="text" class="timepicker start"  name="break[<?php echo $days[$key];?>][start][]" value="<?php echo (!empty($break_time)) ? isset($breaktime['start']) ? $breaktime['start'] :'' : '';?>" onkeypress="return false;" readonly></h4></td>
																					<td><h4><input   style="width: 70px;" type="text" class="timepicker end" name="break[<?php echo $days[$key];?>][end][]" value="<?php echo (!empty($break_time)) ? isset($breaktime['end']) ? $breaktime['end'] :'' : '';?>" onkeypress="return false;" readonly></h4></td>
																					<td><a href="javascript:void(0);" class="checkcalbreakedit"  ><i class="fa fa-pencil edit-link"></i></a> <a href="javascript:void(0);" class="add_calbreak" ><i class="fa fa-plus edit-link-1"></i></a><a href="javascript:void(0);" class="remove_calbreak"><i class="fa fa-times edit-link-1"></i></a></td>
																				</tr>
																			</div>
																		<?php } } } ?> 
																		</tbody>
																	</table>
																</div>
																<button value="doctorsubmitbreak" type="submit" name="doctorsubmitbreak" id="checkcalbreakbutton" class="btn btn-default checkcalbreakbutton"><span><i class="fa fa-refresh"></i> </span><?php if($this->lang->line('doctor_tab_D')){ ?><?php echo $this->lang->line('doctor_tab_D'); }else{ ?>Update<?php } ?></button>
															</form>
														</div>
														<div class="col-lg-12">
															<h5 class="pad-center pad-center-1"><img src="<?php echo base_url(); ?>assets/images/patient-login/tick.png" > </h5>
														</div>
													</div>
													<div id="menuss2" class="tab-pane fade">
													<?php   if($this->session->flashdata('messagevacation')) {
															$messagevacation = $this->session->flashdata('messagevacation'); ?>
														<div class="alert alert-<?php echo $messagevacation['class']; ?>">
															<button class="close" data-dismiss="alert" type="button">×</button>
															<?php echo $messagevacation['messagevacation']; ?>
														</div>
													<?php }	?>
													<div class="col-lg-offset-1 col-lg-10">
														<form  method="post" action="">
															<div class="table-responsive">
																<table class="table table-custom table-calender checkcalvacationtable">
																	<thead>
																		<tr>
																			<th><input type="checkbox" class="checkallvacation" value="" /><?php if($this->lang->line('doctor_tab_B41')){ ?><?php echo $this->lang->line('doctor_tab_B41'); }else{ ?>Checkall<?php } ?></th>
																			<th><?php if($this->lang->line('doctor_tab_B42')){ ?><?php echo $this->lang->line('doctor_tab_B42'); }else{ ?>Start Date<?php } ?></th>
																			<th><?php if($this->lang->line('doctor_tab_B43')){ ?><?php echo $this->lang->line('doctor_tab_B43'); }else{ ?>End Date<?php } ?></th>       
																			<th><?php if($this->lang->line('doctor_tab_B45')){ ?><?php echo $this->lang->line('doctor_tab_B45'); }else{ ?>Actions<?php } ?></th>
																		</tr>
																	</thead>
																	<?php $vacation_time = (!empty($doctor_schedule['vacation_time'])) ? json_decode($doctor_schedule['vacation_time'],true) : array(array('startdate'=>'','enddate'=>''));?>
																	<tbody class="parent_class2">
																	<?php foreach ($vacation_time as $key => $value) { ?>
																		<div target=".<?php echo $value['startdate'];?><?php echo $value['enddate'];?>" >
																		<tr>
																			<td ><input type="checkbox" name="<?php echo $value['startdate'];?><?php echo $value['enddate'];?>"/></td>
																			<td><h6><input  required type="text" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask="" id="dpd1" class="start_date dpd1" placeholder="yyyy-mm-dd" required  name="startdate[]" onkeypress="return false;"  value="<?php echo $value['startdate'];?>" readonly></h6></td>
																			<td><h6><input required type="text"  data-inputmask="'alias': 'yyyy-mm-dd'" data-mask="" id="dpd1" class="end_date dpd1" placeholder="yyyy-mm-dd" required name="enddate[]"  onkeypress="return false;"  value="<?php echo $value['enddate'];?>" readonly></h6></td>
																			<td><a href="javascript:void(0);" class="checkcalvacationedit"  ><i class="fa fa-pencil edit-link"></i></a><a href="javascript:void(0);" class="add_calvacation"><i class="fa fa-plus edit-link-1"></i></a><a href="javascript:void(0);" class="remove_calvacation-vacation"><i class="fa fa-times edit-link-1"></i></a></td>
																		</tr> </div>
																		<?php } ?>
																	</tbody>
																</table>
															</div>
															<button value="doctorsubmitvacation" type="submit" name="doctorsubmitvacation" id="checkcalvacationbutton" class="btn btn-default checkcalvacationbutton"><span><i class="fa fa-refresh"></i> </span><?php if($this->lang->line('doctor_tab_D')){ ?><?php echo $this->lang->line('doctor_tab_D'); }else{ ?>Update<?php } ?></button>
														</div>
													</form>
													<div class="col-lg-12">
														<h5 class="pad-center pad-center-1"><img src="<?php echo base_url(); ?>assets/images/patient-login/tick.png"> </h5>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>															
								<!-- End Settings -->
							</div>	
						</div>
					</div>			
				</div>
			</div>
		</div>
	</div>
</div>			