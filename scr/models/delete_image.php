<?php
$conn = new mysqli('localhost', 'root', "", 'patient');

// التحقق من الاتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_GET['image_id'])) {
    $image_id = $_GET['image_id'];
    
    // عملية حذف الصورة من قاعدة البيانات
    $sql = "DELETE FROM images WHERE id = $image_id";
    if($conn->query($sql) === TRUE) {
        echo '<script type="text/javascript">
        alert("image deleted successfully");
        window.location="patient_information2.php";
      </script>';
    } else {
        // حدث خطأ أثناء العملية
        echo " ERROR " . $conn->error;
    }
}
?>
