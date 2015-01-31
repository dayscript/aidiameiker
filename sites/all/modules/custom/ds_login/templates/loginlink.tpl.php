<?php
$path = base_path() .drupal_get_path("theme","aidia");
?>
<a id="login-link" href="<?php echo base_path()?>user/login" class="button">
  <img src="<?php echo $path?>/images/icons/locked.png">Ingresar
</a>
<div class="reveal-modal-bg" style="display: none"></div>
<div id="login-popup" class="reveal-modal tiny" data-reveal style="top: 10px; ">
  <input type="text" name="user">
  <a class="close-reveal-modal">&#215;</a>
</div>