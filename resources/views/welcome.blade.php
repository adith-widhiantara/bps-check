@extends('base.base')

@section('base')
@if (session('success'))
<div class="alert alert-success" role="alert">
    {{ session('success') }}
</div>
@endif

@if (session('error'))
<div class="alert alert-danger" role="alert">
    {{ session('error') }}
</div>
@endif

<div class="card">
    <div class="card-body">
        <form action="{{ route('find.bps') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nomor BPS</label>
                <input type="text" class="form-control" name="bps" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
