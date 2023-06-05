@component('mail::message')
Hello Sir, <br>

<p>Here is your paassword reset link</p>
@component('mail::button', ['url' => "$website_url/password_reset/$token"])
Reset Password
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
