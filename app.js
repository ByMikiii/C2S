function generateHashtags() {
  const inputHashtags = ['#gaming', '#czsk', '#funny', '#twitchstreamer', '#tiktok', '#foryoupage', '#fyp', '#foryou', '#viral', '#love', '#funny', '#memes', '#followme', '#fail', '#trending', '#featureme', ' #lifestyle', '#beautiful', '#explore', '#comedy'];
  var outputHashtags = '';

  while (outputHashtags.length <= 130) {
    var index = Math.floor(Math.random() * inputHashtags.length);
    if (!outputHashtags.includes(inputHashtags[index])) {
      outputHashtags += inputHashtags[index] + ' ';
     }
   }
  navigator.clipboard.writeText(outputHashtags);
}

function clearUrlInput() {
  console.log('submited');
  document.getElementById('url-input').value = '';
}
/*
document.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
    console.log('Enter is pressed!');
    document.getElementById('url-input').value = '';
  }
});*/