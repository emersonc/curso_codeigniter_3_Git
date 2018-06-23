<!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">

                  <?php echo $titulo ?>
                   
                </h1>

                 <div class="col-md-12">
                    <?php
                    if($enviado == 1){
                        echo '<div class="alert alert-success"> Email enviado! </div>';
                    }else if($enviado == 2){
                        echo '<div class="alert alert-warning"> Email não enviado! </div>';
                    }
                    ?>
                    <!-- Formulario de contato -->
                    <?php 
                     echo validation_errors('<div class="alert alert-danger">','</div>');

                    $atributosForm = array('name' => 'formulario_contato', 'id'=> 'formulario_contato');
                    echo form_open(base_url('contato/enviar_mensagem'),$atributosForm);

                    $atribNome= array('name'=>'txtNome','id'=>'txtNome','class'=>'form-control','placeholder'=>'Digite seu Nome','value' => set_value('txtNome'));
                    echo("<div class='form-group'>").
                    form_label("Nome",'txtNome').
                    form_input($atribNome).
                    ("</div>");

                    $atribEmail= array('name'=>'txtEmail','id'=>'txtEmail','class'=>'form-control','placeholder'=>'Digite seu Email','value' => set_value('txtEmail'));
                    echo("<div class='form-group'>").
                    form_label("Email",'txtEmail').
                    form_input($atribEmail).
                    (" </div>");

                    $atribMsg= array('name'=>'txtMsg','id'=>'txtMsg','class'=>'form-control','placeholder'=>'Digite sua mensagem','value' => set_value('txtMsg'));
                    echo("<div class='form-group'>").
                    form_label("Mensagem",'txtMsg').
                    form_textarea($atribMsg).
                    (" </div>");

                    
                    echo form_submit('btn_enviar','Enviar Mensagem');
                    
                    echo form_close();

                    ?>
                    
                </div>
                
            </div>