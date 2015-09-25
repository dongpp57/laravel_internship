@extends('pages.index')
@section('title')
    Đăng ký
@endsection
@section('content')
    
{!! Form::open(['url' => 'register']) !!}
        <h3 class="form-title">Register</h3>
        <div class="alert alert-danger display-hide">
            <button class="close" data-close="alert"></button>
            <span>
            Enter any username and password. </span>
        </div>
        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">Username</label>
            <div class="input-icon">
                <i class="fa fa-user"></i>
                <input class="form-control placeholder-no-fix" type="text" id="username" placeholder="Username" name="username" required/>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Password</label>
            <div class="input-icon">
                <i class="fa fa-lock"></i>
                <input class="form-control placeholder-no-fix" type="password" id="password" placeholder="Password" name="password" required/>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">RePassword</label>
            <div class="input-icon">
                <i class="fa fa-lock"></i>
                <input class="form-control placeholder-no-fix" type="password" id="password_confirmation" placeholder="RePassword" name="password_confirmation" required/>
            </div>
        </div>
        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">Email</label>
            <div class="input-icon">
                <i class="fa fa-user"></i>
                <input class="form-control placeholder-no-fix" type="email" id="email" placeholder="Email" name="email" required/>
            </div>
        </div>
        @if ( $errors->any() )
        <ul>
            @foreach ($errors->all() as $error)
                <li><p style="color:red">{{ $error }}</p></li>
            @endforeach
        </ul>   
        @endif
        <div class="form-actions">
            <a type="button" id="back-btn" class="btn" href="{{asset('login')}}">
            <i class="m-icon-swapleft"></i> Back </a>
            
        
            <button type="submit" class="btn blue pull-right">
            Register <i class="m-icon-swapright m-icon-white"></i>
            </button>
        </div>
        
        
        
    {!!Form::close()!!}
@endsection