<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('created_at', 'DESC')->paginate(10);
        return view('categories.index', compact('categories'));
    }

    public function store(Request $request)
    {
        //validasi form
        $this->validate($request, [
            'name' => 'required|string|max:50',
            'kirim' => 'required|integer',
            'terima' => 'required|integer'
        ]);

        try {
            $categories = Category::firstOrCreate([
                'name' => $request->name,
                'kirim' => $request->kirim,
                'terima' => $request->terima
            ]);
            return redirect()->back()->with(['success' => 'Kategori: ' . $categories->name . ' Ditambahkan']);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        $categories = Category::findOrFail($id);
        $categories->delete();
        return redirect()->back()->with(['success' => 'Kategori: ' . $categories->name . ' Telah Dihapus']);
    }

    public function edit($id)
    {
        $categories = Category::findOrFail($id);
        return view('categories.edit', compact('categories'));
    }

    public function update(Request $request, $id)
    {
        //validasi form
        $this->validate($request, [
            'name' => 'required|string|max:50',
            'kirim' => 'required|integer',
            'terima' => 'required|integer'
        ]);

        try {
            $categories = Category::findOrFail($id);
            $categories->update([
                'name' => $request->name,
                'kirim' => $request->kirim,
                'terima' => $request->terima
            ]);
            return redirect(route('kategori.index'))->with(['success' => 'Kategori: ' . $categories->name . ' Ditambahkan']);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
}
