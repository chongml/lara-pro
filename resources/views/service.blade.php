<h1>Our Services</h1>
@if(count($services)>0)
<ul>
    @foreach($services as $services)
    <li>{{$services}}</li> <!--list out from the array-->
    @endforeach
    @else
    No Data        <!--display if array is empty-->
    @endif
</ul>