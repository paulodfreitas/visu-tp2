<!DOCTYPE html>
<html>
<head>
	<title>dashboard</title>


	<script language="javascript" type="text/javascript">
	  function resizeIframe(obj) {
	    obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
	  }
	</script>

	<style>
		
		.frame {
			border: 1px solid red;
			clear: both;
			width: 100%;
			transition: all 2s linear;
		}

	</style>
</head>
<body>


	<iframe src="Absolute_Growth.html" frameborder="1" id="frame-1" class="frame" scrolling="no" onLoad="resizeIframe(this);"></iframe>
	<iframe src="Jobs_per_Salary_Range.html" frameborder="1" id="frame-2" class="frame" scrolling="no" onLoad="resizeIframe(this);"></iframe>
	<iframe src="Num_Jobs_Per_State_Brazil.html" frameborder="1" id="frame-3" class="frame" scrolling="no" onLoad="resizeIframe(this);"></iframe>
	<iframe src="Salary_Average.html" frameborder="1" id="frame-4" class="frame" scrolling="no" onLoad="resizeIframe(this);"></iframe>
	<iframe src="Trade_Balance_General.html" frameborder="1" id="frame-5" class="frame" scrolling="no" onLoad="resizeIframe(this);"></iframe>

	<iframe src="import.html" frameborder="1" id="frame-6" class="frame" scrolling="no" onLoad="resizeIframe(this);"></iframe>
	<iframe src="export.html" frameborder="1" id="frame-6" class="frame" scrolling="no" onLoad="resizeIframe(this);"></iframe>

</body>
</html>

