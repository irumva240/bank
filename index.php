<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E‑Banking</title>
    <style>/* Reset and Base Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body {
    font-family: Arial, sans-serif;
    color: #333;
    line-height: 1.6;
    background color:#80ade4ff;
}

/* Header */
header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #003366; /* Deep banking blue */
    padding: 1rem 2rem;
}
.logo {
    color: white;
    font-weight: bold;
    font-size: 1.5rem;
}
nav ul {
    list-style: none;
    display: flex;
    gap: 1rem;

}
nav a {
    color: white;
    text-decoration: none;
    padding: 0.5rem 0.8rem;
    transition: background-color 0.3s;
    margin-bottom:400px;
}
nav a:hover {
    background-color: #0055aa;
    border-radius: 4px;
}
.btn-login {
    background-color: #ffcc00;
    color: #003366;
    border-radius: 4px;
}
.btn-login:hover {
    background-color: #e6b800;
}

/* Hero Section */

.hero {
    height: 100vh; /* full viewport height */
    background-image: url('new.jpg');
    background-size: cover;       /* makes image cover the area */
    background-position: center;  /* centers the image */
    background-repeat: no-repeat; /* prevents tiling */
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
}

/* Optional dark overlay for better text contrast */
.hero::after {
    content: '';
    position: relative;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background-color: rgba(0,0,0,0.4);
}

.hero-text {
    position: absolute; /* above the overlay */
    color: #f1f4f7ff;
    text-align: center;
    z-index: 1;
    
}
.hero-text h1 {
    font-size: 3rem;
    margin-bottom: 0.5rem;
}
.hero-text p {
    font-size: 1.2rem;
}

/* Main Content */
main {
    padding: 2rem;
}
main h2 {
    color: #003366;
    margin-bottom: 0.5rem;
}
main p {
    margin-bottom: 2rem;
}
/* Login Section */
.login-section {
    padding: 2rem;
    background-color: #80ade4ff;
    text-align: center;
}

.login-section h2 {
    color: #003366;
    margin-bottom: 1rem;
}

.login-form {
    max-width: 600px;
    margin: auto;
    display: flex;
    flex-direction: column;
    gap: 0.8rem;
    background:  #337bd3ff;
    padding: 1.5rem;
    border-radius: 8px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
}

.login-form label {
    font-weight: bold;
    text-align: left;
    color: #333;
}

.login-form input {
    padding: 0.5rem;
    font-size: 1rem;
    border: 1px solid #1a0661ff;
    border-radius: 4px;
}

.login-form button {
    background-color: #74aaecff;
    color: #12063fff;
    border: none;
    padding: 0.7rem;
    font-size: 1rem;
    border-radius: 4px;
    cursor: pointer;
}

.login-form button:hover {
    background-color: #064c92ff;
}
main{
    
    background-color:#80ade4ff;

}

/* Footer */
footer {
    background-color: #003366;
    color: white;
    text-align: center;
    padding: 1rem 0;
   
}
</style>
</head>
<body>

    <!-- HEADER -->
    <header>
        <div class="logo"><img src="images/logo.jpg"alt="E_Banking"></div>
        <br>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="http://localhost/a%20new/service.php">Services</a></li>
                <li><a href="http://localhost/a%20new/account.php">Accounts</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="#login" class="btn-login">Login</a></li>
            </ul>
        </nav>
    </header>

    <!-- HERO SECTION -->
    <section class="hero" id="home">
        <div class="hero-text">
            <h1>Welcome to E‑Banking</h1>
            <p>Secure • Fast • Anytime, Anywhere</p>
        </div>
    </section>
     <!-- LOGIN FORM -->
    <section class="login-section" id="login">
        <h2>Member Login</h2>
        <form class="login-form">
            <label for="accountNumber">Account Number</label>
            <input type="text" id="accountNumber" name="accountNumber" required>

            <label for="userId">ID Number</label>
            <input type="text" id="userId" name="userId" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
        </form>
    </section>

    <!-- CONTENT -->
    <main>
        <section id="services">
            <h2>Our Services</h2>
            <p>From savings accounts to online bill payments, we’ve got everything you need to manage your money securely.</p>
        </section>

        <section id="accounts">
            <h2>Open an Account</h2>
            <p>Join us today and enjoy the convenience of banking from your phone or computer.</p>
        </section>
    </main>

    <!-- FOOTER -->
    <footer>
        <p>&copy; 2025 E‑Bank. All rights reserved.</p>
    </footer>

</body>
</html>
