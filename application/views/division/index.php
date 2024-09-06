<h1><?php echo $title ?></h1>

<div id="body">
    <a href="<?php echo site_url('division/add') ?>">Add <?php echo $title ?> </a>

    <table border="1" width="30%">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Action</th>
        </tr>

        <?php 
            $no = 1;
            foreach($divisions as $division) : 
        ?>
            <tr align="center">
                <td><?php echo $no++ ?></td>
                <td><?php echo $division->name ?></td>
                <td>
                    <a href="<?php echo site_url('division/edit/' . $division->id) ?>">Edit</a>
                    <a onclick="return confirm('Are you sure want to delete this ?')" href="<?php echo site_url('division/delete/' . $division->id) ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <a href="<?php echo site_url('/') ?>">Back To Home</a>
</div>