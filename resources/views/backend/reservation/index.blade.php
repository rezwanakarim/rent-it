<x-backend.layouts.master>

    <div class="height-100 bg-light p-2">
        <div class="height-100 bg-light">
            @if (session('message'))
                <div class="alert alert-success alert-dismissible " role="alert">
                    <strong>Success!</strong> {{ session('message') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <h4>
                <x-slot:title>
                    Reservation Request List
                    </x-slot>
            </h4>
            
            <a class="btn btn-info m-2 " href="">PDF</a>

            <table id="example" class="table table-hover table-striped text-center shadow">
                <thead class="table-dark ">
                    <tr>
                        <th class="text-center">Serial No.</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Phone</th>
                        <th class="text-center">Message</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($reservations as $reservation)
                        <tr>
                            <td class="align-middle">{{ $loop->iteration }}</td>
                            <td class="align-middle">{{ $reservation->name }}</td>
                            <td class="align-middle">{{ $reservation->email }}</td>
                            <td class="align-middle">{{ $reservation->number }}</td>
                            <td class="align-middle">{{ $reservation->message }}</td>
                            <td class="align-middle">{{ $reservation->status }}</td>
                            <td class="align-middle">
                                <a class="btn btn-primary my-1"
                                    href="{{ route('reservations.accept', ['reservation' => $reservation->id]) }}">Accept</a>
                                <a class="btn btn-warning my-1"
                                    href="{{ route('reservations.reject', ['reservation' => $reservation->id]) }}">Deny</a>
                                <form action="{{ route('reservations.destroy', ['reservation'=>$reservation->id])}}" method="POST" class="d-inline-block">
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
