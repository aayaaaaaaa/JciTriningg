<!DOCTYPE html>
<html>

<head>
    <title>Submit Data to SQL</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>

<body>
    <?php
    // Fetch and display data from the database
    $con = mysqli_connect($host, $username, $password, $dbname);
    if (!$con) {
        die("Connection failed!" . mysqli_connect_error());
    }

    $query = "SELECT * FROM contactform_entries";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "<h3>Database Entries:</h3>";
        echo "<ul>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<li>{$row['fname']} {$row['lname']} - {$row['email']}</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No entries found.</p>";
    }

    mysqli_close($con);
    ?>


    <script src="../bootstrapjs/bootstrap.min.js"></script>

</body>

</html>