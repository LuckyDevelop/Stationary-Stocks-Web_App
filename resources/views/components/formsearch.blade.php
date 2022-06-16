<form role="search" action="{{ $target }}">
    <input class="form-control me-2" type="text" placeholder="Search..." aria-label="Search" name="search">
    {{ $slot }}
</form>
