<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\carousel;
use Illuminate\Http\Request;

class CarouselController extends Controller
{
    public function carousel(){
        $carousel = Carousel::all();
        return view('backend.page.Carousel.index',compact('carousel'));

    }
    public function carouselCreate(){
        return view('backend.page.Carousel.create');

    }
    public function carouselstore(Request $request){
        $carousel = new carousel();
        if($request->hasFile('carousel_image')){
            $carouselImage = $request->file('carousel_image');
            $newCarouselImage = $carouselImage->hashName();
            $carouselImage->move('carousel', $newCarouselImage);
            $carousel->carousel_image = "carousel/$newCarouselImage";
        }
        $carousel->save();
        return redirect()->back();

    }

    public function ActiveShow($id){
        $activeCarousel = Carousel::findorFail($id);
        $activeCarousel->status = 'active';
        $activeCarousel->save();
        return redirect()->back();


    }
    public function DeactiveShow($id){
        $activeCarousel = Carousel::findorFail($id);
        $activeCarousel->status = 'deactive';
        $activeCarousel->save();
        return redirect()->back();


    }

    public function carouseledit($id){
        $carouselEdit = Carousel::findorFail($id);
        return view('backend.page.Carousel.edit', compact('carouselEdit'));

    }

    public function carouselupdate(Request $request , $id){
        $updatecarousel = Carousel::findorFail($id);
        if($request->hasFile('carousel_image')){
            $carouselImage = $request->file('carousel_image');
            $newCarouselImage = $carouselImage->hashName();
            $carouselImage->move('carousel', $newCarouselImage);
            $updatecarousel->carousel_image = "carousel/$newCarouselImage";
        }
        $updatecarousel->update();
        return redirect()->back();

    }
    public function carouselDelete($id){
        $carouselDelete = Carousel::findorFail($id);
        $carouselDelete->delete();
        return redirect()->back();
    }
}
