<form action="{{route('cliente.store')}}" method="POST" enctype="multipart/form-data">

    @csrf
   
    <label>
      
        <br>
       
        Codigo del cliente:
        <br>
        <input type="text" name="codigo">
    </label>
   
    <br>
    <label>
        Domicilio:
        <br>
        <input type="text" name="domicilo">
    </label>
   
    <br>
    <label>
        Telefono:
        <br>
        <input type="text" name="telefono">
    </label>
   
    <br>
    <label>
        Numero social:
        <br>
        <input type="text" name="numsocial">
    </label>
   
    <br>
    <br><br>
    <button type="submit">Enviar Formulario:</button>
    </form>
   