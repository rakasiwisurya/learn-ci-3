<!DOCTYPE html>
<html lang="en">

<head>

    <title><?php echo $title ?></title>
</head>

<body>
    <h2><?php echo $title ?></h2>

    <span style="margin-bottom: 20px; color: red"><?php echo $this->session->flashdata('message') ?></span>

    <form action="<?php echo site_url('auth/sign_in') ?>" method="post">
        <label for="email">Email</label> <br>
        <input type="text" name="email" id="email" placeholder="Input Email" value="<?php echo set_value('email') ?>">
        <?php echo form_error('email', '<span style="color: red">', '</span>') ?>
        <br><br>

        <label for="password">Password</label> <br>
        <input type="password" name="password" id="password" placeholder="Input Password" value="<?php echo set_value('password') ?>">
        <?php echo form_error('password', '<span style="color: red">', '</span>') ?>
        <br><br>

        <button type="submit">Login</button>
    </form>
</body>

</html>