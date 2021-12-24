<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?php echo ($title ?? '(no title)'); ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="/">Reviewing PHP</a>
        <div class="collapse navbar-collapse show">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/profile">Profile</a>
                </li>
            </ul>
        </div>
    </nav>
    <main class="container">
        <?php if (isset($content)) {
            echo $content;
        } else { ?>
            <div class="jumbotron">
                <h1 class="display-4">Hello, PHP!</h1>
                <p class="lead">This is the main layout, loaded from <code><?php echo __DIR__ . '/main.php'; ?></code></p>
                <div class="alert alert-warning">
                    No content was provided for main layout.
                </div>
            </div>
        <?php } ?>
    </main>
</body>

</html>