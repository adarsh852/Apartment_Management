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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background:url('img/alogin.jpg');height: 100vh">

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
 
    
    <div style="width: 400px;margin-left:35%;">
        <div style='margin-left:27px;padding:20px;font-size:xx-large;font-weight:700;color: rgb(116, 88, 88);'>Owner   Login</div>
 
        <form class="form-horizontal" action="loginHandler.php" method="post">
  <div class="form-group" style="margin-top:2px">
    <label class="control-label col-sm-2" style="font-weight: bold;" for="email">Email:</label>
    <div class="col-sm-10" >
      <input type="email" class="form-control" name="email" style="background:rgb(247, 216, 205);margin-bottom:2%;" placeholder="">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" style="font-weight: bold;"for="pwd">Password:</label>
    <div class="col-sm-10"> 
      <input type="password" class="form-control" name="pwd" style="background:rgb(247, 216, 205); "placeholder="">
    </div>
  </div>
 
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button class="btn btn-outline-dark " name="ownerBtn" type="submit" style="margin-top:2%;background-color: rgb(172, 175, 175);border:none;font-weight:600;">Submit</button>
    </div>
  </div>
</form>
</div>
</div>
</body>
</html>
