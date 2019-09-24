  use Illuminate\Support\Facades\Auth;
  use Illuminate\Support\Facades\Blade;


  public function boot()
    {
        // 1071 error code
        Schema::defaultStringLength(191);

        // custom blade directive code
        Blade::if('admin', function () {
            return auth()->check() && auth()->user()->role_id == 1;
        });
        
       // admin is just a directive name that i want to create
       // return korbe authentication check korbe login ache kina
       // && auth () jodi login means user hoy ebong er role ID 1 kina
    }
