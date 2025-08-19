<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Our Staff</title>
  <style>body {
  font-family: Arial, sans-serif;
  background-color:#80ade4ff ;
  margin: 0;
  padding: 20px;
}
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


h1 {
  text-align: center;
  color: #003366;
}

.intro {
  text-align: center;
  max-width: 600px;
  margin: 0 auto 30px;
  color: #555;
  font-size: 1.1rem;
}

.staff-container {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
  justify-content: center;
}

.staff-card {
  background-color:#003366;
  border-radius: 10px;
  width: 250px;
  padding: 15px;
  box-shadow: 0 2px 8px rgba(0,0,0,0.1);
  text-align: center;
}

.staff-card img {
  width: 100%;
  height: auto;
  border-radius: 8px;
}

.staff-card h2 {
  margin: 10px 0 5px;
  color: whitesmoke;
}

.staff-card p {
  margin: 5px 0;
  color: whitesmoke;
}

blockquote {
  font-style: italic;
  color:whitesmoke;
  margin: 10px 0 0;
}
main{
  background-color:  #80ade4ff;
}
footer {
    background-color: #003366;
    color: white;
    text-align: center;
    padding: 1rem 0;
    position:fixed;
}
</style>
</head>
<body>
    <header>
        <div class="logo"><img src="images/logo.jpg"alt="E_Banking"></div>
        <br>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="http://localhost/a%20new/service.php">Services</a></li>
                <li><a href="http://localhost/a%20new/account.php">Accounts</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#login" class="btn-login">Login</a></li>
            </ul>
        </nav>
    </header>
    <main>

<h1>Meet Our Team</h1>
<p class="intro">
  We’re here to help you succeed — here’s who you’ll meet when you work with us.
</p>

<div class="staff-container">
  <!-- Example Staff Member -->
  <div class="staff-card">
    <img src="6.jpg" alt="Jane Doe">
    <h2>Adolf Muhammad</h2>
    <p><strong>Job:</strong> Manager</p>
    <p><strong>Phone:</strong> +250 789 123 456</p>
    <blockquote>“Your financial growth is our top priority.”</blockquote>
  </div>

  <div class="staff-card">
    <img src="7.jpg" alt="John Smith">
    <h2>IRUMVA Lidivine</h2>
    <p><strong>Job:</strong> CEO</p>
    <p><strong>Phone:</strong> +250 788 987 654</p>
    <blockquote>“Managing Our business should be simple and stress‑free.”</blockquote>
  </div>
  <div class="staff-card">
    <img src="3.jpg" alt="John Smith">
    <h2>Catheline Nequila</h2>
    <p><strong>Job:</strong> Account Manager</p>
    <p><strong>Phone:</strong> +250 788 987 654</p>
    <blockquote>“Managing your money should be simple and stress‑free.”</blockquote>
  </div>

  <div class="staff-card">
    <img src="5.jpg" alt="John Smith">
    <h2>Jane Hamsa</h2>
    <p><strong>Job:</strong> Secretary</p>
    <p><strong>Phone:</strong> +250 788 987 654</p>
    <blockquote>“Managing and record your money should be simple and stress‑free.”</blockquote>
  </div>

  <div class="staff-card">
    <img src="8.jpg" alt="John Smith">
    <h2>Kane Mummy</h2>
    <p><strong>Job:</strong> Job Supervisor</p>
    <p><strong>Phone:</strong> +250 788 987 654</p>
    <blockquote>“Managing your money should be simple and stress‑free.”</blockquote>
  </div>

  </main>
<footer>
        <p>&copy; 2025 E‑Bank. All rights reserved.</p>
    </footer>

</body>
</html>
