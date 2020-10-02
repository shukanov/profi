<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Mail</title>
</head>
<body>
    <form id="my_form">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-2">
            <input type="text" class="form-control" id="name" placeholder="Name">
            <br>
            <!-- <div id="btn">Отправить</div> -->
            <div><button type="button" class="btn btn-primary" id="btn">Отправить</button></div>
            </div>
            <div class="col-md-2">
            <input type="text" class="form-control" id="email" placeholder="Email">
            </div>
            <div class="col-md-2">
            <input type="text" class="form-control" id="phone" placeholder="Phone">
            </div>
            <div class="col-md-3"></div>
        </div>
    </form>

    <br>

    <div id="my_message"></div> 

    <style>
    form {
        text-align: center;
        position:absolute;
        top:30%;
        right:0;
        left:0;
    }
    </style>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    
    <script src="ajax.js"></script>
    
</body>
</html>