<h1><?php echo $heading ?></h1>

<div id="body">
    <!-- <?php foreach ($messages as $message) { ?>
        <p><?php echo $message ?></p>
    <?php } ?> -->

    <?php foreach ($messages as $message) : ?>
        <p><?php echo $message ?></p>
    <?php endforeach; ?>
</div>