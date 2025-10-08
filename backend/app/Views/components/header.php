<?php
$title = $title ?? 'Ahnenerbe';
?>
<header role="banner" aria-label="Site Header">
    <div class="header-title"><?= esc($title) ?></div>

    <div class="logo-box" role="img" aria-label="Logo" onclick="location.href='/'" style="cursor:pointer;">
        <img src="https://media.tenor.com/SR6-Ok4MJZ8AAAAe/neco-arc-gun.png" alt="Logo">
    </div>

    <!-- Reference buttons in another folder -->
    <?= view('components/button') ?>
</header>