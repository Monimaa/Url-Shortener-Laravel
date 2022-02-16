@extends('layouts.layout')

@section('title')
Url Shortener
@endsection 



@section('menu')
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/images.jfif" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p style="padding-top: 10px;">Admin Name</p>

             
            </div>
          </div>
          <!-- search form -->
        
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class=" treeview">
              <a href="{{url('/dashboard')}}">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> 
              </a>
             
            </li>
<li class="active treeview">
              <a href="{{url('/urlshortener')}}">
                <i class="fa fa-dashboard"></i> <span>Create Url Shortener</span> 
              </a>
             
            </li>

          
          
         
           
          
         
         
         
           
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
      @endsection
      @section('content')

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Create URL Shortener
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="{{url('/dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{url('/urlshortener')}}">Url Shortener</a></li>
           
          </ol>
        </section>



        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">


              <div class="box">
@if (session('success_message'))

<p style="text-align: center;background-color:#e6fee6;margin-left: 200px;margin-right:200px;margin-top: 20px;height: 40px; padding-top: 10px;border-radius: 7px;"><span style="text-align:center;color:green;">
{{ session('success_message')}}
</span></p>
@endif


                <div id="formshort">
                    <form action="{{url('/shorturl')}}" method="POST">
  @csrf
  Enter Title : <input type="text" name="Title" style="width:280px;" /><br><br>
  Enter URL : <input style="width: 280px;" type="text" name="URL"/>

  <button id="buttonshort" type="submit">Create Short URL</button><br>
  @error('URL')
<span style="color: red;padding-left: 70px;" class="text-red-400 m-2 p-2">{{ $message }}</span>
  @enderror

</form>
</div>
<br><br>
  
                <div class="box-header">
                  <h3 class="box-title">List of URL Shorteners</h3>
                </div><!-- /.box-header -->

                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>SL.No</th>
                        <th>Title</th>
                        <th>URL</th>
                        <th>Short URL</th>
                        <th>Created Date</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                       <?php $count = 1 ?>
                       @foreach ($alu as $row)
                      <tr>
                       
                        <td>{{ $count}}</td>
                         <td>  {{ $row['Title'] }}</td>
                        <td id="url"> {{$row['URL'] }}</td>
                        <td><a target="_blank" href="http://127.0.0.1:8000/{{$row['ShortURL']}}">http://127.0.0.1:8000/{{$row['ShortURL']}}</a></td>
                        <td> {{$row['created_at'] }}</td>
                        <td><button>  <a href="#" onclick="CopyUrl('url');return false;">Copy</a></button></td>
                      
                      </tr>
                       <?php $count++; ?>
                       @endforeach
                     
                    </tbody>
                   
                  </table>
                  
                 
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
    @endsection