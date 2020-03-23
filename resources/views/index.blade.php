@extends ('layouts.master')

@section ('content')

<section class="jumbotron text-center">
    <div class="container mb-3">
        <h1>Slack Sender</h1>
        <div class="msg">
            <div class="lead text-muted">Send your desirable message in Slack directly.</div>
        </div>

        @include('layouts.form')

    </div>
</section>

@endsection
