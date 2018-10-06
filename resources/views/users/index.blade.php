@extends('layouts.app')

{{-- @yield('page-title') --}} {{-- clear --}}
@section('page-title')
    Data User
@endsection

{{-- @yield('breadcrumb') --}}
@section('breadcrumb')
    User
@endsection

{{-- @yield('content') --}}
@section('content')
	<div class="table-responsive">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Nama</th>
					<th>Email</th>
				</tr>
			</thead>
			<tbody>
				@foreach( $users as $user)
				<tr>
					<td>{{ $user->name }}</td>
					<td>{{ $user->email }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection