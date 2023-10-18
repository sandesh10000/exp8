<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Contact Us</h1>
        
        <form action="process_form.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="password">Password:</label><br>
            <input id="password" name="password" type="password" rows="4" cols="50" required></input><br><br>

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
