<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProductsController extends Controller
{

    public function product_add()
     {
        return view(view:'auth.product_add');
     }

    public function insert_product (Request $request){
        $product = new product();
        $product -> source =$request -> source ;
        $product -> destination =$request -> destination ;
        $product -> time = $request ->time;
        $product -> price = $request ->price;
        $product -> save();
        return redirect()->route(route:'product_add')->with('success','Da them thong tin thanh cong');
     }

     public function product_list()
     {
         return view(view:'admin.test');
     }

     public function list (Request $request)
     {
        $key = $request->time;
        $key1 = $request->source;
        $key2 = $request->destination;
        if(strlen($key) == 0)
        {
            if(strlen($key1)==0)
            {
                $product =  product::all()->where('destination','like',$key2);
            }
            else{
                if(strlen($key2)==0){
                    $product =  product::all()->where('source','like',$key1);
                }
                else{
                    $product =  product::all()->where('source','like',$key1)->where('destination','like',$key2);
                }
            }
        }
        else{
            if(strlen($key1)==0)
            {
                if(strlen($key2)==0){
                    $product =  product::all()->where('time','like',$key);
                }
                else{
                    $product =  product::all()->where('time','like',$key)->where('destination','like',$key2);
                }
            }
            else{
                if(strlen($key2)==0){
                    $product =  product::all()->where('source','like',$key1)->where('time','like',$key);
                }
                else{
                    $product =  product::all()->where('source','like',$key1)->where('destination','like',$key2)->where('time','like',$key);
                }
            }
        }
        return view('admin.list_product',[
            'products' => $product
        ]);
     }
}
?>
