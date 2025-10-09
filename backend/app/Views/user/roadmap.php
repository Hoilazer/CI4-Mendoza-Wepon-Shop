<?= view('components/head', ['title' => 'Road Map']) ?>
<?= view('components/header', ['title' => 'Ahnenerbe']) ?>

<main class="container" style="padding:24px;">
    <section aria-labelledby="planned">
        <h2 id="planned">Planned to implement</h2>
        <div class="roadmap-container">
            <div class="roadmap-card">
                <div class="roadmap-number">1</div>
                <div class="roadmap-content">Customer Service Button</div>
            </div>
            <div class="roadmap-card">
                <div class="roadmap-number">2</div>
                <div class="roadmap-content">Admin Page</div>
            </div>
            <div class="roadmap-card">
                <div class="roadmap-number">3</div>
                <div class="roadmap-content">Item List</div>
            </div>
            <div class="roadmap-card">
                <div class="roadmap-number">4</div>
                <div class="roadmap-content">Accounts</div>
            </div>
            <div class="roadmap-card">
                <div class="roadmap-number">5</div>
                <div class="roadmap-content">Store Page</div>
            </div>
        </div>
    </section>
</main>

<?= view('components/footer') ?>