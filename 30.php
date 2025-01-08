<?php
$allowed_file_types = ['image/png', 'image/jpeg'];
$max_file_size = 500 * 1024; 

$error_message = "";
$success_message = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if (isset($_FILES['profile_image']) && $_FILES['profile_image']['error'] == 0) {
        
        $file_name = $_FILES['profile_image']['name'];
        $file_tmp_name = $_FILES['profile_image']['tmp_name'];
        $file_size = $_FILES['profile_image']['size'];
        $file_type = $_FILES['profile_image']['type'];

        
        if (!in_array($file_type, $allowed_file_types)) {
            $error_message = "Invalid file type. Only PNG and JPEG files are allowed.";
        }
       
        elseif ($file_size > $max_file_size) {
            $error_message = "File size exceeds the maximum allowed size of 500 KB.";
        }
        
        else {
            $target_dir = "uploads/"; 
            $target_file = $target_dir . basename($file_name);
            
            
            if (!file_exists($target_dir)) {
                mkdir($target_dir, 0777, true);
            }
            
            if (move_uploaded_file($file_tmp_name, $target_file)) {
                $success_message = "The file ". basename($file_name). " has been uploaded successfully.";
            } else {
                $error_message = "Sorry, there was an error uploading your file.";
            }
        }
    } else {
        $error_message = "No file uploaded or there was an error with the file.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Profile Image</title>
</head>
<body>

<h2>Upload Your Profile Image</h2>

<?php if ($error_message): ?>
    <p style="color: red;"><?php echo $error_message; ?></p>
<?php endif; ?>

<?php if ($success_message): ?>
    <p style="color: green;"><?php echo $success_message; ?></p>
<?php endif; ?>

<form action="30.php" method="POST" enctype="multipart/form-data">
    <label for="profile_image">Choose Profile Image (PNG/JPEG):</label>
    <input type="file" name="profile_image" id="profile_image" required><br><br>

    <input type="submit" value="Upload Image">
</form>

</body>
</html>
