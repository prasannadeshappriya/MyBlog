@extends('layout.FrontLayout')

@section('body')
    <div class="container">
        <div class="box">
            @if(!empty($arrResult))
                @foreach($arrResult as $item)
                    <div class="col-lg-12">
                        <div class="panel panel-default" >
                            <div class="panel-heading">
                                <h4 class="text-info">{{$item['name']}}</h4>
                            </div>
                            <div class="panel-body">
                                <p>{{$item['description']}}</p>
                                @if($item['learn_more']=='1')
                                    <a href="{{url('project/'.$item['name'])}}" class="btn btn-default center-block" style="width: 150px;">Learn More</a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@stop