<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
    .caenground
    {
          float: right;
          background-color: #999999; 
          width: 55%;
          margin-top: -420px;
          margin-right: 195px;
          padding: 7px 10px 5px 10px; 
          border-top-right-radius:60px; 
          border-bottom-left-radius:60px;
          font-family: "Times New Roman";
          font-size: 15px;
          color: black;
    }
        #srt{
        	background-color: #333333;
        	padding-top: 10px;
        	padding-bottom: 10px;
        	width: 75%; 
        	color: white;
        }
        .borderw{
          background-image:  url('<?php echo base_url();?>simg.jpg');;
          color: white;
          padding: 30px 0px 30px 0px;
          border-radius: 130px;
          border:solid 2px white;
        }
  </style>
</head>
<body>
	<div class="container">
    <div class="cenground">
      <div class="borderw">    
      <center>
      	<h3 id="srt">Upload your recent picture below here:</h3>
       <?php echo form_open_multipart('Employee_Controller/updateimg');?>
            <input type="file" name="userfile">
            <input type="submit" name="Upload" value="Upload" style="color:black;">
          </form>
        <?php if(isset($error)) echo $error;?>  
          
      </center>
    </div>
    </div>
  </div>
</body>
</html>