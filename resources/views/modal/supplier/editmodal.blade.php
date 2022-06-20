 <!-- Modal -->
 <div class="modal fade" id="edit-{{ $supplier->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Edit Supplier</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <form action="/supplier/edit/{{ $supplier->id }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="supp_name" name="supp_name"
                             placeholder="Supplier Name" value="{{ $supplier->supp_name  }}" required>
                         <label for="suppliername">Supplier Name</label>
                     </div>
                     <div class="form-floating mb-3">
                         <input type="text" class="form-control" id="address" name="address" placeholder="Address"
                         value="{{ $supplier->address }}" required>
                         <label for="address">Address</label>
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
