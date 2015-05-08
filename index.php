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
</section>
</core-header-panel>
</body>
</html>