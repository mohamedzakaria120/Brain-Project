<?php
require_once 'inc/connection1.php';
$sql = "SELECT * from images";
$all_images = $con->query($sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>patients_information</title>
    <style>
        html {
            font-size :62.5%;

        }
        main {
            max-width: 1500px;
            width: 95%;
            margin: 30px auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: auto;
        }
        main .card{
            max-width: 300px;
            flex: 1 1 210px;
            text-align: center;
            height: 600px;
            border: 1px solid lightgray;
            margin: 20px;
        }
        main .card .image{
            height: 54%;
            margin-bottom:20px;

        }
        main .card .image img{
            width: 100%;
            height: 100%;
            object-fit: cover;

        }
        main .card p{
            font-size: 2rem;
        }

        main .card button{
            border: 2px solid black;
            padding: 1em;
            width: 80%;
            cursor: pointer;
            margin-top: 2em;
            font-weight: bold;
            position: relative;
        }
        main .card button:before{
            content:"";
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            width: 0;
            background-color: black;
            transition: all .5s;
            margin: 0;

        }
        main .card button::after{
            content:"";
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            width: 0;
            background-color: black;  
            transition: all .5s; 

        }
        main .card button:hover::before{
            width: 30%;
        }
        main .card button:hover::after{
            width: 30%;
        }
        h1{
            font-size:25px;
        }
        .container{
            display: flex; 
            justify-content: space-between; 
            align-items: center;
        }
        #doc{
            width: 135px;
            border-radius: 20px;
            
        }


        



    </style>
</head>
<body>
    <h1>Patients Information..!</h1>
     <main>
        <?php 
         while($row = mysqli_fetch_assoc($all_images)){

            
        ?>
        <div class="card">
            <div class="image">
                <img src="<?php echo $row["youtube_image"]; ?>" alt="">
            </div>
            <div>
                <p class="image_name"> <?php echo $row["name"]; ?> </p>
            </div>
            <button class="send">Send to Model</button>
            <p class ="or">OR</p>


            <div class="container">
    <form action="report.php">
        <button id="doc">Diagnosis</button>
    </form>
    <a href="delete_image.php?image_id=<?php echo $row['id']; ?>">
        <button id="doc">Delete</button>
    </a>
</div>





        </div>
        <?php
         }
        ?>
     </main>
</body>
</html>