<form action="{{ url('pokemon') }}" method="POST">
    @csrf
    <input type="text" name="nome" placeholder="Name" required>
    <input type="text" name="tipo" placeholder="tipo" required>
    <input type="text" name="pontos_de_poder" placeholder="CV" required>


    <button type="submit">Create Pokemon</button>
</form>