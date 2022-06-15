<x-main>
    <x-navbar></x-navbar>
    <div class="row">
        <div class="container my-1 col-sm-7">
            <x-table>
                <h2>Suppliers</h2>
                <x-navbarsub>
                    <x-containerfluid>
                        <!-- Button Add Supplier -->
                        <x-button target="#supplier">
                            Add Supplier
                        </x-button>


                    </x-containerfluid>
                    <form role="search" action="/supplier">
                        <input class="form-control me-2" type="text" placeholder="Search..." aria-label="Search"
                            name="search">
                        <x-buttonsearch></x-buttonsearch>
                    </form>
                </x-navbarsub>
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Supplier</th>
                        <th scope="col"><i class="fa-solid fa-map-location-dot">Alamat</i></th>
                        <th scope="col" colspan="2"><i class="fa-solid fa-gear">Setting</i></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($suppliers as $key =>$supplier)
                        <tr>
                            <th scope="row">
                                {{ $key + $suppliers->firstitem() }}</th>
                            <td>{{ $supplier->supp_name }}</td>
                            <td>{{ $supplier->address }}</td>
                            <td>
                                <button type="button" class="btn btn-primary" href="/supplier/{{ $supplier->id }}"><i
                                        class="fa-solid fa-pen-to-square"></i>
                                </button>
                            </td>
                            <td>
                                <form action="/supplier/{{ $supplier->id }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <div class="alert alert-danger">
                            Data Belum Tersedia
                        </div>
                    @endforelse
                </tbody>
            </x-table>
        </div>
    </div>
    @include('modal.suppliermodal')
    {{ $suppliers->links() }}
</x-main>
