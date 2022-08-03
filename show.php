<!DOCTYPE html>
<html lang="en">

<head>
    <title>Show Database</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mt-3">
        <h2>Employee Details</h2>
        <table class="table table-bordered">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Degree</th>
                <th>Language</th>
                <th>Images</th>
                </tr>
            </thead>
            <tbody>
                <?php

                include 'db.php';
                  $selectquery = "SELECT * FROM registration";
                  $query = mysqli_query($conn, $selectquery) or('result query faild');
                  
                  while($result = mysqli_fetch_array($query))
                  {                      
                     ?>
                <tr>
                    <td><?php echo $result['id']; ?></td>
                    <td><?php echo $result['username']; ?></td>
                    <td><?php echo $result['email']; ?></td>
                    <td><?php echo $result['degree']; ?></td>
                    <td><?php echo $result['language']; ?></td>
                    <td><img src="<?php echo $result['pic']; ?>" width="70" height="60"></td>
                </tr>
                <?php
                }              

                ?>

            </tbody>
        </table>
    </div>

</body>

</html>
