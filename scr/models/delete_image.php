<?php
require_once '../../DB/connection1.php';

if(isset($_GET['image_id'])) {
    $image_id = $_GET['image_id'];
    
    // عملية حذف الصورة من قاعدة البيانات
    $sql = "DELETE FROM images WHERE id = $image_id";
    if($con->query($sql) === TRUE) {
        echo '<script type="text/javascript">
        alert("image created successfully");
        window.location="patient_information2.php";
      </script>';
        

    } else {
        // حدث خطأ أثناء العملية
        echo "حدث خطأ أثناء محاولة حذف الصورة: " . $con->error;
    }
}
?>
