@extends('layouts.app') @section('title', 'JobPost Page')
@section('content')

<html>
<head>

<title>Post a Product</title>
</head>
<body>
	<form action="addStorePost" method="POST">
		<input type="hidden" name="_token" value="{{ csrf_token() }}" />
		<h2>Add a Job</h2>
		<table>
			<tr>
				<td>Product Name:</td>
				<td><input type="text" name="productname" />{{ $errors->first('productname')
					}}</td>
			</tr>

			<tr>
				<td>Description:</td>
				<td><input type="text" name="description" />{{
					$errors->first('description') }}</td>
			</tr>

			<tr>
				<td>Brand</td>
				<td><input type="text" name="brand" />{{ $errors->first('brand')
					}}</td>
			</tr>

			<tr>
				<td>Model:</td>
				<td><input type="text" name="model" />{{
					$errors->first('model') }}</td>
			</tr>



			<tr>
				<td colspan="2" align="center"><input type="submit"
					value="Post a Product" /></td>
			</tr>
		</table>
	</form>
	
	
</body>

</html>
@endsection
