<?= view('components/head', ['title' => 'Ahnenerbe']) ?>
<?= view('components/header', ['title' => 'Ahnenerbe']) ?>

<main>
    <div class="top-left-image" role="region" aria-label="Hero">
        <img src="https://preview.redd.it/when-was-neco-arc-born-at-all-or-was-neco-arc-never-born-v0-c4bko2tbm8mb1.jpg?width=1080&crop=smart&auto=webp&s=3b4ae8d597888a8c7c8138475e3beb17cde43394" alt="Top Left Image">
        <?= view('components/cta') ?>
        <?= button('Shop Now', '#', 'primary') ?>
    </div>

    <div class="landing-cards-container">
        <div class="landing-card">
            <img src="https://media.tenor.com/al3X7SNw4AwAAAAe/minigun-neko-arc.png" alt="Boom Boom Cat">
            <p>Guns</p>
            <?= button('Buy', '#', 'primary') ?>
        </div>
        <div class="landing-card">
            <img src="https://i.pinimg.com/236x/22/40/08/224008b647e5f9ac8a158df7063b130d.jpg" alt="Knife">
            <p>Knives</p>
            <?= button('Buy', '#', 'primary') ?>
        </div>
        <div class="landing-card">
            <img src="https://media.sketchfab.com/models/44a0493543164d25b75e31f55465c6ef/thumbnails/c57848b2be2447d0a5fc329562f3798f/66c6612107e74080971cafc1cb3ebbb6.jpeg" alt="Gun">
            <p>Vehicles</p>
            <?= button('Buy', '#', 'primary') ?>
        </div>
    </div>

</main>

<?= view('components/footer') ?>