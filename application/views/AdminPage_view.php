<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome Admin</title>
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
  });
  </script>

  <style>
  body { 
        background-repeat:  no-repeat center center fixed; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        
        padding-bottom: 100px;
    }
      .navbar{
        border:groove 2px black;
        background: #333333;
        border-top-left-radius:50px; 
        border-bottom-right-radius:50px;
      }
  .header{
      padding-top: 5px;
      float: left;
      font-family: "Times New Roman";
      font-size: 25px;
      width:35%;
    }
    .head{
      margin-right: -10px;
      color:white;
      text-decoration: none;
      padding: 2px 5px 3px 5px;
      text-shadow:5px 5px 5px black;
    }
    .head:hover,.head:visited{
      color:white;
      text-decoration: none;
      background-color: black;
      padding: 4px 5px 4px 5px;
      border-radius: 10px;
    }
    ul{
        list-style: none;
        font-size: 18px;
      }
      li{
        padding-top: 10px;
        float: left;
        font-family: "Times New Roman";
        font-size: 18px;
        margin-left: 15px;
        
    }
    .baground{
         background-image:  url('<?php echo base_url();?>simg.jpg');
          width: 90%;
          margin-top: 80px;
          padding: 7px 10px 40px 10px; 
          border-top-right-radius:60px; 
          border-bottom-left-radius:60px;
          border:groove 2px black;
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
    <div class="container">
      <div class="header">
        <a class="head" href="<?php echo base_url();?>index.php/Main_controller/adminpage">Employeee Management System</a>
      </div>
      <ul>
        <li><a class="head" href="<?php echo base_url();?>index.php/Main_controller/checkempstatus">Check Employee Status</a></li>
        <li><a class="head" href="<?php echo base_url();?>index.php/Main_controller/searchmodify">Search & Modify</a></li>
        <li><a class="head" href="<?php echo base_url();?>index.php/Main_controller/showallempview">Show All</a></li>
        <li><a class="head" href="<?php echo base_url();?>index.php/Main_controller/checkmsgs">Check Messages</a></li>
        <li><a class="head" href="<?php echo base_url();?>index.php/Main_controller/addadmin">Add Admin</a></li>
        <li><a class="head" href="<?php echo base_url();?>index.php/Main_controller/logout">LogOut</a></li>
        
    </div>
  </nav>

<div class="container">
  <center>
   <h1 style="margin:90px 0px 0px 0px;" class="well tlt col-lg-12" data-in-effect="flash">
      Welcome "<?php echo $this->session->userdata('fullname');?>"
    </h6></center>
    </center>
</div>


</body>
</html>
