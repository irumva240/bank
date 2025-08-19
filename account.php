<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Account Management</title>
  <style>body {
  font-family: Arial, sans-serif;
  background-color: #80ade4ff;
  max-width: 100%;
  margin: auto;
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
    background-color: #0a9e2aff;
}


h1, h2 {
  text-align: center;
  color: #222;
}

section {
  background-color: rgba(19, 3, 236, 1);
  padding: 20px;
  border-radius: 10px;
  margin-bottom: 20px;
  box-shadow: 0 2px 6px rgba(3, 1, 20, 0.1);
  margin-left:400px;
  margin-right:400px;
}

label {
  display: block;
  margin-bottom: 10px;
  font-weight: bold;
}

input, textarea, button {
  width: 80%;
  padding: 8px;
  margin-top: 5px;
  margin-bottom: 15px;
  margin-left:80px;
}

button {
  background-color: #09044e;
  color: rgb(19, 243, 243);
  border: none;
  border-radius: 4px;
  margin-left:250px;
  width:160px;
}

button:hover {
  background-color: #010911;
}
footer {
    background-color: #003366;
    color: white;
    text-align: center;
    padding: 1rem 0;
   
}
</style>
</head>
<body>
    <header>
        <div class="logo"><img src="images/logo.jpg"alt="E_Banking"></div>
        <br>
        <nav>
            <ul>
                <li><a href="http://localhost/a%20new">Home</a></li>
                <li><a href="http://localhost/a%20new/service.php">Services</a></li>
                <li><a href="http://localhost/a%20new/account.php">Accounts</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#login" class="btn-login">Login</a></li>
            </ul>
        </nav>
    </header>

<h1>Account Management Portal</h1>

<!-- Agent Login -->
<section id="agentLogin">
  <h2>Agent Login</h2>
  <form id="agentLoginForm">
    <label>Agent ID:
      <input type="text" name="agentId" required>
    </label>
    <label>Password:
      <input type="password" name="agentPassword" required>
    </label>
    <button type="submit">Login as Agent</button>
  </form>
</section>

<!-- Agent: Create New Account -->
<section id="createAccount" style="display:none;">
  <h2>Create New Account (Agent Only)</h2>
  <form id="createAccountForm">
    <label>Full Name:
      <input type="text" name="fullName" required>
    </label>
    <label>Date of Birth:
      <input type="date" name="dob" required>
    </label>
    <label>ID Number:
      <input type="text" name="nationalId" required>
    </label>
    <label>Phone No:
      <input type="tel" name="phone" required>
    </label>
    <label>Email:
      <input type="email" name="email">
    </label>
    <label>Address:
      <textarea name="address" required></textarea>
    </label>
    <label>Profile Photo:
      <input type="file" name="profilePhoto" accept="image/*" required>
    </label>
    <button type="submit">Create Account</button>
  </form>
</section>

<!-- Customer Login -->
<section id="customerLogin" style="display:none;">
  <h2>Customer Login</h2>
  <form id="customerLoginForm">
    <label>Account Number:
      <input type="text" name="accountNum" required>
    </label>
    <label>ID Number
      <input type="number" name="Log" required>
    </label>
    <label>Password/ID:
      <input type="password" name="customerPass" required>
    </label>
    <button type="submit">Login</button>
  </form>
</section>

<!-- Customer Account Dashboard -->
<section id="customerDashboard" style="display:none;">
  <h2>Welcome, <span id="custName"></span></h2>
  <p><strong>Account Number:</strong> <span id="custAccNum"></span></p>
  <p><strong>Email:</strong> <span id="custEmail"></span></p>
  <p><strong>Phone:</strong> <span id="custPhone"></span></p>
  <button id="logout">Logout</button>
</section>

<script src="accounts.js"></script>

</body>
</html>
