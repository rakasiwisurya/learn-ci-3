<!DOCTYPE html>
<html lang="en">

<head>

    <title><?php echo $title ?></title>
</head>

<body>
    <h2><?php echo $title ?></h2>

    <span style="margin-bottom: 20px; color: green"><?php echo $this->session->flashdata('message') ?></span>

    <form action="<?php echo site_url('auth/register') ?>" method="post">
        <label for="name"></label> <br>
        <input type="text" name="name" id="name" placeholder="Input Name" required> <br><br>

        <label for="email"></label> <br>
        <input type="email" name="email" id="email" placeholder="Input Email" required> <br><br>

        <label for="password"></label> <br>
        <input type="password" name="password" id="password" placeholder="Input Password" required> <br><br>

        <label for="level">Level</label> <br>
        <select name="level" id="level" required>
            <option value="admin">Admin</option>
            <option value="ketua">Ketua</option>
            <option value="user">User</option>
        </select> <br><br>

        <button type="submit">Register</button>
    </form>
</body>

</html>