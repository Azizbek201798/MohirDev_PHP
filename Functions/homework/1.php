<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phone Number Validation</title>
    <style>
        .center-form {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>
<body>
    <div class="container center-form">
        <form method="POST">
            <div class="form-group">
                <label for="phoneInput">Phone Number</label>
                <input type="text" class="form-control" id="phoneInput" name="phone" placeholder="Enter phone number">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            // Function to validate the phone number
            function validatePhoneNumber($phoneNumber) {
                // Use a regular expression to perform the validation
                $pattern = '/^\+?\d{12}$/'; // Matches + followed by exactly 12 digits

                if (preg_match($pattern, $phoneNumber)) {
                    return true; // Phone number is valid
                } else {
                    return false; // Phone number is invalid
                }
            }

            // Get the phone number from the form submission
            $phoneNumber = $_POST['phone'];

            // Validate the phone number
            if (validatePhoneNumber($phoneNumber)) {
                echo "<p>Phone number is valid: $phoneNumber</p>";
            } else {
                echo "<p>Invalid phone number. Please enter a valid number in the format +998910058110.</p>";
            }
        }
        ?>
    </div>
</body>
</html>