<x-backend.layouts.master>


    <div class="d-flex justify-content-center align-items-center my-3">
        <div class="card bg-light mx-auto shadow" style="width: 60rem;">
            <div class="card-body border rounded bg-light">
                <div class="alert alert-secondary" role="alert">
                    <h2 class="text-center">Slider Info</h2>
                </div>
                <form method="POST" action="{{ route('sliders.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <!-- col md 6 -->
                        <div class="col-md-6">
                            <label for="title">Slider Title</label>
                            <input class="form-control shadow" value="{{ old('title') }}" type="text" name="title"
                                id="title" placeholder="Enter Title"> <br>
                            @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <label for="description">Description</label>
                            <textarea class="form-control shadow" rows="7" name="description" id="description"
                                placeholder="Enter Description">{{ old('description') }} </textarea><br>
                            @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror


                        </div>
                        <!-- col md 6 -->
                        <div class="col-md-6">

                            <label for="image"> Image</label>
                            <input class="form-control shadow" type="file" name="image">
                            <br>
                            @error('image')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="text-center">
                            <button class="btn btn-secondary shadow" type="submit" value="add" name="add">Add
                                Slider</button>
                            <a class="btn btn-danger shadow" href="{{ route('sliders.list') }}">Cancel</a><br><br>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-backend.layouts.master>
