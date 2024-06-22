<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Data</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            direction: rtl;
            text-align: center;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #444;
            margin-bottom: 30px;
            font-size: 32px;
        }

        table {
            width: 90%;
            margin: 0 auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 15px;
            text-align: center;
            font-size: 16px;
        }

        th {
            background-color: #477bb2;
            color: #fff;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        form {
            display: inline;
        }

        input[type='submit'] {
            background-color: #477bb2;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type='submit']:hover {
            background-color: #0056b3;
        }

        .no-data {
            color: #888;
            font-size: 18px;
            padding: 20px;
        }
    </style>
</head>
<body>
    <h1>Users Data</h1>
    <table>
        <thead>
            <tr>
                <th>User Name</th>
                <th>Address</th>
                <th>Password</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Character</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // معلومات الاتصال بقاعدة البيانات
            $conn = new mysqli('localhost', 'root', '', 'patient');

            // التحقق من الاتصال
            if ($conn->connect_error) {
                die("خطأ في الاتصال: " . $conn->connect_error);
            }

            // استعلام لجلب البيانات من الجدول
            $sql = "SELECT id, username, `address`, `password`, mobile, email, `character` FROM users";
            $result = $conn->query($sql);

            // عرض البيانات إذا كانت موجودة
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row["username"] . "</td>
                            <td>" . $row["address"] . "</td>
                            <td>" . $row["password"] . "</td>
                            <td>" . $row["mobile"] . "</td>
                            <td>" . $row["email"] . "</td>
                            <td>" . $row["character"] . "</td>
                            <td>
                                <form method='POST' action='delete_user.php'>
                                    <input type='hidden' name='id' value='" . $row["id"] . "'>
                                    <input type='submit' value='Delete'>
                                </form>
                            </td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='7' class='no-data'>لا توجد بيانات</td></tr>";
            }

            // إغلاق الاتصال
            $conn->close();
            ?>
        </tbody>
    </table>
</body>
</html>
