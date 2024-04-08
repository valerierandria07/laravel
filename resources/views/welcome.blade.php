<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome</title>
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
           @foreach($users as $user)
           <p>
                 <a href="{{route('update.page',['id' => $user -> id , 'nom'=>  $user -> nom])}}"> {{ $user -> nom }} {{ $user -> annee }}</a>
           </p>
           
           @endforeach
    </body>
</html>
