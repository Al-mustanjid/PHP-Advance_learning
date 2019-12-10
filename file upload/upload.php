<?php
//check image info
// if($_POST='submit'){
//     echo '<pre>';
//     var_dump($_FILES);
// }

//moving uploads file to a new folder
if($_POST='submit'){
    if($_FILES['file']['error'] > 0){
        switch($_FILES['file']['error']){
          case 1 : echo 'Uploaded file exceeds maximum file size';
          break;
          case 2 : echo 'Uploaded file exceeds maximum file size mentioned in HTML';
          break;
          case 3 : echo 'Uploaded file partially uploaded';
          break;
          case 4 : echo 'No file uploaded';
          break;
          case 6 : echo 'No temporary directory specified in php.ini';
          break;
          case 7 : echo 'Uploaded file writing to disk failed';
          break;
          case 8 : echo 'File upload stopped by extension';
          break;
      }
      return;
    }
    if($_FILES['file']['type']=='image/jpeg' || $_FILES['file']['type']=='image/png' 
    || $_FILES['file']['type']=='image/jpg' || $_FILES['file']['type']=='image/gif' ){
        $uploads_folder = 'C:\xampp\htdocs\phpAdvance\file upload\upload';
        move_uploaded_file($_FILES['file']['tmp_name'], $uploads_folder.$_FILES['file']['name']);
        echo "File uploaded successfully";
    }else{
        echo "Select only jpeg, png, gif image and image must not exceed 10mb";
    }
}else{
    echo "not supported format";
}