<x-backend.layouts.master>
    {{-- <x-slot:title>info
    </x-slot> --}}
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card bg-light mx-auto" style="width: 45rem;">
            <div class="card-body border rounded bg-light">
                <div class="alert alert-secondary" role="alert">
                    <h2 class="text-center">Create New Phone Number</h2>
                </div>
                <form method="POST" action="{{ route('phones.store') }}" enctype="multipart/form-data">
                    @csrf

                    <label for="customer_id">Customers</label>

                    <select class="form-select shadow" name="customer_id" id="customer_id">
                        <option selected disabled value="0">Select customer</option>
                        @foreach ($customers as $customer)
                            <option value="{{ old('customer_id', $customer->id) }}">{{ $customer->name }}
                            </option>
                        @endforeach
                    </select><br>

                    <label for="number">Phone Number</label>
                    <input class="w-100 form-control" value="{{ old('number') }}" type="number" name="number"
                        id="number"> <br>
                        {{-- last edited line  --}}

{{-- /////////// --}}


                    @error('number')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror


                    <div class="text-start">
                        <button class="w-25 btn btn-lg btn-secondary" type="submit" value="add"
                            name="add">Create</button>
                        <a class="w-25 btn btn-lg btn-danger" href="{{ route('phones.list') }}">Cancel</a><br><br>
                    </div>

                </form>
            </div>
        </div>
    </div>

</x-backend.layouts.master>
