<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan Application</title>
    <style>
       
    body {
        background-color:light blue;
    font-family: Arial, sans-serif;
    max-width: 600px;
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
    background-color: #e6b800;
}

form {
    display: flex;
    flex-direction: column;
    gap: 10px;
    margin-bottom: 20px;
}
label {
    display: flex;
    flex-direction: column;
    font-weight: bold;
}
input, textarea, button {
    padding: 8px;
    font-size: 1rem;
}
button {
    background-color: #003366;
    color: white;
    border: none;
    cursor: pointer;
}
button:hover {
    background-color: #0055aa;
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
<h1>Loan Application Portal</h1>

<!-- Step 1: Login -->
<section id="login-step">
    <h2>Step 1: Login</h2>
    <form id="loginForm">
        <label>Account Number:
            <input type="text" name="accountNumber" required>
        </label>
        <label>ID Number:
            <input type="text" name="idNumber" required>
        </label>
        <button type="submit">Login</button>
    </form>
</section>

<!-- Step 2: Loan Request -->
<section id="loan-request" style="display:none;">
    <h2>Step 2: Loan Request</h2>
    <form id="loanRequestForm">
        <label>Loan Amount:
            <input type="number" name="loanAmount" required>
        </label>
        <label>Purpose:
            <textarea name="purpose" required></textarea>
        </label>
        <button type="submit">Submit Request</button>
    </form>
</section>

<!-- Step 3: Second Login -->
<section id="second-login" style="display:none;">
    <h2>Step 3: Second Login</h2>
    <form id="secondLoginForm">
        <label>Account Number:
            <input type="text" name="accountNumber2" required>
        </label>
        <label>ID Number:
            <input type="text" name="idNumber2" required>
        </label>
        <button type="submit">Proceed</button>
    </form>
</section>

<!-- Step 4: Full Loan Details -->
<section id="full-details" style="display:none;">
    <h2>Step 4: Full Loan Details</h2>
    <form id="fullDetailsForm">
        <label>UPI for Land Guarantee:
            <input type="text" name="upiGuarantee" required>
        </label>
        <label>Land Location:
            <input type="text" name="landPlace" required>
        </label>
        <label>Witness ID:
            <input type="text" name="witnessId" required>
        </label>
        <label>Requester Photo:
            <input type="file" name="requesterImage" accept="image/*" required>
        </label>
        <button type="submit">Submit Application</button>
    </form>
</section>

<script src="loan.js"></script>
</body>
</html>
