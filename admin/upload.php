<?php
include ($_SERVER['DOCUMENT_ROOT'] . '/lib/connectiondb.php');

if (isset($_POST['uploadBtn_audit']) && $_POST['uploadBtn_audit'] == 'Сохранить')
{
  if (isset($_FILES['uploadedFile']) && $_FILES['uploadedFile']['error'] === UPLOAD_ERR_OK)
  {
    // get details of the uploaded file
    $fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
    $fileName = $_FILES['uploadedFile']['name'];
    $fileSize = $_FILES['uploadedFile']['size'];
    $fileType = $_FILES['uploadedFile']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));

    // // sanitize file-name
    // $newFileName = md5(time() . $fileName) . '.' . $fileExtension;

    // check if file has one of the following extensions
    $allowedfileExtensions = array('pdf');

    if (in_array($fileExtension, $allowedfileExtensions))
    {
      // directory in which the uploaded file will be moved
      $uploadFileDir = $_SERVER['DOCUMENT_ROOT'] . '/assets/files/audit/';
      $dest_path = $uploadFileDir . $fileName;

      if(move_uploaded_file($fileTmpPath, $dest_path)) 
      {
        $message ='File is successfully uploaded.';
      }
      else 
      {
        $message = 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
      }
    }
    else
    {
      $message = 'Upload failed. Allowed file types: ' . implode(',', $allowedfileExtensions);
    }
  }
  else
  {
    $message = 'There is some error in the file upload. Please check the following error.<br>';
    $message .= 'Error:' . $_FILES['uploadedFile']['error'];
  }

    $sql = "INSERT INTO audit_posts (name, url, date) VALUES (:name, :url, :date)";
    $stmt = $pdo->prepare($sql);
    $name = filter_input(INPUT_POST, 'name');
    $stmt->bindValue(':name', $name, PDO::PARAM_STR);
    $url = 'assets/files/audit/' . $fileName;
    $stmt->bindValue(':url', $url, PDO::PARAM_STR);
    $date = filter_input(INPUT_POST, 'date');
    $stmt->bindValue(':date', $date, PDO::PARAM_STR);
    $success = $stmt->execute();


}
if (isset($_POST['uploadBtn_buh']) && $_POST['uploadBtn_buh'] == 'Сохранить')
{
  if (isset($_FILES['uploadedFile']) && $_FILES['uploadedFile']['error'] === UPLOAD_ERR_OK)
  {
    // get details of the uploaded file
    $fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
    $fileName = $_FILES['uploadedFile']['name'];
    $fileSize = $_FILES['uploadedFile']['size'];
    $fileType = $_FILES['uploadedFile']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));

    // // sanitize file-name
    // $newFileName = md5(time() . $fileName) . '.' . $fileExtension;

    // check if file has one of the following extensions
    $allowedfileExtensions = array('pdf');

    if (in_array($fileExtension, $allowedfileExtensions))
    {
      // directory in which the uploaded file will be moved
      $uploadFileDir = $_SERVER['DOCUMENT_ROOT'] . '/assets/files/buh/';
      $dest_path = $uploadFileDir . $fileName;

      if(move_uploaded_file($fileTmpPath, $dest_path)) 
      {
        $message ='File is successfully uploaded.';
      }
      else 
      {
        $message = 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
      }
    }
    else
    {
      $message = 'Upload failed. Allowed file types: ' . implode(',', $allowedfileExtensions);
    }
  }
  else
  {
    $message = 'There is some error in the file upload. Please check the following error.<br>';
    $message .= 'Error:' . $_FILES['uploadedFile']['error'];
  }

    $sql = "INSERT INTO buh_posts (name, url, date) VALUES (:name, :url, :date)";
    $stmt = $pdo->prepare($sql);
    $name = filter_input(INPUT_POST, 'name');
    $stmt->bindValue(':name', $name, PDO::PARAM_STR);
    $url = 'assets/files/buh/' . $fileName;
    $stmt->bindValue(':url', $url, PDO::PARAM_STR);
    $date = filter_input(INPUT_POST, 'date');
    $stmt->bindValue(':date', $date, PDO::PARAM_STR);
    $success = $stmt->execute();

}
if (isset($_POST['uploadBtn_info']) && $_POST['uploadBtn_info'] == 'Сохранить')
{
  if (isset($_FILES['uploadedFile']) && $_FILES['uploadedFile']['error'] === UPLOAD_ERR_OK)
  {
    // get details of the uploaded file
    $fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
    $fileName = $_FILES['uploadedFile']['name'];
    $fileSize = $_FILES['uploadedFile']['size'];
    $fileType = $_FILES['uploadedFile']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));

    // // sanitize file-name
    // $newFileName = md5(time() . $fileName) . '.' . $fileExtension;

    // check if file has one of the following extensions
    $allowedfileExtensions = array('pdf');

    if (in_array($fileExtension, $allowedfileExtensions))
    {
      // directory in which the uploaded file will be moved
      $uploadFileDir = $_SERVER['DOCUMENT_ROOT'] . '/assets/files/info/';
      $dest_path = $uploadFileDir . $fileName;

      if(move_uploaded_file($fileTmpPath, $dest_path)) 
      {
        $message ='File is successfully uploaded.';
      }
      else 
      {
        $message = 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
      }
    }
    else
    {
      $message = 'Upload failed. Allowed file types: ' . implode(',', $allowedfileExtensions);
    }
  }
  else
  {
    $message = 'There is some error in the file upload. Please check the following error.<br>';
    $message .= 'Error:' . $_FILES['uploadedFile']['error'];
  }

    $sql = "INSERT INTO info_posts (name, url, date) VALUES (:name, :url, :date)";
    $stmt = $pdo->prepare($sql);
    $name = filter_input(INPUT_POST, 'name');
    $stmt->bindValue(':name', $name, PDO::PARAM_STR);
    $url = 'assets/files/info/' . $fileName;
    $stmt->bindValue(':url', $url, PDO::PARAM_STR);
    $date = filter_input(INPUT_POST, 'date');
    $stmt->bindValue(':date', $date, PDO::PARAM_STR);
    $success = $stmt->execute();

}
if (isset($_POST['uploadBtn_price']) && $_POST['uploadBtn_price'] == 'Сохранить')
{
  if (isset($_FILES['uploadedFile']) && $_FILES['uploadedFile']['error'] === UPLOAD_ERR_OK)
  {
    // get details of the uploaded file
    $fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
    $fileName = $_FILES['uploadedFile']['name'];
    $fileSize = $_FILES['uploadedFile']['size'];
    $fileType = $_FILES['uploadedFile']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));

    // // sanitize file-name
    // $newFileName = md5(time() . $fileName) . '.' . $fileExtension;

    // check if file has one of the following extensions
    $allowedfileExtensions = array('pdf');

    if (in_array($fileExtension, $allowedfileExtensions))
    {
      // directory in which the uploaded file will be moved
      $uploadFileDir = $_SERVER['DOCUMENT_ROOT'] . '/assets/files/price/';
      $dest_path = $uploadFileDir . $fileName;

      if(move_uploaded_file($fileTmpPath, $dest_path)) 
      {
        $message ='File is successfully uploaded.';
      }
      else 
      {
        $message = 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
      }
    }
    else
    {
      $message = 'Upload failed. Allowed file types: ' . implode(',', $allowedfileExtensions);
    }
  }
  else
  {
    $message = 'There is some error in the file upload. Please check the following error.<br>';
    $message .= 'Error:' . $_FILES['uploadedFile']['error'];
  }

    $sql = "INSERT INTO price_posts (name, url, date) VALUES (:name, :url, :date)";
    $stmt = $pdo->prepare($sql);
    $name = filter_input(INPUT_POST, 'name');
    $stmt->bindValue(':name', $name, PDO::PARAM_STR);
    $url = 'assets/files/price/' . $fileName;
    $stmt->bindValue(':url', $url, PDO::PARAM_STR);
    $date = filter_input(INPUT_POST, 'date');
    $stmt->bindValue(':date', $date, PDO::PARAM_STR);
    $success = $stmt->execute();

}
if (isset($_POST['uploadBtn_spend']) && $_POST['uploadBtn_spend'] == 'Сохранить')
{
  if (isset($_FILES['uploadedFile']) && $_FILES['uploadedFile']['error'] === UPLOAD_ERR_OK)
  {
    // get details of the uploaded file
    $fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
    $fileName = $_FILES['uploadedFile']['name'];
    $fileSize = $_FILES['uploadedFile']['size'];
    $fileType = $_FILES['uploadedFile']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));

    // // sanitize file-name
    // $newFileName = md5(time() . $fileName) . '.' . $fileExtension;

    // check if file has one of the following extensions
    $allowedfileExtensions = array('pdf');

    if (in_array($fileExtension, $allowedfileExtensions))
    {
      // directory in which the uploaded file will be moved
      $uploadFileDir = $_SERVER['DOCUMENT_ROOT'] . '/assets/files/spend/';
      $dest_path = $uploadFileDir . $fileName;

      if(move_uploaded_file($fileTmpPath, $dest_path)) 
      {
        $message ='File is successfully uploaded.';
      }
      else 
      {
        $message = 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
      }
    }
    else
    {
      $message = 'Upload failed. Allowed file types: ' . implode(',', $allowedfileExtensions);
    }
  }
  else
  {
    $message = 'There is some error in the file upload. Please check the following error.<br>';
    $message .= 'Error:' . $_FILES['uploadedFile']['error'];
  }

    $sql = "INSERT INTO spend_posts (name, url, date) VALUES (:name, :url, :date)";
    $stmt = $pdo->prepare($sql);
    $name = filter_input(INPUT_POST, 'name');
    $stmt->bindValue(':name', $name, PDO::PARAM_STR);
    $url = 'assets/files/spend/' . $fileName;
    $stmt->bindValue(':url', $url, PDO::PARAM_STR);
    $date = filter_input(INPUT_POST, 'date');
    $stmt->bindValue(':date', $date, PDO::PARAM_STR);
    $success = $stmt->execute();

}
header("Location: index.php");
// echo $dest_path;
?>