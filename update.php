<?php include "php/update.php" ?>
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
    <title>Update Data</title>
</head>

<body>
    <div class="container">
        <form method="POST" action="php/update.php">
            <h4>Update Data</h4>
            <?php if (isset($_GET['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $_GET['error']; ?>
                </div>
            <?php } ?>
            <div class="mb-3">

                <!-- <label class="form-label" for="id">ID</label> -->

                <input type="text" class="form-control" id="id" name="id" value="<?= $res_data['id'] ?>" hidden>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?= $res_data['name'] ?>">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= $res_data['email'] ?>">
            </div>

            <div class="mb-3">

                <label class="form-label" for="">Age</label>
                <input type="text" class="form-control" id="age" name="age" value="<?= $res_data['age'] ?>">
            </div>

            <button type="submit" class="btn btn-success" name="edit">update</button>
            <a href="read.php" class="btn btn-primary">View</a>

        </form>

    </div>
</body>

</html>