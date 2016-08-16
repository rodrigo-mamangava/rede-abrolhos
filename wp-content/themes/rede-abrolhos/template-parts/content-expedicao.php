<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<div id="expedicao-single" class="single">

    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                
                <h1>EXPEDIÇÃO <?php echo get_the_date('F Y'); ?>:</h1>
                
                <?php
                
                the_title('<h2>', '</h2>');
                
                the_content();
                ?>
            </div>
        </div>
    </div>
</div><!-- #expedicao-single .single -->
