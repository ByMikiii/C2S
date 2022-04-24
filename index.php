<?php
//print("\n\n<br><br>log_errors: ".ini_get('log_errors'));
//print("\n\n<br><br>error_log: ".ini_get('error_log'));
$title = "C2S ByMikiii";
$icon = "./Images/monkaH.png";
require('./parts/header.php');
?>

<?php 
if(isset($_SESSION['username'])) : ?>
<div id='mainpage'>
<form action="./phpscripts/urlscript.php" method="GET" target="_blank" >
  <div class="mb-3">
    <input type="url" class="form-control" name="url" id='url-input' placeholder="URL" autocomplete="off">
  </div>
</form>
<button type="button" class="btn btn-dark" id='copy-hashtags' onclick='generateHashtags()'>Magic</button>
</div>
  <?php 
  endif;
  require('./parts/footer.php');
  ?>
