<x-main>
    <x-navbar></x-navbar>
    <div class="row">
        <div class="container my-1 col-sm-7">
            <x-table>
                <h2>Buying</h2>
                <x-navbarsub>
                    <x-containerfluid>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <x-button>Add Stocks</x-button>
                            </div>
                        </div>
                    </x-containerfluid>
                    <form class="" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <x-buttonsearch></x-buttonsearch>
                    </form>
                </x-navbarsub>
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Qty</th>
                        <th scope="col">UoM</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Supplier</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Kertas A4</td>
                        <td>1</td>
                        <td>Rim</td>
                        <td>Rp 14.000</td>
                        <td>Global Stationary</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Minyak</td>
                        <td>2</td>
                        <td>Liter</td>
                        <td>Rp 40.000</td>
                        <td>Local Stationary</td>
                    </tr>
                </tbody>
            </x-table>
        </div>
    </div>
</x-main>
