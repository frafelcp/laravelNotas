@if(!$errors->isEmpty())
    <div class="alert alert-danger">
    	<p><strong>Ooops!</strong>Plesae fix the following errors:</p>
    	<ul>
    		@foreach($errors->all() as $error)
    		<li>{{$error}}</li>
    		@endforeach
    	</ul>
    </div>
@endif