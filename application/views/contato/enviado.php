<div class="content">
    <div class="container">
        <div class="row">
            <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12 mb60">
                <!-- contact-section-title -->
                <div class="text-center">
                    <p class="lead mb60">Mensagem enviada com sucesso!</p>
                    <div class="offset-xl-3 col-xl-6 offset-lg-3 col-lg-6 col-md-12 col-sm-12 col-12">
                      <a class="btn btn-default" href="<?php echo base_url(); ?>">Voltar</a>
                      <?php 

                      if (isset($_SESSION['usuario'])) {
                          echo $_SESSION['usuario'];
                      }

                        

                       ?>                    
                  </div>
              </div>

          </div>

      </div>
  </div>
</div>
