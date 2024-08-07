<x-backend.layouts.master>
    {{-- <x-slot:title>info 
    </x-slot> --}}
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card bg-light mx-auto" style="width: 45rem;">
            <div class="card-body border rounded bg-light">
                <div class="alert alert-secondary" role="alert">
                    <h2 class="text-center">Create New Category</h2>
                </div>
                {{-- @if (session('message'))
                    <div class="alert alert-success alert-dismissible " role="alert">
                        <strong>Success!</strong> {{ session('message') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif --}}
                {{--  <form method="POST" action="{{ route('categories.store') }}" enctype="multipart/form-data">
                    @csrf
                    <label for="title">Category title</label>
                    <input class="w-100 form-control" value="{{ old('title')}}" type="text" name="title" id="title"> <br>
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <label for="description">Category Description</label>
                    <textarea class="w-100 form-control" value="{{old('description')}}" type="text" name="description" id="description" rows="8"></textarea> <br><br>
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">
                        <input type="checkbox" name="is_active" class="form-check-input" id="active">
                        <label for="form-check-label" for="active" value="1" class="form-label"
                            name="isactive">Active</label> 
                    </div>

                    <div class="text-start">
                        <button class="w-25 btn btn-lg btn-secondary" type="submit" value="add"
                            name="add">Create</button>
                        <a class="w-25 btn btn-lg btn-danger" href="{{ route('categories.list') }}">Cancel</a><br><br>
                    </div>

                </form> --}}
                <div id="success-message"></div>
                <form method="POST" action="{{ route('categories.store') }}" enctype="multipart/form-data"
                    id="category-form">
                    @csrf
                    <label for="title">Category title</label>
                    <input class="w-100 form-control" value="{{ old('title') }}" type="text" name="title"
                        id="title"> <br>
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div id="title_error"></div>

                    <label for="description">Category Description</label>
                    <textarea class="w-100 form-control" value="{{ old('description') }}" type="text" name="description" id="description"
                        rows="8"></textarea> <br><br>
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">
                        <input type="checkbox" name="is_active" class="form-check-input" id="active">
                        <label for="form-check-label" for="active" value="1" class="form-label"
                            name="isactive">Active</label>
                    </div>

                    <div class="text-start">
                        <button class="w-25 btn btn-lg btn-secondary" type="submit" value="add"
                            name="add">Create</button>
                        <a class="w-25 btn btn-lg btn-danger" href="{{ route('categories.list') }}">Cancel</a><br><br>
                    </div>
                </form>

                <script>
                    $(document).ready(function() {
                        $('#category-form').submit(function(e) {
                            e.preventDefault(); // prevent default form submission behavior
                            var formData = new FormData(this); // create a new FormData object
                            $.ajax({
                                url: $(this).attr('action'), // get the form action URL
                                method: $(this).attr('method'), // get the form method
                                data: formData, // set the form data
                                contentType: false, // disable content-type header
                                processData: false, // disable processData flag
                                success: function(response) {
                                    $('#category-form')[0].reset(); //reset the form after submission
                                    $('#success-message').html(
                                        '<div class="alert alert-success alert-dismissible" role="alert"><strong>Success!</strong> ' +
                                        response.message +
                                        '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'
                                        );
                                },
                                error: function(xhr) {
                                    //alert(xhr.responseText); // show error message
                                    $('#title_error').html(
                                        '<div class="alert alert-danger">' +
                                       xhr.responseText +
                                        '</div>'
                                        );
                                }
                            });
                        });
                    });
                </script>
            </div>
        </div>
    </div>

</x-backend.layouts.master>
