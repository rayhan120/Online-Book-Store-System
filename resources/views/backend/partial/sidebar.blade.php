<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('deshbord')}}">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('product.list')}}">
              <span data-feather="file"></span>
              Books
            </a>
          </li>




          <li class="nav-item">
            <a class="nav-link" href="{{route('manu.list')}}">
              <span data-feather="shopping-cart"></span>
              Catagory
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link"   href="{{route('reg.user')}}">
              <span data-feather="users"></span>
              Reg Users  
            </a>
          </li>

      
          



          

          
          <li class="nav-item">
            <a class="nav-link" href="{{route('order.show')}}">
              <span data-feather="layers"></span>
            Order
            </a>
          </li>


        


          <li class="nav-item">
            <a class="nav-link" href="{{route('book.report')}}">
              <span data-feather="bar-chart-2"></span>
              Reports
            </a>
          </li>
          
          

        </ul>

        
      </div>
    </nav>