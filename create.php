<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATE</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav>
    <h1><a href="index.php">OUR CRUD SYSTEM</a></h1>
</nav>
    <div class="updatepage">
        <div class="title">
            <h1>Create New User</h1>
        </div>
        <form action="process.php" method="post">
            <div class="input">
                <label for="name">Name:</label>
                <input type="text" id="name" name="username">
            </div>

            <div class="input">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" >
            </div>

            <div class="input">
                <label for="name">Password:</label>
                <input type="password" id="password" name="password">
            </div>
            <input type="submit" name="create" class="submit" value="CREATE">
        </form>
    </div>
</body>
</html>
