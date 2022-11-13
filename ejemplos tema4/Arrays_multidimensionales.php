<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Arrays multidimensionales</title>
</head>

<body>
 <?php
    $pais=array(
      "CValenciana"=>array(
        "prov1"=>"Castellon",
        "prov2"=>"Valencia",
        "prov3"=>"Alicante"
      ),
      "Murcia"=>array(
        "prov1"=>"Murcia"),
      "Cataluña"=>array(
        1=>"Girona",
        2=>"Lerida"
      )
    );
    print_r($pais["Cataluña"]);
	echo"<br>";
	 print_r($pais["Murcia"]);
	 echo"<br>";
	  print_r($pais["CValenciana"]);
	  echo"<br>";
     ?>
</body>
</html>