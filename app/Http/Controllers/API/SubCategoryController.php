<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subCategories = DB::table('sub_categories')
            ->get()
            ->toArray();

        return response()->json([
            'status' => 'success',
            'data' => $subCategories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'subCategory_name' => 'required|max:50',
            'category_id' => 'required'
        ]);

        $subCategory = SubCategory::create($request->all());
        return response()->json([
            'status' => 'success',
            'message' => 'Ajouté avec succès',
            'data' => $subCategory
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(SubCategory $subCategory)
    {
        return response()->json($subCategory);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SubCategory $subCategory)
    {
        $request->validate([
            'subCategory_name' => 'required|max:50',
            'category_id' => 'required'
        ]);
        $subCategory->update($request->all());

        return response()->json([
            'status' => 'success',
            'message' => 'Mise à jour réussite !!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubCategory $subCategory)
    {
        $subCategory->delete();
        return response()->json([
            'status' => 'Super, tu as supprimé la sous-catégorie'
        ]);
    }
}
