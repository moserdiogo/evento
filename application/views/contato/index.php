   <div class="content" style="margin-top: -30px">
        <div class="container mt-0">
            <div class="row">
                <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12 mb20">
                    <!-- contact-section-title -->
                    <div class="text-center">
                        <p class="lead">Deixe sua mensagem, retornaremos o mais breve possível.
                        </p>
                    </div>
                    <div class="text-center">

                    </div>    
                </div>

                <div class="offset-xl-3 col-xl-6 offset-lg-3 col-lg-6 col-md-12 col-sm-12 col-12 mt-0">
                    <?php echo validation_errors(); ?>
                    
                    <form method="post" action="<?php echo base_url(); ?>contato/enviar">
                        <!-- form -->
                        <div class="contact-form">
                            <div class="row">
                            
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                    <div class="form-group service-form-group">
                                        <label class="control-label sr-only" for="nome"></label>
                                        <input id="nome" type="tex" name="nome" value="<?= $validacao['nome'] ?? '' ?>" placeholder="Nome" class="form-control" minlength="1" maxlength="20" >
                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                    <div class="form-group service-form-group">
                                        <label class="control-label sr-only" for="email"></label>
                                        <input id="email" value="<?= $validacao['email'] ?? '' ?>" type="email" name="email" placeholder="Email" class="form-control" >
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                    <div class="form-group service-form-group">
                                        <label class="control-label sr-only" for="telefone"></label>
                                        <input id="telefone" id="telefone" value="<?= $validacao['telefone'] ?? '' ?>" type="text" name="telefone" placeholder="Telefone" class="form-control" >
                                    </div>
                                </div>
                                <!-- select -->
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                    <div class="form-group">
                                        <select class="nice-select wide mb20" name="assunto">
                                            <option><?= $validacao['assunto'] ?? 'Assunto' ?></option>
                                            <option>Dúvida</option>
                                            <option>Crítica</option>
                                            <option>Sugestão</option>
                                           
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                    <!-- textarea -->
                                    <div class="form-group">
                                        <label class="control-label sr-only" for="mensagem"></label>
                                        <textarea class="form-control" id="mensagem" name="mensagem" rows="5" placeholder="Mensagem" minlength="20" maxlength="1200"  ><?= $validacao['mensagem'] ?? '' ?></textarea>
                                    </div>
                                </div>

                                <!--button -->
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                                    <button type="submit" name="enviar" class="btn btn-default">Enviar</button>
                                </div>
                            </div>
                        </div>
                        <!-- /.form -->
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- /.contact-form -->
    
    <script type="text/javascript">

    

        jQuery("#telefone")
        .mask("(99) 9999-9999?9")
        .focusout(function (event) {  
            var target, phone, element;  
            target = (event.currentTarget) ? event.currentTarget : event.srcElement;  
            phone = target.value.replace(/\D/g, '');
            element = $(target);  
            element.unmask();  
            if(phone.length > 10) {  
                element.mask("(99) 99999-999?9");  
            } else if (phone.length == 10) {  
                element.mask("(99) 9999-9999?9");  
            }  else{
                return false;
            }
        });
    </script>