<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>𝑺𝑰𝑮𝑵 𝑼𝑷 </title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-image: url('../images/slider3.jpg');
        }

        .container {
            background-image: url('../images/slider3.jpg');
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 900px;
            
        }

        h1 {
            text-align: center;
            
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
        }

        input {
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #609754;
            border-radius: 4px;
            border-radius: 20px;
        }

        button {
            padding: 10px;
            background-color: #4c96af;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color:brown
        }
       
    </style>
</head>
<body>

    <div class="container">
        <br>
        <h1>𝓢𝓘𝓖𝓝 𝓤𝓟 </h1>
        <form action="Signup.php" method="post">
        <form>
           
            
            <hr>
          <?php
           if (isset($user_error)){
            echo $user_error;
           }
           ?>
            <label for="name1">User Name :</label>
            <input type="text" id="name1" name="username" required>

        

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>

            <?php
           if (isset($pass_error)){
            echo $pass_error;
           }
           ?>

            <label for="password"> Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="mobile"> phone:</label>
            <input type="tel" id="mobile" name="mobile" required>

            <label for="email"> Email:</label>
            <input type="email" id="email" name="email" required>

            <button type="submit" name="submit"> Sign Up</button>
        </form>
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
