@extends('layoutLogin.main');
@section('container')
		<div class="container border-rounded">
            @if(session()->has('success'))
             <div class="row justify-content-center">
				<div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
			</div>
            @endif

			 @if(session()->has('loginError'))
             <div class="row justify-content-center">
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
			</div>
            @endif

            <div class="row justify-content-center">
				<div class="col-md-6 text-center mb-4">
					<h2 class="heading-section">Masuk Sekarang Untuk Memesan</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
					<div class="img" style="background-image: url(login/images/bglogin.jpg);">
			      </div>
					<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      		<h3 class="mb-4">Sign In</h3>
			        	</div>
			        </div>
						<form action="/login" method="POST" class="signin-form">
							@csrf
			      			<div class="form-group mb-3">
								<label class="label" for="username">Username</label>
								<input type="text" name="username" class="form-control @error('username') is-invalid @enderror" placeholder="Username" required autofocus>
								@error('username')
								<div class="invalid-feedback">
									{{ $message }}
								</div>
								@enderror
			      			</div>
		            		<div class="form-group mb-3">
		            			<label class="label" for="password">Password</label>
		              			<input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
								@error('password')
								<div class="invalid-feedback">
									{{ $message }}
								</div>
								@enderror
		           			 </div>
		          			  <div class="form-group">
		            			<button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
		           			 </div>
		            			<div class="form-group d-md-flex">
		            				<div class="w-50 text-left">
			            				<label class="checkbox-wrap checkbox-primary mb-0">Remember Me
											<input type="checkbox" checked>
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="w-50 text-md-right">
										<a href="#">Forgot Password</a>
									</div>
		          	 		 </div>
		        		</form>
		          <p class="text-center">Not a member? <a href="/register">Sign Up</a></p>
		        </div>
		      </div>
				</div>
			</div>
		</div>
@endsection

