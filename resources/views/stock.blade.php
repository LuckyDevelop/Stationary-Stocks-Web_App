<x-main>
    <x-navbar></x-navbar>
    <div class="row">
        <div class="container my-1 col-sm-7">
            <table class="table table-primary">
                <h2>Stocks</h2>
                <nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <x-button target="#stock">Add Item</x-button>
                            </div>
                        </div>
                    </div>
                    <form class="" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <x-buttonsearch></x-buttonsearch>
                    </form>
                </nav>
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Qty</th>
                        <th scope="col">UoM</th>
                        <th scope="col">Jenis</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Kertas A4</td>
                        <td>1</td>
                        <td>Rim</td>
                        <td>Kantor</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Minyak</td>
                        <td>10</td>
                        <td>Liter</td>
                        <td>Dapur</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    @include('modal.stockmodal')
</x-main>
