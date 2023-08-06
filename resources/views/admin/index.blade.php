@extends('../layoutAdmin.main')
@section('container')
<div class="container-fluid px-4">
                        <h1 class="mt-4">{{ $judul }}</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row justify-content-center">
                            <div class="col-xl-3 col-md-6">
                                <div class="card border-success mb-3" style="max-width: 18rem;">
                                <div class="card-header bg-transparent border-success">Admin</div>
                                <div class="card-body text-success">
                                    <h2 class="card-title"><i class="fas fa-user"></i></h2>
                                    <p class="card-text fs-2 text-center">{{ $totalAdmin }}</p>
                                </div>
                                <div class="card-footer bg-transparent border-success"><a href="/adminData" class="small text-success stretched-link">View Details..</a></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card border-info mb-3" style="max-width: 18rem;">
                                <div class="card-header bg-transparent border-info">User</div>
                                <div class="card-body text-info">
                                    <h2 class="card-title"><i class="fas fa-users"></i></h2>
                                    <p class="card-text fs-2 text-center">{{ $totalUsers }}</p>
                                </div>
                                <div class="card-footer bg-transparent border-info"><a href="/userData" class="small text-info stretched-link">View Details..</a></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card border-danger mb-3" style="max-width: 18rem;">
                                <div class="card-header bg-transparent border-danger">Penyewaan</div>
                                <div class="card-body text-danger">
                                    <h5 class="card-title"><i class="fas fa-clipboard-list"></i></h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                                <div class="card-footer bg-transparent border-danger"><a href="" class="small text-danger stretched-link">View Details..</a></div>
                                </div>
                            </div>
                            
                         </div>
                        </div>
                        
                        </div>
                    </div>
@endsection