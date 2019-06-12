@extends('back-end.partials.app')

@section('title')
    {{ $pageTitle }} 
@endsection
@section('content')
    @component('back-end.partials.nav')
        @slot('nav_title')
            {{ $pageTitle }} 
        @endslot

    @endcomponent 

      @component('back-end.shared.table', ['pageTitle' => $pageTitle, 'pageDes' => $pageDes])

        @slot('addButton')
            <div class="col-md-4 text-right">
                <a href="{{ route($routeName . '.create') }}" class="btn btn-white btn-warning btn-round ">
                    Add {{ $sModuleName }}
                </a>
            </div>
        @endslot

        <div class="table-responsive">
            <table class="table">
                <thead class=" text-primary">
                    <tr>
                        <th>
                            #
                        </th>
                        <th class="text-center">
                            Name
                        </th>
                        
                        <th class="text-right">
                            Control
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rows as $row)
                        <tr>
                            <td>
                                {{ $row->id }}
                            </td>
                            <td class="text-center">
                                {{ $row->name }}
                            </td>
                          
                            <td class="text-right">
                                @include('back-end.shared.buttons.edit', ['routeName' => $routeName])
                                @include('back-end.shared.buttons.delete', ['routeName' => $routeName])
                                
                            </td>
                        </tr>
                    @endforeach
        
                </tbody>
            </table>
            {!! $rows->links() !!}
        </div>
      @endcomponent

@endsection
