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