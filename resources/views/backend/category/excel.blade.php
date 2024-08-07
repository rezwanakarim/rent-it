
<table>
    <thead>
        <tr>
            <th>Serial No.</th>
            <th>Name</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $category->title }}</td>
                <td>{{ $category->description }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
