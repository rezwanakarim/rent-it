<x-backend.layouts.master>

    <div class="height-100 bg-light p-2">
        <div class="height-100 bg-light">
            <h4><x-slot:title>
                Property Recycle bin 
                </x-slot> 
            </h4>
            @if (session('message'))
                <div class="alert alert-success alert-dismissible " role="alert">
                    <strong>Success!</strong> {{ session('message') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <a class="btn btn-primary m-2 " href="{{route('properties.list')}}">List</a>
            
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
                   @foreach ($trashed as $property)
                   <tr>
                    <td class="align-middle">{{$loop->iteration}}</td>
                    <td class="align-middle">{{$property->property_id}}</td>
                    <td class="align-middle">{{$property->property_title}}</td>
                    <td>
                        <img src="{{ asset('storage/properties/'.$property->property_image) }}" alt="" height="150" width="200">
                    </td>
                 {{-- <td class="align-middle">{{$property->property_category}}</td> --}}
                    <td class="align-middle">
                        
                        <a class="btn btn-warning my-1" href="{{ route('properties.restore', ['property'=>$property->id])}}">Restore</a>
                        <form action="{{ route('properties.delete', ['property'=>$property->id])}}" method="POST" class="d-inline-block">
                            @method('delete')
                            @csrf
                            <button type="submit" name="submit" class="btn btn-danger my-1"
                            onclick="confirm('Are you Sure?')">Permanent Delete</button>
                            
                        </form>
                    </td>
                </tr>

                       
                   @endforeach
                </tbody>
            </table>
        </div>

    </div>


</x-backend.layouts.master>
