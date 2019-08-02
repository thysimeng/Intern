<?php

namespace App\Http\Controllers;


use App\Product;
use Illuminate\Http\Request;
use App\Products;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
        public function __construct()
    {
        $this->middleware('auth');
//        $this->middleware(['role:admin']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('DailyShop.product-upload');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {

        $this->validate($request, [
                'name' => 'required',
                'size' => 'required',
                'color' => 'required',
                'filename' => 'required',
                'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|min:100&max2000'

        ]);
        $imagex = $request->file('filename');
        $new_name = $imagex[0]->getClientOriginalName();
        $nameProduct = $request->input('name');
        $productPrice = $request->input('price');
        $productshortDesc = $request->input('shortDescription');
        $productCategory = $request->input('catagegory');
        $productLongDesc = $request->input('longDescription');
        if($request->hasfile('filename'))
         {

            foreach($request->file('filename') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/images/', $name);
                $data[] = $name;
            }
         }

         if($request->input('size')=="")
         {
             $dataSize[]=['null'];
         }

         else
         {
             foreach ($request->input('size') as $valueSize){
                 $dataSize[] =$valueSize;
             }
         }

        if($request->input('color')=='')
        {
            $dataColor[]=['null'];
        }
        else
         {
            foreach ($request->input('color') as $valueColor){
                $dataColor[] =$valueColor;
            }
        }
        $user = Auth::user();

        $product= new Product();
        $product->user_id=$user->id;
        $product->category_id = $productCategory;
        $product->ProductImagePhoto=json_encode($data);
        $product->ProductName=$nameProduct;
        $product->ProductWeight=22;
        $product->ProductCartDesc="gg";
        $product->ProductStock=22;
        $product->ProductPrice=$productPrice;
        $product->ProductShortDesc=$productshortDesc;
        $product->ProductSize=json_encode($dataSize);
        $product->productColor=json_encode($dataColor);
        $product->ProductImage=$new_name;
        $product->ProductLongDesc = $productLongDesc;
        $product->save();

        return back()->with('success', 'Your images has been successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $nameProduct = $request->input('name');
        $idUpdate = $request->input('idUpdate');
        $productPrice = $request->input('price');
        $productshortDesc = $request->input('shortDescription');
        $productCategory = $request->input('catagegory');
        $productLongDesc = $request->input('longDescription');
        if($request->hasfile('filename'))
        {
            $this->validate($request, [
                'filename' => 'required',
                'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

            ]);

            foreach($request->file('filename') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/images/', $name);
                $data[] = $name;
            }

            DB::table('products')->where('ProductID', $idUpdate)->update(
                ['ProductImagePhoto'=>json_encode($data)]
            );
            DB::table('products')->where('ProductID', $idUpdate)->update(
                ['ProductImage'=>$data[0]]);
        }

        if($request->input('size')=="")
        {
            $dataSize[]=['null'];
        }

        else
        {
            foreach ($request->input('size') as $valueSize){
                $dataSize[] =$valueSize;
            }
        }

        if($request->input('color')=='')
        {
            $dataColor[]=[];
        }
        else
        {
            foreach ($request->input('color') as $valueColor){
                $dataColor[] =$valueColor;
            }
        }

        DB::table('products')->where('ProductID', $idUpdate)->update(
//            ['ProductImagePhoto'=>json_encode($data)],
            ['ProductName'=>$nameProduct],
            ['ProductPrice'=>$productPrice],
            ['ProductShortDesc'=>$productshortDesc],
            ['ProductSize'=>json_encode($dataSize)],
            ['productColor'=>json_encode($dataColor)],
//            ['ProductImage'=>$new_name],
            ['productCategory'=>$productCategory],
            ['ProductLongDesc'=>$productLongDesc]);

//        return back()->with('success', 'Your product has been updated successfully');
        return redirect('/product-detail/'.$idUpdate);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($deleteID)
    {
        Products::where('ProductID', $deleteID)->delete();
        return redirect()->back();
    }

    public function deleteUser($deleteID)
    {
        $user = Auth::user();
        if ($user->id!=$deleteID){
        User::where('id', $deleteID)->delete();
        }
        return redirect()->back();
    }

    public function updateRoleAdmin($userID)
    {
        // Role::create(['name' => 'user']);
        // Permission::create(['name'=>'delete']);
//        $role = Role::findById(2);
//         $permission = Permission::findById(2);
//         $role->givePermissionTo($permission);
        // $permission->assignRole($role);
//        $user = DB::table('users')->find(7);
//        Auth()->user(7)->assignRole($role);
//        $user->syncRoles([$role, 'admin']);
//        $user->assignRole($role);
        $role = Role::findById(2);
        $user = User::find($userID);
//        $user = DB::table('users')->find(7);
        $user->assignRole($role);
//        $this->userRepository->assignRole()
//        $a = $this->userRepository->create($admin);
//        $this->userRepository->assignRole($role, $user);

        return redirect()->back();
    }
    public function updateRoleUser($userID)
    {

        $user = Auth::user();
        if ($user->id!=$userID){
            $role = Role::findById(2);
            $user = User::find($userID);
            $user->removeRole($role);
        }
        return redirect()->back();
    }
}
