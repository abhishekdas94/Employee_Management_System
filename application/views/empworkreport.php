<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
        .ceanground
    {
          float: right;
          background-color: #333333; 
          width: 60%;
          margin-top: -520px;
          margin-right: 160px;
          padding: 7px 10px 5px 10px;
          margin-bottom: 50px; 
          border-top-right-radius:60px; 
          border-bottom-left-radius:60px;
          border:groove 2px black;
          font-family: "Times New Roman";
          font-size: 19px;
          height: 530px;
        }
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
        #coment{
          border:solid 2px black;
          font-size: 15px;
          font-family: cursive;
          margin-top: 50px;
          
        }
        .success{
          color:white;
          background-color:#0c6800; 
          font-size: 15px;
          font-family: cursive;
        }
        .info{
          color:white;
          background-color:#5b0000;
          font-size: 15px;
          font-family: cursive;
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
    <div class="ceanground">
      <div class="borderw"> 
      <center>
      	<div id="srt"><h3><u>Submit Your Work Report Regularly:</u></h3></div><br>
          
        <h4 class="success"> 
          <?php 
            if(isset($success)){
              echo $success;
            }
           ?>
           </h4>
           <h4 class='info'>
            <?php 
             if(isset($info)){
              echo $info;
            } 
           echo validation_errors();
           ?>

           <?php
           if(isset($error))
           {
            echo $error;
           }?></h4>
            <form action="<?php echo base_url();?>index.php/Employee_Controller/empwworkreport" method="post">
              
               <!-- <h4 style="float:left;width: 40%;background-color: #333333;color:white;padding:9px 5px 9px 5px;margin-top: 0px;border-radius: 10px;margin-left: 80px;">♦ Upload Your Work Here(PDF/SCREENSHOT):</h4>
                
                <input style="float:left;width: 30%;padding-top: 5px;padding-bottom:5px;color:white;font-size: 15px;"
                 type="file" id="file" name="userfile">
                  <br><br><br>-->
                 

                <label for="comment" style="text-shadow: 5px 5px 10px black;font-size: 19px;background-color:#333333;padding:9px 5px 9px 5px;border-radius: 10px; ">Write About  Todays Work:</label>
                <textarea class="form-control" rows="5" name="comment" 
                placeholder="Enter Your Text Here" style="width: 70%;"></textarea><br>
               
                <input type="submit" value="Send" style="width: 30%;font-family: cursive;font-weight: bold;color:black;">
            
            </form>
            
            
            <br>
       </center>
      </div>
    </div>
  </div>
</body>
</html>