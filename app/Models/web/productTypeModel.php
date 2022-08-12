<?php

namespace App\Models\web;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\paginationModel;
use App\Http\Controllers\responseController;
use Illuminate\Support\Facades\DB;


class productTypeModel extends Model
{
    use HasFactory;

    public function getProductType()
    {
        DB::beginTransaction();
        try
        {
            $query = DB::select('select * from product_type');
            return $query;
        }
        catch(Exception $e)
        {
            DB::rollback();
            return responseController::error($e->getMessage());
        }
    }
}
