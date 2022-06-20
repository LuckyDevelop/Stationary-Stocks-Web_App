 <!-- Modal -->
 <div class="modal fade" id="stock" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Add Item</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <form action="{{ url('/stock/add') }}" method="POST">
                     @csrf
                     <x-input type="text" placeholder="Item Name" name="stock_name">Item Name</x-input>
                     <x-optionselect name="qty_name" label="UoM" >
                        @foreach ($uoms as $uom)
                        <option value="{{ $uom->id }}">{{ $uom->uom }}</option>
                        @endforeach
                     </x-optionselect>
                    <x-optionselect name="type_name" label="Location">
                        @foreach ($locations as $location)
                        <option value="{{ $location->id }}">{{ $location->type_name }}</option>
                        @endforeach
                    </x-optionselect>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                 <button type="Submit" class="btn btn-primary">Add Item</button>
             </div>
             </form>
         </div>
     </div>
 </div>
