$this->validate($request, [
		'token' => 'required',
		'email' => 'required|email',
		'password' => 'required|confirmed',
	]);
	