<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\AttributeOption;
use Illuminate\Http\Request;

class AttributeController extends Controller
{
    public function index()
    {
        $attributes = Attribute::with('options')->orderBy('name')->paginate(20);
        return view('admin.attributes.index', compact('attributes'));
    }

    public function create()
    {
        return view('admin.attributes.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required','string','max:255'],
            'type' => ['required','in:text,select,multi_select'],
        ]);
        $attr = Attribute::create($validated);
        return redirect()->route('admin.attributes.edit', $attr);
    }

    public function edit(Attribute $attribute)
    {
        $attribute->load('options');
        return view('admin.attributes.edit', compact('attribute'));
    }

    public function update(Request $request, Attribute $attribute)
    {
        $validated = $request->validate([
            'name' => ['required','string','max:255'],
            'type' => ['required','in:text,select,multi_select'],
        ]);
        $attribute->update($validated);

        $labels = $request->input('option_label', []);
        $values = $request->input('option_value', []);
        $orders = $request->input('option_order', []);
        $ids = $request->input('option_id', []);
        $max = max(count($labels), count($values), count($orders), count($ids));
        for($i = 0; $i < $max; $i++){
            $label = trim($labels[$i] ?? '');
            $value = $values[$i] ?? null;
            $order = (int)($orders[$i] ?? 0);
            $id = $ids[$i] ?? null;

            if($label === ''){
                if($id){
                    AttributeOption::where('attribute_id',$attribute->id)->where('id',$id)->delete();
                }
                continue;
            }

            $data = [ 'label' => $label, 'value' => $value, 'sort_order' => $order ];
            if($id){
                $opt = AttributeOption::where('attribute_id',$attribute->id)->where('id',$id)->first();
                if($opt){ $opt->update($data); } else { $attribute->options()->create($data); }
            } else {
                $attribute->options()->create($data);
            }
        }
        return back();
    }

    public function destroy(Attribute $attribute)
    {
        $attribute->delete();
        return redirect()->route('admin.attributes.index');
    }
}