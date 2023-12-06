<div class="d-flex mb-5 mt-5">
   <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
         <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
         <span class="fs-4">Admin</span>
      </a>
      <hr>
      <ul class="nav nav-pills flex-column mb-auto">
         <li class="nav-item">
         <a href="#" class="nav-link active" aria-current="page">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
            Sản phẩm
         </a>
         </li>
         <li>
         <a href="#" class="nav-link link-dark">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
            Danh mục
         </a>
         </li>
         <li>
         <a href="#" class="nav-link link-dark">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
            Người dùng
         </a>
         </li>
         <li>
         <a href="#" class="nav-link link-dark">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
            Đơn hàng
         </a>
         </li>
         <li>
         <a href="#" class="nav-link link-dark">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
            Nhân viên
         </a>
         </li>
         <li>
         <a href="#" class="nav-link link-dark">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
            Thống kê
         </a>
         </li>
      </ul>
      <hr>
      
   </div>

   <table class="table table-hover m-4">
   <thead>
      <tr>
         <th scope="col">#</th>
         <th scope="col">Tên Sản phẩm</th>
         <th scope="col">Giá sản phẩm</th>
         <th scope="col">mô tả sản phẩm</th>
         <th scope="col">Danh mục</th>
      </tr>
   </thead>
   <tbody>
      <?php
      foreach($listProducts as $products) {
         extract($products);
         echo '<tr>
                  <th scope="row">1</th>
                  <td>'.$productName.'</td>
                  <td>'.$price.'</td>
                  <td>'.$description.'</td>
                  <td>'.$categoryName.'</td>
               </tr>';
      }
      ?> 
   </tbody>
   </table>
</div>