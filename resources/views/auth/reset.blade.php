@component('mail::message')
Hello {{ $user->name}}

@component('mail::button',['url'=>url('reset/'.$user->remember_token)])
    Reset your Password
@endcomponent
    <p>Click on the above link.</p>
    Thanks<br>
    {{config('app.name')}}
@endcomponent
