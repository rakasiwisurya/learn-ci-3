<h1><?php echo $title ?></h1>

<div id="body">
    <a href="<?php echo site_url('member') ?>">Back</a>

    <form action="<?php echo site_url('member/update') ?>" method="post">
        <input type="hidden" name="id" value="<?php echo $member->id ?>" required>
        <input type="text" name="name" placeholder="Input Name" value="<?php echo $member->name ?>" required>
        <input type="email" name="email" placeholder="Input Email" value="<?php echo $member->email ?>" required>
        <input type="text" name="position" placeholder="Input Position" value="<?php echo $member->position ?>" required>

        <button type="submit">Update</button>
    </form>
</div>