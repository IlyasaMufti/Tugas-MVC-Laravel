<!DOCTYPE html>
<html>
	<head>
		<title> Sign Up Form </title>
	</head>
		
	<body>
		<div>
			<h1> Buat Account Baru! </h1> 
		 	<h3> Sign Up Form </h3>
		</div>

		<div>
			<form action="/sapa" method="POST">
				@csrf
				<label for="nama awal_user" >First name:</label> <br><br>
				<input type="text" placeholder="First Name" id="nama awal_user" name="nama1"> <br><br>
				<label for="nama akhir_user">Last name:</label> <br><br>
				<input type="text" placeholder="Last Name" id="nama akhir_user" name="nama2"> <br><br>
				<label>Gender:</label><br><br>
				<input type="radio" name="Gender"> Male <br>
				<input type="radio" name="Gender"> Female <br>
				<input type="radio" name="Gender"> Other <br><br>
				<label>Nationality:</label><br><br>
				<select name="Nationality">
					<option>Indonesian</option>
					<option>English</option>
					<option>Arabian</option>
					<option>Other</option>
				</select><br><br>
				<label>Language Spoken:</label><br><br>
				<input type="checkbox" name="Language">Bahasa Indonesia<br>
				<input type="checkbox" name="Language">English<br>
				<input type="checkbox" name="Language">Other<br><br>
				<label>Bio:</label><br><br>
				<textarea cols="30" rows="7" name="bio">Saya adalah...</textarea><br>
				<button type="submit" value="masuk">Sign Up</button>
			</form>
		</div>
		
	</body>
</html>