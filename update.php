<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav>
    <h1><a href="index.php">OUR CRUD SYSTEM</a></h1>
</nav>
    <div class="updatepage">
        <div class="title">
            <h1>Update User</h1>
        </div>
        <form action="process.php" method="post">
            <input type="hidden" name="id" value="<?php echo $_GET["id"];?>">
            <div class="input">
                <label for="name">Name:</label>
                <input type="text" id="name" name="username" value="<?php echo $_GET["username"];?>">
            </div>

            <div class="input">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo $_GET["email"];?>" >
            </div>

            <div class="input">
                <label for="name">Password:</label>
                <input type="text" id="password" name="password" value="<?php echo $_GET["password"];?>">
            </div>

            <input type="submit" name="update" class="submit" value="UPDATE">
        </form>
    </div>
</body>
</html>
