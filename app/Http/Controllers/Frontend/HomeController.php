<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Wishlist_item;
use App\Models\Review;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    function index()
    {
        // $page_data['categories'] = Category::where('is_featured', 1)->get();
        $page_data['categories'] = Category::get();
        $page_data['popular_products'] = Product::where('status', 1)->latest()->take(4)->get();
        $page_data['latest_products'] = Product::where('status', 1)->latest()->take(4)->get();
        $page_data['blogs'] = Blog::where('status', 1)->get();
        
        $page_data['reviews'] = Review::where('rating', 5)->latest()->take(10)->get();

        return view('frontend.home.index', $page_data);
    }

    function customer_feedback() {
        return view('frontend.feedback.index');
    }

    function switch_language(Request $request){
        session(['active_lan_id' => $request->active_lan_id]);
        return redirect()->back();
    }


     public function wishlist_toggle(Request $request)
    {
        if (!Auth::check()) {
        return response()->json(['status' => 'error', 'message' => 'Please login first.']);
    }

        $productId = $request->product_id;
        $userId = Auth::id();

        // Check if exists
        $wishlist = Wishlist_item::where('user_id', $userId)
                            ->where('product_id', $productId)
                            ->first();

        if ($wishlist) {
            $wishlist->delete();
            return response()->json(['status' => 'removed']);
        } else {
            Wishlist_item::create([
                'user_id' => $userId,
                'product_id' => $productId,
            ]);
            return response()->json(['status' => 'added']);
        }
    }


    
}
