<?php
$title = $title ?? 'Ahnenerbe';
?>
<header role="banner" aria-label="Site Header">
    <?php include APPPATH . 'Views/components/button.php'; ?>

    <!-- Top-right buttons -->
    <div class="top-right">
        <?= button('Home', '/', 'primary') ?>
        <?= button('Login', '/login', 'primary') ?>
        <?= button('Signup', '/signup', 'primary') ?>
    </div>


    <div class="header-title"><?= esc($title) ?></div>

    <div class="header-left" role="img" aria-label="Logo">
        <div class="logo-box">
            <img src="https://preview.redd.it/ive-just-found-this-neco-arc-modified-bear-edit-i-love-it-v0-iqqwz407849b1.jpg?auto=webp&s=3a40451577e8379008647cb3bf39c9dd286bcf75" alt="Logo">
        </div>
    </div>
</header>