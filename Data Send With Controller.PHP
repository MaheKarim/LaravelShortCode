1.
$todays_date = date(Y-m-d);
return view('welcome')->with('todays_date','$todays_date');


2. 
$todays_date = date(Y-m-d);
return view('welcome',compact('todays_date'));


3. 
$todays_date = date(Y-m-d);
return view('welcome',['today_date' =>$todays_date ]);


4. 
$data = [];
$data['todays_date'] = date(Y-m-d);
return view('welcome', $data);