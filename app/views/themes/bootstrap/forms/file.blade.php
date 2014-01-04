<div class="form-group {{ $errors->has($id) ? 'error' : false }}">
	<label for="{{ $id }}" class="control-label">{{ $text }} {{ $required ? '<span class="required-red">*</span>' : ''}}</label>
	<div class="controls">
		<div class="fileinput fileinput-new" data-provides="fileinput">
			<span class="btn btn-default btn-file">
				<span class="fileinput-new">Select file</span>
				<span class="fileinput-exists">Change</span>
				<input type="file" id="{{ $id }}" name="{{ $id }}" {{ $disabled ? 'readonly' : '' }}>
			</span>
			<span class="fileinput-filename"></span>
			<a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">&times;</a>
		</div>
		@if ($helpText)
			<span class='help-block'>{{ $helpText }}</span>
		@endif
		@foreach($errors->get($id) as $message)
			<span class='help-block'>{{ $message }}</span>
		@endforeach
	</div>
</div>