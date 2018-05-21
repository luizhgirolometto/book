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
	<div class="container">
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
			<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="#home"><i class="fa fa-dashboard fa-fw"></i>Sua agenda </a>
                        </li>
                        
                        <li>
                            <a href="tables.html"><i class="fa fa-table fa-fw"></i> Configurar agenda</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Configurações</a>
                        </li>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>                   	
        </nav>
		<div id="page-wrapper">	
			<div id="home">		
	            <div class="row">
	                <div class="col-lg-12">
	                    <h1 class="page-header">Painel de controle</h1>
	                </div>
	                <!-- /.col-lg-12 -->
	            </div>  <!-- /.row -->
	            <div class="row">
	                <div class="col-lg-3 col-md-6">
	                    <div class="panel panel-primary">
	                        <div class="panel-heading">
	                            <div class="row">
	                                <div class="col-xs-3">
	                                    <i class="fa fa-comments fa-5x"></i>
	                                </div>
	                                <div class="col-xs-9 text-right">
	                                    <div class="huge">26</div>
	                                    <div>Horários agendados</div>
	                                </div>
	                            </div>
	                        </div>
	                        
	                    </div>
	                </div>
	                <div class="col-lg-3 col-md-6">
	                    <div class="panel panel-green">
	                        <div class="panel-heading">
	                            <div class="row">
	                                <div class="col-xs-3">
	                                    <i class="fa fa-tasks fa-5x"></i>
	                                </div>
	                                <div class="col-xs-9 text-right">
	                                    <div class="huge">12</div>
	                                    <div>Horários para hoje</div>
	                                </div>
	                            </div>
	                        </div>
	                        
	                    </div>
	                </div>
	                <div class="col-lg-3 col-md-6">
	                    <div class="panel panel-yellow">
	                        <div class="panel-heading">
	                            <div class="row">
	                                <div class="col-xs-3">
	                                    <i class="fa fa-shopping-cart fa-5x"></i>
	                                </div>
	                                <div class="col-xs-9 text-right">
	                                    <div class="huge">124</div>
	                                    <div>Horários atendidos hoje</div>
	                                </div>
	                            </div>
	                        </div>
	                        
	                    </div>
	                </div>
	                <div class="col-lg-3 col-md-6">
	                    <div class="panel panel-red">
	                        <div class="panel-heading">
	                            <div class="row">
	                                <div class="col-xs-3">
	                                    <i class="fa fa-support fa-5x"></i>
	                                </div>
	                                <div class="col-xs-9 text-right">
	                                    <div class="huge">13</div>
	                                    <div>Horários restantes para hoje</div>
	                                </div>
	                            </div>
	                        </div>	                        
	                    </div>
	                </div>
	            </div>
            <!-- /.row -->
	            <div class="row">
	                <div class="col-lg-12">
	                    <div class="panel panel-default">
	                        <div class="panel-heading">
	                            <i class="fa fa-bar-chart-o fa-fw"></i> Sua Agenda
	                            <div class="pull-right">
	                            	<br></br>
	                                <div id="calendar">											

									</div>
									<br></br>
	                            </div>
	                        </div>
	                        <!-- /.panel-heading -->
	                    </div>
	                    <!-- /.panel -->
	                    
	                </div>
	                <!-- /.col-lg-8 -->                
	            </div>
       		</div> <!-- home -->
            
        </div>        
    </div>
</div>      	


