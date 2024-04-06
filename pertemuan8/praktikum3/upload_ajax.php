<?php
if (isset($_FILES['file'])){
    $errors = array();
    $file_name = $_FILES['file']['name'];
    $file_size = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_type = $_FILES['file']['type'];
    $file_ext = strtolower (end(explode('.', $_FILES['file']['name'])) . "");
    $allowed_extensions = array("jpg", "jpeg", "png", "gif");

    if (in_array($file_ext, $allowed_extensions) === false){
        $errors[] ="Ekstensi file yang diizinkan adalah pdf, doc, docx, txt";
    }

    if ($file_size > 2097152  ){ //2mb
        $errors[] = 'Ukuran file tidak boleh lebih dari 2 MB';
    }

    if (empty($errors) == true ){
        move_uploaded_file($file_tmp, "documents/" . $file_name);
        echo "Gambar berhasil diunggah"; 
    } else {
        echo implode(" " , $errors);
    }
}
?>