<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
    <!-- Form -->
    <form method="post" action="">
        Firstname: <input type="text" name="firstname">
        Lastname: <input type="text" name="lastname">
        <button type="submit">Submit</button>
    </form>

    <!-- Display welcome message -->
    <h3>
        <?php echo "Hello " . $_POST['firstname'] . " " . $_POST['lastname'] . ", You are welcome to my site."; ?>
    </h3>

</body>
</html>
