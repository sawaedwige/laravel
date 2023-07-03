<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
</head>
<body>

  <form id="contact" action="ajouter_etudiant_traitement" method="post">
  <div class="login-page">
  <div class="form">
    <form class="register-form">
    <label  for="nom">nom : </label>
      <input type="text" placeholder="nom" required>
      <label for="prenom">prenom : </label>
      <input type="text" placeholder="prenom"required>
      <label  for="email">email :</label>
      <input type="text" placeholder="email"/>
      <label  for="">date_de_naissance : </label>
      <input type="date" id="Date_de_naissance" name="date_de_naissance" required> 
      <label  for="email">telephone :</label>
      <input type="text" placeholder="telephone"/>
      <label for="validé">Genre: </label>
  <select class="option5"name="genre" id="" required >
    <option>Genre</option>
    <option>Masuclin</option>
    <option>Féminin</option>
  </select><br><br>
      <button>ajouter</button>
      <p class="message">enreggistré un etudiant <a href="#">cliquez</a></p>
    </form>
   
<script src="script/main.js"></script>
</body>
</html>