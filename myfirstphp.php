<!DOCTYPE html>
<html>
<head>
	<title>Add page</title>
</head>
<body>
<h1>Add User</h1>
<form method="post" action="list.php">
First Name:<br>
<input type="text" name="fname" id="name" ><br><br>
Lats Name:<br>
<input type="text" name="lname"><br><br>
Email:<br>
<input type="text" name="email"><br><br>
Gender:<br>
<input type="radio" name="gender" value="male"> Male
<input type="radio" name="gender" value="male" checked> Female<br><br>
Education:<br>
<select name="education">
  <option>BE</option>
  <option>BSC</option>
  <option>BTech</option>
</select><br><br>
Skills:<br>
<textarea name="skills" rows="4" cols="50"></textarea><br><br>
<input type="submit" name="Submit">
</form>
</body>
</html>