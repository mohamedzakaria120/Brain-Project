<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>View reports</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: rgb(252, 245, 245);
    }
    .container {
        max-width: 1000px;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h2 {
        text-align: center;
        margin-bottom: 20px;
    }
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        padding: 10px;
        border-bottom: 1px solid #ddd;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
    }
    tr:hover {
        background-color: #f5f5f5;
    }
</style>
</head>
<body>

<div class="container">
    <h2> Saved Reports :</h2>
    <table>
        <thead>
            <tr>
                <th>Patient Name</th>
                <th>date</th>
                <th>classification</th>
                <th>Treatment Plan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // توصيل إلى قاعدة البيانات
            $conn = new mysqli('localhost', 'root', "", 'patient');

            // التحقق من الاتصال
            if ($conn->connect_error) {
                die("error: " . $conn->connect_error);
            }

            // استعداد الاستعلام لاسترجاع البيانات من الجدول
            $sql = "SELECT patient_name, report_date, classification, treatment_plan FROM results";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // إخراج البيانات لكل صف في الجدول
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>". $row["patient_name"]. "</td><td>". $row["report_date"]. "</td><td>". $row["classification"]. "</td><td>". $row["treatment_plan"]. "</td></tr>";
                }
            } else {
                echo "No Reports";
            }
            $conn->close();  
            ?>
        </tbody>
    </table>
</div>

</body>
</html>
