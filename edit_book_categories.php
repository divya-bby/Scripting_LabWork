<?php
require_once 'check_userlogin.php';
require_once 'connectdb.php';
require_once 'function.php';
require_once 'check.php';

    if(is_numeric($_GET['id']))
    {
        $id = $_GET['id'];
    }
    else{
        header('location:list_book_category.php ?msg=1');
    }

    if (isset($_POST['update']))
    {
       $err = []; 
       if (checkEmptyField('name')) {
        $name = $_POST['name'];
     } else {
         $err['name'] = 'Enter name';
     }
     if (checkEmptyField('rank')) {
        $rank = $_POST['rank'];
     } else {
         $err['rank'] = 'Enter rank';
     }
     if (checkEmptyField('image')) {
        $image = $_POST['image'];
     } else {
         $err['image'] = 'Enter image';
     }
    
       $status = $_POST['status'];
    
       $updated_at = date('y-m-d h:i:s');
       $updated_by = $_SESSION['admin_id'];
       
    
       if (count($err) == 0) 
       {
        require_once 'connectdb.php';
            $sql = "UPDATE book_categories SET name='$name', rank= '$rank', image='$image', status = '$status', updated_by = '$updated_by', updated_at = '$updated_at' WHERE id = $id";
            $connection->query($sql);
    
            if($connection->affected_rows == 1 )
            {
                $success_msg = 'update success';
            }
            else{
                $err_msg = 'update failed';
            }
       }
    }

 
    $sql = "SELECT id, name, rank, status from book_categories WHERE id = $id";
    
    $result = $connection->query($sql);
     
    $data =[];
    
    if($result-> num_rows == 1)
    {
        $row = $result->fetch_assoc();
    }
    else{
        $row = [];
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
    <h1> Update</h1>
   <div>
   <?php 
        if (isset($success_msg)) {
            echo "<p class='success'>$success_msg</p>";
        }
        if (isset($err_msg)) {
            echo "<p class='error'>$err_msg</p>";
        }
        ?>
  
   <form action="#" method="post">
            <label for="name">name</label>
            <input type="text" id="name" name="name" placeholder="Enter name" value="<?php echo isset($row['name'])?$row['name']:'' ?>">
            <?php if(isset($err['name'])){ ?>
                <span class="error"><?php echo $err['name'] ?></span>
            <?php } ?>

            <label for="rank">rank</label>
            <input type="number" id="rank" name="rank" placeholder="Enter rank" value="<?php echo isset($row['rank'])?$row['rank']:'' ?>">
            <?php if(isset($err['rank'])){ ?>
                <span class="error"><?php echo $err['rank'] ?></span>
            <?php } ?>

            <label for="image">image</label>
            <input type="file" id="image" name="image" placeholder="Enter image" value="<?php echo isset($row['image'])?$row['image']:'' ?>">
            <?php if(isset($err['image'])){ ?>
                <span class="error"><?php echo $err['image'] ?></span>
            <?php } ?>
            
            <label for="status">status</label>

            <?php  if($row['status']==1) { ?>
                <input type="radio" name="status" value="1" checked> active
                <input type="radio" name="status" value="0"> deactive
            <?php } else { ?>
                <input type="radio" name="status" value="1"> active
                <input type="radio" name="status" value="0" checked> deactive
            <?php } ?>
           
            
            <div class="login-button">
                <button type="submit" name="update" value="">update</button>
            </div>
        </form>
        <a href="logout.php">LOGOUT</a>

</div>
</body>
</html>


