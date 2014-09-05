@extends('layouts.master')

@section('content')
	<div class="container img-rounded" style="background-color: white; padding: 50px 20px 50px 50px; border: solid 1px grey;">
		<div class="row">
			<div class="col-lg-4">
				<form>
					<div class="form-group">
	    				<label for="exampleInputEmail1">Sup bro?</label>
	    				<textarea type="text" class="form-control" rows="3" placeholder="Message"></textarea>
	    				<button type="submit" class="btn btn-primary pull-right">Squak!</button>
	  				</div>
				</form>
			</div>
			<div class="col-lg-8">
				<article class="img-rounded">
					<p>A bird just ate my sammich! #whyme</p>
				</article>
				<article class="img-rounded">
					<p>There are a lot of birds out here. #birdsaregross</p>
				</article>
				<article class="img-rounded">
					<p>Just got this awesome sammich. #sammichtime</p>
				</article>
			</div>
		</div>
	</div>
@stop