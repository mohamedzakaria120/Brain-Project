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
        background-color: rgb(252, 245, 245);
    }
    .container {
        max-width: 800px;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h2 {
        text-align: center;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    table, th, td {
        border: 1px solid #ccc;
    }
    th, td {
        padding: 10px;
        text-align: left;
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
    <form action="#" method="post">
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
