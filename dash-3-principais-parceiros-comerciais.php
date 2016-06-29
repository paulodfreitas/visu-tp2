<!DOCTYPE html>
<html class="no-js" lang="en">

<?php include('head.php'); ?>

<body class="loading">

  <div id="container" class="cf">
  

  <h1>KEY BUSINESS PARTNERS</h1>


	<div id="main" role="main">
      <section class="slider">
        <div class="flexslider">
          <ul class="slides">
            <li>
  	    	    <iframe src="../data/import.html" width="100%" frameborder="1" id="frame-6" class="frame" scrolling="no" onLoad="resizeIframe(this);"></iframe>
  	    		</li>
  	    		<li>
  	    	    <iframe src="../data/export.html" width="100%" frameborder="1" id="frame-6" class="frame" scrolling="no" onLoad="resizeIframe(this);"></iframe>
  	    		</li>
                        <li>
                    <iframe src="../data/Main_Partners.html" width="100%" frameborder="1" id="frame-6" class="frame" scrolling="no" onLoad="resizeIframe(this);"></iframe>
                        </li>

          </ul>
        </div>
      </section>
      
    </div>

  </div>

  <!-- jQuery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>

  <!-- FlexSlider -->
  <script defer src="../jquery.flexslider.js"></script>

  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>


  <!-- Syntax Highlighter -->
  <!-- <script type="text/javascript" src="js/shCore.js"></script> -->
  <!-- <script type="text/javascript" src="js/shBrushXml.js"></script> -->
  <!-- <script type="text/javascript" src="js/shBrushJScript.js"></script> -->

  <!-- Optional FlexSlider Additions -->
  <script src="js/jquery.easing.js"></script>
  <script src="js/jquery.mousewheel.js"></script>
  <script defer src="js/demo.js"></script>

</body>
</html>
