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
    <?php include 'app/views/public/components/Alert.php' ?>

    <div class="container" style="margin-top: 90px;">
        <div class="row">
            <div class="col d-flex align-items-center justify-content-center flex-column" style="min-height: 79vh">
                <?= $params["content"] ?? "" ?>
            </div>
        </div>
    </div>
</body>

</html>