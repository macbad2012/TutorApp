<!--
The widget that adds a tutor to the database
-->
<head>
	<!CSS to make it look even prettier>
	<style>
		#add_tutor_widget
		{
			float:left;
			color:black;
			padding:5px;
		}
		#content
		{
			line-height:25px;
		}
		#tutor_schedule
		{
			padding: 10px;
		}
	</style>
</head>

<div class="widget" id = "add_tutor_widget">
	<h2><ins><i><font face="arial">Add a Tutor</font></i></ins></h2>
	<div class="inner" id = "content">
		<form action="add_tutor.php" method="post">
			<ul style="list-style-type:none">
				<li>
					First Name: <br>
					<input type="text" name="first_name">
				</li>
				<li>
					Last Name: <br>
					<input type="text" name="last_name">
				</li>
				<li>
					Email: <br>
					<input type="text" name="email">
				</li>
				<li>
					Subject: <br>
					<input type="text" name="subject">
				</li>
				<li>
					Building (ex. Math Building): <br>
					<input type="text" name="building">
				</li>
				<li>
					Room (ex. Math 102): <br>
					<input type="text" name="location">
				</li>
				<li>
				<!--
				This is the schedule addition code
				It is a table with the beginning of 3 rows labeled Day, Start Time, and End Time
				After that it has fields or indications
				-->
					<h3><ins><font face="arial">The Tutor's Schedule</font></ins></h3>
					If there is a day the tutor does not tutor, put in n/a or N/A <br>
					<div class = "schedule" id = "tutor_schedule">
						<table border="1" style="width:100%">
							<tr style = "text-align: center">
								<td>Day</td>
								<td>Monday</td> 
								<td>Tuesday</td>
								<td>Wednesday</td> 
								<td>Thursday</td>
								<td>Friday</td>
							</tr>
							<tr style = "text-align: center">
								<td>Start Time</td>
								<td><input type="text" name="mon_start"></td> 
								<td><input type="text" name="tues_start"></td>
								<td><input type="text" name="wed_start"></td> 
								<td><input type="text" name="thurs_start"></td>
								<td><input type="text" name="fri_start"></td> 
							</tr>
							<tr style = "text-align: center">
								<td>End Time</td>
								<td><input type="text" name="mon_end"></td> 
								<td><input type="text" name="tues_end"></td>
								<td><input type="text" name="wed_end"></td> 
								<td><input type="text" name="thurs_end"></td>
								<td><input type="text" name="fri_end"></td> 
							</tr>
						</table>
					</div>
				</li>
				<li>
					<input type="submit" value="Add Tutor">
				</li>
			</ul>
		</form>
	</div>
</div>