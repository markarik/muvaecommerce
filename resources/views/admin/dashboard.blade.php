@extends('layouts.admin_design')

@section('content')




<!--main-container-part-->
<div id="content">
    <!--breadcrumbs-->
     
      <div id="content-header">
        <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
      </div>
    <!--End-breadcrumbs-->
    
    <!--Action boxes-->
      <div class="container-fluid">
        <div class="quick-actions_homepage">
          <ul class="quick-actions">
            <li class="bg_lb"> <a href="#"> <i class="icon-user"></i>  <span class="label label-important">2540</span>Total Users</a> </li>
            <li class="bg_lr span3"> <a href="#"><i class="icon-shopping-cart"></i>  <span class="label label-important">20</span>Total Shops</a> </li>
            <li class="bg_lg"> <a href="#"> <i class="icon-plus"> <span class="label label-important">2540</span></i>New Users</a> </li>
            <li class="bg_ly span3 "> <a href="#"><i class="icon-tag"></i> <span class="label label-success">Total 10100</span>Total Orders</a> </li>
            <li class="bg_lo span3"> <a href="#"> <i class="icon-truck"></i> <span class="label label-success">1050</span>Delivered orders</a> </li>
            <li class="bg_lb"> <a href="#"> <i class="icon-globe"></i> <span class="label label-secondary">8540</span>Online Orders</a> </li>
            <li class="bg_lr"> <a href="#"><i class="icon-repeat"></i> <span class="label label-important">2540</span>Pending Orders</a> </li>            
           
           
      {{-- <li class="bg_lo span3"> <a href="form-common.html"> <i class="icon-th-list"></i> Forms</a> </li> --}}
           
        </div>
    <!--End-Action boxes-->    
    
    
        <hr/>
        <div class="row-fluid">
          <div class="span6">
            <div class="widget-box">
              <div class="widget-title bg_ly" data-toggle="collapse" href="#collapseG2"><span class="icon"><i class="icon-chevron-down"></i></span>
                <h5>Latest Posts</h5>
              </div>
              <div class="widget-content nopadding collapse in" id="collapseG2">
                <ul class="recent-posts">
                  <li>
                    <div class="user-thumb"> <img width="40" height="40" alt="User" src="{{asset('img/demo/av1.jpg')}}"> </div>
                    <div class="article-post"> <span class="user-info"> By: john Deo / Date: 2 Aug 2012 / Time:09:27 AM </span>
                      <p><a href="#">This is a much longer one that will go on for a few lines.It has multiple paragraphs and is full of waffle to pad out the comment.</a> </p>
                    </div>
                  </li>
                  <li>
                    <div class="user-thumb"> <img width="40" height="40" alt="User" src="{{asset('img/demo/av2.jpg')}}"> </div>
                    <div class="article-post"> <span class="user-info"> By: john Deo / Date: 2 Aug 2012 / Time:09:27 AM </span>
                      <p><a href="#">This is a much longer one that will go on for a few lines.It has multiple paragraphs and is full of waffle to pad out the comment.</a> </p>
                    </div>
                  </li>
                  <li>
                    <div class="user-thumb"> <img width="40" height="40" alt="User" src="{{asset('img/demo/av4.jpg')}}"> </div>
                    <div class="article-post"> <span class="user-info"> By: john Deo / Date: 2 Aug 2012 / Time:09:27 AM </span>
                      <p><a href="#">This is a much longer one that will go on for a few lines.Itaffle to pad out the comment.</a> </p>
                    </div>
                  </li>
                  <li>
                    <button class="btn btn-warning btn-mini">View All</button>
                  </li>
                </ul>
              </div>
            </div>
        <div class="span6">
          
          
            <div class="widget-box">
              <div class="widget-title">
                <ul class="nav nav-tabs">
                  <li class="active"><a data-toggle="tab" href="#tab1">Tab1</a></li>
                  <li><a data-toggle="tab" href="#tab2">Tab2</a></li>
                  <li><a data-toggle="tab" href="#tab3">Tab3</a></li>
                </ul>
              </div>
              <div class="widget-content tab-content">
                <div id="tab1" class="tab-pane active">
                  <p>And is full of waffle to It has multiple paragraphs and is full of waffle to pad out the comment. Usually, you just wish these sorts of comments would come to an end.multiple paragraphs and is full of waffle to pad out the comment.</p>
                  <img src="{{asset('img/demo/demo-image1.jpg')}}" alt="demo-image"/></div>
                <div id="tab2" class="tab-pane"> <img src="{{asset('img/demo/demo-image2.jpg')}}" alt="demo-image"/>
                  <p>And is full of waffle to It has multiple paragraphs and is full of waffle to pad out the comment. Usually, you just wish these sorts of comments would come to an end.multiple paragraphs and is full of waffle to pad out the comment.</p>
                </div>
                <div id="tab3" class="tab-pane">
                  <p>And is full of waffle to It has multiple paragraphs and is full of waffle to pad out the comment. Usually, you just wish these sorts of comments would come to an end.multiple paragraphs and is full of waffle to pad out the comment. </p>
                  <img src="{{asset('img/demo/demo-image3.jpg')}}" alt="demo-image"/></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!--end-main-container-part-->

  
@endsection