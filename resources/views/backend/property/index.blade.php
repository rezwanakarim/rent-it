<x-backend.layouts.master>

    <div class="height-100 bg-light p-2">
        <div class="height-100 bg-light">
            <h4><x-slot:title>
                Property List
                </x-slot>
            </h4>
            @if (session('message'))
                <div class="alert alert-success alert-dismissible " role="alert">
                    <strong>Success!</strong> {{ session('message') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <a class="btn btn-primary m-2 " href="{{route('properties.create')}}">Create</a>
            <a class="btn btn-warning m-2 " href="{{ route('properties.trash') }}"><i class='bx bx-trash fs-5' ></i> Trash</a>
            <table id="example" class="table table-hover table-striped text-center shadow">
                <thead class="table-dark ">
                        <th class="text-center">Serial No.</th>
                        <th class="text-center">Property ID</th>
                        <th class="text-center">Property Title</th>
                        {{-- <th class="text-center">Category</th> --}}
                        <th class="text-center">Property Image</th>
                        <th class="text-center">Action</th>
                </thead>
                <tbody class="text-center">
                    
                   @foreach ($properties as $property)
                   <tr>
                    <td class="align-middle">{{$loop->iteration}}</td>
                    <td class="align-middle">{{$property->property_id}}</td>
                    <td class="align-middle">{{$property->property_title}}</td>
                    <td>
                        <img src="{{ asset('storage/properties/'.$property->property_image) }}" alt="Property image" height="150" width="200" style="object-fit: cover;">
                    </td>
                 {{-- <td class="align-middle">{{$property->property_category}}</td> --}}
                    <td class="align-middle">
                        <a class="btn btn-primary my-1" href="{{ route('properties.show', ['property'=>$property->id])}}">Show</a>
                        <a class="btn btn-warning my-1" href="{{ route('properties.edit', ['property'=>$property->id])}}">Edit</a>
                        <form action="{{ route('properties.destroy', ['property'=>$property->id])}}" method="POST" class="d-inline-block">
                            @method('delete')
                            @csrf
                            <button type="submit" name="submit" class="btn btn-danger my-1"
                            onclick="confirm('Are you Sure?')">Delete</button>

                        </form>
                    </td>
                </tr>

                    
                   @endforeach
                </tbody>
            </table>
        </div>

    </div>


</x-backend.layouts.master>
