<?php
$title = "TikTok Web";
require('./parts/header.php');
?>

<?php 
if(isset($_SESSION['username'])) : ?>
<h1 id="nickname" >ByMikiii</h1>
<form action="./scripts/urlscript.php" method="GET">
  <div class="mb-3">
    <input type="url" class="form-control" name="url" placeholder="URL">
  </div>
</form>
<?php endif; ?>

<?php
require('./parts/footer.php');
?>