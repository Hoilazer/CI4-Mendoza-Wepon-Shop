<?= view('components/head', ['title' => 'Signup']) ?>
<?= view('components/header', ['title' => 'Ahnenerbe']) ?>

<main style="flex:1; display:flex; justify-content:center; align-items:center; height:100vh; margin:0;">
    <div class="box" style="
        background:white;
        padding:20px 30px;
        border-radius:8px;
        width:320px;
        box-shadow:0 0 10px rgba(0,0,0,0.1);
        text-align:center;
    ">
        <h2>Sign Up</h2>
        <form>
            <input type="text" name="fullname" placeholder="Full Name" required
                style="width:100%;padding:10px;margin:8px 0;border:1px solid #ccc;border-radius:6px;font-size:14px;">
            <input type="email" name="email" placeholder="Email Address" required
                style="width:100%;padding:10px;margin:8px 0;border:1px solid #ccc;border-radius:6px;font-size:14px;">
            <input type="text" name="username" placeholder="Username" required
                style="width:100%;padding:10px;margin:8px 0;border:1px solid #ccc;border-radius:6px;font-size:14px;">
            <input type="password" name="password" placeholder="Password" required
                style="width:100%;padding:10px;margin:8px 0;border:1px solid #ccc;border-radius:6px;font-size:14px;">
            <input type="password" name="confirm_password" placeholder="Confirm Password" required
                style="width:100%;padding:10px;margin:8px 0;border:1px solid #ccc;border-radius:6px;font-size:14px;">
            <button type="submit" style="
                width:100%;
                padding:10px;
                background:#007bff;
                color:white;
                border:none;
                border-radius:6px;
                font-size:16px;
                font-weight:bold;
                cursor:pointer;
                margin-top:10px;
                transition:background 0.3s ease;
            ">Create Account</button>
        </form>
        <p style="margin-top:15px;font-size:14px;">
            Already have an account? <a href="/login" style="color:#007bff;text-decoration:none;">Login here</a>
        </p>
    </div>
</main>

<?= view('components/footer') ?>