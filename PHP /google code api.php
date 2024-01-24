<?php
error_reporting(0); 
$url = "https://accounts.google.com/o/oauth2/v2/auth?response_type=code&access_type=offline&client_id=1006215932201-3kmqf1kkkrsurt1msh85hi3i0qc7i6oh.apps.googleusercontent.com&redirect_uri=https://rccrmsolutions.com/crmApi/redirect.php&scope=https://www.googleapis.com/auth/calendar https://www.googleapis.com/auth/calendar.events";
?>
<a href="<?php echo $url; ?>">Redirect Url</a>
<br>
<?php
echo "code : " .$_GET['code'];
echo "<br>";
?>
