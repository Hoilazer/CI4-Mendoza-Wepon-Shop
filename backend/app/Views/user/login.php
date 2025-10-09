<?= view('components/head', ['title' => 'Login']) ?>
<?= view('components/header', ['title' => 'Ahnenerbe']) ?>

<main class="login-main">
    <img src="https://external-preview.redd.it/tBvxVvgOBnD-kK4AQmQzEM9c5kdaakdcJpX1Yg7ectk.jpg?width=1080&crop=smart&auto=webp&s=13fcc96416e08305571b9ba4183b8054d9dbe384" alt="Background" class="login-bg">

    <div class="login-box">
        <h2>Login</h2>
        <form id="loginForm">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" class="btn btn-blue">LOG</button>
        </form>
    </div>
</main>

<?= view('components/footer') ?>