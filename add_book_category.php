<?php
include_once('check_userlogin.php');

require_once('check.php');
    $err = [];
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
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

   $created_at = date('y-m-d h:i:s');
   $created_by = $_SESSION['admin_id'];
   

   if (count($err) == 0) 
   {
    require_once 'connectdb.php';
        $sql = "INSERT INTO book_categories ( name, rank, image, status, created_by, created_at) VALUES ('$name', '$rank', '$image', '$status', '$created_by', '$created_at')";
        $connection->query($sql);
        

        if($connection->affected_rows == 1 && $connection-> insert_id > 0)
        {
            $success_msg = 'category insert success';
        }
        else{
            $err_msg = 'category insert failed';
        }
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
    </style>
<body>
    <a href="logout.php">LOGOUT</a>
    <div class="login-box">
        
        <h2>Validate and Store</h2>

        <?php if(isset($err_msg)){ ?>
                <p class="error_msg"><?php echo $err_msg ?></p>
        <?php } ?>
        <?php if(isset($success_msg)){ ?>
                <p class="success_msg"><?php echo $success_msg ?></p>
        <?php } ?>


        <?php if(isset($_GET['err']) && $_GET['err']==1){ ?>
                <p class="error_msg">Please login to continue</p>
        <?php } ?>

        <form action="#" method="post">
            <label for="name">name</label>
            <input type="text" id="name" name="name" placeholder="Enter name" value="<?php echo isset($name)?$name:'' ?>">
            <?php if(isset($err['name'])){ ?>
                <span class="error"><?php echo $err['name'] ?></span>
            <?php } ?>

            <label for="rank">rank</label>
            <input type="number" id="rank" name="rank" placeholder="Enter rank" value="<?php echo isset($rank)?$rank:'' ?>">
            <?php if(isset($err['rank'])){ ?>
                <span class="error"><?php echo $err['rank'] ?></span>
            <?php } ?>

            <label for="image">image</label>
            <input type="file" id="image" name="image" placeholder="Enter image" value="<?php echo isset($image)?$image:'' ?>">
            <?php if(isset($err['image'])){ ?>
                <span class="error"><?php echo $err['image'] ?></span>
            <?php } ?>
            
            <label for="status">status</label>
           <input type="radio" name="status" value="1"> active
           <input type="radio" name="status" value="0" checked> deactive
            
            <div class="login-button">
                <button type="submit" name="save" value="">Save</button>
            </div>
        </form>
    </div>
</body>
</html>


