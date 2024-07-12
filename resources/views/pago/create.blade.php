<form action="{{route('pago.store')}}" method="POST" enctype="multipart/form-data">

    @csrf
   
    <label>
      
        <br>
       
        Numero de pago:
        <br>
        <input type="text" name="numero">
    </label>
   
    <br>
    <label>
        Concepto:
        <br>
        <input type="text" name="concepto">
    </label>
   
    <br>
    <label>
        Cantidad:
        <br>
        <input type="text" name="cantidad">
    </label>
 
    <br>
    <label>
        Fecha del pago:
        <br>
        <input type="text" name="fechapago">
    </label>
   
    <br>
    <br><br>
    <button type="submit">Enviar Formulario:</button>
    </form>
   