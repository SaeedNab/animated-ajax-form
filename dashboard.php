<?php
session_start();
include "database.php";
$db = new Database("gigfa_29739839","survey","sql300.gigfa.com","gigfa_29739839_survey");
$connection = $db->connect();
if(!isset($_SESSION['id'])){
  header('Location:login.php');
}
$stmt = $connection->prepare("SELECT id, firstName, lastName FROM surveys");
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>داشبورد</title>
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
        <li><a href="logout.php">خروج</a></li>
        <li class="active"><a href="dashboard.php">نظرات</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <h3>نظرات</h3>
  <table id="table" class="table">
      <thead>
          <tr>
              <th>نام</th>
              <th> نام خانوادگی</th>
              <th> جزئیات</th>
          </tr>
      </thead>
      <tbody>
          <?php
            foreach ($result as $survey){?>
          
          <tr>
              <td><?php echo $survey['firstName'];?></td>
              <td><?php echo $survey['lastName'];?></td>
              <td>
                  <a href="details.php?id=<?php echo $survey['id']?>" class="btn btn-info">جزئیات</a>
              </td>
          </tr>
          <?php } ?>
      </tbody>
      <tfoot>
      <tr>
              <th>نام</th>
              <th> نام خانوادگی</th>
              <th> جزئیات</th>
          </tr>
      </tfoot>
  </table>
</div>
<script src="//cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.min.js"></script>

<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
</body>
</html>
