<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Aplicando while</title>
</head>

<body>
<?php
      $numNoticias=4;
      while ($numNoticias>0) {
     ?>
      <p>
        <h3>Noticia <?php echo $numNoticias;?></h3>
        <h5>Esta es una noticia interesante</h5>
        <span>Texto de la noticia</span>
      </p>
    <?php
        $numNoticias--;
      } ?>
</body>
</html>