<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
    .borderw{
          background-image:  url('<?php echo base_url();?>simg.jpg');;
          color: white;
          padding: 30px 0px 30px 0px;
          border-radius: 30px;
          border:solid 2px white;
          
        }
        #rplybtn{
      color: black;
      border:solid 2px black;
      text-shadow: 5px 5px 10px black;
      border-radius: 20px;
    }
    #rplybtn:hover{
      background-color: yellow;
      color: black;
      border:solid 2px yellow;
      text-shadow: 5px 5px 5px white;
      border-radius: 20px;
    }
    td{
      font-size: 15px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="cenground">
      <div class="borderw"> 
        <h4 style="background-color: #333333;padding-top: 10px;padding-bottom: 10px;text-align: center;color: white;border-radius: 5px;"> INBOX </h4>
      <div class="table-responsive">          
  <table class="table" style="text-align:center;">

    <thead>
      <tr>
        <th style="text-align:center;">Message Number</th>
        <th style="text-align:center;">From</th>
        <th style="text-align:center;">To</th>
        <th style="text-align:center;">Time</th>
        <th style="text-align:center;">Subject</th>
        <th style="text-align:center;">Message</th>
      </tr>
    </thead>
    <tbody>
      
        <?php
    foreach($record as $n)
    {
      echo "<tr><td>".$n->Msg_Id."</td>";
      echo "<td>".$n->Username." </td>";
      echo "<td>".$n->reciever." </td>";
      echo "<td>".$n->msgtime." </td>";
      echo "<td>".$n->Subject."</td>";
      echo "<td> ".$n->Message."</td>";?>
      <td><button id='rplybtn' onclick="window.location.href='<?php echo base_url();?>index.php/Employee_Controller/sendmsg'">Reply</button></td></tr>
    
   <?php }

  ?>
      <hr>
    </tbody>
  </table>
  </div>
     </div>
    </div>
  </div>
</body>
</html>