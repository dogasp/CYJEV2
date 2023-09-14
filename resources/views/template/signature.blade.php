<!DOCTYPE html>
<html>
<meta charset="utf-8">
<body>

<h2>SIGNATURE CYJE</h2>

<form action="{{ route('resultSignature') }}" method="POST">
  <label for="nom">Nom et Prénom</label><br>
  <input type="text" id="nom" name="nom" value="Nom Prenom"><br>
  <label for="role">Role</label><br>
  <input type="text" id="role" name="role" value="Role"><br>
  <label for="telephone">Téléphone</label><br>
  <input type="text" id="telephone" name="telephone" value="0606060606"><br>
  <label for="mail">Mail</label><br>
  <input type="text" id="mail" name="mail" value="mail@cyje.fr"><br>
  <label for="adresse">Adresse</label><br>
  <input type="text" id="adresse" name="adresse" value="Avenue du Parc, 95000 Cergy"><br><br>
  <input type="submit" value="Submit">
  @csrf <!-- {{ csrf_field() }} -->
</form> 

</body>
</html>			