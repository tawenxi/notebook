#laravel_forms_boostrap_snippets
    


+ bootform
```
{!! Form::open(['method' => 'POST', 'route' => 'routeName', 'class' => 'form-horizontal']) !!}

    boottext

    <div class="btn-group pull-right">
        {!! Form::reset("Reset", ['class' => 'btn btn-warning']) !!}
        {!! Form::submit("Add", ['class' => 'btn btn-success']) !!}
    </div>

{!! Form::close() !!}
```
+ bootformmodel
```
{!! Form::model($model, ['route' => ['models.update', $models->id}], 'method' => 'PUT', 'class' => 'form-horizontal']) !!}

    boottext

    <div class="btn-group pull-right">
        {!! Form::reset("Reset", ['class' => 'btn btn-warning']) !!}
        {!! Form::submit("Add", ['class' => 'btn btn-Add']) !!}
    </div>

{!! Form::close() !!}
```
+ bootbutton
```
{!! Form::submit('Button name', ['class' => 'btn btn-info pull-right']) !!}

```
> 是一个全屏的表单
> 
+ bootcheckbox
```
<div class="form-group">
    <div class="checkbox{{ $errors->has('checkbox_id') ? ' has-error' : '' }}">
        <label for="checkbox_id">
            {!! Form::checkbox('checkbox_id', '1', null, ['id' => 'checkbox_id']) !!} Checkbox label
        </label>
    </div>
    <small class="text-danger">{{ $errors->first('checkbox_id') }}</small>
</div>

```
> 还不清楚这是干嘛的

+ bootdate
```
<div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
    {!! Form::label('date', 'Input label') !!}
    {!! Form::date('date', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('date') }}</small>
</div>

```

+ bootemail
```
<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    {!! Form::label('email', 'Email address') !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'eg: foo@bar.com']) !!}
    <small class="text-danger">{{ $errors->first('email') }}</small>
</div>

```

+ bootfile
```
<div class="form-group{{ $errors->has('photo') ? ' has-error' : '' }}">
    {!! Form::label('photo', 'File label') !!}
    {!! Form::file('photo', ['required' => 'required']) !!}
    <p class="help-block">Help block text</p>
    <small class="text-danger">{{ $errors->first('photo') }}</small>
</div>

```

+ boothidden
```
{!! Form::hidden('inputname', 'value') !!}

```

+ bootemail
```
<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    {!! Form::label('email', 'Email address') !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'eg: foo@bar.com']) !!}
    <small class="text-danger">{{ $errors->first('email') }}</small>
</div>

```

+ bootemail
```
<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    {!! Form::label('email', 'Email address') !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'eg: foo@bar.com']) !!}
    <small class="text-danger">{{ $errors->first('email') }}</small>
</div>

```

+ bootemail
```
<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    {!! Form::label('email', 'Email address') !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'eg: foo@bar.com']) !!}
    <small class="text-danger">{{ $errors->first('email') }}</small>
</div>

```

+ bootemail
```
<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    {!! Form::label('email', 'Email address') !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'eg: foo@bar.com']) !!}
    <small class="text-danger">{{ $errors->first('email') }}</small>
</div>

```

+ bootemail
```
<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    {!! Form::label('email', 'Email address') !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'eg: foo@bar.com']) !!}
    <small class="text-danger">{{ $errors->first('email') }}</small>
</div>

```

