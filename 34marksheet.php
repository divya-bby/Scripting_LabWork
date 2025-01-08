<!DOCTYPE html>
<html>
<head>
    <title>Student Marksheet</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            text-align: center;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        .row-light {
            background-color: #d3d3d3;
        }

        .row-dark {
            background-color: #808080;
        }

        .pass {
            background-color: green;
            color: white;
        }

        .fail {
            background-color: red;
            color: white;
        }
    </style>
</head>
<body>
    <h2>Student Marksheet</h2>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = htmlspecialchars($_POST['name']);
        $roll = intval($_POST['roll']);
        $webtechii = intval($_POST['webtechii']);
        $dbms = intval($_POST['dbms']);
        $economics = intval($_POST['economics']);
        $dsa = intval($_POST['dsa']);
        $account = intval($_POST['account']);

       
        $total = $webtechii + $dbms + $economics + $dsa + $account;
        $result = ($webtechii >= 35 && $dbms >= 35 && $economics >= 35 && $dsa >= 35 && $account >= 35) ? 'pass' : 'fail';

        echo "<table>";
        echo "<tr>
                <th>SN</th>
                <th>Name</th>
                <th>Roll</th>
                <th>Web Tech II</th>
                <th>DBMS</th>
                <th>Economics</th>
                <th>DSA</th>
                <th>Account</th>
                <th>Total</th>
                <th>Result</th>
            </tr>";

        $rowClass = 'row-light'; 
        $resultClass = $result == 'pass' ? 'pass' : 'fail';

        echo "<tr class='{$rowClass}'>
                <td>1</td>
                <td>{$name}</td>
                <td>{$roll}</td>
                <td>{$webtechii}</td>
                <td>{$dbms}</td>
                <td>{$economics}</td>
                <td>{$dsa}</td>
                <td>{$account}</td>
                <td>{$total}</td>
                <td class='{$resultClass}'>{$result}</td>
            </tr>";

        echo "</table>";
    } else {
        echo "<p>No data received. Please go back and fill out the form.</p>";
    }
    ?>
</body>
</html>
