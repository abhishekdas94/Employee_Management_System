<html lang="en">
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
  <script type="text/javascript">
    $(document).ready(function(){
      $("#Resignation").click(function(){
        $.ajax({
          url:"<?php echo base_url();?>index.php/Main_controller/resigmsg",
          success:function(data)
          {
            $("#result").html(data)
          }
        });
      });
      $("#Leave").click(function(){
        $.ajax({
          url:"<?php echo base_url();?>index.php/Main_controller/leavemsg",
          success:function(data)
          {
            $("#result").html(data)
          }
        });
      });
      $("#Othermessages").click(function(){
        $.ajax({
          url:"<?php echo base_url();?>index.php/Main_controller/othermsg",
          success:function(data)
          {
            $("#result").html(data)
          }
        });
      });
    });

  </script>
</head>
<body>


	<div class="container">
    <div class="bagaround">
      <h3 class="page-header" style="text-align: center;">Check Messages From Employees Below:</h3>
      <center>
        <h4>Select your Choice from Below:</h4>
          <button class="form-control" id="Resignation">Resignation</button>
          <button class="form-control" id="Leave">Leave</button>
          <button class="form-control" id="Othermessages">Other Messages</button>
      </center>
      <div id="result" style="text-align: center;">Select Any One From Above Choices &#10004</div>
    </div>
  </div>
</body>
</html>




