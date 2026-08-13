<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Login - Star Rhodex Tours and Travel</title>
</head>
<body>
<main class="page">
  <section class="login-card">
    <div class="logo">↯</div>

    <h1>Welcome back</h1>
    <p>Sign in and return to your floating island dashboard.</p>

    <button class="google-btn" type="button">Continue with Google</button>

    <span class="divider">or sign in with email</span>
        @include('flash-message')
    <form action="{{route('Login')}}" class="login-form" method="post">
                @csrf
      <label>Email</label>
      <input type="email" name="email" placeholder="example@email.com" required />

      <label>Password</label>
      <input type="password" name="password" placeholder="Enter your password" required />

      <div class="row">
        <label class="check">
          <input type="checkbox" />
          Remember me
        </label>
        <a href="#">Forgot Password?</a>
      </div>

      <button class="signin" type="submit">Sign in →</button>
    </form>

    <small>Don’t have an account? <a href="{{url('register')}}">Create an account</a></small>

    <p class="message"></p>
  </section>
</main>
<style>
    * {
  box-sizing: border-box;
}

body {
  margin: 0;
  min-height: 100vh;
  font-family: Inter, Arial, sans-serif;
  color: white;
  background:
    linear-gradient(rgba(5, 10, 18, 0.25), rgba(5, 10, 18, 0.7)),
    url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRcnGOFd4FM2t8vE128HHHfYYG34Gqj-bdwo4k8ZmVuhQ&s=10");
  background-size: cover;
  background-position: center;
  overflow: hidden;
}

.page {
  min-height: 100vh;
  display: grid;
  place-items: center;
  padding: 24px;
  position: relative;
}

.page::before {
  content: "";
  position: fixed;
  inset: 0;
  background:
    radial-gradient(circle at 50% 18%, rgba(255, 225, 150, .22), transparent 28%),
    radial-gradient(circle at 70% 80%, rgba(90, 170, 255, .14), transparent 28%);
  animation: glowMove 10s ease-in-out infinite alternate;
  pointer-events: none;
}

.login-card {
  width: 360px;
  padding: 26px;
  border-radius: 24px;
  text-align: center;
  position: relative;
  z-index: 1;
  background: rgba(8, 12, 22, 0.48);
  border: 1px solid rgba(255, 220, 150, 0.28);
  box-shadow:
    0 30px 90px rgba(0,0,0,.65),
    inset 0 0 40px rgba(255, 220, 150, 0.05);
  backdrop-filter: blur(18px);
  animation: floatCard 6s ease-in-out infinite;
}

.logo {
  width: 48px;
  height: 48px;
  margin: 0 auto 16px;
  display: grid;
  place-items: center;
  border-radius: 13px;
  background: linear-gradient(135deg, #fff6d5, #f6c86b);
  color: #151008;
  font-weight: 900;
  box-shadow: 0 0 25px rgba(255, 210, 120, .45);
}

h1 {
  margin: 0 0 8px;
  font-size: 26px;
}

p {
  margin: 0 0 20px;
  font-size: 13px;
  line-height: 1.5;
  color: rgba(255,255,255,.72);
}

.google-btn,
.signin {
  width: 100%;
  height: 44px;
  border-radius: 10px;
  cursor: pointer;
  font-weight: 700;
}

.google-btn {
  color: #fff2d6;
  background: rgba(255, 255, 255, .1);
  border: 1px solid rgba(255, 220, 150, .25);
}

.divider {
  display: block;
  margin: 16px 0;
  font-size: 12px;
  color: rgba(255,255,255,.6);
}

form {
  text-align: left;
}

label {
  display: block;
  margin-bottom: 7px;
  font-size: 14px;
}

input[type="email"],
input[type="password"] {
  width: 100%;
  height: 46px;
  margin-bottom: 14px;
  padding: 0 14px;
  color: white;
  border-radius: 10px;
  border: 1px solid rgba(255, 220, 150, .22);
  background: rgba(255, 255, 255, .11);
  outline: none;
}

input::placeholder {
  color: rgba(255,255,255,.45);
}

input:focus {
  border-color: rgba(255, 220, 150, .65);
  box-shadow: 0 0 18px rgba(255, 196, 92, .22);
}

.row {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin: 4px 0 18px;
}

.check {
  display: flex;
  align-items: center;
  gap: 8px;
  margin: 0;
  color: rgba(255,255,255,.75);
  font-size: 13px;
}

a {
  color: #fff2d6;
  font-size: 13px;
  font-weight: 700;
}

.signin {
  border: 0;
  background: linear-gradient(135deg, #fff6d5, #f0b85c);
  color: #18100a;
  box-shadow: 0 0 22px rgba(255, 196, 92, .35);
}

small {
  display: block;
  margin-top: 18px;
  font-size: 12px;
  color: rgba(255,255,255,.68);
}

.message {
  margin: 14px 0 0;
  min-height: 18px;
  font-size: 12px;
}

@keyframes floatCard {
  0%, 100% {
    transform: translateY(0);
  }

  50% {
    transform: translateY(-10px);
  }
}

@keyframes glowMove {
  from {
    opacity: .45;
    transform: scale(1);
  }

  to {
    opacity: .85;
    transform: scale(1.08);
  }
}
    </style>
<script src="script.js"></script>
</body>
</html>