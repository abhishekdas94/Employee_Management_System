<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
    .baground{
          float:left;
          background-color: #333333; 
          width: 25%;
          margin-top: 10px;
          margin-bottom: 50px;
          padding: 7px 10px 5px 10px; 
          border-top-right-radius:60px; 
          border-bottom-left-radius:60px;
          border:groove 2px black;
          font-family: "Times New Roman";
          font-size: 19px;
       } 
      
      .propic{
        width:75%;
        border-radius: 80px;
        border:groove 2px black;
        height: 225px;
        margin-bottom: 10px;
        margin-top: 10px;
      }
      .leftbar{
        font-size: 20px;
        color:white;
        text-align: center;
        text-shadow:5px 5px 5px black;
        font-family: "Times New Roman";
        
      }
      hr{
        margin-top: 2px;
        margin-bottom: 13px;
        background-color: black;
        border: solid 1px black;
      }
      .columnbuttons{
        font-size: 15px;
        color:black;
        text-align: center;
        font-family: "Times New Roman";
        text-shadow:5px 5px 5px white;

      }
      .btn{
        width: 80%;
        margin-bottom: 10px;
        text-shadow:5px 5px 5px white;
        font-weight: 900;
      }
  </style>
</head>
<body>
  <div class="container">
    <div class="baground">
       <center>
        <img src="<?php echo $this->session->userdata('Image');?>" alt="Profile face" class="propic">
       </center> 
       <div class="leftbar">
         <?php echo $this->session->userdata('Fullname');?><hr>
         </div>
         <div class="columnbuttons">
         <button class="btn btn-default" onclick="window.location.href='<?php echo base_url();?>index.php/Employee_Controller/changepic'">Change Profile Picture</button>

         <button class="btn btn-default" onclick="window.location.href='<?php echo base_url();?>index.php/Employee_Controller/editpro'">Edit Profile Info</button>

         <button class="btn btn-default" onclick="window.location.href='<?php echo base_url();?>index.php/Employee_Controller/changepass'">Change Password</button>

         <button class="btn btn-default" onclick="window.location.href='<?php echo base_url();?>index.php/Employee_Controller/checkmsg'">Check Messages</button>
         </div>
       
    </div>
  </div>
</body>
</html>