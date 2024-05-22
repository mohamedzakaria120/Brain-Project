<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Brain Tumor Classification</title>
    <link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="../layout/font/flaticon.css">
    <style>
        h2 {
            font-size: 60px;
        }
        .btn {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color: 0.3s ease;
        }
        .btn:hover {
            background-color: #45a049;
        }
        .flex-content {
            text-align: center;
            color: white;
            padding: 20px;
        }
        #slider {
            position: relative;
        }
        .bgded {
            background-size: cover;
            background-position: center;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        #preloader {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background-color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        #preloader div {
            width: 40px;
            height: 40px;
            background-color: #4CAF50;
            animation: preloader 1.5s infinite ease-in-out;
        }
        @keyframes preloader {
            0%, 100% { transform: scale(0); }
            50% { transform: scale(1); }
        }
    </style>
</head>
<body>
    <div id="slider">
        <div class="flexslider basicslider">
            <ul class="slides">
                <li class="bgded" style="background-image:url('https://res.cloudinary.com/dea9af0nj/image/upload/v1716318664/grad_project/j1pxigwqvl794unndmfs.jpg')">
                    <article class="flex-content">
                        <h2>Brain Tumor Classification</h2>
                        <br><hr><br><br>
                        <p><font size="5">Classifying Brain Tumor</font><br></p>
                        <p><a href="index.html" class="btn" style="margin:10px" width="200px">Uploading Photo</a></p>
                        <p><font size="5">OR</font><br></p>
                        <p>
                            <a href="Choosing_photo1.php" class="btn" style="margin:10px" width="200px">Sending To Doctor</a>
                            <a href="results.php" class="btn" style="margin:10px" width="200px">See Results</a>
                        </p>
                    </article>
                </li>
            </ul>
        </div>
    </div>
    <div id="preloader"><div></div></div>
    <!-- JAVASCRIPTS -->
    <script src="../styles/layout/scripts/jquery.min.js"></script>
    <script src="../styles/layout/scripts/jquery.backtotop.js"></script>
    <script src="../styles/layout/scripts/jquery.mobilemenu.js"></script>
    <!-- IE9 Placeholder Support -->
    <script src="../styles/layout/scripts/jquery.placeholder.min.js"></script>
    <!-- / IE9 Placeholder Support -->
    <!-- Homepage specific -->
    <script src="../styles/layout/scripts/jquery.flexslider-min.js"></script>
    <script src="../styles/layout/scripts/jquery.easypiechart.min.js"></script> 
    <script>
        $(window).load(function(){
            $("#preloader div").delay(500).fadeOut();
            $("#preloader").delay(800).fadeOut("slow");
        });
    </script>
</body>
</html>
