<?php 
require 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/33fb03e175.js" crossorigin="anonymous"></script>
    <title>All title</title>
</head>
<body>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col-md-1">#</th>
          <th scope="col">Title</th>
          <th scope="col">Content</th>
          <th scope="col">Date</th>
          <th scope="col-md-1"><a href="add.php"><button type="button" class="btn btn-primary">Add title</button></a></th>
        </tr>
      </thead>
      <tbody>

        <?php
            $requery = 'SELECT * FROM blog';  
            $stmt = $dbh->prepare($requery, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
            $stmt->execute();
            $row = $stmt->fetchAll();
            $count = 1;
            foreach ($row as $value) { ?>
                <tr>
                <th scope="row"><?=$count?></th>
                <td><?= $value['title']?></td>
                <td><?= $value['content']?></td>
                <td><?= $value['date']?></td>
                <td><a href="edit.php?updateId=<?=$value['id']?>"><i class="far fa-edit"></i></a> <a href="delete.php?deleteId=<?=$value['id']?>"><i class="far fa-trash-alt"></i></a></td>
                </tr>

            <? $count++;
            }
        ?>
      </tbody>
      
    </table>
    <style>
    table {
        text-align: center;
        position:absolute;
        top:10%;
        padding-left: 10%;
    }
    </style>
</body>
</html>
