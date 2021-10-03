<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PostCategory extends Model
{
  //  use HasFactory;

    private $fullPaths = [];

    public function getCategories()
    {
        return DB::table('post_categories')
        ->get();
    }

    public function getCategoriesTree()
    {
      $categories = DB::table('post_categories')
      ->get()
      ->toArray();

      $tree = $this->buildTree($categories, $this->fullPaths);

      return $tree;
    }

    private function buildTree(array $items, array &$urlNames, $parentId = 0, $fullUrl = '')
  {
    $node = [];
    foreach ($items as $item) {
      if ($item->parent_id == $parentId) {
        $item->full_url = empty($fullUrl) ? $item->url : $fullUrl . '/' . $item->url;
        $urlNames[$item->id] = $item->full_url;
        $children = $this->buildTree($items, $urlNames, $item->id, $item->full_url);
        if ($children) {
          $item->children = $children;
        }
        $node[$item->url] = $item;
      }
    }
    return $node;
  }

  //   private function buildTree(array $items, $parentId = 0, $fullurl = '') {
  //   $node = [];
    
  //   foreach ($items as $item) {
  //     if ($item->parent_id == $parentId) {
  //        $fullurl = empty($fullurl) ? $item->url : $fullurl. '/' . $item->url;
  //        $item->full_url = $fullurl;
  //       $children = $this->buildTree($items, $item->id, $fullurl);
  //       if ($children) {
  //         $item->children = $children;
  //       }
  //       $node[] = $item;
  //     }
  //   }
  //   ksort($items);
  //   return $node;
  // }
}
