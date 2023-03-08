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
    <div class="container">
        <div class="row">
            <div class="col p-5 bg-dark">
                <h1 class="greetings text-center mt-5 text-light">
                   Welcome to MVC MODEL 1.0.0
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <?= $params["content"] ?? "" ?>
            </div>
        </div>
    </div>
</body>

</html>