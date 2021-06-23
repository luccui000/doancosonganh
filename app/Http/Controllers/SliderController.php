<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\HinhAnh;
use App\Models\HinhAnhSlider;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Validator;

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
        $slider = Slider::with('hinhanh')->where('id', $id)->first();
        return view('admin.slider.edit', compact('slider'));
    }
    public function addItemToSlider(Request $request, $id)
    { 
        // if();
        $validator = Validator::make($request->all(), HinhAnhSlider::VALIDATION_RULES, HinhAnhSlider::VALIDATION_MESSAGES);
        if($validator->fails()) {
            $previousUrl = strtok(url()->previous(), '?');

            return redirect()->to(
                $previousUrl . '?' . http_build_query(['open_modal' => '1'])
            )->withErrors($validator); 
        }
        $slider = Slider::findOrFail($id);
         
        if($request->hasFile('hinhanh')) {
            $file = $request->file('hinhanh');
            $fileName = $file->getClientOriginalName(); 
            $fileNameToStore = date('dmy_hms').'_'.$fileName; 
            $file->storeAs('public', $fileNameToStore);
            $idHinhAnh = HinhAnh::insertGetId([
                'duong_dan_hinh_anh' => 'storage/' . $fileNameToStore,
                'created_at' => now(),
                'updated_at' => now()
            ]);
            $vitri = HinhAnhSlider::latest()->where('slider_id', $id)->max('vi_tri'); 
            $slider->hinhanh()->attach($idHinhAnh, [
                'vi_tri' => $vitri,
            ]);
        }
    }
}
