<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Page</title>
<style>
  body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-color: #1e1e1e;
    color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }

  .container {
    width: 300px;
    margin: 0 auto;
  }

  .login-form {
    background-color: #0a8f9e;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    animation: fadeIn 1s ease;
  }

  .form-control {
    margin-bottom: 20px;
  }

  label {
    display: block;
    margin-bottom: 5px;
  }

  input[type="text"],
  input[type="password"] {
    width: calc(100% - 20px); /* Adjusted width */
    padding: 10px;
    border: none;
    border-radius: 5px;
  }

  button {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    background-color: #07778e;
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  button:hover {
    background-color: #065e70;
  }

  @keyframes fadeIn {
    from {
      opacity: 0;
      transform: translateY(-20px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  @media screen and (max-width: 600px) {
    .container {
      width: 90%;
    }
  }
</style>
</head>
<body>
<div class="container">
  <form id="loginForm" class="login-form">
    <h2>Login</h2>
    <div class="form-control">
      <label for="username">Username</label>
      <input type="text" id="username" placeholder="Enter your username">
    </div>
    <div class="form-control">
      <label for="password">Password</label>
      <input type="password" id="password" placeholder="Enter your password">
    </div>
    <button type="submit">Login</button>
  </form>
</div>

<script>
document.getElementById('loginForm').addEventListener('submit', function(event) {
  event.preventDefault();
  
  var username = document.getElementById('username').value;
  var password = document.getElementById('password').value;
  
  // Add your login logic here, for demonstration purpose, just showing the entered username and password
  alert("Username: " + username + "\nPassword: " + password);
});
</script>
</body>
</html>