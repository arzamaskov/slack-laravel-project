<form action="/send" method="post">
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Your message" aria-describedby="button-addon2" name="message">
        {{ csrf_field() }}
        <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Send</button>
        </div>
    </div>
</form>
