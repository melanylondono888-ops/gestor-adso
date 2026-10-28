<form action="{{ route('aprendices.update', $aprendiz->id) }}" method="POST">
    @csrf
    @method('PUT')

    @include('aprendices._form', [
        'aprendiz' => $aprendiz,
        'buttonText' => 'Actualizar aprendiz',
    ])
</form>