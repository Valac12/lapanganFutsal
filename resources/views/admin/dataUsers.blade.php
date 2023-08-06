@extends('../layoutAdmin.main')
@section('container')
<div class="container-fluid px-4">
            <h1 class="mt-4">{{ $judul }}</h1>
            <ol class="breadcrumb mb-4">
              <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
              <li class="breadcrumb-item active">Admin</li>
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
                        <form action="/userData/{{ $post->id }}" method="post" class="d-inline">
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
@endsection