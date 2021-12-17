<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container d-flex flex-column align-content-center">
        <h1 class="mt-3 mb-3">Info about <?php echo $_GET['movieName']; ?>
        </h1>
        <p>Based on the input this is the information so far</p>
        <p>
            <?php
            echo '<strong>' . $_GET['movieStar'] . '</strong>' . " starred in the movie <strong>" . $_GET['movieName'] . "</strong> which was released in year <strong> " . $_GET['movieYear'] . "</strong>";
            ?>
        </p>
    </div>
</body>

</html>