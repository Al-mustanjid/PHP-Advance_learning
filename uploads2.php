<?php
if(isset($_POST['submit'])){
    if($_FILES['file']['type'] == 'image/png' || $_FILES['file']['type'] == 'image/jpeg' || 
    $_FILES['file']['type'] == 'image/jpg' || $_FILES['file']['type'] == 'image/gif'){
        $upload_folder = 'C:\xampp\htdocs\phpAdvance\u';
        move_uploaded_file($_FILES['file']['tmp_name'], $upload_folder.$_FILES['file']['name']);
        echo "File stored successfully";
    }else{
        echo 'file is not supported. Upload Only jpg, png, gif';
    }
}