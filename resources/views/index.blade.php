<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <form action="{{route('validation.store')}}" method="post">
                @csrf
                <p> <input type="text" name="nom" placeholder="Entrez votre nom"> </p>
                <p> <input type="text" name="prenom" placeholder="Entrez votre prenom"> </p>
                <p> <input type="year" name="dtn" placeholder="Entrez votre date de naissance"> </p>
                <p> <button type="submit">Valider</button> </p>
    </form>
</body>
</html>