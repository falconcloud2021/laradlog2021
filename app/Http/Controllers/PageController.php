<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostCategory;
use App\Models\User;
use App\Models\Flight;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

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
//		$userModel = new User();
//		$users = $userModel->getUserInfo();
		return view('admin/amonitor', [
			'user' => session('user')
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
			'user' => session('user'),
			'posts' => $posts, 
			'categories' => $categories
		]);

	}

	public function addarticle()
	{
		$userModel = new User();
		$users = $userModel->getUserInfo();
		return view('admin/addarticle', [
			'user' => session('user')
		]);
	}

	public function aEditor()
	{
		$userModel = new User();
		$users = $userModel->getUserInfo();
		return view('admin/aeditor', [
			'user' => session('user')
		]);
	}

	public function aRolls()
	{
		$userModel = new User();
		$users = $userModel->getUserInfo();
		return view('admin/arolls', [
			'user' => session('user')
		]);
	}

	public function aSheets()
	{
		$userModel = new User();
		$users = $userModel->getUserInfo();
		return view('admin/asheets', [
			'user' => session('user')
		]);
	}

	public function aCharts()
	{
		$userModel = new User();
		$users = $userModel->getUserInfo();
		return view('admin/acharts', [
			'user' => session('user')
		]);
	}

	public function aLetters()
	{
		$userModel = new User();
		$users = $userModel->getUserInfo();
		return view('admin/aletters', [
			'user' => session('user')
		]);
	}

	public function aBells()
	{
		$userModel = new User();
		$users = $userModel->getUserInfo();
		return view('admin/abells', [
			'user' => session('user')
		]);
	}

	public function aLogin(Request $request)
	{
		if ($request->isMethod('post')){
			
			$login = $request->post('login');
			$password = $request->post('password');
			
			$user = (new User())->getAdmin($login, $password);
			
			if ($user)
			{
				session(['user' => $user]);
				return redirect()->to('/amonitor');
			}
			
			
			return redirect()->to(url()->route('login'));
		}
		
		return view('admin.loginadm');
	}
	
	public function aLogout()
	{
		if (session()->has('user'))
		{
			session()->remove('user');
		}
		return redirect()->to(url()->route('login'));
	}

}