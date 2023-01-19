<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Registration Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Registration Form</h2>
    <div class="">
        <form class="register" action="/action_page.php" method="POST" enctype="multipart/form-data" action="upload-handler.php">
            <div class="col-12">
                <label for="input_name" class="col-sm-2 col-form-label">Complete Name</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="name">
                </div>
            </div>

            <div class="col-12">
                <label for="input_email" class="col-sm-2 col-form-label">Email Address</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="email">
                </div>
            </div>

            <div class="col-12">
                <label for="input_Password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-4">
                    <input type="password" class="form-control" id="inputPassword">
                </div>
            </div>

            <div class="col-12">
                <label for="input_CPassword" class="col-sm-2 col-form-label">Confirm Password</label>
                <div class="col-sm-4">
                    <input type="password" class="form-control" id="inputPassword">
                </div>
            </div>

            <div class="col-12">
                <label for="input_picture" class="col-sm-2 col-form-label">Picture</label>
                <div class="col-sm-4">
                    <input type="file" class="form-control" id="picture">
                </div>
            </div>

            <button type="button" class="btn btn-outline-dark" style="margin-left:900px;">Submit</button>
            
        </form> 
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>