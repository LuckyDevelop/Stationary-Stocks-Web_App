<x-table>
    <h2>Usages</h2>
    <x-navbarsub>
        <x-containerfluid>
            <!-- Button Add Usages -->
            <x-buttonadd target="#usage">
                Add Usages
            </x-buttonadd>
        </x-containerfluid>
        <x-formsearch>
            <x-buttonsearch></x-buttonsearch>
        </x-formsearch>
    </x-navbarsub>
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Last Use</th>
            <th scope="col">Item</th>
            <th scope="col">Qty</th>
            <th scope="col">UoM</th>
            <th scope="col">User</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($transactions as $key => $usage)
            <tr>
                <th scope="row">
                    {{ $key + $transactions->firstitem() }}
                </th>
                <td>{{ Carbon::parse($usage->transaction_date)->isoFormat('D MMMM Y') }}</td>
                <td>{{ $usage->Stock->stock_name }}</td>
                <td>{{ $usage->qty }}</td>
                <td>{{ $usage->Stock->Qty->uom }}</td>
                <td>{{ $usage->UserUsage->user }}</td>
            </tr>
        @empty
            <x-alert></x-alert>
        @endforelse
    </tbody>
</x-table>
