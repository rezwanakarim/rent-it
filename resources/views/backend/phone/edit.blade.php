<x-backend.layouts.master>
    {{-- <x-slot:title>info
    </x-slot> --}}
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card bg-light mx-auto" style="width: 60rem;">
            <div class="card-body border rounded bg-light">
                <div class="alert alert-secondary" role="alert">
                    <h2 class="text-center">Update Phone Number</h2>
                </div>

                <form method="POST" action="{{ route('phones.update', ['phone'=>$phone->id]) }}" enctype="multipart/form-data">
                    @method('patch')
                    @csrf
                    <label for="number">Phone Number</label>
                    <input class="w-50 form-control" value="{{ old('number',$phone->number)}}" type="text" name="number" id="number"> <br>
                    @error('number')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                   

                    <div class="text-start">
                        <button class="w-25 btn btn-lg btn-secondary" type="submit" value="add"
                            name="add">Update</button>
                        <a class="w-25 btn btn-lg btn-danger" href="{{ route('phones.list') }}">Cancel</a><br><br>
                    </div>

                </form>
            </div>
        </div>
    </div>

</x-backend.layouts.master>
