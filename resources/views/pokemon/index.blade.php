@foreach($pokemon as $entidade)
    <div>
        <h3>{{ $entidade->nome }}</h3>
        <p>{{ $entidade->tipo }}</p>
        <p>{{ $entidade->pontos_de_poder }}</p>
        <a href="{{ url('pokemon/'.$entidade->id.'/edit') }}">Edit</a>
        <form action="{{ url('pokemon/'.$entidade->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach