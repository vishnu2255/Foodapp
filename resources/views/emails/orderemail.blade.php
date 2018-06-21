@component('mail::message')
# Introduction

Welcome!! {{$user->name}}

Your Order has been placed!!

@component('mail::button', ['url' => 'https://laravel.com/docs/5.6/mail', 'color' => 'green'])
View Order
@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent
