<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'name'          => 'required|string|max:50',
            'email'         => 'required|email',
            'domain'        => 'required|string',
            'purchase_code' => 'required|unique:products,purchase_code',
            'company'       => 'nullable|string',
            'address'       => 'nullable|string',
            'product_id'    => 'required|in:product_xek33,product_3ksk33,product_k3l3533,product_ul3KS33,product_lnA32lD',
        ]);

        try {
            $data = $this->checkProduct($request->purchase_code);

            if ($data && $data['buyer'] === $request->name) {
                Product::create($validated);
                return redirect()->back()->with('message', 'Product registration successful');
            }

            return redirect()->back()->withErrors(['purchase_code' => 'Invalid purchase code or buyer name'])->withInput();
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors(['error' => $th->getMessage()])->withInput();
        }
    }

    // purchase verification
    public function checkProduct($purchase_code)
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('ENVATO_API_TOKEN'),
        ])->get('https://api.envato.com/v3/market/author/sale', [
            'code' => $purchase_code,
        ]);

        if ($response->successful()) {
            return $response->json(); // return full data
        }

        return false;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function verify(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'domain' => 'required|exists:products,domain',
            'product_id' => 'required|exists:products,product_id',
            'purchase_code' => 'required|exists:products,purchase_code',
        ]);

        if($validate->fails()){
            return response()->json($validate->errors(),400);
        }

        try {
            $data = Product::where('product_id',$request->product_id)->andWhere('purchase_code',$request->purchase_code)->first();
            return response()->json($data,200);
        } catch (\Throwable $th) {
            return response()->json([
                'errors' => $th->getMessage()
            ],400);
        }
    }
}
