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