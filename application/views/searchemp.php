<html>
<head>
  <style type="text/css">
    .bagaround{
         background-image:  url('<?php echo base_url();?>simg.jpg');
          width: 100%;
          margin-top: 10px;
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
      .form-control{
      border:solid 1px black;
      width: 30%;
      display: inline;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="bagaround">
    <div class = "page-header">
      <h3>
        Search And Modify
      </h3>
    </div>

    <form action="<?php echo base_url();?>index.php/Main_controller/searchempval" method="post">
      <center>
        <div class="form-horizontal">
        <label>Search By Employee ID(Username) OR Employee Email-ID:</label>
        <input type="text"  style="width:20%;margin-bottom:10px;"  class="form-control" name="txtid" placeholder="Email/Username">
        <input type="submit" class="btn btn-default" value="GO" style="border:groove 1px black;">
      </div>
      </center>
    </form>
  </div>
 </div>
</body>
</html>
