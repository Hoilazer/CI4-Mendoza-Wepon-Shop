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

    <div class="header-left" role="img" aria-label="Logo" onclick="location.href='/'" style="cursor:pointer;">
        <div class="logo-box">
            <img src="https://media.tenor.com/SR6-Ok4MJZ8AAAAe/neco-arc-gun.png" alt="Logo">
        </div>
    </div>
</header>