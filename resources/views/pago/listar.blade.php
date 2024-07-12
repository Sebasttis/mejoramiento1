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

    <h1>Lista de pago</h1>

    @foreach ($pag as $pago)
    <tr>
        <br>
        
        <td>{{$pago->numero}}</td>
        <td>{{$pago->concepto}}</td>
        <td>{{$pago->cantidad}}</td>
        <td>{{$pago->fechapago}}</td>
    
        
        <td><a href="{{route('pago.show',$pago->id)}}">Detalle</a></td>
        <td><a href="{{route('pago.edit',$pago->id)}}">Editar</a></td>
        <form action="{{route('pago.destroy',$pago->id)}}" method="POST">
            @csrf
            @method('delete')
            <button type="submit">Eliminar</button>
            </form>
        <br>
       
       
    </tr>
@endforeach
   
</body>
</html>