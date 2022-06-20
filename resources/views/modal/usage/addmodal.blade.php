 <!-- Modal -->
 <div class="modal fade" id="usage" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Add Usage</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <form action="{{ url('/usages/add') }}" method="POST">
                     @csrf

                     <div class="form-floating mb-3">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example"
                            name="user" required>
                            @foreach ($userusage as $usage)
                                <option value="{{ $usage->id }}">{{ $usage->user }}</option>
                            @endforeach
                        </select>
                        <label for="floatingSelect">User</label>
                    </div>

                     <div class="form-floating mb-3">
                         <input type="date" class="form-control" id="date" placeholder="Date Usage"
                             name="date" required>
                         <label for="floatingItemName">Date</label>
                     </div>

                     <div class="form-floating mb-3">
                         <select class="form-select" id="floatingSelect" aria-label="Floating label select example"
                             name="stock_name" required>
                             @foreach ($stocks as $stock)
                                 <option value="{{ $stock->id }}">{{ $stock->stock_name }} |
                                     {{ $stock->qty }} | {{ $stock->Qty->uom }}</option>
                             @endforeach
                         </select>
                         <label for="floatingSelect">Item Name | Qty Stock | UoM</label>
                     </div>

                     <div class="form-floating mb-3">
                         <input type="number" class="form-control" id="floatingNumber" placeholder="Qty" name="qty"
                             required>
                         <label for="floatingItemName">Qty Usage</label>
                     </div>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                 <button type="submit" class="btn btn-primary">Save changes</button>
             </div>
             </form>
         </div>
     </div>
 </div>
