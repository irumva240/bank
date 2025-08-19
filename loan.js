document.getElementById('loginForm').addEventListener('submit', function(e){
    e.preventDefault();
    document.getElementById('login-step').style.display = 'none';
    document.getElementById('loan-request').style.display = 'block';
});

document.getElementById('loanRequestForm').addEventListener('submit', function(e){
    e.preventDefault();
    document.getElementById('loan-request').style.display = 'none';
    document.getElementById('second-login').style.display = 'block';
});

document.getElementById('secondLoginForm').addEventListener('submit', function(e){
    e.preventDefault();
    document.getElementById('second-login').style.display = 'none';
    document.getElementById('full-details').style.display = 'block';
});

document.getElementById('fullDetailsForm').addEventListener('submit', function(e){
    e.preventDefault();
    alert("Loan application submitted successfully!");
});
