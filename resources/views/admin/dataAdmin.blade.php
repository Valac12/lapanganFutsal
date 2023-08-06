@extends('../layoutAdmin.main')
@section('container')
<div class="container-fluid px-4">
            <h1 class="mt-4">{{ $judul }}</h1>
            <ol class="breadcrumb mb-4">
              <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
              <li class="breadcrumb-item active">Admin</li>
              <li class="ms-auto">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahAdmin">
                  <i class="fas fa-plus"></i>
                </button>
              </li>
            </ol>
            @if(session()->has('success'))
            	<div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="card mb-4">
              <div class="card-header"> 
                <i class="fas fa-table me-1"></i>
                DataTable Admin
              </div>
              <div class="card-body">
                <table id="datatablesSimple">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Id Level</th>
                      <th>Full Name</th>
                      <th>Username</th>
                      <th>Created_At</th>
                      <th>Updated_At</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Id Level</th>
                      <th>Full Name</th>
                      <th>Username</th>
                      <th>Created_At</th>
                      <th>Updated_At</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach($posts as $post)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $post->id_level }}</td>
                      <td>{{ $post->nama_user }}</td>
                      <td>{{ $post->username }}</td>
                      <td>{{ $post->created_at }}</td>
                      <td>{{ $post->updated_at }}</td>
                      <td>
                        <button class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#adminEdit{{ $post->id }}"><i class="fas fa-edit"></i></button>
                        <form action="/adminData/{{ $post->id }}" method="post" class="d-inline">
                          @method('delete')
                          @csrf
                          <button class="badge bg-danger border-0" onclick="return confirm('Data akan dihapus ?')"><i class="fas fa-trash"></i></button>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

    <!-- Modal -->
    <div class="modal fade" id="tambahAdmin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Admin</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="" method="POST">
                @csrf
              <div class="mb-3">
                <label for="namaAdmin" class="form-label">Nama Admin</label>
                <input type="hidden" name="id_level" value="1"> 
                <input type="text" name="nama_user" class="form-control @error('nama_user')is-invalid @enderror" placeholder="nama admin" id="namaAdmin" required />
                @error('nama_user')
                 <div class="invalid-feedback">
                    {{ $message }}
                </div>
                 @enderror
              </div>
              <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control @error('username')is-invalid @enderror" placeholder="username" id="username" required />
                 @error('username')
                 <div class="invalid-feedback">
                    {{ $message }}
                </div>
                 @enderror
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control @error('password')is-invalid @enderror" placeholder="password" id="password" required />
                 @error('password')
                 <div class="invalid-feedback">
                    {{ $message }}
                </div>
                 @enderror
              </div>
              <div class="mb-3">
                <label for="noTelp" class="form-label">No Telephone</label>
                <input type="number" name="no_telp" class="form-control @error('no_telp')is-invalid @enderror" placeholder="No Telephone" id="NoTelp" required />
                 @error('no_telp')
                 <div class="invalid-feedback">
                    {{ $message }}
                </div>
                 @enderror
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
            </form>
          </div>
        </div>
      </div>
    </div>

     <!-- Modal 2 -->
     @foreach($posts as $post)
    <div class="modal fade" id="adminEdit{{ $post->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Admin</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="/adminData/{{ $post->id }}" method="POST">
              @method('put')
              @csrf
              <div class="mb-3">
                <label for="namaAdmin" class="form-label">Nama Admin</label>
                <input type="hidden" name="id_level" value="1"> 
                <input type="text" name="nama_user" class="form-control @error('nama_user')is-invalid @enderror" placeholder="nama admin" id="namaAdmin" required value="{{ old('nama_user', $post->nama_user) }}"/>
                @error('nama_user')
                 <div class="invalid-feedback">
                    {{ $message }}
                </div>
                 @enderror
              </div>
              <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control @error('username')is-invalid @enderror" placeholder="username" id="username" required value="{{ old('username', $post->username) }}"/>
                 @error('username')
                 <div class="invalid-feedback">
                    {{ $message }}
                </div>
                 @enderror
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password Baru</label>
                <input type="password" name="password" class="form-control @error('password')is-invalid @enderror" placeholder="password" id="password" required/>
                 @error('password')
                 <div class="invalid-feedback">
                    {{ $message }}
                </div>
                 @enderror
              </div>
              <div class="mb-3">
                <label for="noTelp" class="form-label">No Telephone</label>
                <input type="number" name="no_telp" class="form-control @error('no_telp')is-invalid @enderror" placeholder="No Telephone" id="NoTelp" required value="{{ old('no_telp', $post->no_telp) }}"/>
                 @error('no_telp')
                 <div class="invalid-feedback">
                    {{ $message }}
                </div>
                 @enderror
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    @endforeach
@endsection