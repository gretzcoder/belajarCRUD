<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List Anggota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1>List Anggota</h1>
        @if($m = Session::get('sukses'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{$m}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <a type="button" class="btn btn-primary mb-2" href="/anggota/create">Tambah Data</a>
        <ul class="list-group">
            @foreach($anggota as $a)
                <li class="list-group-item d-flex justify-content-between">
                  {{ $a->nama }}
                  <div>
                    <a href="/anggota/{{ $a->id }}" class="btn btn-success btn-sm">Detail</a>
                    <a href="{{ route('anggota.edit', $a->id)}}" class="btn btn-warning btn-sm">Ubah</a>
                    <a data-bs-toggle="modal" data-bs-target="#modalHapus{{$a->id}}" class="btn btn-danger btn-sm">Hapus</a>
                  </div>
                </li>

                <div class="modal" tabindex="-1" id="modalHapus{{$a->id}}">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <h5>Yakin ingin menghapus data ini ?</h5>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <form action="{{ route('anggota.destroy', $a->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Yakin</button>
            </form>
          </div>
          </div>
        </div>
      </div>
            @endforeach
        </ul>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>