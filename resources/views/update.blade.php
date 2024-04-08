<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="{{route('update.update',['idd'=>$idU])}}" method="post">
            @csrf
            @method('PUT')
            <p>Date de naissance <input type="year" name="dtn"> </p>
            <p> <button type="submit">Valider</button> </p>
        </form>
</body>
</html>