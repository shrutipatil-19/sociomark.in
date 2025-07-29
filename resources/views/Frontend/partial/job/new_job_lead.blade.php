<h2>New Lead Notification</h2>

<p><strong>Name:</strong> {{ $lead->name }}</p>
<p><strong>Email:</strong> {{ $lead->email }}</p>
<p><strong>Phone:</strong> {{ $lead->phone }}</p>

{{-- CV Link --}}
@if(!empty($job->cv))
<p><strong>CV:</strong> 
    <a href="{{ url('storage/app/public/' . $job->cv) }}" target="_blank" class="btn btn-sm btn-primary">
        View CV
    </a>
</p>
@endif

{{-- Personal Links --}}
@if(!empty($job->plinks))
<p><strong>Links:</strong> {{ $job->plinks }}</p>
 <td><strong>Profile: </strong>{{ $job->page_url }}</td>
@endif
