<x-table>
    <h2>Stocks</h2>
    <x-navbarsub>
        <x-containerfluid>
            <!-- Button Add Item -->
            <x-buttonadd target="#stock">
                Add Item
            </x-buttonadd>
        </x-containerfluid>
        <x-formsearch target="#/stock">
            <x-buttonsearch></x-buttonsearch>
        </x-formsearch>
    </x-navbarsub>
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Item</th>
            <th scope="col">Qty</th>
            <th scope="col">UoM</th>
            <th scope="col">Location</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        @forelse ($stocks as $key =>$stock)
            <tr>
                <th scope="row">
                    {{ $i++ }}
                </th>
                <td>{{ $stock->stock_name }}</td>
                <td>{{ $stock->qty }}</td>
                <td>{{ $stock->Qty->uom }}</td>
                <td>{{ $stock->Type->type_name }}</td>
            </tr>
        @empty
            <x-alert></x-alert>
        @endforelse
    </tbody>
</x-table>
