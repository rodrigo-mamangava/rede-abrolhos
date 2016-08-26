<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<h1>Expedição <span><?php echo get_the_date('F Y'); ?></span>:</h1>

<?php
the_title('<h2>', '</h2>');

the_content();
?>

