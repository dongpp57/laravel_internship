@extends('includes.main')
@section('title')
	Đăng nhập
@stop
@section('content')
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-2">
					<div class="login-form"><!--login form-->
						<h1>Login to your account</h1>
						<form action="{{asset('login')}}" method="POST">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<input type="text" placeholder="Email" name="email"/>
							<input type="password" placeholder="Password" name="password"/>
							<span>
								<input type="checkbox" class="checkbox"> 
								Keep me signed in
							</span>
							 @if (count($errors) > 0)
                        		<div class="alert alert-danger">
                            		<strong>Whoops!</strong> There were some problems with your input.<br><br>
                            		<ul>
                                		@foreach ($errors->all() as $error)
                                    		<li>{{ $error }}</li>
                                		@endforeach
                            		</ul>
                        		</div>
                    		@endif
                    		<div class="row">
                    			<p>
								<button type="submit" class="btn btn-default">Login</button>
								
                 					Don't have an account yet ?&nbsp; <a href="{{asset('register')}}" id="register-btn">
                					Create an account </a>
            					</p>
							</div>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-3 col-sm-offset-1">
					<img style="align:center" src="{{asset('assets/images/home/enter.jpg')}}" alt="Enter now">
				</div>
			</div>
		</div>
	</section><!--/form-->
@stop