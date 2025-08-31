<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login & Signup</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
/* Google Font */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

body {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh;
  background: linear-gradient(135deg, #667eea, #764ba2);
}

.container {
  position: relative;
  width: 900px;
  height: 550px;
  background: #fff;
  border-radius: 20px;
  overflow: hidden;
  box-shadow: 0 20px 40px rgba(0,0,0,0.2);
  display: flex;
}

/* Forms container */
.forms-container {
  position: relative;
  width: 100%;
  height: 100%;
}

/* Both forms */
form {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 50%;
  transform: translate(-50%, -50%);
  background: #fff;
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 0 50px;
  transition: all 0.6s ease-in-out;
}

form h2 {
  margin-bottom: 20px;
  font-weight: 600;
  font-size: 28px;
  color: #333;
}

.input-field {
  width: 100%;
  margin: 10px 0;
  border-radius: 50px;
  background: #f0f0f0;
  display: flex;
  align-items: center;
  padding: 12px 20px;
}

.input-field input {
  background: none;
  border: none;
  outline: none;
  width: 100%;
  font-size: 16px;
  color: #333;
}

button {
  margin-top: 20px;
  padding: 12px 40px;
  border: none;
  border-radius: 50px;
  background: linear-gradient(135deg, #667eea, #764ba2);
  color: #fff;
  font-size: 16px;
  cursor: pointer;
  transition: 0.3s;
}

button:hover {
  transform: scale(1.05);
  background: linear-gradient(135deg, #764ba2, #667eea);
}

/* Panels */
.panels-container {
  position: absolute;
  width: 100%;
  height: 100%;
  display: flex;
}

.panel {
  flex: 1;
  color: #fff;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
  padding: 40px;
  transition: all 0.6s ease-in-out;
}

.panel h3 {
  font-size: 24px;
  margin-bottom: 10px;
}

.panel p {
  font-size: 14px;
  margin-bottom: 20px;
}

.panel button {
  background: #fff;
  color: #764ba2;
}

/* Animation Controls */
.signup-form {
  opacity: 0;
  pointer-events: none;
}

.container.sign-up-mode .signin-form {
  opacity: 0;
  pointer-events: none;
  transform: translate(-150%, -50%);
}

.container.sign-up-mode .signup-form {
  opacity: 1;
  pointer-events: all;
  transform: translate(-50%, -50%);
}
</style>

</head>
<body>
  <div class="container" id="container">
    <!-- Forms -->
    <div class="forms-container">
      <!-- Sign In Form -->
      <form class="signin-form">
        <h2>Login</h2>
        <div class="input-field"><input type="text" placeholder="Email" required></div>
        <div class="input-field"><input type="password" placeholder="Password" required></div>
        <button type="submit">Login</button>
      </form>

      <!-- Sign Up Form -->
      <form class="signup-form">
        <h2>Sign Up</h2>
        <div class="input-field"><input type="text" placeholder="Full Name" required></div>
        <div class="input-field"><input type="email" placeholder="Email" required></div>
        <div class="input-field"><input type="password" placeholder="Password" required></div>
        <button type="submit">Sign Up</button>
      </form>
    </div>

    <!-- Panels -->
    <div class="panels-container">
      <div class="panel left-panel">
        <h3>New here?</h3>
        <p>Sign up and discover a great experience with us!</p>
        <button id="signUpBtn">Sign Up</button>
      </div>
      <div class="panel right-panel">
        <h3>One of us?</h3>
        <p>If you already have an account, just login here.</p>
        <button id="signInBtn">Login</button>
      </div>
    </div>
  </div>

  <script>
    const container = document.getElementById('container');
    const signUpBtn = document.getElementById('signUpBtn');
    const signInBtn = document.getElementById('signInBtn');

    signUpBtn.addEventListener('click', () => {
      container.classList.add('sign-up-mode');
    });

    signInBtn.addEventListener('click', () => {
      container.classList.remove('sign-up-mode');
    });
  </script>
</body>
</html>
