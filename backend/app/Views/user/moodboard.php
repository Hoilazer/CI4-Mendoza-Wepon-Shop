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

        <section id="moodboard-cards">
            <h2 class="title">Cards</h2>
            <div class="moodboard-cards">
                <div class="moodboard-card">
                    <img src="https://i.ytimg.com/vi/BK9a3Ir6iZs/maxresdefault.jpg" class="card-img-semi" alt="Card 1">
                    <p>Snall</p>
                </div>
                <div class="moodboard-card">
                    <img src="https://preview.redd.it/xnooyirve6w21.jpg?auto=webp&s=176c63bc61224f1b16fd9262ad434e15f66d17ed" class="card-img-full" alt="Card 2">
                    <p>Semi</p>
                </div>
                <div class="moodboard-card">
                    <img src="https://preview.redd.it/damm-why-is-this-cat-so-cute-v0-ixteige4pq3a1.jpg?width=1080&crop=smart&auto=webp&s=d8ed36f41d146307d6ee8ccf98924cd3ae390887" class="card-img-whole" alt="Card 3">
                    <p>Full</p>
                </div>
            </div>
        </section>

        <section id="logos">
            <h2 class="title">Logos</h2>
            <div class="logo-container">
                <div class="logo-circle">
                    <img src="https://media.tenor.com/SR6-Ok4MJZ8AAAAe/neco-arc-gun.png" alt="Logo 1">
                </div>
                <div class="logo-square">
                    <img src="https://i.pinimg.com/236x/2a/28/70/2a2870d8210860e7580475a758ae3e2f.jpg" alt="Logo 2">
                </div>
                <div class="logo-circle">
                    <img src="https://i.pinimg.com/236x/33/12/e3/3312e3b7f441afcf8b861d125823c49b.jpg" alt="Logo 3">
                </div>
            </div>
        </section>

</main>

<?= view('components/footer') ?>