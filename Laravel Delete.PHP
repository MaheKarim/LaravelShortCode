<?php 

/* 
  > Write This Code On Button href 

  > {{ url('/delete-category',['id'=>$category->id] ) }}

*/

  /*
   >  Create Route For This 
    Route::post('/delete-category/{id}','CategoryController@deleteCategory');
  */
  

  And Write This Code To Controller -> 

  public function deleteCategory($id){
        $category = Category::find($id);
        $category -> delete();
        return redirect('/manage-category')->with('message','Category Deleted  Successfully!');
    }

 ?>