<html>
<head>
    <link rel="stylesheet" href="css/blueimp-gallery.css">
</head>
<body>
<div id="links">
    <a href="image/p_big1.jpg" title="Banana">
        <img src="image/p1.jpg" alt="Banana">
    </a>
    <a href="image/p_big2.jpg" title="Apple">
        <img src="image/p2.jpg" alt="Apple">
    </a>
    <a href="image/p_big3.jpg" title="Orange">
        <img src="image/p3.jpg" alt="Orange">
    </a>
</div>
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>
{{--<script src="js/jquery.js"></script>--}}
<script src="js/blueimp-gallery.js"></script>
<script>
    document.getElementById('links').onclick = function (event) {
        event = event || window.event;
        var target = event.target || event.srcElement,
                link = target.src ? target.parentNode : target,
                options = {index: link, event: event},
                links = this.getElementsByTagName('a');
        blueimp.Gallery(links, options);
    };
</script>
</body>
</html>