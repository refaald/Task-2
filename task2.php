
<html>
<head>
<title>second Task </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $db ="task2";
 
 // Create connection
$conn = mysqli_connect($servername, $username, $password,$db);
/*
?>

<?php 

if (isset($_POST['Stop'])) {

$sql = "INSERT INTO `bottons` ( `Forward`, `Rhit`, `Stop`, `Left`, `Backward`) VALUES ( '".$_POST['botton']."','".$_POST['botton1']."','".$_POST['botton2']."','".$_POST['botton3']."','".$_POST['botton4']."')";
$result = $conn->query($sql);
 }
 ?>
<?php
    
if (isset($_POST['Forward'])) {

$sql = "INSERT INTO `bottons` (`Forward`, `Rhit`, `Stop`, `Left`, `Backward`) VALUES ('".$_POST['botton']."','".$_POST['botton1']."','".$_POST['botton2']."','".$_POST['botton3']."','".$_POST['botton4']."')";
$result = $conn->query($sql);
     }
 ?>
*/
</style>

<center>
<head>
<h1>Robot Control Panel</h1>

<input type="submit" value=" Forward &nbsp" id="botton"onclick="alert('f')">
<br><br>
<input type="submit" value=" Rhit &nbsp " id="botton1" onclick="alert('r')">&nbsp; &nbsp;&nbsp;
<input type="submit" value=" Stop &nbsp " id="botton2" onclick="alert('s')">&nbsp;&nbsp;&nbsp;
<input type="submit" value=" Left &nbsp" id="botton3" onclick="alert('l')">
<br><br>
<input type="submit" value=" Backward &nbsp" id="botton4" onclick="alert('b')">

 <script>
  window.watsonAssistantChatOptions = {
      integrationID: "e05e660a-5849-463b-80d7-e900a6121654", // The ID of this integration.
      region: "eu-de", // The region your integration is hosted in.
      serviceInstanceID: "b12d30b0-622f-41cd-bd34-2cae2fdefe03", // The ID of your service instance.
      onLoad: function(instance) { instance.render(); }
    };
  setTimeout(function(){
    const t=document.createElement('script');
    t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
    document.head.appendChild(t);
  });
</script>
</style>

    </center>
    </head>
    </head>
    
