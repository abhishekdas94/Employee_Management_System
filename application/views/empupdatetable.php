<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.upd{
			width: 20%;
		}
		
		.fo{
			color: black;
		}
  	  /*.caenground
   		{
          float: right;
          background-color: #999999; 
          width: 55%;
          margin-top: -420px;
          margin-right: 195px;
          padding: 7px 10px 5px 10px; 
          border-top-right-radius:60px; 
          border-bottom-left-radius:60px;
          font-family: "Times New Roman";
          font-size: 15px;
          color: black;
          
        }*/
	</style>
	
</head>
<body>

	
	<?php echo validation_errors();?>
	<form action="<?php echo base_url();?>index.php/Employee_Controller/empupdateinfo" method="post">
	<table class="table"  style="text-align: center;">
		<tbody>
			
				<tr>	
		       	 <th>Qualification</th>
					<td><input type="text" class="fo" id="quali" name="quali" value="<?php echo $this->session->userdata('Qualification');?>"></td>
				</tr>

				<tr>	
		       		<th>Mobile </th>
					<td><input type="text" class="fo" id="mobile" name="mobile" value="<?php echo $this->session->userdata('Mobile');?>"></td>
				</tr>
			  
				<tr>	
		       		<th>Address</th>
					<td><input type="text" class="fo" id="address" name="address" value="<?php echo $this->session->userdata('Address');?>"></td>
				</tr>

			
		</tbody>
 	 </table>
 	 <input type="submit" class="btn upd btn-default" id="btnsubmit" value="Update">
 </form>
</body>
</html>