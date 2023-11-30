<x-mail::message>
    {{-- Greeting --}}
    # Welcome {{$name}} to IG,

    Please enter below code to Verification account: {{$codeVerify}}

    {{ config('app.name') }}
</x-mail::message>
