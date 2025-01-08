<?php

$allowed_file_types = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
$max_file_size = 1 * 1024 * 1024; 


$error_message = "";
$success_message = "";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if (isset($_FILES['cv']) && $_FILES['cv']['error'] == 0) {
        
        $file_name = $_FILES['cv']['name'];
        $file_tmp_name = $_FILES['cv']['tmp_name'];
        $file_size = $_FILES['cv']['size'];
        $file_type = $_FILES['cv']['type'];
        
        
        if (!in_array($file_type, $allowed_file_types)) {
            $error_message = "Invalid file type. Only PDF and DOC/DOCX files are allowed.";
        }
        
        elseif ($file_size > $max_file_size) {
            $error_message = "File size exceeds the maximum allowed size of 1 MB.";
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
    <title>Upload CV</title>
</head>
<body>

<h2>Upload Your CV</h2>

<?php if ($error_message): ?>
    <p style="color: red;"><?php echo $error_message; ?></p>
<?php endif; ?>

<?php if ($success_message): ?>
    <p style="color: green;"><?php echo $success_message; ?></p>
<?php endif; ?>

<form action="29.php" method="POST" enctype="multipart/form-data">
    <label for="cv">Choose CV (PDF/DOC/DOCX):</label>
    <input type="file" name="cv" id="cv" required><br><br>

    <input type="submit" value="Upload CV">
</form>

</body>
</html>
