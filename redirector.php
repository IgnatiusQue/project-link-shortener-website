

<?php
$code = $_GET["code"];

 //
  $enlace = mysql_connect("rdbms.strato.de", "U1422147", "j3273827"); 
if (!$enlace) { 
   die('No se pudo conectar: ' . mysql_error()); 
} 
mysql_select_db('DB1422147'); 

$SQL = "SELECT url FROM a_shorter where generated='".$code."'";
$result = mysql_query($SQL);

while ( $db_field = mysql_fetch_assoc($result) ) {

//echo $db_field['id'] . "dsa<BR>";
 $url=$db_field['url'];


}
?>


<html lang="en">
<head>
<meta charset="utf-8">
<title>Moderna - Bootstrap 3 flat corporate template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://bootstraptaste.com" />
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/jcarousel.css" rel="stylesheet" />
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />


<!-- Theme skin -->
<link href="skins/default.css" rel="stylesheet" />

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<div id="wrapper">
	<!-- start header -->
	<header>
           <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><span>iAtek</span></a>
					<a class="navbar-brand" href="index.html"><span>Services</span></a>
                </div>
                <div class="navbar-collapse collapse ">
				 
                   <ul class="nav navbar-nav">
                          
                        <li>  <div id="countdown">10</div>
			         	</li>
                        <li> <form action=<?php echo $url;?>  style="visibility: hidden;">
						<input name="gotolink" type="submit" value="Go to Link">
						</form>
						</li>
                    </ul>
                </div>
            </div>
        </div>
	</header>
	<!-- end header -->

	<section id="content">
	<div class="container">
		
		<!-- divider -->
		<div class="row">
			<div class="col-lg-12">
				<div class="solidline">
				</div>
			</div>
		</div>
		<!-- end divider -->
		<!-- Descriptions -->
		<div class="row">
			<div class="col-lg-6">
				<!-- Description -->
				<h4>1 Deskription</h4>
				<dl>
					<dt></dt>
					<dd>  
						
						 </dd>
					<dd>aaa</dd>
					<dd></dd>
					<dt>100% anonimo</dt>
					<dd>Acorta y privatiza tus links en dos segundos.</dd>
					<dd>Pega tu link en la caja de texto</dd>
					<dd>y presiona aceptar.</dd>
				 
				</dl>
			</div>
			<!-- Horizontal Description -->
			<div class="col-lg-6" <?php echo $textoVisible;?>>
				<h4></h4>
				<dl class="dl-horizontal">
					<dt>Description lists</dt>
					<dd>A description list is perfect for defining terms.</dd>
					<dt>Euismod</dt>
					<dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
					<dd>Donec id elit non mi porta gravida at eget metus.</dd>
					<dt>Malesuada porta</dt>
					<dd>Etiam porta sem malesuada magna mollis euismod.</dd>
					<dt>Felis euismod semper eget lacinia</dt>
					<dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
				</dl>
			</div>
			
				 
		</div>
		<!-- divider -->
		<div class="row">
			<div class="col-lg-12">
				<div class="solidline">
				</div>
			</div>
		</div>
		<!-- end divider -->
		<!-- Lists -->
		
		<!-- divider -->
		
	</div>
	</section>
	<footer>
	            <?php
	include "footershorter.php";
	?>
	</footer>
</div>
 
 
 
</body>
</html> 
  <script type="text/javascript">
  var seconds;
  var temp;
    var temp2;
 
  function countdown() {
    seconds = document.getElementById('countdown').innerHTML;
    seconds = parseInt(seconds, 10);
 
    if (seconds == 1) {
      temp = document.getElementById('countdown');
      temp.innerHTML = "all done, bye bye";
	  
	  temp2 = document.getElementById('gotolink');
	  temp2.innerHTML.style.visibility="visible";
      return;
    }
 
    seconds--;
    temp = document.getElementById('countdown');
    temp.innerHTML =    seconds + " segundos";
    timeoutMyOswego = setTimeout(countdown, 1000);
  } 
 
  countdown();
</script>

  <?php
// echo "<meta http-equiv='refresh' content='0;url=".$url."'>";
  ?>
