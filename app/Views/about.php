<?= helper('url') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
</head>
<body>

    <nav>
        <a href="<?= site_url('/') ?>">Home</a> |
        <a href="<?= site_url('about') ?>">About</a> |
        <a href="<?= site_url('customers') ?>">Customer Accounts</a> |
        <a href="<?= site_url('users') ?>">User Accounts</a>
    </nav>

    <hr>

    <h1>About the POS System</h1>

    <p>
        This is a basic Point-of-Sale system developed using CodeIgniter 4.
    </p>

    <p>
        The project uses the Model-View-Controller architecture.
        Customer and staff information currently comes from static PHP arrays.
    </p>

</body>
</html>