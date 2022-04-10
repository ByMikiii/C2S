<?php
$clipurl = $_GET['url'];

if(strpos($clipurl, "?") !== false){
	$finalclip = explode("?", $clipurl);
	$clipurl = $finalclip[0];
}
$finalclip = explode("/", $clipurl);
  $clipurl = $finalclip[5]; 

  header('Location: https://streamladder.com/twitch-clip/'.$clipurl.'/templates/blurredbackground');
?>