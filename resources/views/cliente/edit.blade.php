<form action="{{route('cliente.update', $cliente)}}"  method="POST">

    @csrf
    @method('put')
    
    </label>
    <br>
    <label>
    Codigo del cliente:
    <br>
    <input name="codigo" type="text" value="{{old('codigo',$cliente-> codigo)}}">
    <br>
    </label>
    <br>
    <label>
    Domicilio:
    <br>
    <input name="domicilo" type="text" value="{{old('domicilo',$cliente-> domicilo)}}">
    <br>
    </label>
    <br>
    <label>
    Telefono:
    <br>
    <input name="telefono" type="text" value="{{old('telefono',$cliente-> telefono)}}">
    <br>
    </label>
    <br>
    Numero social:
    <br>
    <input name="numsocial" type="text" value="{{old('numsocial',$cliente-> numsocial)}}">
    <br>
    <button  type="submit">Actualizar</button>
   
</form>