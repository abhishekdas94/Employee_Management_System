<html>
<head>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#email").mouseenter(function(){
				var n=$("#email").val();

				if(n!="")
				{
					$.ajax({
								url:"<?php echo base_url();?>index.php/Employee_Controller/generateusername",
								type:"post",
								data:{"nm":n},
								success:function(d) 
								{
								 $("#d1").html(d);
								}
									
					});
				}
				else
				{
					$("#d1").html();
				}
			});
		});

	</script>
	<style type="text/css">
		.error
		{
			color: white;
			text-decoration: none;

		}
		.baground{
         background-image:  url('<?php echo base_url();?>simg.jpg');
          width: 90%;
          margin-top: 80px;
          padding: 7px 10px 40px 10px; 
          border-top-right-radius:60px; 
          border-bottom-left-radius:60px;
          border:groove 2px black;
          font-size: 18px;
          text-shadow:5px 5px 5px black;
          color:white;
          font-family: "Times New Roman";
      }
	</style>
</head>
<body style="width: 100%;padding-bottom: 100px;"><center>
		<div class="container">
			<div class="baground">
				<div class="container-fluid">
				<?php
				if(isset($data))
				{
				echo "<h2 class='label label-danger'>".$data."</h2>";
				}
					?>
				</div>
				<h2 style="font-family: 'Times New Roman';margin: 0px 0px 0px 0px; text-shadow:5px 5px 10px black;">Fill Up The Form Below To Register</h2><hr>
				<form class="form-horizontal" method="post" action="<?php echo  base_url();?>index.php/Employee_Controller/checkingregister" style="font-family: 'Times New Roman';text-shadow:5px 5px 5px black;">
					  
					<?php echo validation_errors();?>
					
					  <div class="form-group">
					    <label class="control-label col-sm-2">First Name:</label>
					    <div class="col-sm-10">
					      <input type="text" value="<?php echo set_value('fname'); ?>" class="form-control" id="fname" name="fname" placeholder="Enter First Name">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-2">Last Name:</label>
					    <div class="col-sm-10">
					      <input type="text" value="<?php echo set_value('lname'); ?>" class="form-control" id="lname" name="lname" placeholder="Enter Last Name">
					    </div>
					  </div>


					  <div class="form-group">
					    <label class="control-label col-sm-2" for="email">Email:</label>
					    <div class="col-sm-10">
					      <input type="email" value="<?php echo set_value('email'); ?>" class="form-control" id="email" name="email" placeholder="Enter email">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-2" >Password:</label>
					    <div class="col-sm-10"> 
					      <input type="password"  class="form-control" id="pwd" name="pwd" placeholder="Enter password">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-2" >Confirm Password:</label>
					    <div class="col-sm-10"> 
					      <input type="password" class="form-control" id="pwd2" name="pwd2" placeholder="Enter password again">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-2">Date Of Joining:</label>
					    <div class="col-sm-10">
					      <input type="date" value="<?php echo set_value('doj'); ?>" class="form-control" id="doj" name="doj">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-2">Residential Address:</label>
					    <div class="col-sm-10">
					      <input type="text" value="<?php echo set_value('address'); ?>" class="form-control" id="address" name="address" placeholder="Enter Address">
					    </div>
					  </div>
					   <div class="form-group">
					    <label class="control-label col-sm-2">Mobile Number:</label>
					    <div class="col-sm-10">
					      <input type="text" value="<?php echo set_value('mnum'); ?>" class="form-control" id="mnum" name="mnum" placeholder="Enter Mobile Number">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-2">Last Qualification:</label>
					    <div class="col-sm-10">
					      <input type="text" value="<?php echo set_value('quali'); ?>" class="form-control" id="quali" name="quali" placeholder="Enter Qualification">
					    </div>
					  </div>
					  <div class="form-group">
					   <label class="control-label col-sm-2">Username:</label>
					   <div class="col-sm-10">
					    <input type="text" value="<?php echo set_value('uname'); ?>" class="form-control" id="uname" name="uname" value="" placeholder="Enter Username">
					    </div>
					  </div>
					 <p style="font-size:15px;text-shadow:none;margin-left:45px;" class="label label-info">Move Your Mouse Cursor Over EMAIL Feild To Generate Available Username For You:<br>(Copy And Paste It To Username Feild)</p><div id="d1"></div>

					<button type="submit" id="login" class="btn btn-default" style="margin-top:15px;margin-right:10px;margin-bottom:-40px;">Register</button>
					<button type="reset" id="login" class="btn btn-default" style="margin-top:15px;margin-right:10px;margin-bottom:-40px;">Reset</button>
					
				</form>
			</div>
		</div>
	</center>

</body>
</html>