// Agent Login
document.getElementById('agentLoginForm').addEventListener('submit', function(e){
  e.preventDefault();
  // Here you would validate agent credentials securely with backend
  document.getElementById('agentLogin').style.display = 'none';
  document.getElementById('createAccount').style.display = 'block';
});

// Create Account
document.getElementById('createAccountForm').addEventListener('submit', function(e){
  e.preventDefault();
  alert("Account created successfully!");
  document.getElementById('createAccount').style.display = 'none';
  document.getElementById('customerLogin').style.display = 'block';
});

// Customer Login
document.getElementById('customerLoginForm').addEventListener('submit', function(e){
  e.preventDefault();
  // Validate customer credentials
  document.getElementById('customerLogin').style.display = 'none';
  document.getElementById('customerDashboard').style.display = 'block';
  document.getElementById('custName').textContent = "John Doe";
  document.getElementById('custAccNum').textContent = "123456";
  document.getElementById('custEmail').textContent = "john@example.com";
  document.getElementById('custPhone').textContent = "+250 123 456 789";
});

// Logout
document.getElementById('logout').addEventListener('click', function(){
  document.getElementById('customerDashboard').style.display = 'none';
  document.getElementById('customerLogin').style.display = 'block';
});
