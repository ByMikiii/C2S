<?php
$title = "TikTok ByMikiii";
$icon = "./Images/monkaH.png";
require('./parts/header.php');
?>

<?php 
if(isset($_SESSION['username'])) : ?>
<h1 id="nickname" >ByMikiii</h1>
<form action="./phpscripts/urlscript.php" method="GET" target="_blank">
  <div class="mb-3">
    <input type="url" class="form-control" name="url" placeholder="URL" autocomplete="off" >
  </div>
</form>
<p id="hashtag">#gaming #czsk #funny #twitchstreamer #tiktok #foryoupage #fyp #foryou #viral #love #funny #memes #followme #fail</p>
<?php endif; ?>
<?php
require('./parts/footer.php');
?>