<!DOCTYPE HTML>
<html>
<head>
<title>Carosciber</title>
<script src="/core/components/webcomponentsjs/webcomponents.js"></script>
<link rel="import" href="/core/components/polymer/polymer.html">

<link rel="import" href="/core/components/core-toolbar/core-toolbar.html">

<link rel="import" href="/core/components/core-toolbar/core-header-panel.html">

<link rel="import" href="/core/components/font-roboto/roboto.html">
</head>
<body fullbleed layout horizontal vertical>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<style>
core-toolbar{
font-family: RobotoDraft, Segoe UI, Trebuchet MS;
background-color: crimson;
color: white;
}
</style>
<core-header-panel flex>
<core-toolbar flex>
  <div flex>
     Caroscriber
   </div>
</core-toolbar>
<section>
<iframe src="/PDFView/ViewerJS/apush_study_guide4.pdf" width="1000" height="500"></iframe>
<div id="disqus_thread"></div>
<script type="text/javascript">
    /* * * CONFIGURATION VARIABLES * * */
    var disqus_shortname = 'caroscriber';
    
    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
<div class="fb-page" data-href="https://www.facebook.com/archersysos" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/archersysos"><a href="https://www.facebook.com/archersysos">ArcherSys</a></blockquote></div></div>
<div class="fb-comments" data-href="https://www.facebook.com/pages/Caroscriber/" data-numposts="5" data-colorscheme="light"></div>
<div class="fb-like" data-href="https://www.facebook.com/archersysos" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
<div class="fb-share-button" data-href="https://play.spotify.com/track/5XW3v6HJQWmPlOFnLG4k4D" data-layout="button_count"></div><div class="fb-send" data-href="https://www.facebook.com/archersysos"></div>
</section>
</core-header-panel>
</body>
</html>