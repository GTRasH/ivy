@extends('master')

@section('title')

    Dashboard

@endsection

@section('content')

    <h1 class="page-header">Dashboard</h1>

    <h2 class="sub-header">Latest YT Data</h2>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Thumbnail</th>
                <th>Channel-ID</th>
                <th>Title</th>
                <th>Country</th>
                <th>AllViews</th>
                <th>Subscribers</th>
                <th>Comments</th>
                <th>Videos</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><img src="{{$data['thumbnail']}}" alt="{{$data['title']}}"></td>
                <td>{{$data['id']}}</td>
                <td>{{$data['title']}}</td>
                <td>{{$data['country']}}</td>
                <td>{{$data['viewcount']}}</td>
                <td>{{$data['subscribers']}}</td>
                <td>{{$data['comments']}}</td>
                <td>{{$data['videos']}}</td>
            </tr>
            </tbody>
        </table>
    </div>

@endsection