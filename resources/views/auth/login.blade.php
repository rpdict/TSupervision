@extends('layouts.master')

@section('title', '登录')

@section('login')
    <div class="middle-box text-center loginscreen  animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">H+</h1>

            </div>
            <h3>欢迎使用 H+</h3>

            <form class="m-t" role="form" action="http://www.zi-han.net/theme/hplus/index.html">
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="用户名" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="密码" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">登 录</button>


                <p class="text-muted text-center"> <a href="#"><small>忘记密码了？</small></a> | <a href="register">注册一个新账号</a>
                </p>

            </form>
        </div>
    </div>
@endsection
