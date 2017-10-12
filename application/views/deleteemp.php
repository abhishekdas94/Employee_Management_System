<html>
<body>
  <div class="container">
    <div class = "page-header">
      <h3>
        Delete Employee From Database
      </h3>
    </div>

    <form action="<?php echo base_url();?>index.php/Main_controller/deleteempval" method="post">
      <center>
        <div class="form-horizontal">
        <label>Search By Employee ID:</label>
        <input type="text"  style="width:20%;margin-bottom:10px;"  class="form-control" name="txtid" placeholder="Enter Employee ID here..">
        <input type="submit" class="btn btn-default" value="GO" style="border:groove 1px black;">
      </div>
      </center>
    </form>
  </div>
 
</body>
</html>
