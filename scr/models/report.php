<?php
$conn = new mysqli('localhost', 'root', "", 'patient');

// التحقق من الاتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// معالجة طلب الحذف
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $stmt = $conn->prepare("DELETE FROM results WHERE id = ?");
    $stmt->bind_param("i", $delete_id);
    $stmt->execute();
    $stmt->close();
    echo '<script type="text/javascript">';
    echo 'alert("The report has been deleted successfully!");';
    echo 'window.location="report.php";';
    echo '</script>';
}

// معالجة طلب الإدخال
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $patient_name = $_POST['patient_name'];
    $report_date = $_POST['report_date'];
    $classification = $_POST['classification'];
    $treatment_plan = $_POST['treatment_plan'];

    $stmt = $conn->prepare("INSERT INTO results (patient_name, report_date, classification, treatment_plan) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $patient_name, $report_date, $classification, $treatment_plan);
    if ($stmt->execute()) {
        echo '<script type="text/javascript">';
        echo 'alert("The report has been saved successfully!");';
        echo 'window.location="report.php";';
        echo '</script>';
    } else {
        echo '<script type="text/javascript">';
        echo 'alert("Failed to save the report.");';
        echo '</script>';
    }
    $stmt->close();
}

// عرض البيانات
$sql = "SELECT id, patient_name, classification, report_date, treatment_plan FROM results";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Report</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #222;
        color: #333;
    }
    .container {
        max-width: 800px;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    h2 {
        text-align: center;
        margin-bottom: 20px;
        color:  #00adb5;
    }
    form {
        display: flex;
        flex-direction: column;
        gap: 10px;
        margin-bottom: 20px;
    }
    form label {
        font-weight: bold;
    }
    form input[type="text"], form textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    form input[type="submit"] {
        width: 100px;
        padding: 10px;
        background-color:  #00adb5;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        align-self: flex-start;
    }
    form input[type="submit"]:hover {
        background-color: #45a049;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    table, th, td {
        border: 1px solid #ddd;
    }
    th, td {
        padding: 12px;
        text-align: left;
    }
    th {
        background-color:  #00adb5;
        color: white;
    }
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    tr:hover {
        background-color: #ddd;
    }
    .delete-btn {
        background-color: #f44336;
        color: white;
        padding: 5px 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    .delete-btn:hover {
        background-color: #e53935;
    }
</style>
<script>
    function confirmDelete(id) {
        if (confirm("Are you sure you want to delete this report?")) {
            window.location.href = "report.php?delete_id=" + id;
        }
    }
</script>
</head>
<body>

<div class="container">
    <h2>Report about patient :</h2>
    <form action="report.php" method="post">
        <label for="patient_name">Patient Name:</label>
        <input type="text" id="patient_name" name="patient_name" required>
        
        <label for="report_date">Report Date:</label>
        <input type="text" id="report_date" name="report_date" required>

        <label for="classification">Classification:</label>
        <input type="text" id="classification" name="classification" required>
        
        <label for="report_details">Treatment plan:</label>
        <textarea id="report_details" name="treatment_plan" rows="5" required></textarea>
        
        <input type="submit" value="Save">
    </form>

    <table>
        <thead>
            <tr>
                <th>Patient Name</th>
                <th>Classification</th>
                <th>Report Date</th>
                <th>Treatment Plan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($result->num_rows > 0): ?>
                <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['patient_name']); ?></td>
                        <td><?php echo htmlspecialchars($row['classification']); ?></td>
                        <td><?php echo htmlspecialchars($row['report_date']); ?></td>
                        <td><?php echo htmlspecialchars($row['treatment_plan']); ?></td>
                        <td><button class="delete-btn" onclick="confirmDelete(<?php echo $row['id']; ?>)">Delete</button></td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5">No records found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

</body>
</html>

<?php $conn->close(); ?>
