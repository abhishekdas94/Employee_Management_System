<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
    .caenground
    {
          float: right;
          background-color: #999999; 
          width: 55%;
          margin-top: -480px;
          margin-right: 202px;
          padding: 7px 10px 5px 10px; 
          border-top-right-radius:60px; 
          border-bottom-left-radius:60px;
          font-family: "Times New Roman";
          font-size: 19px;
          color: black;
          font-weight: 900;
        }
        #output{
          font-size: 15px;
        }
        .chseck{
          width: 75%;
        }
  </style>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#details').click(function(){
        $.ajax({
          url:'<?php echo base_url();?>index.php/Employee_Controller/ajaxdetails',
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
      <center>
        <button id="details" class="btn chseck btn-default">Click Here To View Your Details</button>
        <div id="output"></div>
      </center>
    </div>
  </div>
</body>
</html>