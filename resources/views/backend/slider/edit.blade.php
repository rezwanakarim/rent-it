<x-backend.layouts.master>

    <div class="d-flex justify-content-center align-items-center my-3">
        <div class="card bg-light mx-auto shadow" style="width: 70rem;">
            <div class="card-body border rounded bg-light">
                <div class="alert alert-secondary" role="alert">
                    <h2 class="text-center">Slider Info</h2>
                </div>
                <form method="POST" action="{{ route('sliders.update', ['slider' => $slider->id]) }}"
                    enctype="multipart/form-data">
                    @method('patch')
                    @csrf
                    <div class="row">
                        <!-- col md 6 -->
                        <div class="col-md-6">
                            <label for="title">Title</label>
                            <input class="form-control shadow" value="{{ old('title', $slider->title) }}" type="text"
                                name="title" id="title" placeholder="Enter Title"> <br>
                            @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <label for="description">Slider Description</label>
                            <textarea class="form-control shadow" rows="7"
                                name="description" id="description" placeholder="Enter Description">{{ old('description', $slider->description) }} </textarea><br>
                            @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                        </div>
                        <!-- col md 6 -->
                        <div class="col-md-6">
                            <label for="image">Image</label>
                            <input class="form-control shadow" type="file" name="image"> <br><br>
                            <img src="{{ asset('storage/sliders/' . $slider->image) }}" alt="slider image"
                                class="rounded shadow" width="400px" height="220px">
                            @error('image')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div><br>
                    <div class="text-center">
                        <button class="btn btn-secondary shadow" type="submit" value="add" name="add">Update
                            slider</button>
                        <a class="btn btn-danger shadow" href="{{ route('sliders.list') }}">Cancel</a><br><br>
                    </div>
                </form>
            </div>
        </div>

</x-backend.layouts.master>
