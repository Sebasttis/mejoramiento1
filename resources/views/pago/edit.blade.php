<form action="{{route('pago.update', $pago)}}"  method="POST">

    @csrf
    @method('put')
    
    </label>
    <br>
    <label>
    Numero de pago:
    <br>
    <input name="numero" type="text" value="{{old('numero',$pago-> numero)}}">
    <br>
    </label>
    <br>
    <label>
    Concepto:
    <br>
    <input name="concepto" type="text" value="{{old('concepto',$pago-> concepto)}}">
    <br>
    </label>
    <br>
    <label>
    Cantidad:
    <br>
    <input name="cantidad" type="text" value="{{old('cantidad',$pago-> cantidad)}}">
    <br>
    </label>
    <br>
    Fecha del pago:
    <br>
    <input name="fechapago" type="text" value="{{old('fechapago',$pago-> fechapago)}}">
    <br>
    <button  type="submit">Actualizar</button>
   
</form>