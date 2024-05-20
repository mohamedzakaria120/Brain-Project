<?php
include "inc/connection1.php";
?>

    
    <?php
    if (isset($_POST["sumbit1"]))
    {
        $tm=md5(time());
            $fnm=$_FILES["f1"]["name"];
            $dst="./MRI_image/".$tm.$fnm;
            $dst1="MRI_image/".$tm.$fnm;
            move_uploaded_file($_FILES["f1"]["tmp_name"],$dst);

            $sql = mysqli_query($link, "INSERT INTO `images` (`youtube_image`, `name`) VALUES ('$dst1','$_POST[name]')");
            if($sql){
                ?>
    <script type="text/javascript">
        alert ("photo uploaded successfully");
        window.location="Choosing_photo.html"
        </script>
    <?php
            }else{
                ?>
                    <script type="text/javascript">
                        alert ("something went wrong");
                        window.location="Choosing_photo.html"
                    </script>
    <?php
            }
    }

    ?>

