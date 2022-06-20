<x-main>
    <x-navbar></x-navbar>
    <div class="row">
        <div class="container my-1 col-sm-7">
            @include('stocks.data')
        </div>
    </div>
    @include('modal.stock.addmodal')
    <div class="pagination">
        {{ $stocks->links() }}
    </div>
</x-main>
