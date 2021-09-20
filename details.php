<?php
session_start();
include "database.php";
$db = new Database("gigfa_29739839","survey","sql300.gigfa.com","gigfa_29739839_survey");
$connection = $db->connect();
if(!isset($_SESSION['id'])){
  header('Location:login.php');
}
$id = $_GET['id'];
$stmt = $connection->prepare("SELECT * FROM surveys where id = :id");
$stmt->bindValue(':id',$id);
$stmt->execute();
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
if($stmt->rowCount()===0){
  header('location:404.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>جزئیات نظر</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="//cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css"/>>
  <link href="assets/css/styles.css" rel="stylesheet" type="text/css">
</head>
<body dir="rtl">

<nav class="navbar navbar-default" style="direction:rtl !important;border-radius:0;margin-top:-20px !important;">
  <div class="container-fluid">
    <div class="navbar-header" style="float:right !important;">
      <a class="navbar-brand" href="#">پنل مدیریت</a>
    </div>
    <ul class="nav navbar-nav" style="float:right !important">
        <li><a href="#">خروج</a></li>
        <li class="active"><a href="#">نظرات</a></li>
    </ul>
  </div>
</nav>
  <div class="col-md-12 container text-center" style="justify-content: center;align-content: center;align-items: center;display: flex;">
    <div class="col-md-6 card">
      <div class="header">
        <h1> نظر دهنده : <?php echo $res[0]['firstName'].' '.$res[0]['lastName'];?></h1>
      </div>
      <div class="title grade">مقطع تحصیلی:</div>
      <div class="content"><?php if($res[0]['grade']==0){echo "کاردانی";} else if($res[0]['grade']==1){echo "کارشناسی";}elseif($res[0]['grade']==2){echo "کارشناسی ارشد";}else{echo "دکترا";}?></div>
      <div class="title job">شغل:</div>
      <div class="content"><?php echo $res[0]['job']?></div>
      <div class="title mobile">شماره موبایل:</div>
      <div class="content"><?php echo $res[0]['mobile']?></div>
      <div class="title future">نظر ایشان درباره آینده این رشته:</div>
      <div class="content"><?php echo $res[0]['mobile']?></div>

      <div class="title proposal">پیشنهاد ایشان به دانشجویان ترم یک:</div>
      <div class="content"><?php echo $res[0]['proposal']?></div>

      <div class="title is_related">رشته ایشان به شغل ایشان ارتباط دارد:</div>
      <div class="content"><?php echo $res[0]['isRelated'] ?"بله":"خیر"?></div>

      <div class="title opinion">نظر ایشان درباره این رشته:</div>
      <div class="content"><?php echo $res[0]['opinion']?></div>

      <div class="title universities">دانشگاه هایی که ایشان در آنها تحصیل کرده است:</div>
      <div class="content"><?php echo $res[0]['universities']?></div>

      <div class="title enterd_at">تاریخ ورود ایشان به دانشگاه:</div>
      <div class="content"><?php echo $res[0]['entered_at']?></div>
      
    </div>

  </div>
  


</body>
</html>
