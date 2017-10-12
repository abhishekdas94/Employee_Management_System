<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
    .borderw{
          background-image:  url('<?php echo base_url();?>simg.jpg');;
          color: white;
          padding: 30px 0px 30px 0px;
          border-radius: 30px;
          
        }
  </style>
</head>
<body>
	<div class="borderw"> 
	<table class="table">
		<tbody>
	<?php
	foreach ($record as $n) {
		echo "<tr>
       		 <th>Firstname</th>";
		echo "<td>".$n->First_Name."</td>";
		echo "</tr>
			  <tr>	
       		 <th>Lastname</th>";
		echo "<td>".$n->Last_Name."</td>";
		echo "</tr>
			  <tr>	
       		 <th>Email Id</th>";
		echo "<td>".$n->Email_Id."</td>";
		echo "</tr>
			  <tr>	
       		 <th>Qualification</th>";
		echo "<td>".$n->Qualification."</td>";
		echo "</tr>
			  <tr>	
       		 <th>Date Of Joining</th>";
		echo "<td>".$n->Date_Of_Joining."</td>";
		echo "</tr>
			  <tr>	
       		 <th>Address</th>";
		echo "<td>".$n->Address."</td>";
		echo "</tr>
			  <tr>	
       		 <th>Mobile No.</th>";
		echo "<td>".$n->Mobile."</td></tr>";
	}

	?>
	</tbody>
  </table>
</div>
</body>
</html>