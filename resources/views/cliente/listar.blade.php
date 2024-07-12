<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        h1 {
            color: red;
        }
    </style>
</head>
<body>

    <h1>Lista de cliente</h1>

    @foreach ($lib as $cliente)
    <tr>
        <br>
        
        <td>{{$cliente->codigo}}</td>
        <td>{{$cliente->domicilo}}</td>
        <td>{{$cliente->telefono}}</td>
        <td>{{$cliente->numsocial}}</td>
    
        
        <td><a href="{{route('cliente.show',$cliente->id)}}">Detalle</a></td>
        <td><a href="{{route('cliente.edit',$cliente->id)}}">Editar</a></td>
        <form action="{{route('cliente.destroy',$cliente->id)}}" method="POST">
            @csrf
            @method('delete')
            <button type="submit">Eliminar</button>
            </form>
        <br>
       
       
    </tr>
@endforeach
   
</body>
</html>