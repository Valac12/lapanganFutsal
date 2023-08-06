@extends('layoutLogin.main');
@section('container')
		<div class="container border-rounded">
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
					<div class="img" style="background-image: url(login/images/bgregister.jpg);">
			      </div>
					<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      		<h3 class="mb-4">Sign Up</h3>
			        	</div>
			        </div>
						<form action="/register" method="post" class="signin-form">
                            @csrf
                            <input type="hidden" name="id_level" value="2">
                            <div class="form-group mb-3">
                                <label class="label" for="fullName">Full Name</label>
                                <input type="text" name="nama_user" class="form-control @error('nama_user')is-invalid @enderror" placeholder="Full Name" id="fullName" required value="{{ old('nama_user') }}">
                               @error('nama_user')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label class="label" for="username">Username</label>
                                <input type="text" name="username" class="form-control @error('username')is-invalid @enderror" placeholder="Username" id="username" required value="{{ old('username') }}">
                                @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                            <label class="label" for="password">Password</label>
                            <input type="password" name="password" class="form-control @error('password')is-invalid @enderror" placeholder="Password" id="password" required>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label class="label" for="noTelp">No Telephone</label>
                            <input type="number" name="no_telp" class="form-control @error('no_telp')is-invalid @enderror" placeholder="No Telephone" id="noTelp" required value="{{ old('no_telp') }}">
                            @error('no_telp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign Up</button>
                            </div>
		                </form>
		          <p class="text-center">already registered? <a href="/login">Sign in</a></p>
		        </div>
		      </div>
				</div>
			</div>
		</div>
@endsection

