<div class=" vendor-form">
        <div class="container">
            <div class="row ">
                <div class="offset-xl-3 col-xl-6 offset-lg-3 col-lg-6 col-md-12 col-sm-12 col-12  ">
                    <!-- vendor head -->
                    <div class="vendor-head">
                        <a href="index.html"><img src="images/logo.png" alt="Wedding Vendor & Supplier Directory HTML Template "></a>
                    </div>
                    <!-- /.vendor head -->
                    <div class="st-tab">
                        
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab-1">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                    <!-- vendor title -->
                                    <div class="vendor-form-title text-center mb-2">
                                        <h3 class="mb-2">Cadastro de Parceiros</h3>
                                        <?php echo validation_errors(); ?>
                                    </div>
                                    <!-- /.vendor title -->
                                    <form method="post" action="<?php echo base_url(); ?>parceiro/cadastrar">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                               <!-- Text input-->
                                                <div class="form-group">
                                                    <label class="control-label sr-only" for="bussinessname"></label>
                                                    <input id="bussinessname" type="text" name="nome" placeholder="Nome" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                               <!-- Text input-->
                                                <div class="form-group service-form-group">
                                                    <label class="control-label sr-only" for="email"></label>
                                                    <input id="email" type="email" name="email" placeholder="Email" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                               <!-- Text input-->
                                                <div class="form-group">
                                                    <label class="control-label sr-only" for="telefone"></label>
                                                    <input id="telefone" type="text" name="telefone" placeholder="Telefone" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                              <!-- Text input-->
                                                <div class="form-group service-form-group">
                                                    <label class="control-label sr-only" for="senha"></label>
                                                    <input id="senha" type="password" name="senha" placeholder="Senha" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                              <!-- Text input-->
                                                <div class="form-group service-form-group">
                                                    <label class="control-label sr-only" for="categoria"></label>
                                                    <input id="categoria" type="password" name="categoria" placeholder="Senha" class="form-control" >
                                                    <select class="wide nice-select">
                                                        <option>Música</option>
                                                        <option>Bife</option>
                                                        <option>Decoração</option>
                                                        <option>Fotografo</option>
                                                        <option>Espaço</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- buttons -->
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <button type="submit" name="cadastrar" class="btn btn-default">Cadastrar</button>
                                            </div>
                                        </div>
                                    </form>
                                    <p class="mt-2"> Já tem conta? <a href="#"> Login</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>