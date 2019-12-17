<DOCTYPE html>
<html>
<head>
<h4>Bevestegings pagina:</h4>
<link rel="stylesheet" href="styles.css">
<title>Bit Academy php registratie forum</title>
</head>
<body>
    <h3 id="Forum_registraties">Forum registratie</h3>
    <form action="forum_registratie.php" >
    <h2><?php echo "Your username:" . " " . $_POST["UserNameInput"]; ?></h2>
    <h2><?php echo "Your E-mail:" . " " . $_POST["MailInput"]; ?></h2>
    <h2><?php echo "Your age:" . " " . $_POST["AgeInput"]; ?></h2>
    
    </form>
</body>
</html>