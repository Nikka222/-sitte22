<?php
 
namespace App\Http\Controllers;
use App\Models\Content;
use App\Models\Images;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
 
class ProductController extends Controller
{
    /**
     * Product.
     */
    public function index(): View
    {
        $content = Content::all();
        $images = Images::all();
        return view('index', compact('content', 'images'));
        // return view('index', compact('images'));
    }
    public function create(): View
    {
        return view('create');
    }
    public function store(Request $request): RedirectResponse
    {
        //TODO: create request for product  
        $request->validate([
              'title' => 'required',
              'contetnt' => 'required',
              'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          ]);
        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        Product::create($input);
       
        return redirect()->route('index')
                          ->with('success', 'Product created successfully.');
    }
}