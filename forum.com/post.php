<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>BLUEGRADED - Post      </title>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
				<!-- Bootstrap core CSS -->
				<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
				
				<!-- Custom styles for this template -->
				<link href="navbar-top.css" rel="stylesheet">
			</head>
			<?php
			  error_reporting(0);
			  define('__ROOT__', dirname(__FILE__).'//');
			  require(__ROOT__.'header-menu.php');
              require(__ROOT__.'cr1.php');
			  require(__ROOT__.'db.php');
			  
			  if(isset($_SESSION['usr'])){
				$usr = $_SESSION['usr'];
			  }else{
				$usr ='Unknow';
			  }
			  //$usr = 'Unknow';
              $sql = "SELECT id_usr,username FROM usr WHERE username = '".$usr."'";
			  $conn = new DB($servername,$dbname,$username_db,$password_db);
              $result = $conn->select($sql);

			  // ESTOY USANDO FICHEROS EN VE DE REPETIR CODIGO :)
              if (count($result) > 0) {
                for($i = 0; $i < count($result);$i++){
					$row = $result[$i];
					$user_id = $row["id_usr"];
				  	$_SESSION['id_usr'] = $row["id_usr"];
					//echo $row["id_usr"].' '.$row["username"];
				}
              } else {
                echo "0 results";
              }
              ?>
			<body>

				<!--//---
					CONTENT
				---//-->
				
				<?php //TODO TENGO QUE SACAR ESTA MIERDA DE TINYMCE Y CREAR UN EDITOR DE TEXTO YO MISMO ?>
				<script src="https://cdn.tiny.cloud/1/av2i4lpn5cru1dwdl1ji6kml16rf7eqiz7ti3qk50qifsjql/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script> 
				<?php
					/*<script>
					tinymce.init({
					selector: 'textarea',
					plugins: 'insertdatetime quickbars  a11ychecker advcode casechange export codesample lists fullscreen emoticons formatpainter image editimage linkchecker autolink lists checklist link insertdatetime media mediaembed pageembed permanentpen powerpaste table advtable tableofcontents tinycomments tinymcespellchecker wordcount visualblocks visualchars  searchreplace code',
					toolbar: 'undo redo | blocks | bold italic underline fontsize | alignleft aligncentre alignright alignjustify fullscreen emoticons  numlist bullist codesample insertdatetime link| indent outdent | insertdatetime bullist numlist casechange checklist export formatpainter permanentpen  tableofcontents visualblocks a11ycheck addcomment showcomments visualchars table searchreplace code',
					toolbar_mode: 'floating',
					referrer_policy: 'origin',
					tinycomments_mode: 'embedded',
					tinycomments_author: 'Author name',
					insertdatetime_dateformat: '%d-%m-%Y',
					insertdatetime_formats: [ '%H:%M:%S', '%Y-%m-%d', '%I:%M:%S %p', '%D' ]
					});
					</script>*/
				?>
				
				<script>
					tinymce.init({
					selector: 'textarea',
					plugins: 'codesample fullscree wordcount code',
					toolbar: 'undo redo | fullscreen checklist code',
					toolbar_mode: 'floating',
					referrer_policy: 'origin',
					tinycomments_mode: 'embedded',
					tinycomments_author: 'Author name',
					insertdatetime_dateformat: '%d-%m-%Y',
					insertdatetime_formats: [ '%H:%M:%S', '%Y-%m-%d', '%I:%M:%S %p', '%D' ]
					});
				</script>
				<style>
					.card-body{height: auto;min-height:30vh;}
				</style>
				<meta http-equiv="Content-Security-Policy" content="default-src 'none'; script-src 'self'; connect-src 'self' blob:; img-src 'self' data: blob:; style-src 'self' 'unsafe-inline'; font-src 'self';">
				<meta http-equiv="Content-Security-Policy" content="default-src 'none'; script-src 'self' *.tinymce.com *.tiny.cloud; connect-src 'self' *.tinymce.com *.tiny.cloud blob:; img-src 'self' *.tinymce.com *.tiny.cloud data: blob:; style-src 'self' 'unsafe-inline' *.tinymce.com *.tiny.cloud; font-src 'self' *.tinymce.com *.tiny.cloud;">
				<div class="container">
					<div class="col-auto">
						<div class="card text-white bg-dark card-margin">
							<form action="create-post.php" method="POST" accept-charset="utf-8">
								<div class="card-header"><h1>CREATE POST</h1></div>
								<div class="card-body">
									<label for="title"><h5>TITLE</h5></label>
									<input class="form-control {2:form-control-{1:sm|lg}}" type="text" placeholder="" name="title"></br>
									<fieldset class="form-group">
										<label for="texto"><h5>TEXT</h5></label>
										<textarea class="form-control" id="texto" rows="8" name="texto"></textarea>
									</fieldset>
									<input type="text" hidden="hidden" name="usrid" value="<?php echo $user_id; ?>" >
									<button type="submit" class="btn btn-primary" style="width: 90%; margin-left: 5%;" ><h5>S U B M I T</h5></button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
			<!-- Bootstrap core JavaScript
			================================================== -->
			<!-- Placed at the end of the document so the pages load faster -->
			<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
			<script type="text/javascript">
				var delayInMilliseconds = 1200; //1 second
				setTimeout(function() {
					document.querySelector("body > div.container > div > div > form > div.card-body > fieldset > div > div.tox-statusbar > div.tox-statusbar__text-container > span").style.display = 'none';
				}, delayInMilliseconds);
			</script>
			<?php
			require_once(__ROOT__.'footer.php');
			?>
		</body>
	</html>
</body>
</html>