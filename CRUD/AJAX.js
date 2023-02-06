<script src="jquery-3.6.3.min.js"></script>

$(document).ready(function(){
    $("#introducir_datos a").click(function(){
        //rescata los href del objeto ("noticas a") que hacemos click (guarda las url)
        var url=$(this).attr("href");
      
        $("#introducir_datos").load(url + "#datos_devuelta");
        return false; 
    });
  });

