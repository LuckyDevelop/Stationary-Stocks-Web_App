<x-main>
    <x-navbar></x-navbar>
    <div class="row">
        <div class="container my-1 col-sm-7">
            @include('buyings.data')
        </div>
    </div>
    @include('modal.buying.buyingmodal')
    {{ $buyings->links() }}
</x-main>
