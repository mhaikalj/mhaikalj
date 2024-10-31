<h3> {{ $judul }} </h3>

<form action="{{ route('anggota.update',$edit->id) }}"method="post">
    @method('put')
    @csrf

    <label>nama</label><br>
    <input type="text" name="nama" id="" value="{{ old('nama',$edit->nama) }}
    " placeholder="nama">
    <p></p>

    <label>hp</label><br>
    <input type="text" name="hp" id="" value="{{ old('hp',$edit->hp) }}
    " placeholder="hp">
    <p></p>

    <button type="submit">perbaharui</button>
    <a href="{{ route('anggota.index') }}">
        <button type="button">batal</button>
    </a>
</form>