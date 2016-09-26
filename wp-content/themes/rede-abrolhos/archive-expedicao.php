<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package rede-abrolhos
 */
get_header();
?>
<div id="expedicoes">

    <div class="container-fluid">

        <div class="row">

            <div class="faixa">
                <img src="<?php echo get_template_directory_uri() ?>/image/expedicoes/home_expedicoes1920x622px.jpg" class="img-responsive">
            </div>
        </div>

    </div>

    <div class="container">




        <div class="row">
            <div class="col-xs-12">

                <h1>Expedições</h1>

                <hr/>

                <p>
                    As atividades fundamentais das expedições da Rede 
                    Abrolhos estão relacionadas ao mapeamento de fundo, 
                    a obtenção de amostras geológicas, a aquisição de 
                    séries temporais longas de dados, a realização de 
                    experimentos manipulativos, a realização de 
                    amostragens para a caracterização da biodiversidade. 
                    O trabalho de campo extensivo contribui também para 
                    a capacitação de recursos humanos de alto nível, 
                    proporcionando aos estudantes um ambiente único de 
                    aprendizado prático. A Rede Abrolhos opera uma série 
                    de equipamentos oceanográficos, sonares, sondas, 
                    sensores, equipamentos de mergulho técnico, e 
                    veículos submersíveis de operação remota (ROV).
                </p>

                <h2>As páginas a seguir ilustram algumas das nossas operações de campo:</h2>

                <div class="expedicoes-lista">

                    <?php
                    $i = date("Y");
                    while ($i >= 2000) {
                        
                        get_expedicoes_by_year($i);
                        
                        $i--;
                    }
                    ?>

                </div> <!-- .expedicoes-lista -->
            </div>
        </div><!-- row -->
        
        
    </div><!-- container -->
</div><!-- #expedicoes -->


<?php
get_footer('expedicaoes-loop');
