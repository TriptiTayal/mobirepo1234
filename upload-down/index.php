<html>
<head>
<script type="text/javascript" src="fancybox/lib/jquery-1.9.0.min.js"></script>

<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox -->
<link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.4" type="text/css" media="screen" />
<script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.4"></script>

<!-- Optionally add helpers - button, thumbnail and/or media -->
<link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.5"></script>

<link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
<script type="text/javascript">
$(document).ready(function() {
		$(".fancybox").fancybox();(function ($, F) {
    F.transitions.resizeIn = function() {
        var previous = F.previous,
            current  = F.current,
            startPos = previous.wrap.stop(true).position(),
            endPos   = $.extend({opacity : 1}, current.pos);

        startPos.width  = previous.wrap.width();
        startPos.height = previous.wrap.height();

        previous.wrap.stop(true).trigger('onReset').remove();

        delete endPos.position;

        current.inner.hide();

        current.wrap.css(startPos).animate(endPos, {
            duration : current.nextSpeed,
            easing   : current.nextEasing,
            step     : F.transitions.step,
            complete : function() {
                F._afterZoomIn();

                current.inner.fadeIn("fast");
            }
        });
    };

	
}(jQuery, jQuery.fancybox));




		
	});
	
</script>
</head>
<body style="background:#f4f4f4;">
<div style="background:#e5e5e5; border-radius:10px;width:62%;height:80%; top: 10%;box-shadow:0 1px 6px #999;left: 19%; position: absolute;">
<div style="top: 3em;left: 1em;position: relative; font-style: italic; font-weight: bolder; font-size: xx-large; color: black;">
Upload / Download Application<br /><br />
<fieldset style="width: 10em;height: 7em;position: relative; border-style: outset;background-color: #00CED1;">
<img src="image.jpg" style="width: 10em;height: 7em;"/>
</fieldset>
</div>
<div style="top: 8em; left: 40em; position: absolute; font-style: italic; font-weight: bolder; font-size: larger; color: black;">
Welcome Guest<br /><br />
<a class='fancybox fancybox.ajax' href="login.php" style="text-decoration: none; color: black;" ><fieldset style="border-style: outset; background-color: #00CED1; width: 4em; height: 1em;">Login</fieldset></a>
<br />
<a class="fancybox fancybox.ajax" href="signup.php" style="text-decoration: none; color: black;"><fieldset style="border-style: outset; background-color: #00CED1; width: 4em; height: 1em;">Sign Up</fieldset></a>
</div>
</div>
</body>
</html>