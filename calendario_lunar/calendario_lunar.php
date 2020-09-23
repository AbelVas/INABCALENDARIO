<?php
  session_start();
  $rut='../';
  $anio=date("Y");
  $db='database';
  $pagina='Calendario Lunar';
  $direc='calendario_lunar.php';
  require_once($rut.'includes/constant.php');
  require_once($rut.DIRCLA.$db.'.php'); //llamado al archivo de la bd
  $_db=new $db();
  
?>
<!DOCTYPE html>
<html lang="ES-es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="../images/favicon-32x32.png" style="border-radius:100%">
    <title><?php echo $pagina.' '.$anio.TIT?></title>
    <?php include '../includes/scripts.php'?>
    <script src="../js/icons.js"></script>
    <link href="../style.css" rel="stylesheet" />
    <?php

    /*
      $inf=NULL;
      require($rut.DIRACT.$direc);
      $inf=calendario_lunar($rut);
    
    */
      ?>

</head>

<script>
 $(document).ready(function(){

  function obtener_anio(anio, condi){
            $.ajax({
                url:"cambiar_calendario.php",
                method:"POST",
                data : {anio:anio,condi:condi},
                success: function (data){
                    $("#calendario").html(data)
                }})}
              //obtener_anio('2020',"selecanio");

    $(document).on("change", "#cmb_anio", function(){
      var cmb_anio = document.getElementById("cmb_anio").value;
      //alert(cmb_anio);
     obtener_anio(cmb_anio,"selecanio");
    })
 });
</script>
<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
       <div class="container-fluid">
         <div class="navbar-header">
           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-main">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
           </button>
           <a class="navbar-brand" href="#"><img src="../images/logoinab.png" alt="" style="width:100px;height:60px;"></a>
         </div>
         <div class="collapse navbar-collapse" id="navbar-collapse-main">
           <ul class="nav navbar-nav navbar-right">
             <li><a class="active" href="../index.php"><i class="fas fa-home"></i>&nbsp;Inicio</a></li>
             <li><a href="../calendario/calendario.php"><i class="fas fa-calendar-alt"></i> &nbsp;Calendario Forestal</a></li>
             <li><a href="../descargas/index.php"><i class="fas fa-file-download"></i> &nbsp;Descargas</a></li>
            <li><a href="calendario_lunar.php"><i class="fas fa-moon"></i>&nbsp;Calendario Lunar</a></li>
            <li><a href="../index.php#acercade"><i class="fas fa-info-circle"></i> &nbsp;Acerca de</a></li>
           </ul>
         </div>
       </div>
     </nav>
    <div class="padding">
       <div class="container">
       <br>
        <div class="row">
        <div class="col-sm-2"></div>
            <div class="col-sm-6 text-center">
           <h1>Buscar Calendario Lunar:</h1>
            </div><br>
            <div class="col-sm-3 text-center">
              <select name="cmb_anio" id="cmb_anio" class="form-control" style="font-size: 20px;height:42px;">
                <option value="">Seleccione el año...</option>
                <option value="2020">A&ntildeo 2020</option>
                <option value="2021">A&ntildeo 2021</option>
                <option value="2022">A&ntildeo 2022</option>
                <option value="2023">A&ntildeo 2023</option>
                <option value="2024">A&ntildeo 2024</option>
                <option value="2025">A&ntildeo 2025</option>
                <option value="2026">A&ntildeo 2026</option>
                <option value="2027">A&ntildeo 2027</option>
                <option value="2028">A&ntildeo 2028</option>
                <option value="2029">A&ntildeo 2029</option>
                <option value="2030">A&ntildeo 2030</option>
                <option value="2031">A&ntildeo 2031</option>
                <option value="2032">A&ntildeo 2032</option>
              </select>
            </div>
        </div>
        <hr>
         <div class="row">
          </div>
          <!--Columna 4-->
          <div class="col-lg-12 col-md-10 col-sm-10 col-xs-12" id="calendario">
            
          </div>
          <h6><em>Fuente: Las fases lunares se basan en c&aacute;lculos matem&aacute;ticos. Elaborado por: Abel V&aacute;squez, Nery D&iacute;az, Edinson Cuc, 2020</em></h6>
          <h3 class="text-center"><a href="../images/guia-calendario.pdf" download="Guia de usuario - Calendario Forestal.pdf" id="descargarguiainab" style="color:#000"><i class="fas fa-file-download"></i>&nbsp; Descargar - Gu&iacutea del Usuario del Calendario Forestal - INAB</a></h3>
          </div>
         </div>
       </div>
    </div>  

    <div>
       <div class="row">
       <img src="../images/Portada3.jpg" alt="" class="img-responsive center-block"  style="">
       </div>

</div>
<?php
include '../includes/footer.php';
?>
</body>
</html>