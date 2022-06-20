<form id="{{ $id }}">
    <input class="form-control me-2" type="text" placeholder="Search..." onkeyup="{{ $function }}" name="search">
    {{ $slot }}
</form>
