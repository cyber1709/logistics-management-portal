<?php include 'includes/header.php'; ?>

<style type="text/css">
  body {
    background-image: url('images/bus_background.jpg');
    background-repeat: none;
    background-size: cover;
  }
  </style>
<div >
		<ul class="nav nav-tabs" >
  			<li role="presentation" class="active" style="width:150px; text-align:center;"><a href="main.php">Home</a></li>
  			<li role="presentation" style="width:150px; text-align:center;"><a href="profile.php">Profile</a></li>
  			<li role="presentation" style="width:150px; text-align:center;" ><a href="events.php">Events</a></li>
  			<li role="presentation" style="width:150px; text-align:center;"><a href="jobs.php">Jobs</a></li>
  			<li role="presentation" style="width:150px; text-align:center;"><a href="workshops.php">Workshops</a></li>
  			<li role="presentation" style="width:150px; text-align:center;"><a href="notifications.php">Notifications</a></li>
  			<li role="presentation" style="width:150px; text-align:center;"><a href="help.php">Help</a></li>
  			<li role="presentation" style="width:150px; text-align:center;"><a href="buses.php">Buses</a></li>


		</ul>
		<?php
			include 'includes/connection.php';
			$source=$_POST['source'];
			session_start();
			$_SESSION['source']=$source;
		?>
		<form style="margin-left:450px;  width:500px;" id="buses_form" method="POST" action="process_buses.php">
				<br>
				<span style="font:20px; font-family:verdana; color:White;"> Find you Ride<br></span>
				<span style="font:20px; font-family:verdana; color:White;"> Source selected: <?php echo $_SESSION['source']; ?> <br></span>
				
				<select class="form-control" style=" margin-top:15px;" name="route_no">
					<option value="">Select your Route</option>
					<?php
					include 'includes/connection.php';
					$query="SELECT route_no FROM routes WHERE stop_name='{$source}' ";
					$query_select=mysqli_query($con,$query);
				while($query_result=mysqli_fetch_array($query_select,MYSQLI_ASSOC))
				{
					
					echo "<option value='{$query_result['route_no']}'>".$query_result['route_no']."</option>";
				}
				?>
				<input type="submit" class="form-control" value="Find!!" style="margin-top:20px;" />
				<div style="margin-top:20px;">
				<a href="all_buses.php" style="margin-top:20px; color:white; text-decoration:none;">Find all bus stops</a>
			</div>



			</select>
		</form>

