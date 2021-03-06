<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

get_header('modal');
?>

<div id="equipe-single">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="folha">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="header-equipe">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <a class="btn-fechar" href="<?php echo esc_url(home_url('/equipe')); ?>" ><i class="fa fa-times" aria-hidden="true"></i></a>                            
                                    </div>
                                    <div class="col-xs-12" >
                                        <div class="cv-principal">
                                            <div class="foto">
                                                <img class="img-responsive" src="<?php the_post_thumbnail_url('interna-equipe'); ?>" alt="<?php echo get_the_title(); ?>">  
                                            </div>
                                            <div class="info">

                                                <div class="caixa-texto">

   

                                                    <div class="texto">


                                                        <div class="titulo-single-equipe">
                                                            <h1><?php echo get_the_title(); ?></h1>
                                                            <?php
                                                            if (has_term('coordenadores', 'cargo')) {
                                                                echo "<h2>Coordenador</h2>";
                                                            }
                                                            ?>
                                                        </div>

                                                        <?php echo get_field("descricao_principal") ?>
                                                    </div>
                                                </div>
                                                <div class="links">
                                                    <a  target="_blank" href="<?php echo get_field("link_lattes") ?>" >link CV Lattes</a>
                                                    <p><?php echo get_field("email") ?></p>                                        
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- header-equipe -->
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-xs-12">
                            <div class="curriculo-equipe">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <?php echo get_field("descricao_geral") ?>
                                    </div><!-- .col-xs-12 --> 
                                </div><!-- .row --> 
                            </div> <!-- .curriculo-equipe --> 
                        </div>
                    </div>
                </div><!-- folha -->
            </div>
        </div>
    </div>
</div><!-- #equipe-single -->

<?php
get_footer('modal');
