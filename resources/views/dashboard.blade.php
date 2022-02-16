@extends('layouts.layout')

@section('title')
Dashboard
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
            <li class="active  treeview">
              <a href="{{url('/dashboard')}}">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> 
              </a>
             
            </li>
<li class="treeview">
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
            Dashboard
          
          </h1>
          <ol class="breadcrumb">
            <li><a href="{{url('/dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Total URL Count</span>
                  <span class="info-box-number">{{ $count->count() }}</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
           

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

         
         
          </div><!-- /.row -->

        <!-- /.row -->

          <!-- Main row -->
         <!-- /.row -->

        <!-- /.row -->

       <!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

   @endsection