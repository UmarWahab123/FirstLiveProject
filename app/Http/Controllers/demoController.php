<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Comment;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{

    public function bloglisting($user_id = '')
    {

        $query = Blog::select("blog_posts.*", "users.first_name", "users.last_name")
            ->leftJoin('users', 'users.id', '=', 'blog_posts.user_id');
        if (!empty($user_id)) {
            $query->where('blog_posts.user_id', '=', $user_id);
        }
        $blogs = $query->get();

        $latestBlogs = Blog::orderBy('id', 'DESC')->take(10)->get();

        return view('blogs/bloglisting', compact('blogs', 'latestBlogs'));
    }
    public function blogdetail($slug = '')
    {

        if (!empty($slug)) {
            $query = Blog::select("blog_posts.*", "users.first_name", "users.last_name", "products.name as productName", "products.slug as productSlug", "products.short_description as short_description", "products.image",
                DB::raw("(SELECT GROUP_CONCAT(product_images.image) FROM product_images  WHERE product_images.type = 'marketplace' AND product_images.product_id = blog_posts.blog_product_id  ) as product_images")
            )
                ->leftJoin('users', 'users.id', '=', 'blog_posts.user_id')
                ->leftJoin('products', 'products.id', '=', 'blog_posts.blog_product_id');
            $query->where('blog_posts.blog_slug', '=', $slug);
            $blogDetail = $query->first();

            $latestBlogs = Blog::orderBy('id', 'DESC')->take(10)->get();

            $comments = Comment::select("blog_comments.*", "users.first_name", "users.last_name", "users.image")->leftJoin('users', 'users.id', '=', 'blog_comments.user_id')->where('blog_id_fk', $blogDetail->id)->get();
            // echo "<pre>";print_r($blogDetail);exit;
            return view('blogs/blogdetail', compact('blogDetail', 'comments', 'latestBlogs'));
        }

    }

    public function postComment(Request $requrst)
    {
        $id = Auth::id();
        $comment = $requrst->comment;

        $insertArray = array(
            'blog_id_fk' => $requrst->blog_id,
            'user_id' => $id,
            'comment' => $comment,

        );
        Comment::insert($insertArray);

        echo 1;

    }

}
