<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>File</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->file }}</td>
            </tr>
        @endforeach
    </tbody>
</table>