// Have To Implement On Controller   


   session()->flash('success', 'Match Format Create Successfully!');
   
   
   
   
   
   // Now Setup on Blade File
   
   <!-- Notification Start -->
                                    @if (session()->has('success'))
                                       <div class="alert alert-success">
                                           {{ session()->get('success') }}
                                       </div>
                                    @endif
   <!-- Notification End -->

More shortcut

@if(session('success'))
   <div class="alert alert-success" role="alert">
      
      {{ session('success')  }}
      
</div>

@endif
