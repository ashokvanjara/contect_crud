<?php
$con = mysqli_connect('localhost', 'root', '', 'contect');
$res = mysqli_query($con, "select * from details");
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Check Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">
</head>

<body>
    <div class="container" style="margin-top:50px;">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>contect</th>
                    <th>gender</th>
                    <th>City</th>
                    <th>Email</th>
                    <th>password</th>
                    <th>Date</th>
                    <th>delete</th>
                    <th>update</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($res)) { ?>
                    <tr>
                        <td>
                            <?php echo $row['id'] ?>
                        </td>
                        <td>
                            <?php echo $row['name'] ?>
                        </td>
                        <td>
                            <?php echo $row['contect'] ?>
                        </td>
                        <td>
                            <?php echo $row['gender'] ?>
                        </td>
                        <td>
                            <?php echo $row['city'] ?>
                        </td>
                        <td>
                            <?php echo $row['email'] ?>
                        </td>
                        <td>
                            <?php echo $row['password'] ?>
                        </td>
                        <td>
                            <?php echo $row['date'] ?>
                        </td>
                        <td>
                            <a href="delete.php?id=<?php echo $row['id']; ?>"><input type="button" name="" value="Delete"
                                    class="btn btn-primary"></a>
                        </td>
                        <td>
                            <a href="update.php?id=<?php echo $row['id']; ?>"><input type="button" name="" value="update"
                                    class="btn btn-primary"></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>

        </table>
        <a href="Home.php"><input type="button" name="" value="Go back" class="btn btn-warning"></a>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.table').DataTable();
        });
    </script>
</body>

</html>