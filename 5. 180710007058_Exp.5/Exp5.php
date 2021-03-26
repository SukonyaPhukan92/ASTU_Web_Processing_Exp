

<?php
$target_dir = "Uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$len = isset($cOTLdata['char_data']) ? count($cOTLdata['char_data']) : 0;


$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$number = $_POST["ContNo"];
$emailid = $_POST["emailid"];
$website = $_POST["website"];
$address = $_POST["address"];


$course = $_POST["course"];
$SelectSem = $_POST["SelectSem"];
$Domain = (isset($_POST["Subject"])) ? $_POST["Domain"] : array();
$Starting = $_POST["Starting"];
$days = $_POST["days"];
$Icommit = $_POST["Icommit"];
$comments = $_POST["comments"];


echo "First Name: ".$firstname."</br>";
echo "Last Name: ".$lastname."</br>";
echo "Mobile Number: ".$number."</br>";
echo "Email: ".$emailid."</br>";
echo "Personal Website: ".$website."</br>";
echo "Address: ".$address."</br>";
echo "Course: ".$course."</br>";
echo "Current Semester: ".$SelectSem."</br>";
echo "Preferred Domains: ";
if (count($Domain) > 0) {
    foreach ($Domain as $Domain) {
        echo $Domain .' ';
    }
} else {
    echo "No domain has been selected";
}
echo "</br>";
echo "Intership starting date: ".$Starting."</br>";
echo "Period of Intership: ".$days." days</br>";
echo "Query/Suggestion: ".$comments."</br>";
echo "Commitment: ".$Icommit."</br>";



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


if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}


if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}


if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";

}
else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
 
 
if(isset($_POST['submit'])){
	
	$to = $_POST["emailid"] ;
	$subject = "Confirmation of Application Submission.";
	$txt = "Thank you so much for your submission. We'll contact you soon. ";
	$headers = "From: phukansukonyaOfficial@gmail.com" . "\r\n";

	mail($to,$subject,$txt,$headers);
}
?>
