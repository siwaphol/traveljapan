@extends('template')

@section('content')
    <div class="container_12">
        @for($i=0; $i < count($regions); $i++)
            @if($i%2 == 0)
                @if($i<2)
                <div class="grid_2">
                @else
                <div class="grid_2 prefix_1">
                @endif
            @endif
                    <h4>{{$regions[$i]->name}}</h4>
                    <ul class="list1">
                        @foreach($provinces[$i] as $pro)
                            <li><a href="{{url('plan/')}}/{{$pro->id}}"><i class="fa fa-star"></i> {{$pro->name}} </a></li>
                        @endforeach
                    </ul>
            @if($i%2 == 1 || ($i%2==0 && $i==count($regions)-1))
                </div>
            @endif
        @endfor
        <div class="clear"></div>
    </div>
@endsection