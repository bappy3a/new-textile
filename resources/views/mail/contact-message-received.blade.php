<x-mail::message>
# New Contact Message

<p><strong>Name:</strong> {{ $contactMessage->full_name }}</p>
<p><strong>Email:</strong> {{ $contactMessage->email }}</p>
<p><strong>Phone:</strong> {{ $contactMessage->phone }}</p>

## Message

@foreach (explode("\n", $contactMessage->message ?? '') as $line)
<p>{{ $line }}</p>
@endforeach

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
