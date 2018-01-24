@extends('layouts.app')

@section('title')
    Test Center | {{ config('app.name', 'Laravel') }}
@endsection

@section('content')
<passport-clients></passport-clients>
<passport-authorized-clients></passport-authorized-clients>
<passport-personal-access-tokens></passport-personal-access-tokens>
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div id="api-url" class="well"></div>
        <div class="panel panel-default">
            <div class="panel-heading">Exmaple API Request</div>

            <div id="api-out" class="panel-body"></div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">Exmaple API Response</div>

            <div id="api-in" class="panel-body"></div>
        </div>
    </div>
</div>
@endsection

@section('style')
<style>

</style>
@endsection

@section('script')
<script>
    $(document).ready(function(){
        var req = {
            email: 'des@pokyworld.com',
            password: 'password'
        }
        $("#api-out").text(JSON.stringify(req));
        sendToApi(JSON.stringify(req), '/api/test/login', $("#api-in"))
    });

    function sendToApi(json, url, target){
        $("#api-url").text(url);
        $.ajax({
            url: url,
            type: 'post',
            data: json,
            success: function(response){
                console.log("RESP : ", response);
                target.text(response);
            },
            error: function(e, json){
                console.log("ERR : ", e, json);
                target.text(JSON.stringify(e));
            }
        });        
    }
</script>
@endsection