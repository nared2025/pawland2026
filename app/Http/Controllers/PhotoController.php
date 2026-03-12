<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Product;


class PhotoController extends Controller
{
    private function userName()
    {
        return
            Auth::user()->name; //ดึงชื่อ 
    }

    private function getTypes()
    {
        return array_keys($this->getTypeNames());
    }

    private function getTypeNames(): array
    {
        return [
            'Food_dog' => 'อาหารน้องสุนัข',
            'Food_cat' => 'อาหารน้องแมว',
            'Dog_nail_clippers' => 'กรรไกรตัดเล็บสุนัข',
            'Cat_litter' => 'ทรายแมว',
            'Comb' => 'หวี',
            'Collar' => 'ปลอกคอ',
            'Leash' => 'สายจูง',
            'Dog_bowl' => 'ชามอาหารสุนัข',
            'Dog_cage' => 'กรงสุนัข',
            'Pet_shirt' => 'เสื้อสัตว์เลี้ยง',
            'Pet_pad' => 'แผ่นรองซับ',
            'Shampoo' => 'แชมพูสัตว์เลี้ยง',
            'Dog_toothbrush' => 'แปรงสีฟันสุนัข',
            'Toys_dog' => 'ของเล่นสุนัข',
            'Cat_condo' => 'คอนโดแมว',
            'Cat_bag' => 'กระเป๋าแมว',
            'Toys_cat' => 'ของเล่นแมว',
        ];
    }

    public function index(Request $request)
    {
        $typeNames = $this->getTypeNames();

        $query = Product::query();

        // ดึงประเภทจาก DB
        $types = Product::select('type')->distinct()->pluck('type');

        // filter category
        if ($request->category && $request->category != 'all') {
            $query->where('type', $request->category);
        }

        // search
        if ($request->search) {
            $query->where('name', 'like', "%{$request->search}%");
        }

        $products = $query->get();

        return view('photos.products', compact('products', 'types', 'typeNames'));
    }
    public function create()
    {
        $user = $this->userName();
        $types = $this->getTypes();
        $typeNames = $this->getTypeNames();
        $products = Product::all();
        return view('photos.create', compact('types', 'products', 'user', 'typeNames'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'type' => 'required|string',
            'image' => 'required|image|max:2048',
        ]);

        // upload R2
        $path = $request->file('image')->store('products', 'r2');

        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
            'type' => $request->type,
            'image' => $path,
        ]);

        return redirect()->back()->with('success', 'เพิ่มข้อมูลสำเร็จแล้ว');
    }

    public function edit(string $id)
    {
        $user = $this->userName();
        $types = $this->getTypes();
        $typeNames = $this->getTypeNames();
        $product = Product::findOrFail($id);
        $products = Product::all();

        return view('photos.create', compact('products', 'product', 'types', 'typeNames', 'user'));
    }

    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'type' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // ลบรูปเก่าจาก R2 ก่อน
            if ($product->image && Storage::disk('r2')->exists($product->image)) {
                Storage::disk('r2')->delete($product->image);
            }
            // อัปโหลดรูปใหม่ไป R2
            $path = $request->file('image')->store('products', 'r2');
            $product->image = $path;
        }

        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
            'type' => $request->type,
        ]);

        return redirect()->route('photos.create')->with('success', 'แก้ไขสินค้าแล้ว');
    }

    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);

        // ลบไฟล์รูปจาก R2
        if ($product->image && Storage::disk('r2')->exists($product->image)) {
            Storage::disk('r2')->delete($product->image);
        }

        // ลบ record ในฐานข้อมูล
        $product->delete();


        return redirect()->route('photos.create')->with('success', 'ลบสินค้าแล้ว');
    }

    public function about()
    {
        return view('photos.about');
    }

    public function contact()
    {
        return view('photos.contact');
    }
}
