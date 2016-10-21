<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script   src="https://code.jquery.com/jquery-3.1.1.js"   integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="   crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="style/style.css">

</head>
<body>



<div class="container">
	<div class="row">

	<div class="push">Push to open to register window</div>

		<div class="header">

			<div class="col-md-6">
			
			
				<form class="yoxlamaForm" action="yoxlama.php" method="post">

				<div class="main1">
					
						<input class="name" type="text" name="name" placeholder="Name">
						<input class="e-mail" type="text" name="e-mail" placeholder="E-mail">
						<input class="password" type="password" name="password" placeholder="Password">
				</div>
			</div>


			<div class="col-md-6">
				<div class="main1">
					<textarea name="message" class="design2" type="text" cols="31" rows="6" placeholder="Message"></textarea>
				</div>
			</div>


			<div class="col-md-12">
				<div class="footer">
					<input class="design3" type="submit" name="submit" value="submit">
				</div>
			</div>
			

			</form>


		</div>`
	</div>
</div>



<script>
	
	$(function(){
		$(".yoxlamaForm").submit(function(){
			if($(".name" && ".e-mail" && ".password").val() == ""){
				event.preventDefault();
				alert("Ad yerini boş buraxa bilməzsiniz");
				$(".name").css("color", "pink");

			}
		});
	});	



$('.push').click(function() { 
				$('.header').css('top',"0px");


});



</script>






</body>
</html>