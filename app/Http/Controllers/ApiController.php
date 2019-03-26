<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use App\Http\Resources\UserCollection;
use App\Http\Resources\User as UserResource;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public function users() {
        return new UserCollection(User::all());
    }
    public function users_debug() {
        return response((new UserCollection(User::all()))->toJson());
    }
    //without ORM
    public function users_debug_v2()
    {
        $response = DB::table('users as u1')
            ->Join('cities','cities.id','=','u1.city_id')
            ->leftJoin('users as u2','u2.id','=','u1.invited_by')
            ->select('u1.id','u1.name', 'cities.name as city','u2.name as invitor')
            ->get()->toJson();
        return response($response);
    }

}
