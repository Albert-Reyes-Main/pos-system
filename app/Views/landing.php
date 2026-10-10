<?= helper('url') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS System</title>
</head>
<body>

    <nav>
        <a href="<?= site_url('/') ?>">Home</a> |
        <a href="<?= site_url('about') ?>">About</a> |
        <a href="<?= site_url('customers') ?>">Customer Accounts</a> |
        <a href="<?= site_url('users') ?>">User Accounts</a>
    </nav>

    <hr>

    <h1>Point of Sale System</h1>

    <p>Welcome to the basic Point-of-Sale system.</p>

    <p>
        This application demonstrates CodeIgniter routing, controllers,
        views, navigation, and static PHP arrays.
    </p>

</body>
</html>