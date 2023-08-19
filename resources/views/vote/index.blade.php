@extends('master');

@section('content')
<h1>First time to my blog content.</h1>

<table class="table table-bordered" id="tbContent">
    <thead>
        <tr>
            <th>vote</th>
            <th>contents_id</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($votes as $vote)
            <tr>
                <td>{{ $vote->vote }}</td>
                <td>{{ $vote->contents_id}}</td>
            </tr>
        @endforeach
    </tbody>

</table>

<h1>Sum</h1>

<p>Total Likes: {{ $sumlike }}</p>


<p>Total Unlikes: {{ $sumUnlike }}</p>
<a href="{{ url('/content') }}"" role="button" class="btn btn-sm btn-danger">Back</a>
@endsection
