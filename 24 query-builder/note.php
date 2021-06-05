- we can use query builder instead of model 
- update the configuration in .env file 
- create controller
// php artisan make:controller Members
- create function in controller 
- make route to the controller 
- import db class
//use Illuminate\Support\Facades\DB;
- to fetch all data from the table use this in function 
//function dbOperation(){
//    return DB::table('members')->get();
//}
- now let's return it with view
//function dbOperation(){
//        $data = DB::table('members')->get();
//        return view('list',['data'=>$data]); 
//    }

- how to use whare condition
  (derive data for only 4th row)
//$data = DB::table('members')
//->where('id',4)
//->get();

- how to use find method 
- convert this to array 
//return (array)DB::table('members')->find(4);

- how to fetch total number of data
//return DB::table('members')->count();