

<!DOCTYPE html>
<html>
<head>
    <title>Submit Data to SQL</title>
</head>
<body>
    <h2>Submit Data to SQL</h2>
    <form action="submit.php" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="fname">First Name:</label>
        <input type="text" id="fname" name="fname" required><br><br>
        
        <label for="lname">Last Name:</label>
        <input type="text" id="lname" name="lname" required><br><br>
        
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
