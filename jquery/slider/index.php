<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="jquery.bxslider.css">
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="jquery.bxslider.js"></script>
	<script>
    $(document).ready(function(){
      $('.slider').bxSlider({
      		mode : "vertical",
      	    captions: true,
      	    slideWidth: 600,
      	    speed : 1000
      	    

      });
    });
  </script>
</head>
<body>
<div class="slider">
    <div>
    	<img src="1.jpg" height="200" width="600" title="This is First Image" />
    </div>
    <div>
    	<img src="2.jpeg" height="200" width="600" title="This is First Image" />
    </div>
    <div>
    	<img src="3.jpeg" height="200" width="600" title="This is First Image" />
    </div>
    <div>
    	<img src="4.jpg" height="200" width="600" title="This is First Image" />
    </div>
  </div>
</body>
</html>