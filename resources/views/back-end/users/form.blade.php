@csrf
<div class="row">
    <div class="col-md-6">
        <div class="form-group bmd-form-group">

            @php $input = "name"; @endphp

            <label class="bmd-label-floating">Username</label>
            <input type="text" name="{{ $input }}" value="{{ isset($row) ? $row->{$input} : '' }}" class="form-control @error($input) is-invalid @enderror">
            @error($input)
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group bmd-form-group">

            @php $input = "email"; @endphp

            <label class="bmd-label-floating">Email address</label>
            <input type="email" value="{{ isset($row) ? $row->{$input} : '' }}" name="{{ $input }}" class="form-control @error($input) is-invalid @enderror">
            @error($input)
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group bmd-form-group">

            @php $input = "password"; @endphp

            <label class="bmd-label-floating">Password</label>
            <input type="password" name="{{$input}}" class="form-control @error($input) is-invalid @enderror">
            @error($input)
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
</div>

