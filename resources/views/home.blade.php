<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>FORMULAIRE</h1>

    <form action="/gift-card" method="POST">

        <input type="number" name="price" min="10" max="10000" placeholder="Prix">

        <h3> Informations du bénéficiaire : </h3>
        <hr>
        <input type="text" name="bLastname" placeholder="Nom">
        <hr>
        <input type="text" name="bFirstname" placeholder="Prénom">

        <h3> Informations de l'offrant : </h3>
        <hr>
        <input type="text" name="oLastname" placeholder="Nom">
        <hr>
        <input type="text" name="oFirstname" placeholder="Prénom">

        <h3> ***** </h3>
        <hr>
        <input type="submit" value="Valider">

    </form>

</body>

</html>