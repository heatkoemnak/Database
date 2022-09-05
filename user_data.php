<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container m-5">
        <form method="post" action="display.php">
            <div class="form-group1">
                <label>Name</label>
                <input type="text" class="form-control" name="name"placeholder="Enter your name">
            </div>
            <div class="form-group2">
                <label>Email</label>
                <input type="text" class="form-control" name="email"placeholder="Enter your email">
            </div>
            <div class="form-group3">
                <label>Mobile</label>
                <input type="text" class="form-control" name="mobile"placeholder="Enter your mobile number">
            </div>
            <div class="form-group4">
                <label>Gender</label>
                <input type="text" class="form-control" name="sex"placeholder="Enter your password">
            </div>
            <button type="submit" class="btn btn-primary m-5" name="submit">Submit</button>
        </form>

    </div>

</body>
</html>