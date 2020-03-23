@extends ('layouts.master')

@section ('content')

<section class="jumbotron text-center">
    <div class="container mb-3">
        <h1>Slack Sender</h1>
        <div class="msg">
            <div class="lead text-muted">Your message <em>&laquo;{{ $msg }}&raquo;</em> was sent.</div>
        </div>
    </div>
</section>

@endsection
