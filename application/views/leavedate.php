<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
   
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
        .labl{
          float: left;
          width: 20%;
          text-align: center;
          
        }
        .table1
        {
          border-collapse: separate;
          border-spacing: 50px 0;
        }
        .borderw{
          background-image:  url('<?php echo base_url();?>simg.jpg');;
          color: white;
          padding: 30px 0px 30px 0px;
          border-radius: 130px;
          border:solid 2px white;
        }
        .qwer{
          background-color: #333333;
          padding-top: 10px;
          padding-bottom: 10px;
          text-align: center;
          color: white;
          border-radius: 5px;
        }
 </style>
</head>
<body>
  <div class="container">
    <div class="cenground">
      <div class="borderw">  
        <center>
          <div id="srt" class="qwer" style="width: 50%;"><h3><u>Send The Dates To Admin:</u></h3></div><br>
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
               ?></h4>
                <form action="<?php echo base_url();?>index.php/Employee_Controller/sendleavedata" class="form-horizontal" method="post">

                  <table class="table1">
                    <thead class="thead-inverse">
                    <tr id="labl">
                      <th class="qwer">♦ Leave From:</th>
                      <th class="qwer">♦ Leave Till:</th>
                    </tr>
                    <tr>
                      <td><input type="date" class="form-control" name="datefrom"></td>
                      <td><input type="date" class="form-control" name="datetill"></td>
                    </tr>
                  </thead>
                  </table><br>
                    <label for="comment" class="qwer">State Reason For Leave:</label>
                    <textarea class="form-control" rows="5" name="comment" 
                    placeholder="Start writing after: because....(Your Reason)" style="width: 70%;"></textarea><br>
                    <input type="submit" value="Send" style="width: 30%;
                    font-family: cursive;font-weight: bold;color:black;">
                </form>
             </center>
          </div>
    </div>
  </div>
</body>
</html>