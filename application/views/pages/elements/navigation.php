<?php
$navigation = array(
  'home' => 'Home',
  'about' => 'About&nbspme'
);

?>
<nav>
  <?php foreach ($navigation as $view => $name) {
    $is_active = ($viewname == $view)?" id=active":"";
  ?>
    <a href="<?=base_url($view)?>"<?=$is_active?>><?=$name?></a>
  <?php } ?>
</nav>
<!--line></line><!-- separation line -->
<!--contact>
  <a href="<?php //base_url('contact')?>">Contact me</a>
</contact-->
<line></line><!-- separation line -->
