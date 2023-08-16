<!DOCTYPE html>
<html>

<head>
    <title>Submit Data to SQL</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-4">Database Entries:</h2>

        <?php
        $host = "localhost";
        $username = "root";
        $password = "";
        $dbname = "testdbb";

        $con = mysqli_connect($host, $username, $password, $dbname);
        if (!$con) {
            die("Connection failed!" . mysqli_connect_error());
        }

        $query = "SELECT * FROM contactform_entries";
        $result = mysqli_query($con, $query);

        if (mysqli_num_rows($result) > 0) {
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
    </div>


    <script src="../bootstrapjs/bootstrap.min.js"></script>

</body>

</html>