<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Croppic</title>

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/croppic.css" rel="stylesheet">

   
	
  </head>

  <body>

    

	
	<div class="container">
	    
			<div class="col-lg-8">
				<h4 class="centered"> OUTPUT </h4>
				<p class="centered">( display url after cropping )</p>
				<div id="cropContaineroutput"></div>
				<input type="hidden" name="upload_temp_path" id="upload_temp_path">
				<input type="hidden" name="crop_temp_path" id="crop_temp_path">


			</div>
			
			
		</div>
			
	
	

  	<!-- js files -->
	<script src=" https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.mousewheel.min.js"></script>
   	<script src="croppic.js"></script>
    <script>
		
		
		var croppicContaineroutputOptions = {
				uploadUrl:'img_save_to_file.php',
				cropUrl:'img_crop_to_file.php', 
				outputUrlId:'crop_temp_path',
				modal:false,
				loaderHtml:'<div class="loader bubblingG"><span id="bubblingG_1"></span><span id="bubblingG_2"></span><span id="bubblingG_3"></span></div> ',
				onBeforeImgUpload: function(){ console.log('onBeforeImgUpload') },
				onAfterImgUpload: function(res){ console.log(res) },
				onImgDrag: function(){ console.log('onImgDrag') },
				onImgZoom: function(){ console.log('onImgZoom') },
				onBeforeImgCrop: function(){ console.log('onBeforeImgCrop') },
				onAfterImgCrop:function(){ console.log('onAfterImgCrop') },
				onReset:function(){ console.log('onReset') },
				onError:function(errormessage){ console.log('onError:'+errormessage) }
		}
		
		var cropContaineroutput = new Croppic('cropContaineroutput', croppicContaineroutputOptions);
		
	
	</script>
  </body>
</html>
