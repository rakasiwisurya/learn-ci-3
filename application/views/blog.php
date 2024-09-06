<h1><?php echo $heading ?></h1>

<div id="body">
    <p>
        <a href="<?php echo site_url('member') ?>">Go To Member Master</a>
    </p>

    <p>
        <a href="<?php echo site_url('division') ?>">Go To Division Master</a>
    </p>

    <?php foreach ($messages as $message) : ?>
        <p><?php echo $message ?></p>
    <?php endforeach; ?>
</div>