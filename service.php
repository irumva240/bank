<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E‑Banking Services</title>
    <style>/* Base Reset */
* { margin: 0; padding: 0; box-sizing: border-box; }
body { 
    font-family: Arial, sans-serif;
     color: #333;
   ;}

/* Header/Nav */
header {
    background-color: #003366;
    color: white;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem 2rem;
}
.logo { font-weight: bold; font-size: 1.5rem; }
nav ul { list-style: none; display: flex; gap: 1rem; }
nav a {
    color: white;
    text-decoration: none;
    padding: 0.5rem 0.8rem;
}
nav a:hover, nav a.active { background-color: #0055aa; border-radius: 4px; }
.btn-login { background-color: #ffcc00; color: #003366; border-radius: 4px; }
.btn-login:hover { background-color: #e6b800; }

/* Hero Section */
.hero {
    background: url('images/he.jpg') no-repeat center center/cover;
     background-color:light blue;
    height: 40vh;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
}
.hero::after {
    content: '';
    position: absolute;
    inset: 0;
    background-color: rgba(0,0,0,0.4);
}
.hero-text {
    color: white;
    text-align: center;
    position: relative;
    z-index: 1;
}

/* Service Sections */
.service {
    padding: 2rem;
    max-width: 900px;
    margin: auto;
    border-bottom: 1px solid #ddd;
}
.service h2 { color: #003366; margin-bottom: 0.5rem; }
.service p { margin-bottom: 1rem; }
main{
    background-color: #80ade4ff;
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

    <!-- HEADER / NAVIGATION -->
    <header>
        <div class="logo"><img src="images/logo.jpg"alt="E_Banking"></div>
        <nav>
            <ul>
                <li><a href="http://localhost/a%20new/#home">Home</a></li>
                <li><a href="services.html" class="active">Services</a></li>
                <li><a href="#loans">Loans</a></li>
                <li><a href="#investments">Investments</a></li>
                <li><a href="#support">Support</a></li>
                <li><a href="http://localhost/a%20new/#login" class="btn-login">Login</a></li>
            </ul>
        </nav>
    </header>

    <!-- HERO -->
    <section class="hero">
        <div class="hero-text">
            <h1>Our Services</h1>
            <p>Everything you need to manage your finances in one place</p>
        </div>
    </section>

    <!-- SERVICE SECTIONS -->
    <main>
        <section id="loans" class="service">
    <h2>Loans</h2>
    <img src="images/lo.jpg" alt="Loan services illustration">
    <p>Personal, business, and home loans with competitive rates and flexible repayment options.</p>
</section>

<section id="investments" class="service">
    <h2>Investments</h2>
    <img src="images/inv.jpg" alt="Investment services illustration">
    <p>Grow your wealth with our secure investment plans tailored to your goals.</p>
</section>

<section id="support" class="service">
    <h2>Customer Support</h2>
    <img src="images/ser.jpg" alt="Customer support team">
    <p>24/7 support to assist you with any queries about your account or transactions.</p>
</section>
    </main>

    <!-- FOOTER -->
    <footer>
        <p>&copy; 2025 E‑Bank. All rights reserved.</p>
    </footer>

</body>
</html>
