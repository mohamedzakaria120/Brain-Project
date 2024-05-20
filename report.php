<?php
// تأكد من أن النموذج تم إرساله
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // احتواء المتغيرات على البيانات المرسلة من النموذج
    $patient_name = $_POST['patient_name'];
    $report_date = $_POST['report_date'];
    $classification = $_POST['classification'];
    $treatment_plan = $_POST['treatment_plan'];

    // توصيل إلى قاعدة البيانات
    $conn = new mysqli('localhost', 'root', "", 'patient');

    // التحقق من الاتصال
    if ($conn->connect_error) {
        die("error " . $conn->connect_error);
    }

    // استعداد الاستعلام لإدراج البيانات في الجدول
    $sql = "INSERT INTO results (patient_name, classification, report_date, treatment_plan) VALUES ('$patient_name', '$classification', '$report_date', '$treatment_plan')";

    if ($conn->query($sql) === TRUE) {
        echo '<script type="text/javascript">';
        echo 'alert("The report has been registered successfully !");';
        echo 'window.location="report.php";';
        echo '</script>';

    }
     else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>report</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: rgb(252, 245, 245);
    }
    .container {
        max-width: 600px;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        height: 450px;
    }
    h2 {
        text-align: center;
    }
    form {
        margin-top: 20px;
    }
    label {
        display: block;
        margin-bottom: 5px;
    }
    input[type="text"],
    textarea {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        float: right;
    }
    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
</head>
<body>

<div class="container">
    <h2> Report about patient :</h2>
    <form action="#" method="post">
        <label for="patient_name"> Patient Name:</label>
        <input type="text" id="patient_name" name="patient_name" required>
        
        <label for="report_date">Report Date :</label>
        <input type="text" id="report_date" name="report_date" required>

        <label for="classification">classification :</label>
        <input type="text" id="classification" name="classification" required>
        
        <label for="report_details">Treatment plan :</label>
        <textarea id="report_details" name="treatment_plan" rows="5" required></textarea>
        
        <input type="submit" value="save ">
    </form>
</div>

</body>
</html>
