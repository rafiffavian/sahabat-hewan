<h1>Hello {{ $user->name}} </h1>

<p>
    Please Check The Password reset Button To Reset Your Password
    <a href="{{url('reset_password/'. $user->email. '/'. $code)}}">Reset Password</a>
</p>