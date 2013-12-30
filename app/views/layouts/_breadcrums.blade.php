<ol class="breadcrumb">
	<?php
		$breadcrums = explode('/', URL::current());
		$breadcrumsURL = '';
	 ?>
	@for ($i = 3; $i < count($breadcrums); $i++)
		@if ($i == count($breadcrums) - 1)
			<li class="active">{{ $breadcrums[$i] }}</li>
		@else
			<?php $breadcrumsURL .= '/'.$breadcrums[$i] ?>
			<li><a href="{{ $breadcrumsURL }}">{{ $breadcrums[$i] }}</a></li>
		@endif
	@endfor
</ol>