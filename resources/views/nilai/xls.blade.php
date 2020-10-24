<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Siswa</th>
            <th>Permainan</th>
            <th>Skor</th>
            <th>Sebutan</th>
            <th>Tanggal Main</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->user->name }}</td>
                <td>{{ $item->ronde }}</td>
                <td>{{ $item->skor }}</td>
                <td>{{ $item->sebutan }}</td>
                <td>{{ $item->tanggal }}</td>
            </tr>
        @endforeach
    </tbody>
</table>