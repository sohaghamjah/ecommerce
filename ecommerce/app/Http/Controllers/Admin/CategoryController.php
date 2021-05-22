<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Category main page
     *
     * @return void
     */
    public function index(){
        $cat = Category::latest() -> get();
        return view('admin.categories.index', [
            'cat' => $cat,
        ]);
    }
    /**
     * Category Store
     */

    public function store(Request $request){
        $request -> validate([
            'cat_name_en' => 'required',
            'cat_name_bn' => 'required',
            'cat_icon'    => 'required',
        ], [
            'cat_name_en.required' => 'The field must not be empty !',
            'cat_name_bn.required' => 'The field must not be empty !',
            'cat_icon.required'    => 'The field must not be empty !',
        ]);

        Category::create([
            'cat_name_en' => $request -> cat_name_en,
            'cat_slug_en' => Str::slug($request -> cat_name_en),
            'cat_name_bn' => $request -> cat_name_bn,
            'cat_slug_bn' => str_replace(' ','_', $request -> cat_name_bn),
            'cat_icon'    => $request -> cat_icon,
        ]);
        return redirect() -> route('admin.categories') ->  with('toast_success', 'Category was added Successfully!');
    }

    /**
     * Category edit
     *
     * @param [type] $id
     * @return void
     */
    public function edit($id){
        $cat = Category::find($id);
        return view('admin.categories.edit', compact('cat'));
    }

    /**
     * Category update
     *
     * @param [type] $id
     * @return void
     */

    public function update(Request $request){
        $id = $request -> id;

        $request -> validate([
            'cat_name_en' => 'required',
            'cat_name_bn' => 'required',
            'cat_icon'    => 'required',
        ], [
            'cat_name_en.required' => 'The field must not be empty !',
            'cat_name_bn.required' => 'The field must not be empty !',
            'cat_icon.required'    => 'The field must not be empty !',
        ]);

        Category::find($id)->update([
            'cat_name_en' => $request -> cat_name_en,
            'cat_slug_en' => Str::slug($request -> cat_name_en),
            'cat_name_bn' => $request -> cat_name_bn,
            'cat_slug_bn' => str_replace(' ','_', $request -> cat_name_bn),
            'cat_icon'    => $request -> cat_icon,
        ]);
        return redirect() -> route('admin.categories') -> with('toast_success', 'Catgory has been updated successfully!');

    }

    /**
     * Categories delete
     */

    public function destroy($id){
        $brand = Category::find($id);
        $brand -> delete();
        return redirect()->back()->with('toast_success', 'Category has been deleted successfull !');
    }


    /* ======================================
                SUB CATEGORY PART
    ======================================= */

    /**
     * Sub category index
     *
     * @return void
     */
    public function subindex(){
        $subcat = SubCategory::latest() -> get();
        $cat = Category::orderBy('cat_name_en', 'ASC') -> get();
        return view('admin.subcategories.index', compact('subcat', 'cat'));
    }

    /**
     * sub Category Store
     */

    public function substore(Request $request){
        $request -> validate([
            'subcat_name_en' => 'required',
            'subcat_name_bn' => 'required',
            'cat_id' => 'required',
        ], [
            'subcat_name_en.required' => 'Enter sub category name !',
            'subcat_name_bn.required' => 'Enter sub category name !',
            'cat_id.required' => 'Select a category !',
        ]);

        SubCategory::create([
            'cat_id'         => $request -> cat_id,
            'subcat_name_en' => $request -> subcat_name_en,
            'subcat_slug_en' => Str::slug($request -> subcat_name_en),
            'subcat_name_bn' => $request -> subcat_name_bn,
            'subcat_slug_bn' => str_replace(' ','_', $request -> subcat_name_bn),
        ]);
        return redirect() -> back() ->  with('toast_success', 'Sub-category was added successfully!');
    }
    /**
     * Sub cat edit
     *
     * @param [type] $id
     * @return void
     */
    public function subedit($id){
        $subcat = SubCategory::find($id);
        $cat = Category::orderBy('cat_name_en', 'ASC') -> get();
        return view('admin.subcategories.edit', [
            'subcat' => $subcat,
            'cat' => $cat,
        ]);
    }

     /**
     * Sub cat update
     *
     * @param [type] $id
     * @return void
     */
    public function subupdate(Request $request){
        $id = $request -> id;

        $request -> validate([
            'subcat_name_en' => 'required',
            'subcat_name_bn' => 'required',
            'cat_id' => 'required',
        ], [
            'subcat_name_en.required' => 'Enter sub category name !',
            'subcat_name_bn.required' => 'Enter sub category name !',
            'cat_id.required' => 'Select a category !',
        ]);

        SubCategory::find($id)->update([
            'subcat_name_en' => $request -> subcat_name_en,
            'subcat_slug_en' => Str::slug($request -> subcat_name_en),
            'subcat_name_bn' => $request -> subcat_name_bn,
            'subcat_slug_bn' => str_replace(' ','_', $request -> subcat_name_bn),
            'cat_id'    => $request -> cat_id,
        ]);
        return redirect() -> route('admin.sub-category') -> with('toast_success', 'Sub Catgory has been updated successfully!');
    }

     /**
     * Categories delete
     */

    public function subdestroy($id){
        $subcat = SubCategory::find($id);
        $subcat -> delete();
        return redirect()->back()->with('toast_success', 'Sub Category has been deleted successfull !');
    }

    /* ======================================
               SUB SUB CATEGORY PART
    ======================================= */

    /**
     * Sub category index
     *
     * @return void
     */
    public function subSubIndex(){
        $cat = Category::orderBy('cat_name_en', 'ASC') -> get();
        $subSubCat = SubSubCategory::latest() -> get();
        return view('admin.subSubCategories.index', compact('cat', 'subSubCat'));
    }

    /**
     * Get sub category
     */
    public function subCatAjax($id){
        $subcat = SubCategory::where('cat_id', $id) -> orderBy('subcat_name_en', 'ASC') -> get();
        return json_encode($subcat);
    }

        /**
     * sub Category Store
     */

    public function subSubStore(Request $request){
        $request -> validate([
            'subsubcat_name_en' => 'required',
            'subsubcat_name_bn' => 'required',
            'cat_id' => 'required',
            'subcat_id' => 'required',
        ], [
            'subcat_name_en.required' => 'Enter sub sub category name !',
            'subcat_name_bn.required' => 'Enter sub sub category name !',
            'cat_id.required' => 'Select a category !',
            'subcat_id.required' => 'Select a sub category !',
        ]);

        SubSubCategory::create([
            'cat_id'         => $request -> cat_id,
            'subcat_id'         => $request -> subcat_id,
            'sub_sub_cat_name_en' => $request -> subsubcat_name_en,
            'sub_sub_cat_slug_en' => Str::slug($request -> subsubcat_name_en),
            'sub_sub_cat_name_bn' => $request -> subsubcat_name_bn,
            'sub_sub_cat_slug_bn' => str_replace(' ','_', $request -> subsubcat_name_bn),
        ]);
        return redirect() -> back() ->  with('toast_success', 'Sub-sub-category was added successfully!');
    }
    /**
     * Sub sub category edit
     */

    public function subSubEdit($id){
        $subsubcat = SubSubCategory::find($id);
        return view('admin.subSubCategories.edit', compact('subsubcat'));
    }

    public function subSubUpdate(Request $request){
        $id = $request -> id;
        $request -> validate([
            'subsubcat_name_en' => 'required',
            'subsubcat_name_bn' => 'required',
        ], [
            'subcat_name_en.required' => 'Enter sub sub category name !',
            'subcat_name_bn.required' => 'Enter sub sub category name !',
        ]);

        SubSubCategory::find($id)->update([
            'sub_sub_cat_name_en' => $request -> subsubcat_name_en,
            'sub_sub_cat_name_en' => Str::slug($request -> subsubcat_name_en),
            'sub_sub_cat_name_bn' => $request -> subsubcat_name_bn,
            'sub_sub_cat_name_bn' => str_replace(' ','_', $request -> subsubcat_name_bn),
        ]);
        return redirect() -> route('admin.sub-sub-category') -> with('toast_success', 'Sub Sub Catgory has been updated successfully!');
    }
    /**
     * Sub sub category destroy
     */

    public function subSubDestroy($id){
        $subSubCat = SubSubCategory::find($id);
        $subSubCat -> delete();
        return redirect()->back()->with('toast_success', 'Sub Sub Category has been deleted successfull !');
    }

}
