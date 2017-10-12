<html lang="en">
<head>
	<style>
	.form1{
		width:50%;
	}
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
  </style>
</head>
<body>
<div class="container">
    <div class="bagaround">
	<center>
		<h3 class="page-header" style="margin-left:50px;width:100%;">Employee Working Status:</h3>
			<div class="table-responsive">          
			  <table class="table" style="text-align:center;">

			    <thead>
			      <tr>
			        <th style="text-align:center;">UserID</th>
			        <th style="text-align:center;">Login Time</th>
			        <th style="text-align:center;">Logout Time</th>
			        <th style="text-align:center;">Duration</th>
			        <th style="text-align:center;">Work Report</th>
			      </tr>
			    </thead>
			    <tbody>

				<?php
				foreach ($record as $y) {
					echo "<tr><td>".$y->Username."</td>";
					echo "<td>".$y->Log_in."</td>";
					date_default_timezone_set("Asia/Kolkata");
 					$passedtime=date("Y-m-d h:i:sa");
					echo "<td>".$y->Log_out."</td>";
					if(!empty($y->Log_out))
					{
						$then = new DateTime($y->Log_in);
	 					$now = new DateTime($y->Log_out);
	 					$sinceThen = $then->diff($now);
	 					echo "<td>".$sinceThen->h.' hours '.$sinceThen->i.' minutes</td>';
 					}
 					else {
 						$then = new DateTime($y->Log_in);
 						$now = new DateTime($passedtime);
	 					$sinceThen = $then->diff($now);
	 					echo "<td>".$sinceThen->h.' hours '.$sinceThen->i.' minutes '.$sinceThen->s.' seconds</td>';

 					}
					echo "<td>".$y->Work_report."</td></tr>";
				}
				?>
				</tbody>
  			</table>
 		 </div>
	</center>
</div>
</div>
</body>
</html>
