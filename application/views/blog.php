<h1><?php echo $heading ?></h1>

<div id="body">
    <p>
        <a href="<?php echo site_url('member') ?>">Go To Member</a>
    </p>

    <?php foreach ($messages as $message) : ?>
        <p><?php echo $message ?></p>
    <?php endforeach; ?>
</div>