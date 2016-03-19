@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Your Application's Landing Page.
                    <form method="get" action="\http\get">
                        <input class="hidden" value="_val_user_token" name="user_token">
                        <input class="btn btn-primary" value="GET" type="submit">
                    </form>
                    <form method="post" action="\http\post">
                        <input class="hidden" value="_val_user_token" name="user_token">
                        <input class="btn btn-primary" value="POST" type="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
