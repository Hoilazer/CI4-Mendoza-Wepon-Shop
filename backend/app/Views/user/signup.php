<?= view('components/head', ['title' => 'Signup']) ?>
<?= view('components/header', ['title' => 'Ahnenerbe']) ?>

<main class="signup-main">
    <img src="https://media.tenor.com/sSkOoqp4oekAAAAe/neco-arc-neco-arc-destiny.png" alt="Background" class="signup-bg">

    <div class="signup-box">
        <h2>Sign Up</h2>
        <form>
            <input type="text" name="fullname" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="Email Address" required>
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="confirm_password" placeholder="Confirm Password" required>
            <button type="submit" class="btn btn-blue">Create Account</button>
        </form>
        <p>
            Already have an account? <a href="/login" style="color:#007bff; text-decoration:none;">Login here</a>
        </p>
    </div>
</main>

<?= view('components/footer') ?>