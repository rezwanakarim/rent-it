<x-backend.layouts.master>
    {{-- <x-slot:title>info
    </x-slot> --}}
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card bg-light mx-auto" style="width: 45rem;">
            <div class="card-body border rounded bg-light">
                <div class="alert alert-secondary" role="alert">
                    <h2 class="text-center">Create New Customer</h2>
                </div>
                <form method="POST" action="{{ route('customers.store') }}" enctype="multipart/form-data">
                    @csrf
                    <label for="name">Customer Name</label>
                    <input class="w-100 form-control" value="{{ old('name')}}" type="text" name="name" id="name"> <br>
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror


                    <div class="text-start">
                        <button class="w-25 btn btn-lg btn-secondary" type="submit" value="add"
                            name="add">Create</button>
                        <a class="w-25 btn btn-lg btn-danger" href="{{ route('customers.list') }}">Cancel</a><br><br>
                    </div>

                </form>
            </div>
        </div>
    </div>

</x-backend.layouts.master>
