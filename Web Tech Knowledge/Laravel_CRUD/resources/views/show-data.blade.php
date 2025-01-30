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
                <td>
                    @if (pathinfo($item->file, PATHINFO_EXTENSION) === 'pdf')
                        <a href="{{ asset('storage/' . $item->file) }}" target="_blank">View PDF</a>
                    @else
                        <img src="{{ asset('storage/' . $item->file) }}" alt="Uploaded File" width="100">
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>