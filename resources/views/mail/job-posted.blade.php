<h1>
    {{$job->title}}
</h1>

<p>Congrats! Your job is posted.</p>

<p>
    <a href="{{url('/jobs/'.$job->id)}}">View your job listing.</a>
</p>
