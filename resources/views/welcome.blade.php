<h1>this is a blade template</h1>


{{-- {{$tasks}} --}}
@if (count($tasks))
    <h3>You have tasks today!</h3>
    @foreach ($tasks as $tasks)
        
    @endforeach
@else
    <h3>you dont have task today!</h3>
    
@endif