<div class="form-group row {{ $errors->has('title') ? 'has-error' : '' }}">
    <label class="col-sm-2 col-form-label" for="reference">Title</label>
    <div class="col-sm-10">
        <input name="reference" type="text" class="form-control" placeholder="Title" value="{{ old('title', $report->title ?? '') }}"/>
        <small class="text-danger">{{ $errors->has('title') ? $errors->first('title') : '' }}</small>
    </div>
</div>

<div class="form-group row {{ $errors->has('taille') ? 'has-error' : '' }}">
    <label class="col-sm-2 col-form-label" for="taille">Taille</label>
    <div class="col-sm-10">
        <input name="taille" type="text" class="form-control" placeholder="Taille" value="{{  old('taille', $report->taille ?? '') }}"/>
        <small class="text-danger">{{ $errors->has('taille') ? $errors->first('taille') : '' }}</small>
    </div>
</div>

@include('layouts.base.fields', ['currval' => $report])
