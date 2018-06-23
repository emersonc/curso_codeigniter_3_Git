 <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Busca no Blog</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Categorias do Blog</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="list-unstyled">
                            <?php 
                            foreach ($categorias as $categoria){
                            ?>
                                <li><a href="<?php echo base_url('categoria/'.$categoria->id.'/'.limpar($categoria->titulo)) ?>"><?php echo $categoria->titulo ?></a>
                                </li> 
                            <?php
                            }
                            ?>
                               
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>

            </div>