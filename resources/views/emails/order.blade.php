@component('mail::message')
# Thank you for your order!

Here are the details of your order:

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
