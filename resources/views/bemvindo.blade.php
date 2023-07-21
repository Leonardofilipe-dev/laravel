<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina Index</title>
</head>
<body>

@if(isset($ingredientes['receita']) && is_array($ingredientes['receita']))

@foreach($ingredientes['receita'] as $ingrediente)
    <p>{{ $ingrediente }} -
    @component('components.button')
      
        Editar
    @endcomponent

    @component('components.button')
        Deletar
    @endcomponent
    </p>
@endforeach

@endif

</body>
</html>
