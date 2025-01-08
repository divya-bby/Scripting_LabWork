<?php

    if(is_numeric($_GET['id']))
    {
        $id = $_GET['id'];
    }
    else{
        header('location:list_book_category.php ?msg=1');
    }
    require_once 'check_userlogin.php';
    require_once 'connectdb.php';

    $sql = "DELETE from book_categories WHERE id = $id";
    
    $result = $connection->query($sql);
    
    if($connection->affected_rows == 1)
    {
        header('location:list_book_category.php ?msg=2');
    }
    else{
        header('location:list_book_category.php ?msg=3');
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
    .no_record{
        color: red;
    }
    </style>
<body>
    <a href="logout.php">LOGOUT</a>
   <div>
   <?php if(!empty($row)) {?>
        <table border="1">
    <tr>
        <th>Name</th>
        <td> <?php echo $row['name'] ?></td>
   </tr>
   <tr>
        <th>Status</th>
        <td> <?php if($row['status'] ==1) {
                    echo 'Active';
                }else{
                    echo 'Deavtive';
                }
                    ?></td>
   </tr>
   <tr>
        <th>created_at</th>
        <td> <?php echo $row['created_at'] ?></td>
   </tr>
   <tr>
        <th>created_by</th>
        <td> <?php echo getNameByAdminId($row['created_by']) ?></td>
   </tr>
   <tr>
        <th>updated_at</th>
        <td> <?php echo $row['updated_at'] ?></td>
   </tr>
   <tr>
        <th>updated_by</th>
        <td> <?php if( $row['updated_by']) {?>
             <?php   echo getNameByAdminId($row['updated_by']) ?>
            <?php } ?></td>
   </tr>
   </table>

        <?php }else{ ?>
            <div class ="no_record">invalid information</div>
        <?php } ?>
</div>
</body>
</html>


