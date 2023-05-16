<?php include 'app/view/common/header.php'; ?>

<?php if (!empty($message)) : ?>
<div class="message">
    <p><?= $message ?></p>
</div>
<?php endif ?>

<?= $content ?>

<?php include 'app/view/common/footer.php'; ?>