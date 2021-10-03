<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostCategory;
use App\Models\User;
use App\Models\Flight;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
	public function home()
	{
		$postModel = new Post();
		$posts = $postModel->getPopular();
		$featured = $postModel->getFeatured();
//		dd($posts);
		
		return view('home', [
			'posts' => $posts,
			'featured' => $featured
		]);
	}
	
	public function blog()
	{
		$postModel = new Post();
		$posts = $postModel->getPosts();

		$categoryModel = new PostCategory();
		// $categoriesTree = $categoryModel->getCategories();
		$categories = $categoryModel->getCategoriesTree();
		
		return view('blog', [
			'posts' => $posts, 
			'categories' => $categories
		]);
	}
	
	public function post($url)
	{
		$postModel = new Post();
		$post = $postModel->getPost($url);
		$relatedItems = $postModel->getRelated($post->category_id, $post->url);
		return view('post', [
			'post' => $post,
			'relatedItems' => $relatedItems
		]);
	}

	public function about()
	{
		$postModel = new Post();
		$post = $postModel->getPost('about');
        // dd($post);
		return view('about', [
			'post' => $post
		]);
	}
	
	public function contact()
	{
		return view('contact');
	}

	public function aMonitor()
	{
		$userModel = new User();
		$users = $userModel->getUserInfo();
		return view('admin/amonitor', [
			'users' => $users
		]);
	}

	public function aEditList()
	{
		$userModel = new User();
		$users = $userModel->getUserInfo();
		
		$postModel = new Post();
		$posts = $postModel->getPosts();
		$categories = (new PostCategory())->getCategories();
		return view('admin/aeditlist', [
			'users' => $users,
			'posts' => $posts, 
			'categories' => $categories
		]);

	}

	public function addarticle()
	{
		$userModel = new User();
		$users = $userModel->getUserInfo();
		return view('admin/addarticle', [
			'users' => $users
		]);
	}

	public function aEditor()
	{
		$userModel = new User();
		$users = $userModel->getUserInfo();
		return view('admin/aeditor', [
			'users' => $users
		]);
	}

	public function aRolls()
	{
		$userModel = new User();
		$users = $userModel->getUserInfo();
		return view('admin/arolls', [
			'users' => $users
		]);
	}

	public function aSheets()
	{
		$userModel = new User();
		$users = $userModel->getUserInfo();
		return view('admin/asheets', [
			'users' => $users
		]);
	}

	public function aCharts()
	{
		$userModel = new User();
		$users = $userModel->getUserInfo();
		return view('admin/acharts', [
			'users' => $users
		]);
	}

	public function aLetters()
	{
		$userModel = new User();
		$users = $userModel->getUserInfo();
		return view('admin/aletters', [
			'users' => $users
		]);
	}

	public function aBells()
	{
		$userModel = new User();
		$users = $userModel->getUserInfo();
		return view('admin/abells', [
			'users' => $users
		]);
	}

	// public function loginAdm(Request $request)
	// {
	// 	if ($request->isMethod('post')){
	// 		$isAdmin = (new User()->login($request);

	// 			if ($isAdmin){
	// 				return redirect()->to('/amonitor')
	// 			}
	// 	}
		
	// }



}