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
            <th scope="col" colspan="2">Setting</th>

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
                <td>
                    <x-buttonedit target="#edit-{{ $stock->id }}"></x-buttonedit>
                </td>
                @if ($stock->qty == 0)
                    <td>
                        <x-formdelete action="/stock/{{ $stock->id }}" class="btn btn-danger"></x-formdelete>
                    </td>
                @else
                    <td>
                        <x-formdelete action="/stock/{{ $stock->id }}" class="btn btn-danger disabled"></x-formdelete>
                    </td>
                @endif
            </tr>
            @include('modal.stock.editmodal')
        @empty
            <x-alert></x-alert>
        @endforelse
    </tbody>
</x-table>
