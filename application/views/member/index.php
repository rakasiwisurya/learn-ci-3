<h1><?php echo $title ?></h1>

<div id="body">
    <a href="<?php echo site_url('member/add') ?>">Add <?php echo $title ?> </a>
    <a href="<?php echo site_url('auth/logout') ?>">Logout</a>

    <table border="1" width="50%">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Position</th>
            <th>Action</th>
        </tr>

        <?php
        $no = 1;
        foreach ($members as $member) :
        ?>
            <tr align="center">
                <td><?php echo $no++ ?></td>
                <td><?php echo $member->name ?></td>
                <td><?php echo $member->email ?></td>
                <td><?php echo $member->position ?></td>
                <td>
                    <a href="<?php echo site_url('member/edit/' . $member->id) ?>">Edit</a>
                    <a onclick="return confirm('Are you sure want to delete this ?')" href="<?php echo site_url('member/delete/' . $member->id) ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <a href="<?php echo site_url('/') ?>">Back To Home</a>
</div>