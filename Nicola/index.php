<?php

include('header.php');

?>
<div class="container">
  <div class="row">
    <div class="col-lg-12 col-lg-offset-2">
<form action="" method="post">
  <div class="row">
  <div class="col-md-6">
    <h2>Ajouter un serveur</h2>
  <div class="form-group">
    <label for="adresse-ip"><p>Indiquez le nom de serveur : </p></label>
    <input type="text" name="adresse-ip" class="form-control col-md-4" id="adresse-ip">
    </div>

    <div class="form-group">
      <label for="adresse-ip"><p>Indiquez l'adresse IP du serveur : </p></label>
      <input type="text" name="adresse-ip" class="form-control col-md-4" id="adresse-ip">
      </div>

  <div class="form-group">
        <input type="submit" class="btn btn-secondary" name="submit-ip" value="Ajouter le serveur">
  </div>
  </form>
</div>
</div>
</div>

<div class="row">
<div class="col-lg-12 col-lg-offset-2">
  <table class="table">
    <thead class="thead-dark">
    <tr>
      <th scope="col">Nom du server</th>
      <th scope="col">Adresse IP</th>
      <th scope="col">Temps de latence</th>
      <th scope="col">Etat du serveur</th>
      <th scope="col">Notation</th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td>ABC-2X_57324</td>
      <td>192.0.0.1</td>
      <td>90 ms</td>
      <td>UP</td>
      <td>★★★☆☆</td>
    </tr>
  </tbody>
  </table>
</div>
  </div>

<?php

include('footer.php')

 ?>
