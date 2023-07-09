<?php
include "conn.php";
if (isset($_POST['save'])) {

    $name = $_POST['name'];
    $contect = $_POST['contect'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // $password = md5($_POST['password']);
    $hash = sha1($password, PASSWORD_DEFAULT);
    $sql = "insert into details(name,contect,gender,city,email,password)values('$name','$contect','$gender','$city','$email','$hash')";
    $res = mysqli_query($conn, $sql);
    if ($res == true) {
        echo "Yes";
    } else {
        echo "no";
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>insert Data</title>
</head>

<body>
    <div class="container">
        <form action="" method="post" onsubmit="return validation()">
            <div class="mb-3">
                <label for="name" class="form-label">name</label>
                <input type="text" class="form-control" name="name" id="name" autocomplete="off">
                <span id="username" class="text-danger"> </span>
            </div>
            <div class="mb-3">
                <label for="contect" class="form-label">contect</label>
                <input type="number" class="form-control" name="contect" id="contect" autocomplete="off">
            </div>

            male : <input class="form-check-input" type="radio" name="gender" value="male" id="gender"
                autocomplete="off" checked>
            female : <input class="form-check-input" type="radio" name="gender" value="female" id="gender"
                autocomplete="off" checked>
            other : <input class="form-check-input" type="radio" name="gender" value="other" id="gender"
                autocomplete="off" checked>
            <br>
            <div class="mb-3">
                <label for="city" class="form-label">city</label>
                <input type="text" class="form-control" name="city" id="city" autocomplete="off">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" autocomplete="off">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">password</label>
                <input type="text" class="form-control" name="password" id="password" autocomplete="off">
            </div>
            <button type="submit" class="btn btn-primary" name="save" value="submit">submit</button>
            <a href="read.php"><input type="button" name="" value="Check Data" 
                    class="btn btn-warning"></a>
        </form>
    </div>
    <script src="validation.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>