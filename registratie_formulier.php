<!DOCTYPE html>
<html lang="en">
<head>
    <title>Chirpify</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<section class="homepage homeregistratie">
  <div class="sidebar">
    <img class="logo" src="img/chitter.png" width="48px" height="48px" alt="chitterlogo">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="index.php">Profile</a></li>
    </ul>
    <div class="spacer"></div>


    </div>
  </div>
    <div class="feed">
    <h1>Registratieformulier</h1>
    <form action="">
        <label for="voornaam">Voornaam</label>
        <input type="text" id="voornaam" name="voornaam" required>
        <label for="achternaam">Achternaam</label>
        <input type="text" id="achternaam" name="achternaam" required>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
        <label for="gebruikersnaam">Username</label>
        <input type="text" id="gebruikersnaam" name="gebruikersnaam" required>
        <label for="wachtwoord">Wachtwoord</label>
        <input type="password" id="wachtwoord" name="wachtwoord" required>
        <label for="wachtwoord">Wachtwoord herhalen</label>
        <input type="password" id="wachtwoord" name="wachtwoord" required>
        <input type="submit" value="Registreren">
    </form>
    </div>
    <div class="featured">
  <a class="login" href="">Login</a>
  <a class="alreadysigningin" >Sign up</a>

  </div>
</section>
</body>
</html>