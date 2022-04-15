function generateHashtags() {
  const inputHashtags = ['#gaming', '#czsk', '#funny', '#twitchstreamer', '#tiktok', '#foryoupage', '#fyp', '#foryou', '#viral', '#love', '#funny', '#memes', '#followme', '#fail', '#trending', '#featureme', ' #lifestyle', '#beautiful', '#explore', '#comedy'];
  let outputHashtags = '';

  while (outputHashtags.length <= 130) {
    var index = Math.floor(Math.random() * inputHashtags.length);
    if (!outputHashtags.includes(inputHashtags[index])) {
      outputHashtags += inputHashtags[index] + ' ';
     }
   }
  copyToClipboard(outputHashtags)
    .then(() => console.log('text copied !'))
    .catch(() => console.log('error'));
}


document.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
    document.getElementById('url-input').value = '';
    generateHashtags();
  }
});

function copyToClipboard(textToCopy) {
    if (navigator.clipboard && window.isSecureContext) {
        return navigator.clipboard.writeText(textToCopy);
    } else {
        let textArea = document.createElement("textarea");
        textArea.value = textToCopy;
        textArea.style.position = "fixed";
        textArea.style.left = "-999999px";
        textArea.style.top = "-999999px";
        document.body.appendChild(textArea);
        textArea.focus();
        textArea.select();
        return new Promise((res, rej) => {
            document.execCommand('copy') ? res() : rej();
            textArea.remove();
        });
    }
}