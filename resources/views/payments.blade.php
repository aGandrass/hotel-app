@extends ('layout')

@section ('content')
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="float: right;">
						<button class="btn btn-primary" data-toggle="modal" data-target="#newReservationModal">New Reservation</button>
					</div>
					<h4 class="card-title">Payments</h4>
				</div>
				
				<div class="card-body">
					<table class="table table-sm table-hover">
						<thead>
							<tr>
								<th>#</th>
								<th>Vorname</th>
								<th>Nachname</th>
								<th>Anreise</th>
								<th>Abreisen</th>
								<th class="text-right">Total</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($paymentsContent as $content)
							<tr>
								<th scope="row">{{ $content->id }}</th>
								<td>{{ $content->firstName }}</td>
								<td>{{ $content->lastName }}</td>
								<td>{{ date('d-m-Y', strtotime($content->arrival)) }}</td>
								<td>{{ date('d-m-Y', strtotime($content->departure)) }}</td>
								<td class="text-right">{{ number_format($content->total, 2, ",", ".") }}</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					<p class="card-text"></p>
				</div>
			</div><!-- END CARD -->
		</div><!-- END COL -->
	</div><!-- END ROW -->
	
	
	<form method="post" action="/reservation">
		
		{{ csrf_field() }}
		
		<div class="modal fade" id="newReservationModal" tabindex="-1" role="dialog" aria-labelledby="newReservationModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="newReservationModalLabel">New Reservation</h5>	
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>

					</div><!-- END MODAL HEADER -->

					<div class="modal-body">
						<div class="form-group">
							<select class="form-control input-lg" id="_categoriesID" name="_categoriesID">
								@foreach ($categories as $category)
								<option value="{{ $category->id }}">{{ $category->categoryName }}</option>
								@endforeach
							</select>
						</div>
						
						<div class="form-group">
							<input type="text" class="form-control input-lg" id="title" name="title" placeholder="Anrede" required>
						</div>
						
						<div class="form-group">
							<input type="text" class="form-control input-lg" id="firstName" name="firstName" placeholder="Vorname" required>
						</div>
						
						<div class="form-group">
							<input type="text" class="form-control input-lg" id="lastName" name="lastName" placeholder="Nachname" required>
						</div>
						
						<div class="form-group">
							<input type="date" class="form-control input-lg" id="arrival" name="arrival" placeholder="Anreise" required>
						</div>
						
						<div class="form-group">
							<input type="date" class="form-control input-lg" id="departure" name="departure" placeholder="Abreise" required>
						</div>
						
						<div class="form-group">
							<input type="number" class="form-control input-lg" id="adults" name="adults" placeholder="Anzahl Erwachsene" min="0" max="3" required>
						</div>
						
						<div class="form-group">
							<input type="number" class="form-control input-lg" id="kids" name="kids" placeholder="Anzahl Kinder" min="0" max="4" required>
						</div>
						
						<div class="input-group">
							<div class="input-group-addon">&euro;</div>
							<input type="number" class="form-control input-lg" id="total" name="total" placeholder="Gesamtbetrag" min="0.00" max="999999.00" step="0.01" required>
						</div>
					</div><!-- END MODAL BODY -->

					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">
							Close
						</button>
						<button type="submit" class="btn btn-primary">
							Erstellen
						</button>
					</div><!-- END MODAL FOOTER -->
				</div><!-- END MODAL CONTENT -->
			</div>
		</div><!-- END MODAL -->
	</form><!-- END FORM -->
@endsection


