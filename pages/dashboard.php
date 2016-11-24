<?php
// Inialize session
session_start();

// Cek jika user sudah login atau belum
if (!isset($_SESSION['username'])) {
  header('Location: ../index.php');
}
?>

<!DOCTYPE html>
<html ng-app="labApp">
<head>
  <meta charset="utf-8">
  <!-- include Bootstrap -->
  <link rel="stylesheet" href="../css/bootstrap.css" />
  <!-- include Font Awesome -->
  <link rel="stylesheet" href="../css/font-awesome.css" />
  <!-- Include Javascript library-->
  <script src="../js/jquery-3.1.1.js"></script>
  <script src="../js/bootstrap.js"></script>
  <script src="../js/angular.js"></script>
  <script src="../js/angular-route.js"></script>
  <!-- Angular Script -->
  <script src="../js/anglr_script.js"></script>

  <title>Smart Lab</title>
</head>
<body ng-controller="mainController">
  <!-- NavBar -->
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Header -->
      <div class="navbar-header">
        <a class="navbar-brand" href="">Smart Lab</a>
      </div>
      <!-- NavBar Tengah -->
      <ul class="nav navbar-nav">
        <li><a href="#home"><i class="glyphicon glyphicon-home"></i> Home</a></li>
        <li><a href="#rtc"><span class="glyphicon glyphicon-cog"></span> Tools</a></li>
        <li><a href="#data"><span class="glyphicon glyphicon-list-alt"></span> Data Pengunjung</a></li>
        <!-- Tutorial -->
          <li class="dropdown">
            <a href="" class="dropdown-toggle glyphicon glyphicon-edit" data-toggle="dropdown"> Bagaimana cara <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#tutor1"><span class="glyphicon glyphicon-user"></span> Menambah Pengunjung Baru</a></li>
              <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
            </ul>
          </li>
      </ul>
      <!-- NavBar Kanan -->
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="" class="dropdown-toggle" data-toggle="dropdown">Account <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#addVisitor"><span class="glyphicon glyphicon-user"></span> Add Visitor</a></li>
            <li class="divider"></li>
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
          </ul>
        </li>
        </ul>
    </div>
  </nav>
  <div id="main">
    <!-- angular templating -->
    <!-- this is where content will be injected -->

    <div ng-view></div>
  </div>

</body>
</html>
