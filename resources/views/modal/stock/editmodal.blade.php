 <!-- Modal -->
 <div class="modal fade" id="edit-{{ $stock->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Edit Item</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <form action="/stock/update/{{ $stock->id }}" method="POST">
                     @csrf
                     @method('PUT')
                     <x-inputedit type="text" placeholder="Item Name" name="stock_name" value="{{ $stock->stock_name }}">Item Name</x-inputedit>
                     <x-inputeditdisabled type="text" placeholder="Qty Item" name="qty" value="{{ $stock->qty }}">Qty Item</x-inputeditdisabled>
                     <x-optionselect name="qty_name" label="UoM">
                        <option selected value="{{ $stock->Qty->id }}"> {{ $stock->Qty->uom }}</option>
                        @foreach ($uoms as $uom)
                            <option value="{{ $uom->id }}">{{ $uom->uom }}</option>
                        @endforeach
                     </x-optionselect>
                     <x-optionselect name="type_name" label="Location">
                        <option selected>{{ $stock->Type->type_name }}</option>
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
