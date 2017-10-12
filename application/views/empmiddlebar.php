<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
    .cenground
    {
          float: right;
          background-color: #333333; 
          width: 60%;
          
          margin-right: 160px;
          padding: 7px 10px 5px 10px;
          margin-bottom: 50px; 
          border-top-right-radius:60px; 
          border-bottom-left-radius:60px;
          border:groove 2px black;
          font-family: "Times New Roman";
          font-size: 19px;
          height: 530px;
          
          margin-top: -520px;
           
          
        }
        .check{
          width: 100%;
          border: groove 1px black;
          font-weight: 900;
        }
  </style>
</head>
<body>
  <div class="container">
    <div class="cenground">
       <table>
         <tr>
           <th><button class="btn check btn-default" onclick="window.location.href='<?php echo base_url();?>index.php/Employee_Controller/workreport'">Submit Work Report</button></th>

           <th><button class="btn check btn-default" onclick="window.location.href='<?php echo base_url();?>index.php/Employee_Controller/applyleave'">Apply For Leave</button></th>

           <th><button class="btn check btn-default" onclick="window.location.href='<?php echo base_url();?>index.php/Employee_Controller/holidaylist'">Check Holidays List</button></th>

           <th><button class="btn check btn-default" onclick="window.location.href='<?php echo base_url();?>index.php/Employee_Controller/sendmsg'">Leave a message for Admin</button></th>
         </tr>
       </table>
    </div>
  </div>
</body>
</html>