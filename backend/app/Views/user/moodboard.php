<?= view('components/head', ['title' => 'Mood Board']) ?>
<?= view('components/header', ['title' => 'Ahnenerbe']) ?>

<main class="container" style="padding:24px;">
    <div class="page-title">Mood Board</div>
    <div class="page-desc">Vision plan for Ahnenerbe (Weapon Shop)</div>
    <div class="top-row">
        <section id="color-system">
            <h2 class="title">Color System</h2>
            <div class="container">
                <div class="box yellow">Yellow</div>
                <div class="box purple">Purple</div>
                <div class="box blue">Blue</div>
            </div>
        </section>

        <section aria-labelledby="typography">
            <h2 id="typography" class="title">Typography</h2>
            <div class="typography-sample classic-sans">Classic Sans: This is a Text</div>
            <div class="typography-sample roman">Roman: This is a Text</div>
        </section>

        <div class="button-container">
            <?= button('Primary', '/moodboard', 'primary') ?>
            <?= button('Secondary', '/roadmap', 'secondary') ?>
            <?= button('Tertiary', '/moodboard', 'tertiary') ?>
            <?= button('Disabled', '/roadmap', 'disabled') ?>
        </div>
        </section>

        <section aria-labelledby="cards">
            <h2 id="cards" class="title">Card Sample</h2>
            <div class="card-container">
                <div class="card">
                    <img src="https://i.pinimg.com/736x/f1/0f/f7/f10ff70a7155e5ab666bcdd1b45b726d.jpg" alt="Card 1" class="card-img">
                    <p>"Wow the weapon is so great!"</p>
                </div>
                <div class="card">
                    <img src="https://www.tmdict.com/legacy/src/img/baa_neco-arc-chaos_w.png" alt="Card 2" class="card-img">
                    <p>"Beams are unisex"</p>
                </div>
                <div class="card">
                    <img src="https://i.ytimg.com/vi/e8kiBbpPQUE/mqdefault.jpg" alt="Card 3" class="card-img">
                    <p>"This is a cat cafe not a fighting place"</p>
                </div>
            </div>
        </section>

        <section aria-labelledby="logos">
            <h2 id="logos" class="title">Logos</h2>
            <div class="logo-container">
                <div class="logo-circle"><img src="https://media.tenor.com/SR6-Ok4MJZ8AAAAe/neco-arc-gun.png" alt="Logo 1"></div>
                <div class="logo-circle"><img src="https://i.pinimg.com/236x/2a/28/70/2a2870d8210860e7580475a758ae3e2f.jpg" alt="Logo 2"></div>
                <div class="logo-circle"><img src="https://i.pinimg.com/236x/33/12/e3/3312e3b7f441afcf8b861d125823c49b.jpg" alt="Logo 3"></div>
            </div>
        </section>
</main>

<?= view('components/footer') ?>