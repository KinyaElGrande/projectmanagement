@extends('layouts.app')


@section('content')
<div class="col-md-9 col-lg-9 col-sm-9 pull-left">

      <!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->
      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1>{{ $company->name }}</h1>
        <p class="lead">{{ $company->description}}</p>
        
      </div>

      <!-- Example row of columns -->
      <li><a class="pull-right btn-sm btn btn-success" href="/projects/create/{{ $company->id }}" >Add Project</a><li>
      <div class="row" style="background: white; margin: 10px">

        @foreach($company->projects as $project)
          <div class="col-lg-4 col-md-4 col-sm-4">
            <h2>{{$project->name}}</h2>
            <p class="text-danger">{{$project->description}}</p>
            <p><a class="btn btn-primary" href="/projects/{{$project->id}}" role="button">View project »</a></p>
          </div>
        @endforeach
</div>
</div>


    <div class="col-sm-3 col-md-3 col-lg-3 pull-right">
          <div class="sidebar-module">
          <div class="sidebar-module">
            <h4>Manage</h4>
            <ol class="list-unstyled">
              <li><a class="btn btn-sm btn-warning" href="/companies/{{ $company->id }}/edit">Edit</a></li>
              </br>
              <li>
                                
              <a  
              class="btn btn-sm btn-danger" 
              href="#"
                  onclick="
                  var result = confirm('Are you sure you wish to delete this Company?');
                      if( result ){
                              event.preventDefault();
                              document.getElementById('delete-form').submit();
                      }
                          "
                          >
                  Delete
              </a>

              <form id="delete-form" action="{{ route('companies.destroy',[$company->id]) }}" 
                method="POST" style="display: none;">
                        <input type="hidden" name="_method" value="delete">
                        {{ csrf_field() }}
              </form>
              </li>
              </br>
              <li><a href="/companies">All companies</a></li>
            </ol>
          </div>


          </div>
        </div>

    @endsection