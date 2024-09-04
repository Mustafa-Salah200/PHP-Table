<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav>
    <h1><a href="index.php">OUR CRUD SYSTEM</a></h1>
</nav>
<div class="createnew">
            <a href="./create.php">NEW USER</a>

    </div>
    <div class="container">

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>PASSWORD</th>
                <th>OPTION</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $conn = mysqli_connect('localhost', 'root', '', 'users');

             $sql = "SELECT * FROM user";
             $requset = mysqli_query($conn, $sql);
         
             while($row = mysqli_fetch_array($requset)){
                ?>
                <tr>
                    <td> <?php echo $row["id"];?></td>
                    <td> <?php echo $row["username"];?></td>
                    <td> <?php echo $row["email"];?></td>
                    <td> <?php echo $row["password"];?></td>
                    <td>    
                        <a href="process.php?id=<?php echo $row["id"];?>" name="delete" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="#ff142c" d="M135.2 17.7L128 32 32 32C14.3 32 0 46.3 0 64S14.3 96 32 96l384 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-96 0-7.2-14.3C307.4 6.8 296.3 0 284.2 0L163.8 0c-12.1 0-23.2 6.8-28.6 17.7zM416 128L32 128 53.2 467c1.6 25.3 22.6 45 47.9 45l245.8 0c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg>
             </a>
                        <a href="update.php?id=<?php echo $row["id"];?>&&username=<?php echo $row["username"];?>&&email=<?php echo $row["email"];?>&&password=<?php echo $row["password"];?>" name="update" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#288a14" d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160L0 416c0 53 43 96 96 96l256 0c53 0 96-43 96-96l0-96c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 96c0 17.7-14.3 32-32 32L96 448c-17.7 0-32-14.3-32-32l0-256c0-17.7 14.3-32 32-32l96 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L96 64z"/></svg>
             </a>
                     </td>
                </tr>


                 <?php
             }
            ?>

        </tbody>
    </table>
 
    </div>
</body>
</html>

