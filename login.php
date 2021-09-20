<?php
  session_start();
  if(isset($_SESSION['id'])){
    header('Location:dashboard.php');
  }
  $error = "";
    include "database.php";
$db = new Database("gigfa_29739839","survey","sql300.gigfa.com","gigfa_29739839_survey");
    $connection = $db->connect();
    if(isset($_POST['username']) && isset($_POST['password'])){
    
    
    $userName = $_POST["username"];
    $password = $_POST["password"];
$stmt = $connection->prepare("SELECT * FROM admin where userName = :username");
$stmt->bindValue(':username',$userName);
$stmt->execute();
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
if($stmt->rowCount()>0){
  $error = "نام کاربری صحیح نیست";
  $isAdmin = password_verify($password,$res[0]['password']);
  if($isAdmin){
    $_SESSION['id'] = $res[0]['id'];
    header('Location:dashboard.php');
  }else{
    $error = "کلمه عبور اشتباه است";
  }
}
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="assets/css/animate.min.css"/>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="assets/css/styles.css"/>
    <link rel="stylesheet" href="assets/css/loading.css"/>
</head>
<body>
<header class="animate__animated animate__backInDown">
  <h1>صفحه ورود</h1>
</header>
<article class="animate__animated animate__backInLeft animate__delay-2s login-form" style="width:60%">
    <?php
      if($error != ''){
        echo "<div class='alert alert-danger'>$error</div>";
      } 
    
    
    ?>
  <form method="post" action="#">
    <div class="form-group">
      <label for="userName">نام کاربری:</label>
      <input type="text" class="form-control" name="username" placeholder="نام کاربری خود را وارد نمایید:">
    </div>
    <div class="form-group">
      <label for="password">کلمه عبور:</label>
      <input type="password" class="form-control" name="password" placeholder="کلمه عبور خود را وارد نمایید">
    </div>
    
    <button type="submit" class="form-control btn btn-primary" name="submit">ورود</button>
  </form>

</article>
     <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>