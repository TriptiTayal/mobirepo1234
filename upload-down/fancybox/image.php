<html>
<head>
<script type="text/javascript" src="lib/jquery-1.9.0.min.js"></script>

<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="lib/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox -->
<link rel="stylesheet" href="source/jquery.fancybox.css?v=2.1.4" type="text/css" media="screen" />
<script type="text/javascript" src="source/jquery.fancybox.pack.js?v=2.1.4"></script>

<!-- Optionally add helpers - button, thumbnail and/or media -->
<link rel="stylesheet" href="source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
<script type="text/javascript" src="source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="source/helpers/jquery.fancybox-media.js?v=1.0.5"></script>

<link rel="stylesheet" href="source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
<script type="text/javascript" src="source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
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

$(".fancybox")
    .attr('rel', 'gallery')
    .fancybox({
        nextMethod : 'resizeIn',
        nextSpeed  : 250,
        
        prevMethod : false,
        
        helpers : {
            title : {
                type : 'inside'
            }
        }
    });



		
	});
	
</script>
</head>

<body>

<a class="fancybox"  href="image2.jpg"><img src="image2.jpg" alt="" width="10%" />image1</a>
<a class="fancybox"  href="image3.jpg"><img src="image3.jpg" alt="" width="10%" /></a>
</body>

</html>