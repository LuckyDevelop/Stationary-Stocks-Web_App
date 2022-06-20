 <!-- Modal -->
 <div class="modal fade" id="supplier" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Add Supplier</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <form action="{{ url('/supplier/add') }}" method="POST">
                     @csrf
                     <x-input type="text" placeholder="Supplier Name" name="supp_name">Supplier Name</x-input>
                     <x-input type="text" placeholder="Address" name="address">Address</x-input>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                 <button type="Submit" class="btn btn-primary">Save changes</button>
             </div>
             </form>
         </div>
     </div>
 </div>
