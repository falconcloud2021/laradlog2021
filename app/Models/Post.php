<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Post extends Model 
{
    //use HasFactory;
	
	public function addPosts()
	{
		$affected = DB::table('posts')
              ->update(['options->enabled' => true]);
	}

	public function delPost($id)
	{
		
		$result['success'] = DB::table('posts')
		->where(['id' => $id])
		->delete();

		$result['id'] = $id;
		return $result;
	}


	public function getPostById($id) 
	{
		// return DB::table('posts')
		// 		->where(['id' => $id])
		// 		->first();

		return DB::table('posts')
			->leftJoin(
				'post_categories',
				'posts.category_id',
				'=',
				'post_categories.id'
			)
			->leftJoin(
				'users',
				'posts.user_id',
				'=',
				'users.id'
			)
			->leftJoin(				
				'user_groups',
				'users.group_id',
				'=',
				'user_groups.id'
						)
			->select(
				'users.*',
				'posts.*',
				'post_categories.id as c_id',
				'post_categories.name as c_name',
				'post_categories.url as c_url',
				'users.id as u_id',
				'users.status as u_status',
				'user_groups.id as g_id',
				'user_groups.name as g_name'		
			)
			->where(['posts.id' => $id])
			->first();
	}

	public function getPosts()
	{
		return DB::table('posts')
			->leftJoin(
				'post_categories',
				'posts.category_id',
				'=',
				'post_categories.id'
			)
			->leftJoin(
				'users',
				'posts.user_id',
				'=',
				'users.id'
			)
			->leftJoin(				
				'user_groups',
				'users.group_id',
				'=',
				'user_groups.id'
						)
			->select(
				'users.*',
				'posts.*',
				'post_categories.id as c_id',
				'post_categories.name as c_name',
				'post_categories.url as c_url',
				'users.id as u_id',
				'users.status as u_status',
				'user_groups.id as g_id',
				'user_groups.name as g_name'		
			)
			->get();
    }
	
	public function getPopular($limit = 3)
	{
		return DB::table('posts')
			->select(
				'posts.*',
				'post_categories.id as c_id',
				'post_categories.name as c_name',
				'post_categories.url as c_url',
				'users.*',
				'users.id as u_id',
				'users.status as u_status'
			)
			->leftJoin(
				'post_categories',
				'posts.category_id',
				'=',
				'post_categories.id'
			)
			->leftJoin(
				'users',
				'posts.user_id',
				'=',
				'users.id'
			)
			->orderBy('posts.created_at', 'desc')
			->limit($limit)
			->get();
    }

	public function getPost($url)
	{
//		$query = $this->selectCommonData();
//		$query->where(
//			'posts.url',
//			'=',
//			$url
//		);
//		return $query->firts();
		return DB::table('posts')
			->select(
				'posts.*',
				'post_categories.id as c_id',
				'post_categories.name as c_name',
				'post_categories.url as c_url',
				'users.*',
				'users.id as u_id',
				'users.status as u_status'
			)
			->leftJoin(
				'post_categories',
				'posts.category_id',
				'=',
				'post_categories.id'
			)
			->leftJoin(
				'users',
				'posts.user_id',
				'=',
				'users.id'
			)
			->where(
				'posts.url',
				'=',
				$url
			)
			->first();
	}
	
	public function getRelated($category_id, $currentUrl, $limit = 3)
	{
		return DB::table('posts')
			->select(
				'posts.*',
				'post_categories.id as c_id',
				'post_categories.name as c_name',
				'post_categories.url as c_url',
				'users.*',
				'users.id as u_id',
				'users.status as u_status'
			)
			->leftJoin(
				'post_categories',
				'posts.category_id',
				'=',
				'post_categories.id'
			)
			->leftJoin(
				'users',
				'posts.user_id',
				'=',
				'users.id'
			)
			->where('posts.category_id', '=', $category_id)
			->where('posts.url', '!=', $currentUrl)
			->orderBy('posts.created_at', 'desc')
			->limit($limit)
			->get();
    }


	public function getFeatured()
	{
		return DB::table('posts')
			->select(
				'posts.*',
				'post_categories.id as c_id',
				'post_categories.name as c_name',
				'post_categories.url as c_url',
				'users.*',
				'users.id as u_id',
				'users.status as u_status'
			)
			->leftJoin(
				'post_categories',
				'posts.category_id',
				'=',
				'post_categories.id'
			)
			->leftJoin(
				'users',
				'posts.user_id',
				'=',
				'users.id'
			)
			->where(
				'home',
				'=',
				1
			)
			->orderBy('posts.created_at', 'desc')
		
			->get();



	}
}
