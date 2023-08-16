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
            <button type="submit" name="submit" id ='submitButton' class="btn btn-primary">Submit</button>
        </form>
    </div>
    <!-- Add Bootstrap JS and jQuery (for Bootstrap features) -->
    <script src="js/bootstrap.min.js"></script>

    <script>
        function checkAge() {
            var ageInput = document.getElementById("age");
            var submitButton = document.getElementById("submitButton");

            if (parseInt(ageInput.value) < 18) {
                submitButton.disabled = true;
                submitButton.classList.add("btn-danger");
            } else {
                submitButton.disabled = false;
                submitButton.classList.remove("btn-primary");
            }
        }
    </script>
</body>

</html>