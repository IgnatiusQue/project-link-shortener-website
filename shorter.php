<!DOCTYPE html>
<?php
$answer = $_GET["answer"];
$producedLink = "iatek.eu/mainweb/paths/".$_GET["generated"];
$url = $_GET["url"];
$textoVisible="";
$linkVisible="";



if ($answer==1){
$linkVisible="";
$textoVisible="style=\"display: none;\"";
}else{
$linkVisible="style=\"display: none;\"";
$textoVisible="";}


function interprete($answer){
 
switch ($answer){
case 0:return  "<font color=\"#9ACD32\"> <b>Type link.</b></font>";
case 1: return "<font color=\"#9ACD32\"> <b>Url OK.</b></font>";
case 2: return "<font color=\"#CD5C5C\"> <b>Invalid url</b></font>";
}
if ($answer=="" ){
return;
}

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
            <?php
	include "header.php";
	?>
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
				<h4>1 Ingresar url</h4>
				<dl>
					<dt></dt>
					<dd> <form action="l.php" method="post">
						 <input type="text" name="url" style="width:80%; border:2px solid;font-weight: bold"  value="<?php echo $url;?>">
						
<?php
if ($answer==1){echo "</form>"; }else{echo "<input type=\"submit\" value=\"Go\" style=\"width:15%;\" ><br></form> "; }
						
				?>		 
						 
						 
						 
						 </dd>
					<dd><?php echo interprete($answer); ?></dd>
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
			
				<div class="col-lg-6" <?php echo $linkVisible;?> >
				<h4>2 Copiar link</h4>
				<dl >
					<dt></dt>
					<dd> 
				 
 
 <input id="copy_textarea" rows="1" cols="300" style="width:80%; border:2px solid #9ACD32;font-weight: bold" value="<?php echo $producedLink;  ?>"  ></input>
<button id="clip_copy" data-clipboard-target="copy_textarea" style="width:15%;">Copy</button>
 
<script src="js/ZeroClipboard.js"></script>
<script>
  var clip = new ZeroClipboard( 
  	document.getElementById('clip_copy'), {
  	moviePath: "js/ZeroClipboard.swf"
	});
</script><div id="global-zeroclipboard-html-bridge" class="global-zeroclipboard-container" style="position: absolute; left: 0px; top: -9999px; width: 15px; height: 15px; z-index: 999999999;">      <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" id="global-zeroclipboard-flash-bridge" width="100%" height="100%">         <param name="movie" value="js/ZeroClipboard.swf?nocache=1410392525042">         <param name="allowScriptAccess" value="sameDomain">         <param name="scale" value="exactfit">         <param name="loop" value="false">         <param name="menu" value="false">         <param name="quality" value="best">         <param name="bgcolor" value="#ffffff">         <param name="wmode" value="transparent">         <param name="flashvars" value="">         <embed src="js-master/ZeroClipboard.swf?nocache=1410392525043" loop="false" menu="false" quality="best" bgcolor="#ffffff" width="100%" height="100%" name="global-zeroclipboard-flash-bridge" allowscriptaccess="always" allowfullscreen="false" type="application/x-shockwave-flash" wmode="transparent" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="" scale="exactfit">                </object></div>
  
 
					</dd>
					<dd>Éxito!</dd>
					<dt> </dt>
					<dd> </dd>
					<dd>Haga click en copiar para almacenar</dd>
					<dd>el link en el portapapeles.</dd>
					<dd>
                    <a href="shorter.php"><b>Acorta otro link</a>
					
					<dt></dt>
					<dd></dd>
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
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
 
 
</body>
</html>