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


<!--begin carousel-->
<!--
<div class="container-fluid nopadding body-main">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="tales" src="<?php echo base_url(); ?>assets/images/home/21.jpg" alt="MarqueHora">
            </div>
            <div class="carousel-item">
                <img class="tales" src="<?php echo base_url(); ?>assets/images/home/31.jpg" alt="MarqueHora">
            </div>    
            <div class="carousel-item">
                <img class="tales" src="<?php echo base_url(); ?>assets/images/home/11.jpg" alt="MarqueHora">
            </div>                
        </div>
    </div>    
</div>    
-->


<div class="container-fluid nopadding body-main">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="tales" src="<?php echo base_url(); ?>assets/images/home/21.jpg" alt="MarqueHora">
            </div>
            <div class="carousel-item">
                <img class="tales" src="<?php echo base_url(); ?>assets/images/home/31.jpg" alt="MarqueHora">
            </div>    
            <div class="carousel-item">
                <img class="tales" src="<?php echo base_url(); ?>assets/images/home/11.jpg" alt="MarqueHora">
            </div>                
        </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
      </a>
    </div>
</div>    

<!--end carousel-->

<!--begin features-->
<div class="container-fluid features">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="feature-text">
                    <h3><?php if($this->lang->line('home_common_B3')){ ?><?php echo $this->lang->line('home_common_B3'); }else{ ?>FEATURES<?php } ?></h3>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="feature-inner hvr-shrink">
                    <img src="<?php echo base_url(); ?>assets/images/home/f1.png"  class="img-responsive" alt=""/>
                    <h4><?php if($this->lang->line('home_common_B4')){ ?><?php echo $this->lang->line('home_common_B4'); }else{ ?>View a map of doctors in your
                        insurance network.<?php } ?></h4>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="feature-inner hvr-shrink">
                    <img src="<?php echo base_url(); ?>assets/images/home/f2.png" class="img-responsive" alt=""/>
                    <h4><?php if($this->lang->line('home_common_B5')){ ?><?php echo $this->lang->line('home_common_B5'); }else{ ?>Read patient reviews to help you choose the right doctor<?php } ?></h4>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="feature-inner hvr-shrink">
                    <img src="<?php echo base_url(); ?>assets/images/home/f3.png" class="img-responsive" alt=""/>
                    <h4><?php if($this->lang->line('home_common_B6')){ ?><?php echo $this->lang->line('home_common_B6'); }else{ ?>See any doctor's available times and click to book!<?php } ?></h4>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end features-->

<!--map-section-->
<!--
<div class="container-fluid">
    <div class="map">
        <div class="container">
            <div class="map-text">
                <h3><?php if($this->lang->line('home_common_B1')){ ?><?php echo $this->lang->line('home_common_B1'); }else{ ?>HEALTHCARE AT YOUR DEMAND !<?php }?></h3>
                <h4><?php if($this->lang->line('home_common_B2')){ ?><?php echo $this->lang->line('home_common_B2'); }else{ ?>Find a nearby doctor or dentist and book an appointment instantly. And it's free !<?php }?></h4>
            </div>
        </div>
    </div>
</div>
-->


<!--map-section-->

<!--get the app-->
<div class="container-fluid">
    <div class="app-banner">
        <div class="container ">
            <div class="app">
                <h3><?php if($this->lang->line('home_common_C1')){ ?><?php echo $this->lang->line('home_common_C1'); }else{ ?>GET THE APP<?php } ?></h3>
                <h4><?php if($this->lang->line('home_common_C2')){ ?><?php echo $this->lang->line('home_common_C2'); }else{ ?>Make appointments on the go, right from <br>
                    your smartphone, with our top-rated<br>
                    mobile app.<?php } ?></h4>
                <img src="<?php echo base_url(); ?>assets/images/home/line.png"  class="line-img"/>
                <div class="clearfix"></div>
                <h5><?php if($this->lang->line('home_common_C3')){ ?><?php echo $this->lang->line('home_common_C3'); }else{ ?>Get it on<?php } ?></h5>
                <a href=""><img src="<?php echo base_url(); ?>assets/images/home/ios.png" alt="" class="img-responsive hvr-grow"/> </a>
                <a href=""><img src="<?php echo base_url(); ?>assets/images/home/googleplay.png"  alt="" class="img-responsive hvr-grow"/> </a>
            </div>
        </div>
    </div>
</div>