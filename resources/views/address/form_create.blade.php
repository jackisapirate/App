<div class="modal-content">
	<form class="form-horizontal" ng-submit="createaddressform.$valid && create()" xt-form role="form" name="createaddressform" novalidate>
		<div class="modal-header">
			<button ng-click="$close(false)" type="button" class="close"><span aria-hidden="true">&times;</span></button>
			{{ trans('antvel::address.add') }}
		</div>
		<div class="modal-body" stop-event="touchend">
			<div class="container-fluid">
				<input type="hidden" name="newAddress._method" value="PUT" ng-model="_method">
				@include('address.partial.inputs')
			</div>
		</div>
		<div class="modal-footer">

			<button class="btn btn-danger btn-sm" type="button" ng-click="$close(false)" >
				<span class="glyphicon glyphicon-remove"></span>&nbsp;
				{{ trans('antvel::globals.cancel') }}
			</button>

			<button class="btn btn-success btn-sm" type="submit">
				<span class="glyphicon glyphicon-floppy-disk"></span>&nbsp;
				{{ trans('antvel::globals.save') }}
			</button>
		</div>
		<input type="hidden" name="_method" value="PUT">
	</form>
</div>