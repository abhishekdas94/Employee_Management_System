<!DOCTYPE html>
<html lang="en">
<head>s
  <title>Admin Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>assets/jquery.textillate.js"></script>
  <script src="<?php echo base_url();?>assets/jquery.lettering.js"></script>
  <link rel="stylesheet" href="<?php echo base_url();?>assets/animate.css">
  <script>
   $(function () {
   $('.tlt').textillate();
    })

  </script>
  <style>
  body { 
        background-repeat:  no-repeat center center fixed; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        padding-top: 50px;
        padding-bottom: 100px;
    }
      .navbar{
        border:groove 2px black;
        background: #333333;
        border-top-left-radius:50px; 
        border-bottom-right-radius:50px;
      }
  .head{
    color:white;
      text-decoration: none;
      padding: 2px 5px 3px 5px;
      text-shadow:5px 5px 5px black;
    font-size:25px;
    margin-right: 100px; 
  }
  .header{
    padding-top: 8px;
      float: left;
      font-family: "Times New Roman";
      font-size: 25px;
      width:35%;
      margin-left: 20px;
  }
  .head:hover,.head:visited{
      color:white;
      text-decoration: none;
      background-color: black;
      padding: 4px 5px 4px 5px;
      border-radius: 10px;
    }
    .baground{
         background-image:  url('<?php echo base_url();?>simg.jpg');
          width: 90%;
          margin-top: 80px;
          padding: 7px 10px 40px 10px; 
          border-top-right-radius:60px; 
          border-bottom-left-radius:60px;
          border:groove 2px white;
          font-size: 18px;
          text-shadow:5px 5px 5px black;
          color:white;
          font-family: "Times New Roman";
          padding-bottom: 80px;
      }
  
  </style>
</head>
<body background="<?php echo base_url();?>sky.jpg">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="header">
      <a class="head" href="<?php echo base_url();?>index.php/Main_controller">Employee Management</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="disabled"><a href="#">Check Employee Status</a></li>
      <li class="disabled"><a href="#">Search & Modify</a></li>
      <li class="disabled"><a href="#">Show All</a></li>
      <li class="disabled"><a href="#">Check Messages</a></li>
    </ul>
    <ul style="padding-top: 10px;font-size:20px;padding-left: 80px;">
      <li><a class="head" style="font-size:20px;" href="<?php echo base_url();?>index.php/Main_controller/loginpage">Login</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <div class="baground">
  <center><h1 class="tlt" data-in-effect="wobble">
    Login To Get Full Access Of The Website(Only Admin)</h1></center><hr>
 </div>
</div>

</body>
</html>
