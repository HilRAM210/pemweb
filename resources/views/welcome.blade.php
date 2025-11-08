<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      margin: 0;
      background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
    }
    
    .container {
      text-align: center;
    }
    
    .start-button {
      display: inline-block;
      padding: 18px 40px;
      font-size: 24px;
      font-weight: bold;
      text-decoration: none;
      color: white;
      background: linear-gradient(45deg, #FF512F, #F09819);
      border-radius: 50px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
      letter-spacing: 1px;
    }
    
    .start-button:hover {
      transform: translateY(-5px);
      box-shadow: 0 12px 25px rgba(0, 0, 0, 0.4);
      background: linear-gradient(45deg, #F09819, #FF512F);
    }
    
    .start-button:active {
      transform: translateY(0);
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    }
    
    .start-button::after {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
      transition: left 0.5s;
    }
    
    .start-button:hover::after {
      left: 100%;
    }
    
    .welcome-text {
      color: white;
      margin-bottom: 30px;
      font-size: 32px;
      text-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }
  </style>
</head>
<body>
  <div class="container">
    <h1 class="welcome-text">Welcome</h1>
    <a href="/home" class="start-button">START</a>
  </div>
</body>
</html>