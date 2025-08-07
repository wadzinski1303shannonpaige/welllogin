<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Basic HTML Page</title>

  <!-- Optional: Include a Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />

  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif;
      background-color: #f4f4f4;
      color: #333;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    h1 {
      color: #2c3e50;
    }

    button {
      padding: 10px 20px;
      background-color: #3498db;
      color: white;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 1rem;
      transition: background-color 0.3s;
    }

    button:hover {
      background-color: #2980b9;
    }
  </style>
</head>
<body>

  <h1>Welcome to My Basic Page</h1>
  <button onclick="sayHello()">Click Me</button>

  <script>
    function sayHello() {
      alert('Hello from your basic HTML page!');
    }
  </script>

</body>
</html>
