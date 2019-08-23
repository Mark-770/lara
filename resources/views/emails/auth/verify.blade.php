@component('mail::message')
# Подтверждение электонной почты

Пожалуйста перейдите по ссылке:

@component('mail::button', ['url' =>  route('register.verify', ['token' => $user->verify_token])])
Верефикация Email
@endcomponent

Спасибо,<br>
{{ config('app.name') }}
@endcomponent
