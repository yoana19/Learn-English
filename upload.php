<?php

if (isset($_POST['photo-submit'])) {
    
    $file = $_FILES['file'];
    
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];
    
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    
    $allowed = array('jpg', 'jpeg', 'png');
    
    if (in_array($fileActualExt, $allowed)) {
        
        if ($fileError === 0) {
            
            if ($fileSize < 100000) {
                
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = 'img/uploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                header("Location: profilepage.php?uploadsuccess");
                
            } else {
                
                echo "Файлът Ви е твърде голям!";    
                
            }
            
        } else {
            
            echo "Имаше грешка при качването на файла Ви!";
            
        }
        
    } else {
        
        echo "Не може да качвате файлове от този вид!";
        
    }
}
