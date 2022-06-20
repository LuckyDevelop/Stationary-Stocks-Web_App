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

                     <x-optionselect name="user" label="User">
                        @foreach ($userusage as $usage)
                        <option value="{{ $usage->id }}">{{ $usage->user }}</option>
                        @endforeach
                     </x-optionselect>
                     <x-input type="date" name="date" placeholder="Date Usage">Date</x-input>
                     <x-optionselect name="stock_name" label="Item Name | Qty Stock | UoM">
                        @foreach ($stocks as $stock)
                        <option value="{{ $stock->id }}">{{ $stock->stock_name }} |
                            {{ $stock->qty }} | {{ $stock->Qty->uom }}</option>
                        @endforeach
                     </x-optionselect>
                    <x-input type="number" placeholder="Qty" name="qty">Qty Usage</x-input>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                 <button type="submit" class="btn btn-primary">Save changes</button>
             </div>
             </form>
         </div>
     </div>
 </div>
