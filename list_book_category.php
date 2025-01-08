<?php
    require_once 'check_userlogin.php';
    require_once 'connectdb.php';

    $sql = "SELECT id, name, rank, status from book_categories order by created_at desc";

    $result = $connection->query($sql);

    $data =[];
    
    if($result-> num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
            array_push($data, $row);
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .form{
        display: flex
    }
    input{
        width:100%;
    }
    input[type="radio"]{
        display: inline-block;
        height: 15px;
        width: 10%;
    }
    .action a{
        padding: 4px;
    }
    </style>
<body>
    <h1>List</h1>
    
   <div>
   <?php if(isset($_GET['msg']) && $_GET['msg'] == 1 ) { ?>
        <p class="errormessage">Invalid request </p>
    <?php } ?>

   <?php if(isset($_GET['msg']) && $_GET['msg'] == 3 ) { ?>
        <p class="errormessage">unable to delete </p>
    <?php } ?>

   <?php if(isset($_GET['msg']) && $_GET['msg'] == 2 ) { ?>
        <p class="successmessage">Deleted successsfullly </p>
    <?php } ?>


    <table border="1">
        <thead>
            <tr>
                <th>SN </th>
                <th>Name</th>
                <th>Rank</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        <tbody>
            <?php if (count($data) > 0 ) { ?>
                <?php  foreach($data as $key => $record){ ?>
            <tr>
                <td> <?php echo $key+1  ?></td>
                <td> <?php echo $record['name']?></td>
                <td> <?php echo $record['rank']?></td>
                <td> <?php if($record['status'] ==1) {
                    echo 'Active';
                }else{
                    echo 'Deavtive';
                }
                    ?></td>

                <td class = "action"> <a href="view_book_categories.php? id=<?php echo $record['id']  ?>" class ="view">List details</a>
                <a href="delete_book_categories.php? id=<?php echo $record['id']  ?>" class="delete" onclick="return confirm('are you sure to delete')">delete</a>
                <a href="edit_book_categories.php? id=<?php echo $record['id']  ?>" class ="edit">Update</a></td>
            </tr>
            <?php } ?>
            <?php } else {?>
                <tr class= "no record">
                    <td colspan="4"> no category in the database</td>
                </tr>
                <?php } ?>
        </tbody>
</thead>
</table>
</div>
<a href="logout.php">LOGOUT</a>
</body>
</html>


