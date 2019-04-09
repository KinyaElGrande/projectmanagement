@extends('layouts.app')


@section('content')
<div class="col-md-9 col-lg-9 col-sm-9 pull-left">


      <!-- Example row of columns -->
      <div class="row" style="background: white; margin: 10px">
          <div class="col-lg-12 col-md-12 col-sm-12">

        <form method="post" action="{{ route('companies.update',[$company->id])}}">
                          {{ csrf_field()}}

                          @method('PUT')

                          <div class="form-group">
                              <label for="company-name">Name<span class="required">*</span></label>
                              <input    placeholder="Enter name"
                                        id="company-Name"
                                        required
                                        name="name"
                                        spellcheck="false"
                                        class="form-control"
                                        value="{{ $company->name }}"
                                         />


                          </div>


                          <div class="form-group">
                            <label for="company-content">Description</label>
                            <textarea placeholder="Enter description"
                                      style="resize: vertical"
                                      id="company-content"
                                      name="description"
                                      rows="5"
                                      spellcheck="false"
                                      class="form-control autosize-target text-left">
                                    {{ $company->description }}</textarea>

                          </div>

                          <div class="form-group">
                            <input type="submit" class="btn btn-primary"
                                   value="Submit"/>

                          </div>
        </form>
        </div>
</div>
</div>


    <div class="col-sm-3 col-md-3 col-lg-3 pull-right">
          <div class="sidebar-module">
          <div class="sidebar-module">
            <h4>Manage</h4>
            <ol class="list-unstyled">
              <li><a href="/companies/{{ $company->id }}">View Projects</a></li>
              <li><a href="/companies">All companies</a></li>
            </ol>
          </div>

           <!-- <h4>Members</h4>
            <ol class="list-unstyled">
              <li><a href="#">March 2014</a></li>
            </ol>-->
          </div>
        </div>
    @endsection
