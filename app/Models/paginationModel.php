<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paginationModel extends Model
{
    use HasFactory;
    public  static function showPage($query,$show,$condition,$group,$short,$page,$search)
    {
        if(isset($query))
        {
            DB::beginTransaction();
            try
            {

                $offset=($page - 1) * $show;
                $result_page='';
                $result_page="limit $show offset $offset";


                $total_result = [];
                $result_total = [];
                $result_total_search = [];

                if($page==null  && $show==null)
                {
                    if($search==null)
                    {
                        if($condition!=null)
                        {
                            $total_result=DB::select($query."$condition"." $group");
                            $result_total=DB::select($query."$condition"." "."$group"." "."  $short"." ");
                            $result_total_search=DB::select($query."$group"." "."  $short"." ");
                        }
                        else
                        {
                            $total_result=DB::select($query."$group");
                            $result_total=DB::select($query."$group"." "."  $short"." ");
                            $result_total_search=DB::select($query."$group"." "."  $short"." ");
                            // dd('iiiiiiiiiiiiiii',$total_result);

                        }

                    }
                    else
                    {
                        if($condition!=null)
                        {
                            $total_result=DB::select($query."$condition"." $group");
                            $result_total=DB::select($query."$condition"." "."$search"." "."$group"." "."  $short"." ");
                            $result_total_search=DB::select($query."$search"." "."$group"." ");
                        }
                        else
                        {
                            $total_result=DB::select($query."$group");
                            $result_total=DB::select($query."$search"." "."$group"." "."  $short"." ");
                            $result_total_search=DB::select($query."$search"." "."$group"." ");
                        }

                    }

                }
                else
                {
                    if($condition!=null)
                    {
                        $total_result=DB::select($query."$condition"." $group");

                        $result_total=DB::select($query."$condition"." "."$search"." "."$group"." "." $short"." "."$result_page");

                        $result_total_search=DB::select($query."$condition"." "."$search"." "."$group"." "." $short"."");
                    }
                    else
                    {
                        $total_result=DB::select($query."$group");

                        $result_total=DB::select($query."$search"." "."$group"." "."  $short"." "." $result_page");
                        $result_total_search=DB::select($query."$search"." "."$group"." "."  $short"." ");
                    }
                }

                DB::commit();
                return response()->json(
                    [
                        'status' => 200,
                        'total' => count($total_result),
                        'page' => $show==null ? 1: ($show=='all'? 1 : $page),
                        'last_page' => $show==null ? 1: ($show=='all'? 1 : ceil(count($total_result) / $show)),
                        'showing_start'=>  $offset+1,
                        'showing_end'=>  count($result_total) >=10 ? $offset+$show  : $offset+count($result_total) ,
                        'result_total_search' =>$search!=null? count($result_total_search):0,
                        'last_page_search' =>$search!=null ? $show==null ? 1: $show=='all'? 1 : ceil(count($result_total_search) / $show):0,
                        'result'=> $result_total
                    ]
                );
            }
            catch(Exception $e)
            {

                DB::rollback();
                return response()->json(
                    [
                        'status' => 500,
                        'result'=> $e->getMessage()
                    ]
                );
            }

        }
        else
        {
            return response()->json(
                [
                    'status' => 400,
                    'result'=> "No Data"
                ]
            );
        }

    }
}
