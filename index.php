<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  action="thanks.php"  method="post">
    <div>
      <label  for="lastName">Nom :</label>
      <input  type="text"  id="lastName"  name="lastName">
    </div>
    <div>
      <label  for="firstName">Prénom :</label>
      <input  type="text"  id="firstName"  name="firstName">
    </div>
    <div>
      <label  for="num">Tel :</label>
      <input  type="text"  id="num"  name="num">
    </div>
    <div>
      <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="courriel">
    </div>
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="message"></textarea>
    </div>
    <select name="liste" id="liste">
      <option value="">--Please choose an option--</option>
      <option value="jean">jean</option>
      <option value="muriel">muriel</option>
      <option value="tomtom">tomtom</option>
      <option value="nana">nana</option>
    </select>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>
</body>
</html>