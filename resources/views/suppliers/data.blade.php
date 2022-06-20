<x-table>
    <h2>Suppliers</h2>
    <x-navbarsub>
        <x-containerfluid>
            <!-- Button Add Supplier -->
            <x-buttonadd target="#supplier">
                Add Supplier
            </x-buttonadd>
        </x-containerfluid>
        <x-formsearch id="search" function="searchData()">
            <x-buttonsearch></x-buttonsearch>
        </x-formsearch>
    </x-navbarsub>
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col"><i class="fa-solid fa-people-carry-box">Supplier</i></th>
            <th scope="col"><i class="fa-solid fa-map-location-dot">Address</i></th>
            <th scope="col" colspan="2"><i class="fa-solid fa-gear">Setting</i></th>
        </tr>
    </thead>
    <tbody>
        @forelse($suppliers as $key => $supplier)
            @include('modal.supplier.editmodal')
            <tr>
                <th scope="row">
                    {{ $key + $suppliers->firstitem() }}</th>
                <td>{{ $supplier->supp_name }}</td>
                <td>{{ $supplier->address }}</td>
                <td>
                    <x-buttonedit target="#edit-{{ $supplier->id }}"></x-buttonedit>
                </td>
                <td>
                    <x-formdelete action="/supplier/{{ $supplier->id }}" class="btn btn-danger"></x-formdelete>
                </td>
            </tr>
        @empty
            <x-alert></x-alert>
        @endforelse
        <script src="js/supplier.js"></script>
    </tbody>
</x-table>
