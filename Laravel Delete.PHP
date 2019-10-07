<?php 

/* 
  > Write This Code On Button href 

  > {{ url('/delete-category',$category->id ) }}

*/

  /*
   >  Create Route For This 
    Route::get('/delete-category/{id}','CategoryController@deleteCategory');
  */
  

  And Write This Code To Controller -> 

  public function deleteCategory($id){
        $category = Category::find($id);
        $category -> delete();
        return redirect('/manage-category')->with('message','Category Deleted  Successfully!');
    }

 ?>
