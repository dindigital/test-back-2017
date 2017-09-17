@component('mail::message')
# Information

#### New lead has registered

Name: ** {{ $lead->name }} **

Email: ** {{ $lead->email }} **

Phone: ** {{ $lead->phone }} **

@endcomponent
