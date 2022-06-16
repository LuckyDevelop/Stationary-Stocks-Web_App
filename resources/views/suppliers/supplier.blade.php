<x-main>
    <x-navbar></x-navbar>
    <div class="row">
        <div class="container my-1 col-sm-7">
            @include('suppliers.data')
        </div>
    </div>
    @include('modal.supplier.addmodal')
    @include('modal.supplier.editmodal')
    {{ $suppliers->links() }}
    <script></script>
</x-main>
