<x-backend.layouts.master>

    <div class="height-250 bg-light">
        <h2 class="alert alert-info">Slider Details</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>Title:</h3>
                    <p class="fs-5">{{ $slider->title }}</p>
                    <h3>Description:</h3>
                    <p class="fs-5">{{ $slider->description }}</p>
                    <div class="mt-5" style="bottom:0;">
                        <a href="{{ route('sliders.list')}}" class="btn btn-info btn-lg">Back</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('storage/sliders/'.$slider->image) }}" class="img-fluid rounded" style="width: 80vw" alt="Slider image">
                </div>
            </div>
        </div>
    </div>


</x-backend.layouts.master>
