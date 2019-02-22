@foreach (['danger', 'warning', 'success', 'info'] as $msg)
    @if(session()->has($msg))
        <div class="flash-message">
            <p class="alert alert-{{ $msg }}">
                <button type="button" cass="close" date-dismiss="alert" aria-label="Close"><span></button>
                {{ session()->get($msg) }}
            </p>
        </div>
    @endif
@endforeach