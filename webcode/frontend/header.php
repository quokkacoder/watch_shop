	<script type="text/javascript">
		var image= new Image();
		image.src="frontend/image_slide/bruno.jpg";

		var image1= new Image();
		image1.src="frontend/image_slide/35555.jpg";
		
		var image2= new Image();
		image2.src="frontend/image_slide/8199.jpg";
		
		var image3= new Image();
		image3.src="frontend/image_slide/maxres.jpg";
		
		var image4= new Image();
		image4.src="frontend/image_slide/thuysy.jpg";

		var image5= new Image();
		image5.src="frontend/image_slide/bruno.jpg";

		var image6= new Image();
		image6.src="frontend/image_slide/haitrieu.jpg";
	</script>
	<div class="container">
	<img src="image_slide/bruno.jpg" name="slide" height="290" width="100%" >
	</div>
	<script type="text/javascript">
		var step=1
		function slideit(){
			document.images.slide.src=eval("image"+step+".src");
			if(step<6)
				step++
			else
				step=1;
			setTimeout("slideit()",3800);
		}
		slideit();
	</script>