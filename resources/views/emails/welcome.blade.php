@component('mail::message')
#Introduction

Thank so much for registering!

@component('mail::button', ['url'=> 'https://navinweb.net'])
    Go to navinweb.net
@endcomponent

@component('mail::panel', ['url'=> ''])
    Some text about me
@endcomponent

Thanks, <br>
{{ config('app.name') }}
@endcomponent