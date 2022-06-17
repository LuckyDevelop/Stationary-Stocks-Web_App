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
                     <div class="form-floating mb-3">
                         <input type="text" class="form-control" id="floatingItemName" placeholder="Item Name"
                             name="stock_name" required>
                         <label for="floatingItemName">Item Name</label>
                     </div>
                     <div class="form-floating mb-3">
                         <select class="form-select" id="floatingSelect" aria-label="Floating label select example"
                             name="qty_name" required>
                             @foreach ($uoms as $uom)
                                 <option value="{{ $uom->id }}">{{ $uom->uom }}</option>
                             @endforeach
                         </select>
                         <label for="floatingSelect">UoM</label>
                     </div>
                     <div class="form-floating mb-3">
                         <select class="form-select" id="floatingSelect" aria-label="Floating label select example"
                             name="type_name" required>
                             @foreach ($locations as $location)
                                 <option value="{{ $location->id }}">{{ $location->type_name }}</option>
                             @endforeach
                         </select>
                         <label for="floatingSelect">Location</label>
                     </div>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                 <button type="Submit" class="btn btn-primary">Add Item</button>
             </div>
             </form>
         </div>
     </div>
 </div>