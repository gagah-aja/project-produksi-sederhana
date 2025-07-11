  <title>Roti Mulia</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    * { box-sizing: border-box; }
    html {
      scroll-behavior: smooth;
    }

    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: #fff;
      color: #333;
    }

    header {
      background: #fff;
      border-bottom: 1px solid #eee;
      padding: 20px 40px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
    }

    .logo img {
      height: 40px;
    }

    nav {
      display: flex;
      justify-content: center;
      flex: 1;
      gap: 30px;
    }

    nav a {
      text-decoration: none;
      color: #a5673d;
      font-weight: bold;
      font-size: 16px;
      transition: color 0.3s;
    }

    nav a:hover {
      color: #a5673d;
    }

    .hero {
      display: flex;
      flex-wrap: wrap;
      padding: 60px 40px;
      align-items: center;
      background: #f8f8ff;
    }

    .hero-text {
      flex: 1;
      min-width: 300px;
    }

    .hero-text h1 {
      font-size: 2.5rem;
      margin-bottom: 10px;
    }

    .hero-text span {
      color: #a5673d;
    }

    .hero-text p {
      color: #666;
      max-width: 600px;
    }

    .hero-img {
      flex: 1;
      text-align: center;
      min-width: 300px;
    }

    .hero-img img {
      max-width: 100%;
      height: auto;
    }

    footer {
      text-align: center;
      padding: 20px;
      background: #f0f0f0;
      margin-top: 40px;
      font-size: 14px;
      color: #666;
    }

    @media (max-width: 768px) {
      nav {
        flex-wrap: wrap;
        gap: 15px;
        justify-content: center;
        margin-top: 10px;
      }
    }
  </style>
