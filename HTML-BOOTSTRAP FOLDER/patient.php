


<!DOCTYPE html>

<html>
<head>
	<title></title>
  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link href="css/style1.css" rel="stylesheet"/>
</head>
<body>
<div class="jumbotron">
    
    <div class="container">
    	<div class="card">
    		<div class="card-body">
    			<div class="row">
    				<div class="col-md-3">
    			<h3>Patient Details</h3>
    		</div>
    		<div class="col-md-8">
    			<form class="form-group" action="" method="post">
    			<div class="row">
    			<div class="col-md-10"><input type="text" name="contact" placeholder="enter your contact number" class="form-control"></div>
    			<div class="col-md-2"><input type="submit" name="search" class="btn btn-light"></div>
    		</div>
    	</form>
    </div>
</div>
</div>






    		<div class="card-body">
    		<table class="table table-hover">
  <thead>
    <tr>
    
      <th scope="col">First Name</th>
      <th scope="col">Email Id</th>
      <th scope="col">Contact No.</th>
      <th scope="col">Doctor Appointed</th>
      <th scope="col">Doctor Contact No.</th>
      <th scope="col">Timing</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>


<?php
  
$con=mysqli_connect("localhost","root");
$db=mysqli_select_db($con,'hmsdb');
if(isset($_POST['search']))
{
	$contact=$_POST['contact'];
	$que="select * from doctorapp where contact='$contact'";
	$res=mysqli_query($con,$que);
	while($row=mysqli_fetch_array($res))
	{
		
  ?>
  <tr>
    <td><?php echo $row['fname'];?></td>
       <td><?php echo $row['email'];?></td>
          <td><?php echo $row['contact'];?></td>
             <td><?php echo $row['docapp'];?></td>
                <td><?php echo $row['dcontact'];?></td>
                <td><?php echo $row['dtime'];?></td>

                <td>approved</td>
  </tr>
  <?php
}
}
?>
  
 



















  	

  
    
  </tbody>
</table>
</div>

</div> 















	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>




















 