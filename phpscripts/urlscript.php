<?php

$clipurl = $_GET['url'];

if(strpos($clipurl, "?") !== false){
	$finalclip = explode("?", $clipurl);
	$clipurl = $finalclip[0];
}
if(strpos($clipurl, "clips.twitch.tv")){
$finalclip = explode("/", $clipurl);
  $clipurl = $finalclip[3]; 
}else{
  $finalclip = explode("/", $clipurl);
    $clipurl = $finalclip[5]; 
  }
  header('Location: https://streamladder.com/twitch-clip/'.$clipurl.'/templates/blurredbackground');
?>

