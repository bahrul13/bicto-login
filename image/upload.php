<?php include "connup.php"?>
<!DOCTYPE html>
<html>
<head>
    <title>Users Table</title>
    <style>
        table, th, td {
            margin: auto;
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
            text-align: left;
        }
    </style>
</head>
<body>

<!-- <form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="image" />
    <input type="submit" name="submit" value="Upload Image" />
</form> -->

<form action="upload.php" method="post" enctype="multipart/form-data">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <label for="image">Profile Picture:</label>
    <input type="file" id="image" name="image" required>
    <input type="submit" name="submit" value="Register">
</form>

<table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Image</th>
        </tr>
        <?php include "tablesrow.php" ?>
</table>
</body>
</html>