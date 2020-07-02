<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
<form action="{{url('/register')}}" method="POST">
        @csrf
		<h1> Buat Account Baru! </h1>
		<h3> Sign Up Form </h3>
		<label for="nama_awal">First Name:</label>
			<br>
			<input type="text" placeholder="Type your first name" id="nama_awal" name="nama_awal">
			<br>
		<br>
		<label for="nama_akhir">Last Name:</label>
			<br>
			<input type="text" placeholder="Type your last name"  id="nama_akhir" name="nama_akhir">
			<br>
		<br>
		<label for="Gender">Gender:</label><br>
		<br>
		<input type="radio" name="Gender"> Male<br>
		<input type="radio" name="Gender"> Female<br>
		<input type="radio" name="Gender"> Others<br>
		<br>
		<label> Nationality </label>
		<select>
			<option> Indonesian </option>
			<option> US </option>
			<option> UK </option>
		</select><br>
		<br>
		<label for="bahasa_user">Languange Spoken:</label><br>
		<br>
		<input type="checkbox" name="bahasa_user" value="0"> Bahasa Indonesia <br>
		<input type="checkbox" name="bahasa_user" value="1"> English <br>
		<input type="checkbox" name="bahasa_user" value="2"> Other <br>
		<br>
		<label for="bio">Bio:</label><br>
		<textarea cols="80" rows="7"></textarea>
		<br>
		<br>
		<button type="submit" name="button">Sign Up</button>
   
    </form>
</body>
</html>