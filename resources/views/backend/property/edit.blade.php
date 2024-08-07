<x-backend.layouts.master>
    {{-- <x-slot:title>info 
    </x-slot> --}}

{{-- =============================================== --}}

<div class="d-flex justify-content-center align-items-center my-3">
    <div class="card bg-light mx-auto shadow" style="width: 70rem;">
        <div class="card-body border rounded bg-light">
            <div class="alert alert-secondary" role="alert">
                <h2 class="text-center">Property Info</h2> 
            </div>
            <form method="POST" action="{{ route('properties.update', ['property'=>$property->id]) }}" enctype="multipart/form-data">
                @method('patch')
                @csrf
                <div class="row">
                    <!-- col md 6 -->
                    <div class="col-md-6">
                        <label for="property_id">Property ID</label>
                        <input class="form-control shadow" value="{{ old('property_id', $property->property_id)}}" type="text" name="property_id" id="property_id" placeholder="Enter ID"> <br>
                        @error('property_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <label for="property_title">Property Title</label>
                        <input class="form-control shadow" value="{{ old('property_title', $property->property_title)}}" type="text" name="property_title" id="property_title" placeholder="Enter Title"> <br>
                        @error('property_title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <label for="location">Location</label>
                        <input class="form-control shadow" value="{{ old('location', $property->location)}}" type="text" name="location" id="location" placeholder="Enter Location"> <br>
                        @error('location')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <label for="price">Price</label>
                        <input class="form-control shadow" value="{{ old('price', $property->price)}}" type="number"  name="price" id="price" placeholder="Enter Price"> <br>
                        @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <label for="property_description">Property Description</label>
                        <textarea class="form-control shadow" rows="7" name="property_description" id="property_description" placeholder="Enter Description">{{ old('property_description', $property->property_description)}} </textarea><br>
                        @error('property_description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        
                    </div>
                    <!-- col md 6 -->
                    <div class="col-md-6">
                        <label for="property_category">Property Category</label>

                        <select class="form-select shadow" name="property_category" id="property_category">
                            <option disabled value="0">Select Category</option>
                            @foreach ($categories as $category)
                            <option value="{{ old('property_category' , $category->id)}}" {{'property_category'==$category->title ? 'selected' : ''}}>{{ $category->title}}</option>
                            
                            @endforeach
                        </select><br>
                        @error('property_category')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <label for="area">Area</label>
                        <input class="form-control shadow" type="number" value="{{ old('area', $property->area)}}" name="area" id="area" placeholder="Enter Area"> <br>
                        @error('area')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <label for="contact_info">Contact Info</label>
                        <input class="form-control shadow" type="email" value="{{ old('contact_info', $property->contact_info)}}" name="contact_info" id="contact_info" placeholder="Enter Contact Info"> <br>
                        @error('contact_info')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        
                        <label for="property_image">Property Image</label>
                        <input class="form-control shadow" type="file" name="property_image"> <br><br>
                        <img src="{{ asset('storage/properties/'.$property->property_image) }}" alt="Property image" class=" rounded shadow" width="300px" height="200px">
                        @error('property_image')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div><br>
                <div class="text-center">
                    <button class="btn btn-secondary shadow" type="submit" value="add" name="add">Update Property</button>
                    <a class="btn btn-danger shadow" href="{{ route('properties.list') }}">Cancel</a><br><br>
                </div>
            </form>
        </div>
    </div>
</div>

</x-backend.layouts.master>
