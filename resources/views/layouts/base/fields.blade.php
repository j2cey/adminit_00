<div class="form-group row {{ $errors->has('state_id') ? 'has-error' : '' }}">
    <label class="col-sm-2 col-form-label"for="state_id">State</label>
    <div class="col-sm-10">
        <input name="state_id" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="Inactive" data-size="xs" {{ $currval->state == 'active' ? 'checked' : '' }}>
        <small class="text-danger">{{ $errors->has('state_id') ? $errors->first('state_id') : '' }}</small>
    </div>
</div>
