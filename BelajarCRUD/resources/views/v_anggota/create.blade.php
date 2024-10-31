<h3>{{ $judul }} </h3>
<form action="{{ route('anggota.store') }}" method="post">
    @csrf
    <label>nama</label><br>
    <input type="text" name="nama" id="" value="{{old('nama')}}" placeholder="masukan nama lengkap" 
    class="form-control @error('nama') is-invalid @enderror">
    @error('nama')
    <span class="invalid-feedback alert-danger" role="alert">
        {{ $message }}
    </span>
    @enderror
    <p></p>
    <label>hp</label<<br>
        <input type="text" name="hp" id="" value="{{old('hp') }}" placeholder="masukan nomor hp"
        class="form-control @error('hp') is-invalid @enderror">
        @error('hp')
        <span class="invalid-feedback alert-danger" role="alert">
            {{ $message }}
        </span>
        @enderror
        <p></p>
        <button type="submit">simpan</button>
        <a href="{{ route('anggota.index') }}">
            <button type="button">batal</button>
        </a>
</form>