<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up For Doctors</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
            background-color: #f2f2f2;
        }

        .signup-container {
            max-width: 600px;
            margin: auto;
            background-color: white;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            margin: 10px 0 5px 0;
            font-weight: bold;
        }

        input, button {
            margin: 5px 0 15px 0;
            padding: 10px;
            width: 100%;
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
            cursor: pointer;
            border: none;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #267a7e;
        }

        h2 {
            font-size: 32px;
            color: #333;
            margin-bottom: 20px;
        }

        #message {
            position: absolute;
            top: 10px;
            right: 20px;
            padding: 10px;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        #message:hover{
            background-color: #267a7e;
        }

        #message1 {
            position: absolute;
            top: 10px;
            left: 20px;
            padding: 10px;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        #message1:hover{
            background-color: #267a7e;
        }

        #seeing {
            display: block;
            text-decoration: none;
            color:black;
            font-weight: bold;
            font-size: 18px;
            margin-bottom: 10px;
            transition: color 0.3s ease;
        }

        #seeing:hover {
            color: #267a7e;
        }
        #seeing1 {
            display: block;
            text-decoration: none;
            color: black;
            font-weight: bold;
            font-size: 18px;
            margin-bottom: 10px;
            right: 5px;
        }

        #seeing1:hover {
            color: #267a7e;
        }
    </style>
</head>
<body>
<header>
    <div id="message">

        <a id="seeing" title="click here to see patients information" href="patient_information2.php">See Patients Information</a>

    </div>
    <div id="message1">
    <a id="seeing1" title="click here to see Users Data" href="users.php">Users Data</a>
    </div>
</header>
<div class="signup-container">
    <h2>𝓢𝓘𝓖𝓝 𝓤𝓟 𝓕𝓞𝓡 𝓓𝓞𝓒𝓣𝓞𝓡𝓢</h2>
    <form action="signup_for_doctors.php" method="post" id="signup-form">
        <?php if (isset($user_error)) { echo $user_error; } ?>

        <label for="name">Name:</label>
        <input type="text" id="name" name="username" required>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required>

        <?php if (isset($user_error)) { echo $user_error; } ?>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <label for="mobile">Mobile:</label>
        <input type="tel" id="mobile" name="mobile" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="gender">Character:</label>
        <input type="text" id="gender" name="character" required>

        <button type="submit" name="submit">Sign Up</button>
    </form>
</div>
<br><hr>
<script src="script.js"></script>
</body>
</html>
