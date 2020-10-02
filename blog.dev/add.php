<?php
require 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Add title</title>
</head>
<body>
    
    <form action="getformAdd.php" method="post">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-2">
            <input type="text" class="form-control" name="title" placeholder="Title">
            <br>
            <button type="submit" class="btn btn-primary">Send</button>
            </div>
            <div class="col-md-4">
            <input type="text" class="form-control" name="content" placeholder="Content">
            </div>
            <div class="col-md-3"></div>
        </div>
    </form>

    
    <style>
    form {
        text-align: center;
        position:absolute;
        top:30%;
        right:0;
        left:0;
    }
    </style>
    
</body>
</html>