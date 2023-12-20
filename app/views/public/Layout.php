<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/bootstrap/css/bootstrap.css" />

    <script src="/public/bootstrap/js/bootstrap.js"></script>
    <title>Layout</title>
</head>

<body>
    <?php include 'components/Navbar.php' ?>
    <?php include 'app/views/public/components/Alert.php' ?>
    <?= $params["content"] ?? "" ?>

</body>
 
</html>