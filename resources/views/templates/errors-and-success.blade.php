@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

@if (session('error'))
    <div class="alert alert-warning">{{ session('error') }}</div>
@endif

@if ($errors->all())
    <div class="alert alert-warning">
        @foreach ($errors->all() as $error)
            {{ $error }}
        @endforeach
    </div>
@endif
