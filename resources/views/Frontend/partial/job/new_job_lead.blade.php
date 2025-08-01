<h2>New Lead Notification</h2>

<p><strong>Name:</strong> {{ $lead->name }}</p>
<p><strong>Email:</strong> {{ $lead->email }}</p>
<p><strong>Phone:</strong> {{ $lead->phone }}</p>

{{-- CV Link --}}
@if(!empty($lead->cv))
<p><strong>CV:</strong>
    <a href="{{ url('storage/app/public/' . $lead->cv) }}" target="_blank" class="btn btn-sm btn-primary">
        View CV
    </a>
</p>
@endif

{{-- Personal Links --}}
@if(!empty($lead->plinks))
<p><strong>Links:</strong> {{ $lead->plinks }}</p>
@endif
<td><strong>Profile: </strong>{{ $lead->page_url }}</td>