<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class User extends Model
{
    //use HasFactory;
    
    public function getUserInfo()
    {
        return DB::table('users')
            ->select(
                'first_name',
                'last_name',
                'email',
                'status'
            )
            ->get();
    }
	
	public function getAdmin($login, $password)
	{
		$user = DB::table('users')
			->where('login', '=', $login)
			->where('password', '=', $password)
			->first();
		return $user ?? false;
    }

    // public function login(Request $request)
    // {
    //     $data = $request->post();



    //     $user = DB::table('users')
    //         ->where([
    //             'login' => $login;
    //             'login' => $password;
    //         ]);
    //         ->first();
        
    // }
    
}



