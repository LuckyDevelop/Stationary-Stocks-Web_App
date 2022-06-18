<x-table>
    <h2>Buying</h2>
    <x-navbarsub>
        <x-containerfluid>
            <!-- Button Add Item -->
            <x-buttonadd target="#buying">
                Add Stocks
            </x-buttonadd>
        </x-containerfluid>
        <x-formsearch target="#/buying">
            <x-buttonsearch></x-buttonsearch>
        </x-formsearch>
    </x-navbarsub>
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Item</th>
            <th scope="col">Last Buy</th>
            <th scope="col">Qty</th>
            <th scope="col">UoM</th>
            <th scope="col">Price/UoM</th>
            <th scope="col">Total</th>
            <th scope="col">Supplier</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($buyings as $key => $buying)
            <tr>
                <th scope="row">
                    {{ $key + $buyings->firstitem() }}
                </th>
                <td>{{ $buying->Stock->stock_name }}</td>
                <td>{{ Carbon::parse($buying->transaction_date)->isoFormat('D MMMM Y') }}</td>
                <td>{{ $buying->qty }}</td>
                <td>{{ $buying->Stock->Qty->uom }}</td>
                <td>Rp {{ number_format($buying->price, 0, '.', '.') }}</td>
                <td>Rp {{ number_format($buying->total, 0, '.', '.') }}</td>
                <td>{{ $buying->Supplier->supp_name }}</td>
            </tr>
        @empty
            <x-alert></x-alert>
        @endforelse

    </tbody>
</x-table>
