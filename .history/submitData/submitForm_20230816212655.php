<!DOCTYPE html>
<html>

<head>
    <title>Submit Data to SQL</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Database App</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="show.php">Show</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="submitForm.php">Submit Form</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <h2 class="mb-4">Submit Data to SQL</h2>

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

            <div class="form-group">
                <label for="age">Age:</label>
                <input type="text" class="form-control" id="age" name="age" required>
            </div>
            <button type="submit" name="submit" id='submitButton' class="btn btn-primary">Submit</button>
        </form>
    </div>
    <!-- Add Bootstrap JS and jQuery (for Bootstrap features) -->

    <script>
        var ageInput = document.getElementById("age");
        var submitButton = document.getElementById("submitButton");

        ageInput.addEventListener("input", function() {
            if (parseInt(ageInput.value) < 18) {
                submitButton.disabled = true;
                submitButton.classList.add("btn-danger");
            } else {
                submitButton.disabled = false;
                submitButton.classList.remove("btn-danger");
            }
        });
    </script>

    <script src="../bootstrapjs/bootstrap.min.js"></script>

</body>

</html>