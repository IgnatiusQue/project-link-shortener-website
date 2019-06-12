
<?php
$url = $_POST["url"]; 
 
 
 
if(!filter_var($url, FILTER_VALIDATE_URL))
  {
 
  echo "<meta http-equiv='refresh' content='0;url=shorter.php?answer=2'>";
  }
else
  {
 
  //url ok
 //
  $enlace = mysql_connect("rdbms.strato.de", "U1422147", "j3273827"); 
if (!$enlace) { 
   die('No se pudo conectar: ' . mysql_error()); 
} 
mysql_select_db('DB1422147'); 
  
  // code generator
  $SQL = "SELECT id FROM a_shorter order by id desc limit 1";
$result = mysql_query($SQL);

while ( $db_field = mysql_fetch_assoc($result) ) {

//echo $db_field['id'] . "dsa<BR>";
 $id=$db_field['id']+1;


}

 
   //echo "id: ".$id;
  //echo "<br>";
 $code =  base_convert( $id, 10 , 36 );
 
  
$code= str_pad($input, (6-strlen($code)), "0", STR_PAD_LEFT).$code;
 
  
 
  if (!file_exists('paths/'.$code)) {
    mkdir('paths/'.$code, 0777, true);
	
	$myfile = fopen('paths/'.$code."/index.php", "w");
	 
$txt = " <?php echo \"<meta http-equiv='refresh' content='0;url=../../redirector.php?code=".$code."'>\"; ?>";
fwrite($myfile, $txt);
fclose($myfile);
}

  
   
if ( mysql_query("INSERT INTO a_shorter (url,generated,hits,added) VALUES  ('".$url."','".$code."','0','".date('Y-m-d H:i:s')."')" )){ 
//echo $i. "<br>si " ;   
 echo "<meta http-equiv='refresh' content='0;url=shorter.php?answer=1&generated=".$code."&url=".$url."'>";
  }else{  
//echo $i. "<br>no " ;   
	} 
 
  }
 

?>