<!DOCTYPE html>
<html>
<head>
    <title>Submit Data to SQL</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Submit Data to SQL</h2>
        <div class="alert alert-success mt-3">Entries added!</div>
        <form action="submit.php" method="post">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="fname">First Name:</label>
                <input type="text" class="form-control" id="fname" name="fname" required>
            </div>
            <div class="form-group">
                <label for="lname">Last Name:</label>
                <input type="text" class="form-control" id="lname" name="lname" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <!-- Add Bootstrap JS and jQuery (for Bootstrap features) -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
