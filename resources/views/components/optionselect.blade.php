<div class="form-floating mb-3">
    <select class="form-select" id="floatingSelect" aria-label="Floating label select example"
        name="{{ $name }}" required>
        {{$slot}}
    </select>
    <label for="floatingSelect">{{ $label }}</label>
</div>
