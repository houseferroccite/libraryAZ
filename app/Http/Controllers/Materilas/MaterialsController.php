<?php

namespace App\Http\Controllers\Materilas;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestMaterial;
use App\Models\Category;
use App\Models\Material;
use App\Models\matTag;
use App\Models\mattags;
use App\Models\tagMaterial;
use App\Models\Tag;
use App\Models\Type;
use Illuminate\Http\Request;

class MaterialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $materials = Material::get();
        return view('materials.listMaterials',compact('materials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $types = Type::get();
        $categories = Category::get();
        return view('materials.action.form',compact('types','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(RequestMaterial $request)
    {
        $params = $request->all();
        Material::create($params);
        return redirect()->route('materials');
    }

    /**
     * Display the specified resource.
     *
     * @param Material|null $material
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show($id)
    {
        $material = Material::where('id',$id)->first();
        $tags = Tag::get();
        return view('materials.action.showMaterial', compact('material','tags'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Material  $material
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Material $material)
    {
        $types = Type::get();
        $categories = Category::get();
        return view('materials.action.form',compact('types','categories','material'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param RequestMaterial $request
     * @param \App\Models\Material $material
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(RequestMaterial $request, Material $material)
    {
        $params = $request->all();
        $material->update($params);
        return redirect()->route('materials');
    }
    public function addMaterialTag(Request $request)
    {
        mattags::create($request->all());
        return redirect()->back();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param RequestMaterial $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        $materials = Material::findOrFail($request->material_id);
        $materials->delete();
        return redirect()->route('materials');
    }

    public function search(Request $request)
    {
        $s = $request->s;
        $materials = Material::where('name', 'LIKE', "%{$s}%")
            ->orWhere('name', 'LIKE', "%{$s}%")
            ->orWhere('author', 'LIKE', "%{$s}%")
            ->orWhere('category_id', 'LIKE', "%{$s}%")->get();
        return view('materials.listMaterials', compact('materials'));
    }
}
