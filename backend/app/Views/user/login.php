<?= view('components/head', ['title' => 'Login']) ?>
<?= view('components/header', ['title' => 'Ahnenerbe']) ?>

<main style="flex:1; display:flex; justify-content:center; align-items:center;">
    <div class="box" style="
        background:white;
        padding:20px;
        border-radius:6px;
        width:300px;
        box-shadow:0 0 8px rgba(0,0,0,0.1);
        text-align:center;
    ">
        <h2>Login</h2>
        <form id="loginForm">
            <input type="text" name="username" placeholder="Username" required
                style="width:100%;padding:10px;margin:8px 0;border:1px solid #aaa;border-radius:4px;font-size:14px;">
            <input type="password" name="password" placeholder="Password" required
                style="width:100%;padding:10px;margin:8px 0;border:1px solid #aaa;border-radius:4px;font-size:14px;">
            <button type="submit" class="btn btn-blue" style="width:100%;margin-top:12px;">LOG</button>
        </form>
    </div>
</main>

<?= view('components/footer') ?>