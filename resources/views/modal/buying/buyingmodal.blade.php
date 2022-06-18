 <!-- Modal -->
 <div class="modal fade" id="buying" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Add Stocks</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <form action="{{ url('/buyings/add') }}" method="POST">
                     @csrf
                     <div class="form-floating mb-3">
                         <select class="form-select" id="floatingSelect" aria-label="Floating label select example"
                             name="stock_name" required>
                             @foreach ($stocks as $stock)
                                 <option value="{{ $stock->id }}">{{ $stock->stock_name }} |
                                     {{ $stock->Qty->uom }}
                                 </option>
                             @endforeach
                         </select>
                         <label for="floatingSelect">Item Name | UoM</label>
                     </div>

                     <div class="form-floating mb-3">
                         <input type="date" class="form-control" id="date" placeholder="Date Usage"
                             name="date" required>
                         <label for="floatingItemName">Date</label>
                     </div>

                     <div class="form-floating mb-3">
                         <input type="number" class="form-control" id="floatingNumber" placeholder="Qty" name="qty"
                             required>
                         <label for="floatingItemName">Qty Buying</label>
                     </div>

                     <div class="form-floating mb-3">
                         <input type="number" class="form-control" id="floatingNumber" placeholder="Price"
                             name="price" required>
                         <label for="floatingItemName">Rp | Price </label>
                     </div>

                     <div class="form-floating mb-3">
                         <select class="form-select" id="floatingSelect" aria-label="Floating label select example"
                             name="supplier" required>
                             @foreach ($suppliers as $supplier)
                                 <option value="{{ $supplier->id }}">{{ $supplier->supp_name }}
                                 </option>
                             @endforeach
                         </select>
                         <label for="floatingSelect">Supplier</label>
                     </div>

             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                 <button type="submit" class="btn btn-primary">Add Stock</button>
             </div>
             </form>
         </div>
     </div>
 </div>
