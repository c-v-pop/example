<h2>
    {{ $job->title }}
</h2>

<p>   
    Congrats your job is now live!
</p>
<p>
    <a href="{{ url('/jobs/' . $job->id) }}">View Your Listing</a>
</p>