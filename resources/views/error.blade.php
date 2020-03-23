@extends ('layouts.master')

@section ('content')

<section class="jumbotron text-center">
    <div class="container mb-3">
        <h1>Slack Sender</h1>
        <div class="msg">
            <div class="alert alert-danger">The message must NOT be empty. Try again, please.</div>
        </div>

        @include('layouts.form')

    </div>
</section>

@endsection
