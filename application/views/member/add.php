<h1><?php echo $title ?></h1>

<div id="body">
    <a href="<?php echo site_url('member') ?>">Back</a>

    <form action="<?php echo site_url('member/save') ?>" method="post">
        <input type="text" name="name" placeholder="Input Name" required>
        <input type="email" name="email" placeholder="Input Email" required>
        <input type="text" name="position" placeholder="Input Position" required>

        <button type="submit">Save</button>
    </form>
</div>