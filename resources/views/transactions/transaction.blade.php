<x-main>
    <x-navbar></x-navbar>
    <div class="row">
        <div class="container my-1 col-sm-7">
            @include('transactions.data')
        </div>
    </div>
    @include('modal.usage.addmodal')
    <div class="pagination">
        {{ $transactions->links() }}
    </div>
</x-main>
