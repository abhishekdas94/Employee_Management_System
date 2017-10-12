<html lang="en">
<head>
</head>
<body>
	


     
  <div class="table-responsive">          
  <table class="table" style="text-align:center;">

    <thead>
      <tr>
        <th style="text-align:center;">Admin ID</th>
        <th style="text-align:center;">Full Name</th>
        <th style="text-align:center;">Username</th>
        <th style="text-align:center;">Email ID</th>
      </tr>
    </thead>
    <tbody>
      
      	<?php
		foreach($record as $n)
		{
			echo "<tr><td>".$n->userid."</td>";
			echo "<td>".$n->Full_Name." </td>";
			echo "<td>".$n->Username."</td>";
			echo "<td> ".$n->Email_Id."</td></tr>";
			
		}

	?>
      
    </tbody>
  </table>
  </div>



</body>
</html>