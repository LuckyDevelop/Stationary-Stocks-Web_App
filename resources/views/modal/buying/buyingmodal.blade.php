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
                     <x-optionselect name="stock_name" label="Item Name | UoM">
                        @foreach ($stocks as $stock)
                        <option value="{{ $stock->id }}">{{ $stock->stock_name }} |
                            {{ $stock->Qty->uom }}
                        </option>
                    @endforeach
                     </x-optionselect>
                     <x-input type="date" id="date" placeholder="Data Usage" name="date">Date</x-input>
                     <x-input type="number" id="number" placeholder="Qty" name="qty">Qty Buying</x-input>
                     <x-input type="number" id="number" placeholder="Price" name="price">Rp | Price</x-input>
                    <x-optionselect name="supplier" label="Supplier">
                        @foreach ($suppliers as $supplier)
                        <option value="{{ $supplier->id }}">{{ $supplier->supp_name }}
                        </option>
                    @endforeach
                    </x-optionselect>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                 <button type="submit" class="btn btn-primary">Add Stock</button>
             </div>
             </form>
         </div>
     </div>
 </div>
