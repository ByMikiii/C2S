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
  <?php 
  for($i = 0; $i < 8; $i++){
    echo '<p class="hashtag">';
    $inputHashtags = ['#gaming', '#czsk', '#funny', '#twitchstreamer', '#tiktok', '#foryoupage', '#fyp', '#foryou', '#viral', '#love', '#funny', '#memes', '#followme', '#fail', '#trending', '#featureme', ' #lifestyle', '#beautiful', '#explore', '#comedy'];
    $outputHashtags = '';
    while(strlen($outputHashtags) <= 130){
     $index = rand(0, count($inputHashtags)- 1);
     if (!str_contains($outputHashtags, $inputHashtags[$index])){
      $outputHashtags .= $inputHashtags[$index] . " ";
    }
    }
    echo $outputHashtags;
    echo '</p>';
  }

endif;
    ?>
  
  <?php
  require('./parts/footer.php');
  ?>
