<?php
include "php/read.php";
include "db_conn.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>

    <title>View Data</title>
</head>

<body>

    <div class="container" style="margin-top: 10px">
        <?php if (isset($_GET['success'])) { ?>
            <div class="alert alert-success">
                <?php echo "User added !" ?>
            </div>

        <?php } ?>



        <?php if (mysqli_num_rows($data) == 0) { ?>
            <div class="alert alert-info">No records to show</div>
        <?php } else { ?>
            <div class="box">
                <div class="alert alert-info">
                    Showing <strong>
                        <?php echo mysqli_num_rows($data) ?>
                    </strong> records
                </div>
                <h4>Records </h4>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Age</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // print_r(mysqli_fetch_assoc($data));
                        if (mysqli_num_rows($data) > 0)
                            while ($data_row = mysqli_fetch_assoc($data)) {
                                // foreach ($record as $records) {
                                ?>
                                <tr>
                                    <th>
                                        <?= $data_row['id'] ?>
                                    </th>
                                    <td>
                                        <?= $data_row['name'] ?>
                                    </td>
                                    <td>
                                        <?= $data_row['email'] ?>
                                    </td>
                                    <td>
                                        <?= $data_row['age'] ?>
                                    </td>
                                    <td>
                                        <a href="update.php?id=<?= $data_row['id'] ?>" class="btn btn-success">Update</a>
                                        <a href="php/delete.php?id=<?= $data_row['id'] ?>" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            <?php } ?>
                    </tbody>
                </table>

            <?php } ?>
            <a href="index.php" class="btn btn-success">Add User</a>
        </div>
    </div>
</body>

</html>