<?php
$title = "TikTok ByMikiii";
$icon = "./Images/monkaH.png";
require('./parts/header.php');
?>

<?php 
if(isset($_SESSION['username'])) : ?>
<h1 id="nickname" >ByMikiii</h1>
<form action="./phpscripts/urlscript.php" method="GET" target="_blank" >
  <div class="mb-3">
    <input type="url" class="form-control" name="url" id='url-input' placeholder="URL" autocomplete="off">
  </div>
</form>
<div class="hashtags">
<button type="button" class="btn btn-dark" id='copy-hashtags' onclick='generateHashtags()'>Magic</button>
</div>
  <?php 
endif;
    ?>
  
  <?php
  require('./parts/footer.php');
  ?>
