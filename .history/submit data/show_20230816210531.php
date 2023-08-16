
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