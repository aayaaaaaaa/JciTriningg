<?php
    if(isset($_POST['submit']))
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];

        // database details
        $host = "localhost";
        $username = "root";
        $password = "";
        $dbname = "testdbb";
        
        // creating a connection
        $con = mysqli_connect($host, $username, $password, $dbname);
        
        // to ensure that the connection is made
        if (!$con)
        {
            die("Connection failed!" . mysqli_connect_error());
        }
        
        // using sql to create a data entry query
        $sql = "INSERT INTO contactform_entries (id, fname, lname, email) VALUES ('0', '$fname', '$lname', '$email')";
        
        // send query to the database to add values and confirm if successful
        $rs = mysqli_query($con, $sql);
        if($rs)
        {
            echo "Entries added!";
        }
        
        // close connection
        mysqli_close($con);
    }
?>

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
