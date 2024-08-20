<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    
  <head>
  <title>Apartment Management</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body style="background-image: url('img/u1.jpg');background-attachment: fixed; background-repeat: no-repeat; background-size: cover">

<nav class="navbar navbar-expand-lg navbar-light bg-transparent" style="font-size: large; font-weight: bold;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand " style="margin-left: 20%; font-weight: bolder;
      font-size:x-large; font-family:Georgia, 'Times New Roman', Times, serif;" href="#">Apartment Management</a>
    </div>
    <ul class="nav navbar-nav pull-right">
     
      <li class="active nav-item"><a class="nav-link" href="index.php">Developer Login</a></li>
      <li class="nav-item "><a class="nav-link navbar-dark" href="ologin.php">Owner Login</a></li>
      <li class="nav-item"><a class="nav-link" href="tlogin.php">Tenant Login</a></li>
      
    </ul>
  </div>
</nav>

  
<div class="container">
 
    <div class="row">
    <div style="width:400px;margin:10% 8%;">
        <span style="color:#c76408f6"><b><H1>Admin Login</b></h1></span>
 <form class="form-horizontal" action="loginHandler.php" method="post">
  <div class="form-group">
    <label class="control-label col-lg-6" style="font-weight:bold;" for="email">Email:</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="email" style="background:transparent;margin-bottom: 4%;"placeholder="">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-lg-6" style="font-weight:bold;" for="pwd">Password:</label>
    <div class="col-lg-6"> 
      <input type="password" class="form-control" name="pwd" style="background:transparent; " placeholder="">
    </div>
  </div>
 
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button class="btn btn-dark" style="margin-top: 4%;" name="adminBtn" type="submit" >Submit</button>
    </div>
  </div>
</div>
</form>
</div>
    
    
</div>

</body>
    
    
</html>
