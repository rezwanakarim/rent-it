<x-backend.layouts.master>

    <div class="height-100 bg-light p-2">
        <div class="height-100 bg-light">
            <h4><x-slot:title>
                SLider List
                </x-slot>
            </h4>
            @if (session('message'))
                <div class="alert alert-success alert-dismissible " role="alert">
                    <strong>Success!</strong> {{ session('message') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <a class="btn btn-primary m-2 " href="{{route('sliders.create')}}">Create</a>
            <table id="example" class="table table-hover table-striped text-center shadow">
                <thead class="table-dark ">
                        <th class="text-center">Serial No.</th>
                        <th class="text-center">Title</th>
                        <th class="text-center">Image</th>
                        <th class="text-center">Action</th>
                </thead>
                <tbody class="text-center">
                   @foreach ($sliders as $slider)
                   <tr>
                    <td class="align-middle">{{$loop->iteration}}</td>
                    <td class="align-middle">{{$slider->title}}</td>
                    <td>
                        <img src="{{ asset('storage/sliders/'.$slider->image) }}" style="object-fit: cover; height: 150px; width: 200px" alt="Slider image" >
                    </td>
                    <td class="align-middle">
                        <a class="btn btn-primary my-1" href="{{ route('sliders.show', ['slider'=>$slider->id])}}">Show</a>
                        <a class="btn btn-warning my-1" href="{{ route('sliders.edit', ['slider'=>$slider->id])}}">Edit</a>
                        <form action="{{ route('sliders.destroy', ['slider'=>$slider->id])}}" method="POST" class="d-inline-block">
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
