@csrf
<div class="row">
    <div class="col-md-6">
        <div class="form-group bmd-form-group">

            @php $input = "name"; @endphp

            <label class="bmd-label-floating">Page Name</label>
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

            @php $input = "meta_keywords"; @endphp

            <label class="bmd-label-floating">Meta Keywords</label>
            <input type="text" value="{{ isset($row) ? $row->{$input} : '' }}" name="{{ $input }}" class="form-control @error($input) is-invalid @enderror">
            @error($input)
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
            <div class="form-group bmd-form-group">
        
                @php $input = "des"; @endphp
        
                <label class="bmd-label-floating">Page Description</label>
                <textarea name="{{ $input }}" class="form-control @error($input) is-invalid @enderror" cols="30"
                    rows="10">{{ isset($row) ? $row->{$input} : '' }}</textarea>
                @error($input)
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
    </div>




    <div class="col-md-12">
        <div class="form-group bmd-form-group">
 
            @php $input = "meta_des"; @endphp

            <label class="bmd-label-floating">Meta Description</label>
            <textarea name="{{ $input }}" class="form-control @error($input) is-invalid @enderror" cols="30" rows="5">{{ isset($row) ? $row->{$input} : '' }}</textarea>
            @error($input)
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
</div>

