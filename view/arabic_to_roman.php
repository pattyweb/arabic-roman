<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Convert Arabic to Roman</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Convert Arabic to Roman</h1>
        <form method="post">
            <div class="form-group">
                <label for="arabic">Arabic Number:</label>
                    <input type="number" class="form-control col-sm-6" id="arabic" name="arabic" required>
            </div>
            <button type="submit" class="btn btn-primary">Convert</button>
        </form>
        <?php if (isset($roman)): ?>
            <div class="alert alert-success mt-4">
                <p>Roman Number: <?php echo $roman; ?></p>
            </div>
        <?php endif; ?>
        <a class="btn btn-secondary mt-3" href="home.php">Back to Home</a>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
