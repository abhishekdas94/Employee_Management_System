<html>
<head>
	<script>
		$(document).ready(function(){
		$("#btnadmin").click(function(){
				$.ajax(
					{ 
						url:"<?php echo base_url();?>index.php/Main_controller/ajaxadmin",
						success:function(d)
						{
							$("#result").html(d);
						}
					});
			});
		});
</script>
	<style>
		#btnadmin{
			
			margin-top: 5px;
		}
		
	</style>
</head>
<body>
		<div class="container">
		<div class="baground" style="margin-top: 6px;">
	<center><input type="submit" style="font-weight:bold;margin-top: 6px;" class="btn btn-primary" id="btnadmin" value="Click Here To View The Records Of All The Adminstrators"></center>
	<h5 id="result"></h5></div>
</div>

	

	
</body>
</html>
