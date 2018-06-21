@component('mail::message')

#Your have successfully placed your order!!.#

@component('mail::button', ['url' => 'http://127.0.0.1:8181/orders'])
View Order
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
