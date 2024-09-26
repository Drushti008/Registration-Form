<html>

<head>
	<link rel="stylesheet" type="text/css" href="regg.css/">
</head>
<body>

<h1>Registration Form</h1>
	<div class="container">
	<form action="accept.php" method="POST" autocomplete="off">
		
		
		<table>
		
			<tr>
				
				<td><b>First Name<span class="required">*</span></b></td>
				<td> <input type="text" name="name_txt" /></td>

			</tr>

			<tr>
				
				<td><b>Middle Name</b></td>
				<td> <input type="text" name="mid_txt"/></td>

			</tr>

			<tr>
				
				<td><b>Last Name</b></td>
				<td> <input type="text" name="last_txt" /></td>

			</tr>

			<tr>
				<td><b>Mobile No<span class="required">*</span></b></td>
				<td> 
					<input type="tel" name="phone" />

				</td>

			</tr>

			<tr>
				
				<td><b>Email<span class="required">*</span></b></td>
				<td> <input type="email" name="email_box"  /></td>

			</tr>

			<tr>
				<td><b>DOB</b></td>
				<td> <input type="date" name="birthdate"/></td>

			</tr>

			
           
			<tr>
				
				<td><b> Gender</b></td>
				<td><input type="radio" name="rad_gender"/>
                 <label><b>Male</b></label>
				</td>

			</tr>

			

			<tr>
				<td></td>
				<td><input type="radio" name="rad_gender" />
                <label><b>Female</b></label>
				</td>
			</tr>

			<tr>
				<td></td>
				<td><input type="radio" name="rad_gender"/>
                <label><b>Prefer not to say</b></label>
				</td>
			</tr>

			<tr>
				<td><b>Address<span class="required">*</span></b></td>
				<td>
				
                <textarea name="address" cols="35" rows="3" />
				</textarea>
			</td>
			</tr>

			<tr>
				
				<td><b>Department<span class="required">*</span></b></td>
				<td>
					<select required>
						<option value="Course">Department</option>
						<option value="Electrical">Electrical Engineering</option>
						<option value="Electronics ">Electronics and Telecommunication</option>
						<option value="Civi">Civil Engineering</option>
						<option value="Mechanical">Mechanical Engineering</option>
						<option value="Computer">Computer Engineering</option>
						<option value="IT">Information Technoloy</option>
						<option value="Chemical">Chemical Engineering</option>
						<option value="PP">Plastic Polymer</option>
					</select>
				</td>
			</tr>
				<tr>
					
					<td><b>Id Code<span class="required">*</span></b></td>
					<td><input type="text" name="id" /></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>

				<tr>
					<td></td>
					<td></td>
				</tr>

				<tr>
					
                     <td></td>
                     <td><a href="#"><input type="submit" value="Submit" name="btn_submit"/></a>

                     </td>
				</tr>


				

		</table>
	

	</form>
</div>
</body>
</html>
