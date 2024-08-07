<x-backend.layouts.master>
    {{-- <x-slot:title>info 
    </x-slot> --}}
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card bg-light mx-auto" style="width: 60rem;">
            <div class="card-body border rounded bg-light">
                <div class="alert alert-secondary" role="alert">
                    <h2 class="text-center">Update Category Info</h2>
                </div>

                {{-- {{dd('here');}} --}}
                <form method="POST" action="{{ route('categories.update', ['category' => $category->id]) }}"
                    enctype="multipart/form-data">
                    @method('patch')
                    @csrf
                    <label for="title">Category title</label>
                    <input class="w-50 form-control shadow" value="{{ old('title', $category->title) }}" type="text"
                        name="title" id="title"> <br>
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <label for="description">Category Description</label>
                    <textarea class="w-50 form-control shadow" rows="7"
                        type="text" name="description" id="description">{{ old('description', $category->description) }}</textarea> <br><br>
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="text-start">
                        <button class="w-25 btn btn-lg btn-secondary" type="submit" value="add"
                            name="add">Update</button>
                        <a class="w-25 btn btn-lg btn-danger" href="{{ route('categories.list') }}">Cancel</a><br><br>
                    </div>

                </form>
            </div>
        </div>
    </div>

</x-backend.layouts.master>
