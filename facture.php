<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Competitions | Association Des Sports</title>
</head>
<?php
//unfilled form to pay a facture
?>
<body>
    <center>
    <h1>Facture</h1>
    <form action="facture.php" method="post">
        <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nom">
        </div>
        <div class="form-group">
            <label for="email">Mail</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Mail">
        </div>
        <div class="form-group">
            <label for="phone">Tel</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Tel">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Address">
        </div>
        <div class="form-group">
            <label for="city">Ville</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Ville">
        </div>
        <div class="form-group">
            <label for="zip">Code Postale</label>
            <input type="text" class="form-control" id="zip" name="zip" placeholder="Code Postale">
        </div>
        <div class="form-group">
            <label for="montant">Montant</label>
            <input type="number" class="form-control" id="montant" name="montant" placeholder="Montant">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </center>
</body>
</html>
