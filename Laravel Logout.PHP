 ## Write this code to Web.PHP

 Route::get('logout','\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

 ## Open LoginController.PHP Write this code

  - Add 

use Auth;
use Illuminate\Http\Request;
    &
 public function logout(Request $request) {
         Auth::logout();
         return redirect('/');
}

And Do This In Your Log Out Button :v:
<li>
<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
    Logout
</a>    
<form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>

</li>

- Thank You <3
