
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Business Card Generator</title>

	<link rel="stylesheet" href="css/css.css" />
	<link rel="stylesheet" href="fonts/stylesheet.css" />

	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>

	<script type="text/javascript">
		function isNumberKey(evt){
		    var charCode = (evt.which) ? evt.which : event.keyCode
		    return !(charCode > 31 && (charCode < 48 || charCode > 57));
		}
	</script>
</head>

<body>

	<div class="results" id="results"></div>
	
	<div class="container2" id="card">
		<div class="main2">
			<div class="logo"></div>
			<div class="contents">
				
				<div class="name" id="name"></div>
				<div class="jobtitle" id="jobtitle"></div>
				
				<div class="address" id="address"></div>
				<div class="cellphone" id="cellphone"></div>
				<div class="mail" id="mail"></div>

			</div>
			
			<div class="web">
				www.mywebsite.com
			</div>
		</div>
	</div>
	
	<div class="logo-main" id="logo-main">
		<img src="images/logo-2.png">
	</div>
	

	<div class="wrapper2">
		<div class="form-left">

			<h1>Complete the form</h1>

			<div class="formulario">
				<form action="post">
					<div class="f-left">
					<span>Name / Lastname</span><br>
					<span><input type="text" id="frm_name" /><img src="images/ast.png"/></span><br> 
					<span>Job title</span><br>
					<span><input type="text" id="frm_jobtitle" /><img src="images/ast.png"/></span><br>
					<span>Phone</span><br>
					<span><input type="text" id="frm_phone" onkeypress="return isNumberKey(event);" value="4404404" /></span><br>
					<span>Cellphone</span><br>
					<span><input type="text" id="frm_cellphone" onkeypress="return isNumberKey(event);"/></span><br>
					<span>Mail</span><br>
					<span><input type="text" id="frm_mail"/></span><br>
					<span>Address</span><br>
					<span><input type="text" id="frm_address" value="East Glen Way 3451 - Palo Alto"/></span><br>
					<div class="mandatory">Mandatory fields</div><br>
					
					<div class="buttons">
						<a href="#" id="btnPreview">
							PREVIEW
						</a>
					</div>
					</div>
				</form>
			</div>
			
<br>
<br>
<br>

		</div>


		<div class="clear"></div>
		
		
	</div>
	
	<a href="#" id="btnGenerate" class="btnGenerate">
		GENERATE
	</a>

	
	<script type="text/javascript" src="js/functions.js"></script>
	<script type="text/javascript" src="js/html2canvas.js"></script>
	
</body>
</html>