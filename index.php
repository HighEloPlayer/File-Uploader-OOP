<?php
include "retrieve.php";
$success = $_GET['success'] ?? null;
$error = $_GET['error'] ?? null;
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<title>Registrations</title>
</head>
<body>
    <div class="container-sm">
        <?php if (!is_null($success)): ?>
            <div class="alert alert-success" role="alert">
                Successfully saved
            </div>
            <?php endif ?>
            
            <?php if (!is_null($error)): ?>
                <div class="alert alert-danger" role="alert">
                    Failed registration
                </div>
                <?php endif ?>
                    <h2><b>Registrations</b></h2>
                    <form method="POST" action="register.php">
                    <button class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Add New Registration</span></a>
                    </form>
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Complete Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Picture</th>
                    <th scope="col">Registered Date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $retrieve = new Retrieve;
                $retrieveData = $retrieve->retrieveData();
                foreach($retrieveData as $data){
                    ?>
                    <tr>
                        <th scope="row"><?php echo $data['id']?></th>
                        <td><?php echo $data['complete_name']?></td>
                        <td><?php echo $data['email']?></td>
                        <td><?php echo "<img width=200x; height=200x; src=" . $data['picture_path'] . ">";?></td>
                        <td><?php echo $data['registered_at']?></td>
                    </tr>
                    <?php } ?>				
                </tbody>
            </table>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>