<!DOCTYPE html>
<html>
<head>	
</head>
<body>
		<div class="container">
			<div class="bground">
				<div class="container-fluid">
				<?php
				echo "<h2 class='label label-danger'>".$data."</h2>";
				?>
			
				</div>
				<h5>Upload Your Profile Picture:</h5>
					<?php echo form_open_multipart('Employee_Controller/uploadimage');?>
						<input type="file" name="userfile" class="form-control" style="width: 30%;">
						<input type="submit" name="Upload" value="Upload" style="color:black;width: 30%;" class="form-control">
					</form>
				<?php if(isset($error)) echo $error;?>	
				</div>
			</div>
</body>
</html>				
