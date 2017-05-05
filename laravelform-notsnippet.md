# laravel_forms_boostrap_snippets
    


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

+ bootnumber
```
<div class="form-group{{ $errors->has('inputname') ? ' has-error' : '' }}">
    {!! Form::label('inputname', 'Input label') !!}
    {!! Form::number('inputname', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('inputname') }}</small>
</div>

```

+ bootpasword
```
<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    {!! Form::label('password', 'Password') !!}
    {!! Form::password('password', ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('password') }}</small>
</div>

```

+ bootadoi
```
<div class="radio{{ $errors->has('radio_group_name') ? ' has-error' : '' }}">
    <label for="radio_group_name">
        {!! Form::radio('radio_group_name', "333",  "null", ['id' => 'radio_id radio']) !!} Checkbox label
    </label>
    <small class="text-danger">{{ $errors->first('radio_group_name') }}</small>
</div>

```

+ bootselect
```
<div class="form-group{{ $errors->has('inputname') ? ' has-error' : '' }}">
    {!! Form::label('inputname', 'Input label') !!}
    {!! Form::select('inputname', $options, null, ['id' => 'inputname', 'class' => 'form-control', 'required' => 'required', 'multiple']) !!}
    <small class="text-danger">{{ $errors->first('inputname') }}</small>
</div>

```

+ bootselectmonth
```
<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    {!! Form::label('email', 'Email address') !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'eg: foo@bar.com']) !!}
    <small class="text-danger">{{ $errors->first('email') }}</small>
</div>

```

+ bootselectyear
```
<div class="form-group{{ $errors->has('year') ? ' has-error' : '' }}">
    {!! Form::label('year', 'Year') !!}
    {!! Form::selectYear('year', date('Y'), date('Y') + 10, null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('year') }}</small>
</div>

```

+ bootselectrange
```
<div class="form-group{{ $errors->has('range') ? ' has-error' : '' }}">
    {!! Form::label('range', 'Input label') !!}
    {!! Form::selectRange('range', 0, 10, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('range') }}</small>
</div>

```

+ boottextarea
```
<div class="form-group{{ $errors->has('inputname') ? ' has-error' : '' }}">
    {!! Form::label('inputname', 'Input label') !!}
    {!! Form::textarea('inputname', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('inputname') }}</small>
</div>
```

+ boottext
```
<div class="form-group{{ $errors->has('inputname') ? ' has-error' : '' }}">
    {!! Form::label('inputname', 'Input label') !!}
    {!! Form::text('inputname', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('inputname') }}</small>
</div>

```

+ bootcheckboxh
```
<div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
        <div class="checkbox{{ $errors->has('checkbox_id') ? ' has-error' : '' }}">
            <label for="checkbox_id">
                {!! Form::checkbox('checkbox_id', '1', null, ['id' => 'checkbox_id']) !!} Checkbox label
            </label>
        </div>
        <small class="text-danger">{{ $errors->first('checkbox_id') }}</small>
    </div>
</div>

```

+ bootdateh
```
<div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
    {!! Form::label('date', 'Input label', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-9">
        {!! Form::date('date', null, ['class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('date') }}</small>
    </div>
</div>

```

+ bootselectmonth
```
<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    {!! Form::label('email', 'Email address') !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'eg: foo@bar.com']) !!}
    <small class="text-danger">{{ $errors->first('email') }}</small>
</div>

```

+ bootselectmonth
```
<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    {!! Form::label('email', 'Email address') !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'eg: foo@bar.com']) !!}
    <small class="text-danger">{{ $errors->first('email') }}</small>
</div>

```

```
    Input   Shortcut
    Checkbox    bootcheckboxh
    Date    bootdateh
    Email   bootemailh
    File    bootfileh
    Number  bootnumberh
    Password    bootpasswordh
    Radio   bootradioh
    Select  bootselecth
    SelectMonth     bootselectmonthh
    SelectYear  bootselectyearh
    SelectRange     bootselectrangeh
    Text    boottextareah
    Textarea    boottexth
```
>这些都是在后面加一个h表示Horizontal inputs。就是lable和表单在同一行

******************************************************

