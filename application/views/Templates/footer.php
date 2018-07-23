<?php
	$settings = get_icon();
	$id = $settings->languages;
	$query = $this->db->query("SELECT * FROM  language_set WHERE  id ='$id'");
	$kk = $query->row();
	$textFile = $kk->languages;
	$extension = ".php"; 
	require 'admin/includes/'.$textFile.$extension;
?>
<!--footer-->
   <!-- Footer -->
    <footer class="footer text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Localização</h4>
            <p class="lead mb-0">Rua Argentina, 799
              <br>Jardim América, Pato Branco, PR</p>
          </div>
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Encontre-nos na WEB</h4>
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-google-plus"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-twitter"></i>
                </a>
              </li>

            </ul>
          </div>
          <div class="col-md-4">
            <h4 class="text-uppercase mb-4">Sobre nós</h4>
            <p class="lead mb-0">Este texto ainda precisa ser escrito.</p>
          </div>
        </div>
      </div>
    </footer>

    <div class="copyright py-4 text-center text-white">
      <div class="container">
        <small>Copyright &copy; GiroDesenvolvimento 2018</small>
      </div>
    </div>
<!--footer
<a href="#" id="back-to-top" title="Back to top"><img src="<?php echo base_url(); ?>assets/images/home/btp.png"></a>
-->