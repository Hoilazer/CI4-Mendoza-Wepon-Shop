<?php

function primaryButton($btnText, $btnLink, $divClass = '')
{
    $btnHtml = "<button class=\"btn btn-yellow\" onclick=\"location.href='$btnLink'\">$btnText</button>";
    return $divClass ? "<div class=\"$divClass\">$btnHtml</div>" : $btnHtml;
}

function secondaryButton($btnText, $btnLink, $divClass = '')
{
    $btnHtml = "<button class=\"btn btn-blue\" onclick=\"location.href='$btnLink'\">$btnText</button>";
    return $divClass ? "<div class=\"$divClass\">$btnHtml</div>" : $btnHtml;
}
?>

<?= primaryButton('Home', '/', 'top-right') ?>
<?= primaryButton('Login', '/login', 'top-right') ?>
<?= primaryButton('Signup', '/signup', 'top-right') ?>

<?= secondaryButton('Moodboard', '/moodboard', 'bottom-right') ?>
<?= secondaryButton('Roadmap', '/roadmap', 'bottom-right') ?>