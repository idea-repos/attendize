@extends('Shared.Layouts.Master')

@section('title')
    @parent
    {{ trans('Organiser.dashboard') }}
@endsection

@section('top_nav')
    @include('ManageOrganiser.Partials.TopNav')
@stop
@section('page_title')
    {{ trans('Organiser.organiser_name_dashboard', ['name'=>$organiser->name])}}
@stop

@section('menu')
    @include('ManageOrganiser.Partials.Sidebar')
@stop

@section('head')

@stop

@section('content')
<?php #print_R($category->count()); die; ?>

<div class="row">
    <div class="col-md-12">
        <div class="btn-toolbar">
            <div class="btn-group btn-group-responsive">
            <a href="{{ route('addCategory',['organiser_id' => @$organiser->id]) }}" ><i class="ico-plus"></i> Create Category</a>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        @if($category->count())
        <div class="panel">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>
                                Title
                            </th>
                            <th>
                                Description
                            </th>
                          
                            <th>
                                Action
                            </th>
                          
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($category as $my)
                        <tr class="attendee_{{$my->id}}">
                            <td>{{{$my->title}}}</td>
                            <td>
                               
                                     {{$my->descrption}}
                            </td>
                          
                           
                            <td class="text-center">
                                

                              

                               
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @else

        @if(!empty($q))
        @include('Shared.Partials.NoSearchResults')
        @else
       
        @endif

        @endif
    </div>
    <div class="col-md-12">
     
    </div>
</div>
@stop