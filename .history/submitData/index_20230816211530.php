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

        <div class="row">
            <div class="col-md-6 mx-auto">
                <ul class="list-group">
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
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<li class="list-group-item">' . $row['fname'] . ' ' . $row['lname'] . ' - ' . $row['email'] . '</li>';
                        }
                    } else {
                        echo '<li class="list-group-item">No entries found.</li>';
                    }

                    mysqli_close($con);
                    ?>
                </ul>
            </div>
        </div>
    </div>



    <script src="../bootstrapjs/bootstrap.min.js"></script>

</body>

</html>