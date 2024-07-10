<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #808080;
        }
    </style>
</head>
<body>

<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>ชื่อ</th>
            <th>นามสกุล</th>
            <th>ห้อง</th>
        </tr>
    </thead>
    <tbody>
        <?php
        
        $start_name = "วรณัน";
        $start_surname = "บุหงาเกษมสุข";
        $start_room = "6/10";

        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            echo "<td>" . $i . "</td>";
            echo "<td>" . $start_name . "</td>";
            echo "<td>" . $start_surname . "</td>";
            echo "<td>" . $start_room . "</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

<br><br>

<?php

$data = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
              11, 12, 13, 14, 15, 16, 17, 18, 19, 20,
              21, 22, 23, 24, 25, 26, 27, 28, 29, 30,
              31, 32, 33, 34, 35, 36, 37, 38, 39, 40);

$count = count($data);

echo "รายชื่อนักเรียนม.6/10 คือ $count คน";
?>


</body>
</html>