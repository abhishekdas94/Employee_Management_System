<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
    
        #srt{
        	background-color: #333333;
        	padding-top: 10px;
        	padding-bottom: 10px;
        	width: 75%; 
        	color: white;
          border-radius: 5px;
        }
        .chki{
          margin-top: 5px;
          width:40%;
          font-weight: 900;
          font-size: 15px;
          border:solid 1px black;
        }
        .borderw{
          background-image:  url('<?php echo base_url();?>simg.jpg');;
          color: white;
          padding: 30px 0px 30px 0px;
          border-radius: 130px;
          border:solid 2px white;
        }
  </style>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#details').click(function(){
        $.ajax({
          url:'<?php echo base_url();?>index.php/Employee_Controller/ajaxupdatedetails',
          success:function(d)
          {
            $("#output").html(d)
          }  
        });
      });
    });


  </script>
</head>
<body>
	<div class="container">
    <div class="cenground">
      <div class="borderw">
      <center>
      	<div id="srt"><h3><u>Update Your Profile Here:</u></h3><h4>(If you want to change your Name OR Email ID then leave a message to the Admin by <a href="<?php echo base_url();?>index.php/Employee_Controller/sendmsg">Clicking Here</a>)</h4></div>
          <button  class="btn chki btn-default" id="details" onclick="windows.href.location='<?php base_url();?>index.php/Employee_Controller/ajaxupdatedetails'">Update Rest Of The Feilds</button>
          <div id="output"><h4><u>Click Above To Update Details.</u></h4></div>
           <h4 style="color:#870101;text-shadow:1px 1px 10px  black;font-size:20px; ">
            <?php 
            if(isset($info)){
              echo $info;
            }
           echo validation_errors();
           ?></h4>
           

      </center>
      </div>
    </div>
  </div>
</body>
</html>