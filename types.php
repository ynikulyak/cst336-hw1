<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>
   Computer Viruses
 </title>
 <link href="css/styles.css" rel="stylesheet" type="text/css">
 <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
</head>
<body>
  <div class="main-layout">

   <div class="nav">
    <div>
     <img id="logo" src="img/logo.png" alt="Logo">
   </div>
   <div id="home">
    <a href="index.php">Home</a>
  </div>
  <div id="history">
    <a href="history.php">History</a>
  </div>
  <div id="types">
    <a class="active" href="types.php">Types of Viruses</a>
  </div>
  <div id="recovery">
    <a href="recovery.php">Prevention</a>
  </div>
</div>

<div class="main-panel">
 <div class="text-panel">
      <h1 id="warning">Click on any virus type for more information.</h1>
<div id="div-container">
  <figure id="image-container">
    <img id="choose-type" src="img/types.png" usemap="#image-map">

    <map name="image-map">
      <area alt="macro-virus" href="macro-virus.php" coords="58,121,31" shape="circle">
      <area alt="memory-virus" href="memory-viruses.php" coords="59,184,31" shape="circle">
      <area alt="overwrite viruses" href="overwrite-viruses.php" coords="99,234,32" shape="circle">
      <area alt="direct-viruses" href="direct-viruses.php" coords="180,242,39" shape="circle">
      <area alt="directory-viruses" href="directory-viruses.php" coords="262,240,39" shape="circle">
      <area alt="web-viruses" href="web-viruses.php" coords="341,239,36" shape="circle">
      <area alt="multi-viruses" href="multi-viruses.php" coords="383,179,37" shape="circle">
      <area alt="boot" href="boot.php" coords="106,69,38" shape="circle">
      <area alt="email-viruses" href="email-viruses.php" coords="186,57,41" shape="circle">
      <area alt="trojans" href="trojans.php" coords="268,56,40" shape="circle">
      <area alt="worm" href="worm.php" coords="341,68,33" shape="circle">
      <area alt="poly-viruses" href="poly-viruses.php" coords="329,115,388,81,436,113,424,144,342,139" shape="poly">
    </map>
    </figure>
      <div id="links-container">
       <a id="read-in-types" class="read-more" href="recovery.php">Read more...</a><br>

       <p id="types-info">Information source can be seen <a href="https://www.assignmenthelp.net/assignment_help/What-is-Computer-Virus">here</a>.<p>
     </div> 
   </div>
   </div>
 </div>
</div>
<footer>
  CST 336: Internet Programming. 2019&copy; Nikulyak<br />
  <strong>Disclaimer:</strong> The information in this webpage is fictitious. <br />
  It is used for academic purposes only.
</footer>	
</body>
</html>
