<html lang="en">
<head>
  <style type="text/css">
    #rplybtn{
      color: black;
      border:solid 2px black;
      text-shadow: 5px 5px 10px black;
      border-radius: 20px;
    }
    #rplybtn:hover{
      background-color: yellow;
      color: black;
      border:solid 2px yellow;
      text-shadow: 5px 5px 5px white;
      border-radius: 20px;
    }
  </style>
</head>
<body>
 <div class="table-responsive">          
  <table class="table" style="text-align:center;">

    <thead>
      <tr>
        <th style="text-align:center;">Message Number</th>
        <th style="text-align:center;">From</th>
        <th style="text-align:center;">To</th>
        <th style="text-align:center;">Time</th>
        <th style="text-align:center;">Subject</th>
        <th style="text-align:center;">Message</th>
      </tr>
    </thead>
    <tbody>
      
      	<?php
		foreach($record as $n)
		{
			echo "<tr><td>".$n->Msg_Id."</td>";
			echo "<td>".$n->Username." </td>";
      echo "<td>".$n->reciever." </td>";
      echo "<td>".$n->msgtime." </td>";
			echo "<td>".$n->Subject."</td>";
			echo "<td> ".$n->Message."</td>";?>
     <td><form action='<?php echo base_url();?>index.php/Main_controller/replymsg' method="post">
    <input type="hidden" name="Username" value="<?php echo $n->Username;?>">
    <input type="hidden" name="Message" value="<?php echo $n->Message;?>">
    <input type="submit" name="submit" value="Reply" id='rplybtn'>
    </form></td></tr>
			
		<?php }

	?>
      <hr>
    </tbody>
  </table>
  </div>
</body>
</html>