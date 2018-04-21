@component('mail::message')
# Introduction

Welcome!! {{$user->name}}

Thank You for registering!!

@component('mail::button', ['url' => ''])
Order Now
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
