<form action="{{ route('usuarios.destroy', $usuario->id) }}" method="post" style="display:inline-block;">
    @csrf()
    @method('DELETE')
    <button type="submit" class="btn btn-danger btn-sm"> <span class="glyphicon glyphicon-remove">Eliminar</button>
</form>