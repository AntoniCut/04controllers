<?php

    //  *************************************************************
    //  **********  /resources/views/user/index.blade.php  **********
    //  *************************************************************

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Home - 04controllers </title>
</head>

<body>
    
    <h1> ********** Lista de Usuarios  ********** </h1>
    
    <!--  2ª Forma  -->
    <h4> ----- 1ª Forma ----- </h4>
    @if($users->isEmpty())
        <p> The user list is empty. </p>
     @else
        <ul>
            @foreach ($users as $user)
                <li> {{ $user->name }} -- Edad: {{ $user->age }} </li>
            @endforeach
        </ul>
    @endif
    
    <!--  2ª Forma  -->
    <h4> ----- 2ª Forma ----- </h4>
    <ul>
        @forelse ($users as $user)
            <li> {{ $user->name }} -- Edad: {{ $user->age }} </li>
            @empty
                <li> List empty. </li>
        @endforelse
    </ul>

</body>
</html>