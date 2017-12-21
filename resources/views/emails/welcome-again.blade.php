@component('mail::message')
# Introduction

Thanks for registration

@component('mail::button', ['url' => 'https://laracasts.com'])
Start browsing
@endcomponent

@component ('mail::panel', ['url' => ''])
Lorem ipsum dolar sit amet...
@endcomponent

@component ('mail::table', ['url' => ''])
123
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
