<!DOCTYPE html>
<html lang="en">

<head>

    <title><?php echo $title ?></title>
</head>

<body>
    <h2><?php echo $title ?></h2>

    <span style="margin-bottom: 20px; color: green"><?php echo $this->session->flashdata('message') ?></span>

    <form action="<?php echo site_url('auth/register') ?>" method="post">
        <label for="name">Name</label> <br>
        <input type="text" name="name" id="name" placeholder="Input Name" value="<?php echo set_value('name') ?>">
        <?php echo form_error('name', '<span style="color: red">', '</span>') ?>
        <br><br>

        <label for="email">Email</label> <br>
        <input type="text" name="email" id="email" placeholder="Input Email" value="<?php echo set_value('email') ?>">
        <?php echo form_error('email', '<span style="color: red">', '</span>') ?>
        <br><br>

        <label for="password">Password</label> <br>
        <input type="password" name="password" id="password" placeholder="Input Password" value="<?php echo set_value('password') ?>">
        <?php echo form_error('password', '<span style="color: red">', '</span>') ?>
        <br><br>

        <label for="confirm_password">Confirm Password</label> <br>
        <input type="password" name="confirm_password" id="confirm_password" placeholder="Input Password" value="<?php echo set_value('confirm_password') ?>">
        <?php echo form_error('confirm_password', '<span style="color: red">', '</span>') ?>
        <br><br>

        <label for="level">Level</label> <br>
        <select name="level" id="level">
            <option value="admin">Admin</option>
            <option value="ketua">Ketua</option>
            <option value="user">User</option>
        </select> <br><br>

        <button type="submit">Register</button>
    </form>
</body>

</html>