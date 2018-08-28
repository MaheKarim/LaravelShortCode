 ## Write this code to Web.PHP

 Route::get('logout','\App\Http\Controllers\Auth\LoginController@logout');

 ## Open LoginController.PHP Write this code


 public function logout(Request $request) {
         Auth::logout();
         return redirect('/');
}

And Do This In Your Log Out Button :v:

<li>
  <a href="#" onclick="document.getElementById('logout_form_out').submit();">
    <i class="fa fa-sign-out fa-fw">
    </i>
      Logout
    </a>
  <form class="" id="logout_form_out" action="{{url('/logout')}}" method="post">
    @csrf
  </form>
</li>



- Thank You <3
