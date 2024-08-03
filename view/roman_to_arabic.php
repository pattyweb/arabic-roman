<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Convert Roman to Arabic</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Convert Roman to Arabic</h1>
        <form method="post">
            <div class="form-group">
                <label for="roman">Roman Number:</label>
                <input type="text" class="form-control col-sm-6" id="roman" name="roman" required>
            </div>
            <button type="submit" class="btn btn-primary">Convert</button>
        </form>
        <?php if (isset($arabic)): ?>
            <div class="alert alert-success mt-4">
                <p>Arabic Number: <?php echo $arabic; ?></p>
            </div>
        <?php endif; ?>
        <?php if (isset($error)): ?>
            <div class="alert alert-danger mt-4">
                <p><?php echo $error; ?></p>
            </div>
        <?php endif; ?>
        <a class="btn btn-secondary mt-3" href="home.php">Back to Home</a>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.getElementById('roman').addEventListener('input', function (e) {
            const invalidChars = /[^IVXLCDM]/gi;
            if (invalidChars.test(e.target.value)) {
                e.target.value = e.target.value.replace(invalidChars, '');
                alert('Please enter only valid Roman numeral characters (I, V, X, L, C, D, M).');
            }
        });
    </script>
</body>
</html>
