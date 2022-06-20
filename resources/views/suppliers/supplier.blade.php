<x-main>
    <x-navbar></x-navbar>
    <div class="row">
        <div class="container my-1 col-sm-7">
            @include('suppliers.data')
        </div>
    </div>
    @include('modal.supplier.addmodal')

    <div class="pagination" style="margin-left:40%">
        {{ $suppliers->links() }}
    </div>
    <script src="js/supplier.js"></script>
</x-main>
