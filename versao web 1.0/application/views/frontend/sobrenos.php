<!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">

                  <?php echo $titulo ?>
                    <small>>
                    <?php 
                    if($subtitulo != ''){
                    echo $subtitulo;  
                    }else{
                        foreach($subtitulodb as $dbtitulo){
                            echo $dbtitulo->titulo;
                        }
                    }
                    ?></small>
                </h1>
                       <div class="col-md-12 "> 
              
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            
                </div>
                <br>
                 <h1 class="page-header">
                   Nossos autores
                </h1>
                <div class="col-md-12 row">

                <?php 
                    foreach($autores as $autor){
                ?>
                    <div class="col-md-4 col-xs-6">
                        <?php 
                    if($autor->img == 1){
                    $mostraImg= "assets/frontend/img/usuarios/".md5($autor->id).".jpg";
                    }else{
                    $mostraImg= "assets/frontend/img/semFoto.png";
                    }

                    ?>
                <img class="img-responsive img-circle" src="<?php echo base_url($mostraImg) ?>" alt="">
                         <h4 class="text-center">
                            <a href="<?php echo base_url('autor/'.$autor->id.'/'.limpar($autor->nome)) ?>"><?php echo $autor->nome ?></a>
                        </h4> 
                    </div>
                    <?php
                    }
                 ?>

                </div>
                
            </div>