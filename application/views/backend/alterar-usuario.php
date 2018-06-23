     <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?php echo 'Administrar '.$subtitulo ?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">

                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          <?php echo 'Alterar '.$subtitulo ?>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                   <?php
                                    echo validation_errors('<div class="alert alert-danger">','</div>');
                                    foreach($usuarios as $usuario){
                                    echo form_open('admin/usuarios/salvar_alteracoes/'.md5($usuario->id).'/'.$usuario->user);

                                    
                                   ?>
                                    <div class="form-group">
                                            <label id="txt-nome">Nome do Usuário</label>
                                            <input type="text" id="txt-nome" name="txt-nome" class="form-control" placeholder="Digite o nome do usuário..." value="<?php echo $usuario->nome ?>">
                                    </div>
                                     <div class="form-group">
                                            <label id="txt-email">Email</label>
                                            <input type="text" id="txt-email" name="txt-email" class="form-control" placeholder="Digite o email do usuário..." value="<?php echo $usuario->email ?>">
                                    </div>
                                     <div class="form-group">
                                            <label id="txt-historico">Histório</label>
                                            <textarea id="txt-historico" name="txt-historico" class="form-control"><?php echo $usuario->historico ?> </textarea>
                                    </div>
                                      <div class="form-group">
                                            <label id="txt-user">User</label>
                                            <input type="text" id="txt-user" name="txt-user" class="form-control" placeholder="Digite o user do usuário..." value="<?php echo $usuario->user ?>">
                                    </div>
                                      <div class="form-group">
                                            <label id="txt-senha">Senha</label>
                                            <input type="password" id="txt-senha" name="txt-senha" class="form-control">
                                    </div>
                                      <div class="form-group">
                                            <label id="txt-confir-senha">Confirmar Senha</label>
                                            <input type="password" id="txt-confir-senha" name="txt-confir-senha" class="form-control">
                                    </div>
                                    <input type="hidden" name="txt-id" id="txt-id" value="<?php echo $usuario->id ?>">
                                    <button type="submit" class="btn btn-default"> Atualizar</button>
                                   <?php
                                     
                                   echo form_close();
                                   ?>
                                </div>
                                
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->

                 <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          <?php echo 'Imagem de destaque do '.$subtitulo ?>
                        </div>
                        <div class="panel-body">
                        <div class="row" style="padding-bottom: 10px;">
                            <div class="col-lg-3 col-lg-offset-3">
                            <?php 
                            if($usuario->img == 1){
                            echo img("assets/frontend/img/usuarios/".md5($usuario->id).".jpg");
                            }else{
                            echo img("assets/frontend/img/semFoto.png");
                            }

                            ?>

                            </div>   
                        </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <?php
                                    $divopen= '<div class="form-group">';
                                    $divclose= '</div>';
                                    echo form_open_multipart('admin/usuarios/nova_foto');
                                    echo form_hidden('id', md5($usuario->id));
                                    echo $divopen;
                                    $imagem= array('name' => 'userfile', 'id' => 'userfile', 'class' => 'form-control');
                                    echo form_upload($imagem);
                                    echo $divclose;
                                    echo $divopen;
                                    $botao= array('name' => 'btn_adicionar', 'id' => 'btn_adicionar', 'class' => 'btn btn-default',
                                        'value' => 'Adicionar nova Imagem');
                                    echo form_submit($botao);
                                    echo $divclose;
                                    echo form_close();
                                    }
                                    ?>
                                </div>
                                
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->

            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
<!--
     <form role="form">
                                        <div class="form-group">
                                            <label>Titulo</label>
                                            <input class="form-control" placeholder="Entre com o texto">
                                        </div>
                                        <div class="form-group">
                                            <label>Foto Destaque</label>
                                            <input type="file">
                                        </div>
                                        <div class="form-group">
                                            <label>Conteúdo</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                       
                                        <div class="form-group">
                                            <label>Selects</label>
                                            <select class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-default">Cadastrar</button>
                                        <button type="reset" class="btn btn-default">Limpar</button>
                                    </form>

                                    -->