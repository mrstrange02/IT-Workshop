<!DOCTYPE html>
<html>
<head>
<title>Sample Form</title>
<style>
 #name
 {
 color:black;
 background:blue;
 }
 #email
 {
  color:black;
 background:blue;
 }
 #sub
 {
  background:green;
 }
 
</style>
</head>
<body>
<form action="process_calculator.php" method="post">
<label for="num1">Enter Number 1:</label>
<input type="number" id="num1" name="num1"><br><br>
<label for="num2">Enter Number 2:</label>
<input type="number" id="num2" name="num2"><br><br>

<input type="submit" id='sub' value="Calculate Sum">
</form>
</body>
</html>
