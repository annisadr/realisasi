<?php
	include '../../config/koneksi.php';

    $id_user           = $_POST['id_user'];



    $target_dir = "../../uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 2000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" && $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG"
    && $imageFileType != "GIF" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";

    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

   
   $update     = "UPDATE user SET foto='$target_file' WHERE id_user='$id_user'";
        $updateuser = mysqli_query($konek, $update)or die(mysqli_error());

        if ($updateuser)
    {
        echo "<br><br><br><strong><center><i><h1>Foto Profil Berhasil Diubah</h1>";
        // echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../operator/index.php?page=profil&&id_user='.$data['id_user'].'&&kdunit='.$data['kdunit'].'">';
        print "
        <script>
        history.back(-2);
        </script>";
    }
     


?>
