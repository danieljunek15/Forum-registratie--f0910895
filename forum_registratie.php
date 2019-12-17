
<!DOCTYPE html>
<html>
    <head>
    <h4>Registratie pagina:</h4>
        <link rel="stylesheet" href="styles.css">
        <title>Bit Academy php registratie forum</title>
    </head>
    <body>
    <form method="post" action="registratie_handler.php"> 
    <h3 id="Forum_registratie" >Forum registratie</h3>
        <div class="input-group">
        <input type="text" placeholder="Name" name="UserNameInput" id="NameInputBox" >
        <label>Username</label>
        </div>
        <br>
        <div class="input-group">
        <input type="email" placeholder="E-mail" name="MailInput" id="MailInputBox" >
        <label>E-mail</label>
        </div>
        <br>
        <div class="input-group">
        <input type="number" placeholder="Age" name="AgeInput" min="12" max="150" id="AgeInputBox" >
        </div>
        <br>
        <div>
        <button type="submit" class="btn" name="ButtonLinkNewPage" id="ButtonBox" >Submit</button>
        </div>
    </form>
    <?php
    ?>
    </body>
</html>