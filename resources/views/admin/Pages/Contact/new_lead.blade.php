<h2>New Lead Notification From India</h2>

<p><strong>Name:</strong> {{ $lead->name }}</p>
<p><strong>Email:</strong> {{ $lead->email }}</p>
<p><strong>Phone:</strong> {{ $lead->phone }}</p>
<p><strong>Service:</strong> {{ $lead->service }}</p>
<p><strong>Budget:</strong> {{ $lead->budget }}</p>
<p><strong>About Us:</strong> {{ $lead->aboutUs }}</p>
<p><strong>Message:</strong> {{ $lead->messageforus ?? 'N/A' }}</p>
<p><strong>Source Page URL: </strong>{{ $lead->source ?? 'N/A' }}</p>

@if($lead->utm_source)
    <h4>UTM Parameters:</h4>
    <ul>
        <li><strong>Source:</strong> {{ $lead->utm_source }}</li>
        <li><strong>Medium:</strong> {{ $lead->utm_medium }}</li>
        <li><strong>Campaign:</strong> {{ $lead->utm_campaign }}</li>
        <li><strong>Term:</strong> {{ $lead->utm_term }}</li>
        <li><strong>Content:</strong> {{ $lead->utm_content }}</li>
    </ul>
@endif
