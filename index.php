<!DOCTYPE HTML>
<html>
<head>
<title>Carosciber</title>
<script src="/core/js/jquery.js"></script>
<script src="/core/js/angularjs/angular.min.js"></script>
<script src="/core/components/webcomponentsjs/webcomponents.js"></script>
<link rel="import" href="/core/components/polymer/polymer.html">

<link rel="import" href="/core/components/core-toolbar/core-toolbar.html">

<link rel="import" href="/core/components/core-header-panel/core-header-panel.html">

<link rel="import" href="/core/components/font-roboto/roboto.html">
</head>
<body fullbleed layout vertical ng-app="Carouscriber">
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
.caroscriber-document-input{
  height: 40px;
  width: 500px;
  background-color: silver;
  font-family: Trebuchet MS, Segoe UI;
  color: white;
  font-size: 25px;
}
#usedoc{
height: 50px;
background-color: lightgreen;
font-family: Segoe UI;
color: white;
}
</style>
<core-header-panel flex>
<core-toolbar>
  <div flex>
     Caroscriber
   </div>
</core-toolbar>
<section ng-controller="HomeController">
<input type="text" class="caroscriber-document-input" name="document"><button id="usedoc"> Open PDF </button>
<iframe id="doc" ng-src="{{ caroscriber_document }}" width="1000" height="500"></iframe>
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

<script src="js/app.js"></script>

<script src="js/controllers/HomeController.js"></script>
</body>
</html>