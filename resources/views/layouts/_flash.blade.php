@if (session()->has('flash_notification.message'))

	<div class="container">
		<div class="alert-{{ session()->get('flash_notification.level') }}">
			<button type="button" class="close" data-dinamiss="alert" aria-hidden="true">
			$times;
			</button>
			{!! session()->get('flash_notification.message') !!}
		</div>
	</div>
@endif