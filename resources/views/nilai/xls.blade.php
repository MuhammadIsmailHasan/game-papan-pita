<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Siswa</th>
            <th>Quiz</th>
            <th>Skor</th>
            <th>Sebutan Skor</th>
            <th>Tanggal Mengerjakan</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->user->name }}</td>
                <td>Level {{ $item->level }}</td>
                <td>{{ $item->skor }}</td>
                <td>{{ $item->sebutan }}</td>
                <td>{{ $item->tanggal }}</td>
            </tr>
        @endforeach
    </tbody>
</table>