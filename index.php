<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Voice Search</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Voice Search</h1>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <input type="text" id="get_response" class="form-control">
        </div>
        <div class="col-md-4">
            <button id="myBtn" class="btn btn-success">Start voice search</button>
        </div>
    </div>
    <div class="row" id="result">

    </div>
</div>

<script src="bootstrap/js/jquery.js"></script>
<script src="js/custom.js"></script>
</body>
</html>