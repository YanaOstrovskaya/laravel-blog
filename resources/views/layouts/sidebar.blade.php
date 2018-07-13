<h1>Archives</h1>
<div class="list-group">
	@foreach($archives as $static)
  <a href="/?month={{$static['month']}}&year={{$static['year']}}" class="list-group-item list-group-item-action">{{ $static['month'].' '.$static['year'] }}</a>
  	@endforeach
</div>