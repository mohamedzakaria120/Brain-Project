<?php
// التحقق من أن `id` تم إرساله عبر POST
if (isset($_POST['id'])) {
    // معلومات الاتصال بقاعدة البيانات
    $conn = new mysqli('localhost', 'root', '', 'patient');

    // التحقق من الاتصال
    if ($conn->connect_error) {
        die("خطأ في الاتصال: " . $conn->connect_error);
    }

    // تحضير استعلام الحذف
    $id = $conn->real_escape_string($_POST['id']);
    $sql = "DELETE FROM users WHERE id = '$id'";

    if ($conn->query($sql) === TRUE) {
        echo '<script type="text/javascript">';
        echo 'alert("The User has been saved successfully!");';
        echo 'window.location="users.php";';
        echo '</script>';
    } else {
        echo "Error: " . $conn->error;
    }

    // إغلاق الاتصال
    $conn->close();

    // إعادة التوجيه إلى صفحة عرض البيانات
    header("Location: users.php");
    exit();
} else {
    echo "لم يتم تحديد المستخدم.";
}
?>
