<html lang="en">
<head>
  <style type="text/css">
    .bagaround{
         background-image:  url('<?php echo base_url();?>simg.jpg');
          width: 100%;
          margin-top: 80px;
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
<h3 class="page-header" style="width:90%;">Full Employee Database</h3>
  <div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Employee ID</th>
        <th>Email ID</th>
        <th>Address</th>
        <th>Mobile</th>
        <th>Qualification</th>
        <th>Date Of Joining</th>
        <th>Employee Face</th>
      </tr>
    </thead>
    <tbody>

      	<?php
		foreach($rec as $n)
		{
			echo "<tr><td>".$n->First_Name."</td>";
      echo "<td>".$n->Last_Name." </td>";
      echo "<td>".$n->Username."</td>";
			echo "<td>".$n->Email_Id." </td>";
			echo "<td>".$n->Address."</td>";
			echo "<td> ".$n->Mobile."</td>";
			echo "<td> ".$n->Qualification."</td>";
			echo "<td> ".$n->Date_Of_Joining."</td>";
			echo "<td><img src=".$n->Image." height='75' width='75'></td></tr>";
		}

	?>

    </tbody>
  </table>
  </div>
</div>
</div>



</body>
</html>
