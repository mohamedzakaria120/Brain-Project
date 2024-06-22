<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Login Page</title>
  <style>
    body {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
      font-family: Arial, sans-serif;
      background-image: url('https://res.cloudinary.com/dea9af0nj/image/upload/v1716318666/grad_project/soqgbvwhrf3isjcsnilf.jpg');
      background-size: cover;
      background-repeat: no-repeat;
    }

    .login-container {
      text-align: center;
      background-image: url('https://res.cloudinary.com/dea9af0nj/image/upload/v1716318666/grad_project/soqgbvwhrf3isjcsnilf.jpg');
      border-radius: 15px;
      width: 500px;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
      font-size: 32px;
      color: #333;
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 8px;
      font-weight: bold;
      color: #000;
    }

    input {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border-radius: 5px;
      border: 1px solid #ccc;
      font-size: 16px;
      box-sizing: border-box;
    }

    input:focus {
      border-color: #6fa3ef;
      box-shadow: 0 0 5px rgba(111, 163, 239, 0.5);
    }

    button {
      background-color: #30a0ab;
      color: white;
      font-size: 18px;
      padding: 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #267a7e;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>𝐿𝑜𝑔𝐼𝓃</h2>
    <form action="login.php" method="post">
      <?php
      if (isset($mob_error)){
       echo $mob_error;
      }
      ?>
      <label for="mobile">Phone Number:</label>
      <input type="tel" id="mobile" name="mobile" required>
      
      <?php
      if (isset($pass_error)){
       echo $pass_error;
      }
      ?>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
      
      <button type="submit" name="login">Login</button>
    </form>
  </div>

  <!-- SCRIPTS -->
  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.sticky.js"></script>
  <script src="../js/jquery.stellar.min.js"></script>
  <script src="../js/wow.min.js"></script>
  <script src="../js/smoothscroll.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/custom.js"></script>
</body>
</html>
