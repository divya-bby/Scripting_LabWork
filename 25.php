<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Array in HTML Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php
    $info = [
        'name' => 'Ram Bahadur', 
        'address' => 'Lalitpur',
        'email' => 'info@ram.com', 
        'phone' => 98454545,
        'website' => 'www.ram.com'
    ];
    ?>

    <table>
        
        <tbody>
            <?php foreach ($info as $key => $value): ?>
                <tr>
                    <td><?php echo ucfirst($key); ?></td>
                    <td><?php echo htmlspecialchars($value); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
