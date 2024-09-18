<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>My First webpage, with MDL</title>
  </head>

  <body>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  
    <h1>Hello, World!</h1>
    <!-- Numeric Textfield with Floating Label -->
    <form action="#">
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="sample4">
        <label class="mdl-textfield__label" for="sample4">Number...</label>
        <span class="mdl-textfield__error">Input is not a number!</span>
      </div>
    </form>
    <!-- Colored FAB button with ripple -->
    <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored">
      <i class="material-icons">add</i>
    </button>
    <form action="welcome.php" method="POST">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>
  </body>
  Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>
</html>