@extends('template')

@section('content')
<div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-4">Categories
          <small>Table</small>
        </h1>
        <table class="table table-bordered " cellspacing="0" cellpadding="10">
          <thead class="text-center">
            <tr>
              <th>Name</th>
              <th colspan="2">Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach($posts as $row)
            <tr>
              <td>{{$row->name}}</td>
              <td>
                <a href="{{route('category.edit',$row->id)}}" class="btn btn-warning">Edit</a>
              </td>
              <td>
                <form class="d-inline" method="post" action="{{route('category.destroy',$row->id)}}">
                  @csrf
            @method('DELETE')

                  <input type="submit" name="delete" value="Delete" class="btn btn-danger">
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Web Design</a>
                  </li>
                  <li>
                    <a href="#">HTML</a>
                  </li>
                  <li>
                    <a href="#">Freebies</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">JavaScript</a>
                  </li>
                  <li>
                    <a href="#">CSS</a>
                  </li>
                  <li>
                    <a href="#">Tutorials</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Side Widget</h5>
          <div class="card-body">
            You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>

  @endsection