<!DOCTYPE html>
<html>
<head> 
	<style type="text/css">
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
    
    .ads{
    	 border:solid 1px black;
    	 width: 100%;
     	 color: black;
     	 border-radius: 20px;
     	 text-shadow: 5px 5px 10px black;
     	 font-weight: bold;
     	 margin-bottom: 10px;
     	 padding-left: 10px;
    }
    .ads:hover{
    	border:solid 1px blue;
    }
     .success{
          color:white;
          background-color:#0c6800; 
          font-size: 15px;
          font-family: cursive;
        }
        .info{
          color:white;
          background-color:#5b0000;
          font-size: 15px;
          font-family: cursive;
        }
  </style>
</head>
<body>
	<div class="container">
    	<div class="bagaround">
    		<center><form action="<?php echo base_url();?>index.php/Main_controller/msgtodatabase" method="post">
    			 <h4 class="success"> 
		          <?php 
		            if(isset($success)){
		              echo $success;
		            }
		           ?>
		           </h4>
		           <h4 class='info'>
		            <?php 
		             if(isset($info)){
		              echo $info;
		            }
		           echo validation_errors();
		           ?></h4>
    			<h3><b>From: </b><h4><?php echo $this->input->post('Username');?></h4><b>Message: </b><h4><?php echo $this->input->post('Message'); echo "<br>";?></h4></h3><br>
    			<table>
    				<tbody>
    					<tr>
    						<td>
    							To(Username):
    						</td>
    						<td>
    							<input type="text" class="ads" name="Username" value="<?php echo $this->input->post('Username');?>">
    						</td>
    					</tr>
    					<tr>
    						<td>
    							From:
    						</td>
    						<td>
    							<p class="ads" style="color: white;border-color: white;">Admin</p><input type="hidden" name="admin" value="admin">
    						</td>
    					</tr>
    					<tr>
    						<td>
    							Subject:
    						</td>
    						<td>
    							<input type="text" class="ads" name="Subject">
    						</td>
    					</tr>
			    		<tr>
    						<td>
    							Reply Message:
    						</td>
    						<td>
    							<textarea class="ads" name="Message"  rows="4" cols="50"></textarea>
    						</td>
    					</tr>	
    					<tr>
    						<td>
    							
    						</td>
    						<td>
    							<input type="submit" class="ads" name="submit" value="Send!">
    						</td>
    						
    					</tr>	
			    		</tbody>
    			</table>
    		</form></center>
		</div>
  	</div>
</body>
</html>