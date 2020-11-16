<?php

namespace App\Http\Controllers;

use App\Image;
use App\Product;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $files = $request->product_img;
        // dd($files);
        // if($request->product_img)
        // {
        //     // foreach ($files as $file) {
        //     //     // $file->store('users/' . $this->user->id . '/messages');
        //     // }
        //     dd(count(collect($request->product_img)));
        // }
        // dd(count($request->product_img));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return \view('vendor.vendor_add_product');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id=auth()->user()->id;

        $Product=new Product;

        $Product->user_id=$id;
        $Product->name=$request->product_name;
        $Product->price=$request->price;
        $Product->quantity=$request->qty;
        $Product->product_weight=$request->product_weight;
        $Product->product_measur=$request->product_measur;
        $Product->product_category=$request->product_category;
        $Product->product_brand=$request->product_brand;
        $Product->product_status=$request->product_status;
        $Product->description=$request->product_discription;
        $product->is_alive=true;
        $Product->save();

        $latest = Product::where('user_id',$id)->orderBy('created_at','desc')->get();

        $files = $request->product_img;

        if($request->product_img)
        {
            foreach ($files as $file) {
                // Get Filename with exetendsion
            $filenameWithExt = $file->getClientOriginalName();
            // Get just FileName
            $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
            // Get just ext
            $extension =$file->getClientOriginalExtension();
            // Filename to store
            $filenameToStore= $latest[0]->id.'_'.$filename.'_'.time().'.'.$extension;
            // Upload Image
            $path=$file->move(public_path('\assets\img\product_img/'), $filenameToStore);
            // Upload DB
            $img = new Image;
            $img->product_id=$latest[0]->id;
            $img->file_name=$filenameToStore;
            $img->save();
            }
        }else{
            $filenameToStore='noimage.jpg';
            $img = new Image;
            $img->product_id=$latest[0]->id;
            $img->file_name=$filenameToStore;
            $img->save();
        }

        return \back()->with('product_create_message','product created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $id=$request->id;
        $product=Product::findOrfail($id);
        return \view('vendor.vendor_edit_product')->with('product',$product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id=$request->id;
        $Product=Product::findOrfail($id);

        $Product->user_id=$id;
        $Product->name=$request->product_name;
        $Product->price=$request->price;
        $Product->quantity=$request->qty;
        $Product->product_weight=$request->product_weight;
        $Product->product_measur=$request->product_measur;
        $Product->product_category=$request->product_category;
        $Product->product_brand=$request->product_brand;
        $Product->product_status=$request->product_status;
        $Product->save();

        return \redirect()->route('product.list')->with('product_update_message','Product Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id=$request->id;
        $update=Product::findOrfail($id);
        $update->is_alive=false;
        $update->save();
        return \back()->with('product_delete_message','Product Deleted Successfully');
    }
    public function My_Product()
    {
        $products=Product::paginate(5);
        // dd($details);
        return view('vendor.vendor_my_products')->with('products',$products);

    }
}




//     // DropZone Functions

//     function upload(Request $request)
//     {
//     //  $image = $request->file('file');
//     //  $imageName = time() . '.' . $image->extension();

//     //  $image->move(public_path('\assets\img\product_img/'), $filenameToStore);

//       if($request->hasFile('file')){
//             // Get Filename with exetendsion
//             $filenameWithExt = $request->file('file')->getClientOriginalName();

//             // Get just FileName
//             $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
//             // Get just ext
//             $extension =$request->file('file')->getClientOriginalExtension();
//             // Filename to store
//             $filenameToStore= $filename.'_'.time().'.'.$extension;
//             // Upload Image
//             $path=$request->file('file')->move(public_path('\assets\img\product_img/'), $filenameToStore);
//         }else{
//             $filenameToStore='noimage.jpg';
//         }

//      return response()->json(['success' => $filenameToStore]);
//     }

//     function fetch()
//     {
//      $images = \File::allFiles(public_path('\assets\img\product_img/'));
//      $output = '<div class="row">';
//      foreach($images as $image)
//      {
//       $output .= '
//       <div class="col-md-2" style="margin-bottom:16px;" align="center">
//                 <img src="'.asset('assets/img/product_img/' . $image->getFilename()).'" class="img-thumbnail" width="180" height="180"  />
//                 <button type="button" class="btn btn-link remove_image" id="'.$image->getFilename().'">Remove</button>
//             </div>
//       ';
//      }
//      $output .= '</div>';
//      echo $output;
//     }

    // function delete(Request $request)
    // {
    //     dd($request);
    // }
// }
