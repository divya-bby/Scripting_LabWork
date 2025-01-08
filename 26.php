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
    <h2>Mark Ledger</h2>
    <?php
        
        $students = [
            ['SN' => 1, 'Name' => 'Rajesh', 'Roll' => 25, 'WebTechII' => 56, 'DBMS' => 89, 'Economics' => 57, 'DSA' => 64, 'Account' => 98],
            ['SN' => 2, 'Name' => 'Hari', 'Roll' => 5, 'WebTechII' => 56, 'DBMS' => 89, 'Economics' => 57, 'DSA' => 64, 'Account' => 98],
            ['SN' => 3, 'Name' => 'Shyam', 'Roll' => 6, 'WebTechII' => 54, 'DBMS' => 79, 'Economics' => 57, 'DSA' => 69, 'Account' => 98],
            ['SN' => 4, 'Name' => 'Rita', 'Roll' => 10, 'WebTechII' => 16, 'DBMS' => 89, 'Economics' => 56, 'DSA' => 64, 'Account' => 98],
            ['SN' => 5, 'Name' => 'Gita', 'Roll' => 4, 'WebTechII' => 56, 'DBMS' => 89, 'Economics' => 57, 'DSA' => 69, 'Account' => 98],
            ['SN' => 6, 'Name' => 'Sita', 'Roll' => 24, 'WebTechII' => 56, 'DBMS' => 99, 'Economics' => 57, 'DSA' => 24, 'Account' => 98],
        ];

                function calculateResult($marks) {
            $total = $marks['WebTechII'] + $marks['DBMS'] + $marks['Economics'] + $marks['DSA'] + $marks['Account'];
            $result = ($marks['WebTechII'] >= 35 && $marks['DBMS'] >= 35 && $marks['Economics'] >= 35 && $marks['DSA'] >= 35 && $marks['Account'] >= 35) ? 'pass' : 'fail';
            return ['total' => $total, 'result' => $result];
        }

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

        foreach ($students as $index => $student) {
            $calculated = calculateResult($student);
            $rowClass = $index % 2 == 0 ? 'row-light' : 'row-dark';
            $resultClass = $calculated['result'] == 'pass' ? 'pass' : 'fail';

            echo "<tr class='{$rowClass}'>
                    <td>{$student['SN']}</td>
                    <td>{$student['Name']}</td>
                    <td>{$student['Roll']}</td>
                    <td>{$student['WebTechII']}</td>
                    <td>{$student['DBMS']}</td>
                    <td>{$student['Economics']}</td>
                    <td>{$student['DSA']}</td>
                    <td>{$student['Account']}</td>
                    <td>{$calculated['total']}</td>
                    <td class='{$resultClass}'>{$calculated['result']}</td>
                </tr>";
        }

        echo "</table>";
    ?>
</body>
</html>
