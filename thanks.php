<?php
    include "database.php";
$db = new Database("root","","localhost","survey");
    $db->connect();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سپاس</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="assets/css/animate.min.css"/>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="assets/css/styles.css"/>

</head>
<body>

<video autoplay muted loop id="background-video" style="position:fixed;bottom:0;right:0;min-height:100%;min-width:100%;opacity:0.3">
  <source src="background.mp4" type="video/mp4">
</video>
<header class="animate__animated animate__backInDown" style="margin:30px 0px;">
  <h1>نظرسنجی دانشجویی</h1>
</header>
<div class="container">
<article class="col-md-8 col-sm-6 col-xs-4 animate__animated animate__zoomIn animate__delay-1s" id="first_step">
    
    <h1 class="text-success">نظر شما با موفقیت ثبت شد.<br>
    سپاس از همکاری شما - موفق باشید
</h1>
    
</article>
</div>
<h6 style="text-align:center;margin:50px 0px;">#Mr.MG</h6>

     <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <!-- <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>  -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script> -->
    <script>
    
    </script>
</body>
</html>