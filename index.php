<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to VIT Bhopal University</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="container">
        <h1>Welcome to VIT Bhopal University</h1>
        <form action="#" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="regNumber">Registration Number:</label>
            <input type="text" id="regNumber" name="regNumber" required>

            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>

            <label for="phone">Phone No.:</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="year">Year:</label>
            <input type="text" id="year" name="year" required>

            <label for="branch">Branch:</label>
            <input type="text" id="branch" name="branch" required>

            <input type="submit" value="Submit">
        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>



