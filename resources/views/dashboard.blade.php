@extends('layouts.app')

@section('title')
    Dashboard | {{ config('app.name', 'Laravel') }}
@endsection

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Dashboard</div>

            <div class="panel-body">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                You are logged in!
            </div>
        </div>
        <a class="btn btn-link" href="/test">Test page</a>
        <a class="btn btn-link" href="/react">React example</a>
        <a class="btn btn-link" href="/api/products">API example</a>
        <a class="btn btn-link" href="/dashboard/success">Throw Success</a>
        <a class="btn btn-link" href="/dashboard/error">Throw Error</a>
    </div>
</div>
@endsection
