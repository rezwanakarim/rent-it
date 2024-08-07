<style>
    table, th, td{
        padding: 10px;
        border: 1px solid rgb(52, 72, 201);
        border-collapse: collapse;
        text-align: center;
    }
    table{
        width: 100%;
    }
</style>
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
