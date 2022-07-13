<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use DB;
class PaginationModel extends Model
{
    public $table ='DemoModel';
    public function GetData()
    {
        $vendordata = DB::table('DemoModel')->select('*')->paginate(10);
        return $vendordata;
    }
}
