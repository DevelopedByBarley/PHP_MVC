<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="/public/style/css/index.css">

    <title>Layout</title>
</head>

<body>
    <?php include 'components/Navbar.php' ?>
    <?php include 'app/views/public/components/Alert.php' ?>
    <?= $params["content"] ?? "" ?>

    <script src="/public/bootstrap/js/bootstrap.js"></script>
</body>

</html>