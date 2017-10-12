<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.label{
			font-size: 20px;
			z-index: 20;
			margin-top: 200px;
		}
	</style>
</head>
<body>
		<center><div class="container">
			
				<?php
					echo "<h2 class='label label-danger'>".$this->session->userdata('info')."</h2>";
					$this->session->unset_userdata('info');
				?>
			
		</div></center>
</body>
</html>				

				
			

