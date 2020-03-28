<!DOCTYPE html>
<html>
<head>
	<title>JANMDATRI</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/astyle.css">
</head>
<body>
  <div class="header" id="topheader">
<nav class="navbar navbar-expand-lg fixed-top">
  <a class="navbar-brand font-weight-bold text-white" href="#">JANMDATRI</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
     <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto text-white">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Doctor's appointment</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Chat with doctor</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pharmacy</a>
            </li>    
            <li class="nav-item">
              <a class="nav-link" href="#">lab test</a>
            </li>
        </ul>
    </div>
</nav>
<br>
<div id="bgimg">
		<div  id="data">
		<h1 id="da">SELECT CITY</h1>
	</div>
	<div id="data1">		
<form action="" method="post">
<select name="place">
<option >jamshedpur</option>
<option >ranchi</option>
<option >dhanbad</option>
<option >bokaro</option>
<option >chaibasa</option>
</select>
<input type="submit" name="submit" value="SELECT" />
</form>
</div>
<h3 class="text-center">Click on any of the following doctor's name to get an appointment</h3>
<div class="tab">
<table align="center" border="2px" style="width:900px; line-height:40px" id="table">
  <thead>
	<tr>
		<th colspan="6" class="text-center"><h1>Doctor's List</h1></th>
	</tr>
	<th>NAME</th>
	<th>EMAIL-ID</th>
	<th>CONTACT-NO</th>
	<th>ADDRESS</th>
	<th>HOURS OF OPERATION</th>	
    <th>FEES</th>
	</thead>
<tbody>
<?php
if(isset($_POST['submit']))
{
$val = $_POST['place'];
$con = mysqli_connect('localhost','root','','janm');
$q= "select * from doctor where dcity='$val' ";
$r = mysqli_query($con, $q);
if(mysqli_num_rows($r) > 0 )
{
 while ($row= mysqli_fetch_assoc($r))
            {

    ?>
           <tr>
           	<td><?php echo $row['dname']?> </td>
           	<td><?php echo $row['demail']?> </td>
           	<td><?php echo $row['dcontactno']?> </td>
           	<td><?php echo $row['daddress']?></td>
           	<td><?php echo $row['dhoo']?> </td>
           	<td><?php echo $row['dfees']?> </td>
           </tr>  
           <?php         
            }
        }
}
?>
<input type="button" id="tst" value="OK" onclick="fnselect()" />
</tbody>
</table>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
 $("#table tr").click(function(){
   $(this).addClass('selected').siblings().removeClass('selected');    
   var value=$(this).find('td:first').html();
   alert(value);    
});

$('.ok').on('click', function(e){
  var x=$("#table tr.selected td:first").html();
   alert(x);
   $.ajax{
    url:"readjson.php",
    method:"post",
    data:x;
   };

});
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>