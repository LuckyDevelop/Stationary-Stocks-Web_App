<x-main>
    <x-navbar></x-navbar>
    <div class="row">
        <div class="container my-1 col-sm-7">
            <table class="table table-primary">
                <h2>Usages</h2>
                <nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <x-button>Add Usages</x-button>
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
                        <th scope="col">Date</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Qty</th>
                        <th scope="col">UoM</th>
                        <th scope="col">User</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>14 Juni 2022</td>
                        <td>Kertas A4</td>
                        <td>1</td>
                        <td>Rim</td>
                        <td>Bambang</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>10 Juni 2022</td>
                        <td>Minyak</td>
                        <td>1</td>
                        <td>Liter</td>
                        <td>Nini</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-main>
