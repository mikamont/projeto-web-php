<form action="{{url('pokemon/'. $pokemon->id)}}"
method="POST">
@csrf
@method('PUT')
<input type="text" name="name" placeholder="Name"
value="{{$pokemon->nome}}" required>
    <input type="text" name="tipo" placeholder="Tipo"
    value="{{$pokemon->tipo}}" required>
    <input type="text" name="pontos_de_poder" placeholder="CV"
    value="{{$pokemon->pontos_de_poder}}"required>
    <button type="submit">Update Pokemon</button>
</form>