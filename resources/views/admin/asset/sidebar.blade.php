<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
    <ul>
      <li class="active"><a href="{{url('/admindashboard')}}"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>

      <li class="submenu class_hover"> <a href="#"> <span>Categories</span></a>
        <ul>
          <li><a href="#">Add Category</a></li>
        <li><a href="{{url('/category')}}">View Category</a></li>
          <li><a href="#">Delete Category</a></li>
        
        </ul>
      </li>
     
      <li class="submenu class_hover"> <a href="#"> <span>Products</span> </a>
        <ul>
          <li><a href="#">Add Product</a></li>
        <li><a href="{{url('/product')}}">View Products</a></li>
          <li><a href="#">Update Products</a></li>
        </ul>
      </li>
      
      <li class="submenu class_hover"> <a href="#"><span>Orders</span></a>
        <ul>
        <li><a href="{{url('/order')}}">View Orders</a></li>
        </ul>
      </li>
      <li class="submenu class_hover"> <a href="#"><span>Stores</span> </a>
        <ul>
          <li><a href="#">Add store</a></li>
          <li><a href="#">View Stores</a></li>
          <li><a href="#">Delete store</a></li>
          
        </ul>
      </li>
    
    </ul>
  </div>
  <!--sidebar-menu-->