<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Admin - Restoran Rasa Nusantara</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
  <style>
    /* Global Styling & Nusantara Theme Base */
    :root {
      --primary-brown: #8D6E63; /* Light Brown */
      --dark-brown: #795548;    /* Medium Brown */
      --accent-brown: #5D4037;  /* Dark Brown */
      --light-bg: #FDF7F3;      /* Off-white/Creamy background */
      --card-bg: #FFFFFF;
      --text-color: #333333;
      --label-color: #5D4037;
      --border-color: #BCAAA4;
      --focus-glow: rgba(141, 110, 99, 0.25);
    }

    body {
      background-color: var(--light-bg);
      font-family: 'Poppins', sans-serif; /* More modern, readable font */
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
      margin: 0;
      overflow: auto;
      color: var(--text-color);
    }

    /* --- */
    /* Container for Login Card */
    .login-wrapper {
      background-color: var(--card-bg);
      border-radius: 25px; /* Slightly more rounded */
      box-shadow: 0 25px 50px rgba(0, 0, 0, 0.18); /* Stronger, more refined shadow */
      overflow: hidden;
      width: 100%;
      max-width: 480px; /* Slightly wider for better balance */
      animation: fadeInScale 0.9s cubic-bezier(0.25, 0.46, 0.45, 0.94) forwards; /* Smoother animation curve */
      flex-shrink: 0;
      margin: auto;
      border: 1px solid rgba(0, 0, 0, 0.05); /* Subtle border for definition */
    }

    /* --- */
    /* Styling for the Login Form Card itself */
    .card-login-form {
      background-color: transparent;
      border: none;
      box-shadow: none;
      border-radius: 0;
    }

    .card-header {
      background-color: var(--dark-brown);
      color: white;
      font-family: 'Playfair Display', serif; /* Elegant font for header */
      font-weight: 700;
      padding: 35px; /* More padding for grandeur */
      font-size: 2rem; /* Larger header text */
      letter-spacing: 1px;
      border-radius: 25px 25px 0 0; /* Match wrapper radius */
      text-align: center;
      position: relative; /* For subtle overlay */
      overflow: hidden; /* Ensure rounded corners */
    }

    .card-header::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: linear-gradient(135deg, rgba(255, 255, 255, 0.05) 0%, rgba(255, 255, 255, 0) 50%); /* Subtle gradient overlay */
      pointer-events: none;
    }

    .card-header .lock-icon {
        font-size: 2.2rem; /* Make the icon larger */
        margin-bottom: 8px; /* Space between icon and text */
        display: block; /* Ensure it takes its own line */
    }

    .card-header small {
      font-family: 'Poppins', sans-serif;
      font-size: 0.85em;
      opacity: 0.9;
      display: block; /* Ensure it takes its own line */
      margin-top: 5px;
    }

    .card-body {
      padding: 45px; /* More generous padding */
    }

    /* --- */
    /* Form Control Styling */
    .form-label {
      font-weight: 600; /* Slightly bolder labels */
      color: var(--label-color);
      margin-bottom: 12px; /* More space */
      font-size: 1.05rem;
    }

    .form-control {
      border-radius: 18px; /* Even softer and larger radius */
      border: 1px solid var(--border-color);
      padding: 18px 22px; /* More comfortable padding */
      font-size: 1.1rem; /* Slightly larger font */
      transition: all 0.3s ease;
      background-color: #FCFCFC; /* Very light background for inputs */
    }

    .form-control:focus {
      border-color: var(--primary-brown);
      box-shadow: 0 0 0 0.4rem var(--focus-glow); /* More pronounced, yet soft glow */
      background-color: var(--card-bg); /* White on focus */
      outline: none; /* Remove default outline */
    }

    /* --- */
    /* Button Styling */
    .btn-primary {
      background-color: var(--primary-brown);
      border-color: var(--primary-brown);
      border-radius: 18px; /* Match input radius */
      padding: 18px 30px; /* More padding for a bolder button */
      font-size: 1.35rem; /* Larger, more impactful font */
      font-weight: 600;
      letter-spacing: 1px;
      transition: background-color 0.3s ease, border-color 0.3s ease, transform 0.25s ease, box-shadow 0.25s ease;
      box-shadow: 0 8px 15px rgba(141, 110, 99, 0.2); /* Initial subtle shadow */
    }

    .btn-primary:hover {
      background-color: var(--dark-brown);
      border-color: var(--dark-brown);
      transform: translateY(-5px); /* More pronounced lift */
      box-shadow: 0 15px 25px rgba(141, 110, 99, 0.35); /* Deeper shadow on hover */
    }

    .btn-primary:active {
      transform: translateY(-1px); /* Slight sink on click */
      box-shadow: 0 5px 10px rgba(141, 110, 99, 0.2);
    }

    /* --- */
    /* Alert Styling */
    .alert {
      border-radius: 15px; /* Slightly more rounded alerts */
      font-size: 1.05rem;
      padding: 18px 28px;
      margin-bottom: 35px; /* More space below alerts */
      display: flex; /* For better icon alignment */
      align-items: center;
    }
    .alert-danger {
        background-color: #fce8e8; /* Lighter red tint */
        color: #b00020; /* Deeper red for text */
        border: 1px solid #fbc9c9;
    }
    .alert-success {
        background-color: #e6f7ea; /* Lighter green tint */
        color: #1a7d35; /* Deeper green for text */
        border: 1px solid #c7ecd2;
    }
    .alert .alert-icon {
        margin-right: 15px;
        font-size: 1.4rem;
        line-height: 1;
    }

    /* --- */
    /* Link Styling */
    a {
      color: var(--dark-brown);
      text-decoration: none;
      font-weight: 500;
      transition: color 0.3s ease, text-decoration 0.3s ease;
    }

    a:hover {
      text-decoration: underline;
      color: var(--accent-brown);
    }

    /* --- */
    /* Animations */
    @keyframes fadeInScale {
      from {
        opacity: 0;
        transform: scale(0.95) translateY(20px);
      }
      to {
        opacity: 1;
        transform: scale(1) translateY(0);
      }
    }

    /* Responsive adjustments */
    @media (max-width: 576px) {
      .login-wrapper {
        margin: 20px; /* Add margin on small screens */
        border-radius: 15px;
      }
      .card-header {
        font-size: 1.8rem;
        padding: 30px;
        border-radius: 15px 15px 0 0;
      }
      .card-body {
        padding: 30px;
      }
      .form-control {
        padding: 15px 20px;
      }
      .btn-primary {
        padding: 15px 25px;
        font-size: 1.2rem;
      }
    }
  </style>
</head>
<body>
<div class="container">
  <div class="login-wrapper">
    <div class="card card-login-form">
      <div class="card-header">
        <span class="lock-icon">🔒</span> Login Admin
        <small>Restoran Rasa Nusantara</small>
      </div>
      <div class="card-body">
        @if ($errors->any())
          <div class="alert alert-danger" role="alert">
            <span class="alert-icon">⚠️</span> {{ $errors->first() }}
          </div>
        @endif
        @if (session('success'))
          <div class="alert alert-success" role="alert">
            <span class="alert-icon">✅</span> {{ session('success') }}
          </div>
        @endif

        <form method="POST" action="{{ route('admin.login') }}">
          @csrf
          <div class="mb-4">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="admin@example.com" required autocomplete="email">
          </div>

          <div class="mb-4">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="********" required autocomplete="current-password">
          </div>
          <button type="submit" class="btn btn-primary w-100 mt-3">Login</button>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>

