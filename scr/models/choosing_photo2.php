<?php
$conn = new mysqli('localhost', 'root', "", 'patient');

// التحقق من الاتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<?php
if (isset($_POST["sumbit1"])) {
    $tm = md5(time());
    $fnm = $_FILES["f1"]["name"];
    $dst = "../images/MRI_image/" . $tm . $fnm;
    $dst1 = "../images/MRI_image/" . $tm . $fnm;
    move_uploaded_file($_FILES["f1"]["tmp_name"], $dst);

    $sql = mysqli_query($conn, "INSERT INTO `images` (`youtube_image`, `name`) VALUES ('$dst1', '$_POST[name]')");
    if ($sql) {
        ?>
        <script type="text/javascript">
            alert("photo uploaded successfully");
            window.location = "Choosing_photo1.php";
        </script>
        <?php
    } else {
        ?>
        <script type="text/javascript">
            alert("something went wrong");
            window.location = "Choosing_photo1.php";
        </script>
        <?php
    }
}
?>
