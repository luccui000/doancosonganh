<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::with('hinhanh')->get();

        return view('admin.slider.index', compact('sliders'));
    }
    public function create()
    {
        return view('admin.slider.create');
    }
    public function store(Request $request)
    {
        abort_if(!$request->has('button_type'), Response::HTTP_FAILED_DEPENDENCY);
        
        $buttonType = $request->input('button_type');
        $validateRequest = $request->validate(Slider::VALIDATION_RULES, Slider::VALIDATION_MESSAGES);
    
        $sliderCreated = Slider::create($validateRequest);
        if($buttonType === "1")  
            return redirect()->route('admin.slider.edit', $sliderCreated->id);
        return redirect()->route('admin.slider.index');

    }
    public function edit($id)
    {
        $slider = Slider::findOrFail($id);
        return view('admin.slider.edit', compact('slider'));
    }
}
