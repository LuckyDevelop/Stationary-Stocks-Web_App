<form action="{{ $action }}" method="POST">
    @csrf
    @method('delete')
    <button type="submit" class="{{ $class }}" id="button">Delete</button>
</form>
