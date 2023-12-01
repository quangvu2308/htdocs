<!-- Open Content -->
<section class="bg-light">
   <div class="container pb-5">
      <div class="row">
         <div class="col-lg-5 mt-5">
            <div class="card mb-3">
               <img class="card-img img-fluid" src="https://picsum.photos/200/300" alt="Card image cap"
                  id="product-detail">
            </div>
            <div class="row">
               <!--Start Controls-->
               <div class="col-1 align-self-center">
                  <a href="#multi-item-example" role="button" data-bs-slide="prev">
                     <i class="text-dark fas fa-chevron-left"></i>
                     <span class="sr-only">Previous</span>
                  </a>
               </div>
               <!--End Controls-->
               <!--Start Carousel Wrapper-->
               <div id="multi-item-example" class="col-10 carousel slide carousel-multi-item"
                  data-bs-ride="carousel">
                  <!--Start Slides-->
                  <div class="carousel-inner product-links-wap" role="listbox">

                     <!--First slide-->
                     <div class="carousel-item active">
                        <div class="row">
                           <div class="col-4">
                              <a href="#">
                                 <img class="card-img img-fluid" src="https://picsum.photos/200/300"
                                    alt="Product Image 1">
                              </a>
                           </div>
                           <div class="col-4">
                              <a href="#">
                                 <img class="card-img img-fluid" src="https://picsum.photos/200/300"
                                    alt="Product Image 2">
                              </a>
                           </div>
                           <div class="col-4">
                              <a href="#">
                                 <img class="card-img img-fluid" src="https://picsum.photos/200/300"
                                    alt="Product Image 3">
                              </a>
                           </div>
                        </div>
                     </div>
                     <!--/.First slide-->

                     <!--Second slide-->
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-4">
                              <a href="#">
                                 <img class="card-img img-fluid" src="https://picsum.photos/200/300"
                                    alt="Product Image 4">
                              </a>
                           </div>
                           <div class="col-4">
                              <a href="#">
                                 <img class="card-img img-fluid" src="https://picsum.photos/200/300"
                                    alt="Product Image 5">
                              </a>
                           </div>
                           <div class="col-4">
                              <a href="#">
                                 <img class="card-img img-fluid" src="https://picsum.photos/200/300"
                                    alt="Product Image 6">
                              </a>
                           </div>
                        </div>
                     </div>
                     <!--/.Second slide-->

                     <!--Third slide-->
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-4">
                              <a href="#">
                                 <img class="card-img img-fluid" src="https://picsum.photos/200/300"
                                    alt="Product Image 7">
                              </a>
                           </div>
                           <div class="col-4">
                              <a href="#">
                                 <img class="card-img img-fluid" src="https://picsum.photos/200/300"
                                    alt="Product Image 8">
                              </a>
                           </div>
                           <div class="col-4">
                              <a href="#">
                                 <img class="card-img img-fluid" src="https://picsum.photos/200/300"
                                    alt="Product Image 9">
                              </a>
                           </div>
                        </div>
                     </div>
                     <!--/.Third slide-->
                  </div>
                  <!--End Slides-->
               </div>
               <!--End Carousel Wrapper-->
               <!--Start Controls-->
               <div class="col-1 align-self-center">
                  <a href="#multi-item-example" role="button" data-bs-slide="next">
                     <i class="text-dark fas fa-chevron-right"></i>
                     <span class="sr-only">Next</span>
                  </a>
               </div>
               <!--End Controls-->
            </div>
         </div>
         <!-- col end -->
         <div class="col-lg-7 mt-5">
            <div class="card">
               <div class="card-body">
                  <h1 class="h2">Active Wear</h1>
                  <p class="h3 py-2">$25.00</p>
                  <ul class="list-inline">
                     <li class="list-inline-item">
                        <h6>Brand:</h6>
                     </li>
                     <li class="list-inline-item">
                        <p class="text-muted"><strong>Easy Wear</strong></p>
                     </li>
                  </ul>
                  <h6>Description:</h6>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp incididunt ut
                     labore et dolore magna aliqua. Quis ipsum suspendisse. Donec condimentum elementum convallis.
                     Nunc sed orci a diam ultrices aliquet interdum quis nulla.</p>
                  <ul class="list-inline">
                     <li class="list-inline-item">
                        <h6>Avaliable Color :</h6>
                     </li>
                     <li class="list-inline-item">
                        <p class="text-muted"><strong>White / Black</strong></p>
                     </li>
                  </ul>
                  <form action="" method="GET">
                     <input type="hidden" name="product-title" value="Activewear">
                     <div class="row">
                        <!-- SIZE-->
                        <div class="col-auto">
                           <ul class="list-inline pb-3">
                              <li class="list-inline-item">Size :
                                 <input type="hidden" name="product-size" id="product-size" value="S">
                              </li>
                              <li class="list-inline-item"><span class="btn btn-success btn-size">S</span></li>
                              <li class="list-inline-item"><span class="btn btn-success btn-size">M</span></li>
                              <li class="list-inline-item"><span class="btn btn-success btn-size">L</span></li>
                              <li class="list-inline-item"><span class="btn btn-success btn-size">XL</span></li>
                           </ul>
                        </div>
                        <div class="col-auto">
                           <ul class="list-inline pb-3">
                              <li class="list-inline-item text-right">
                                 Quantity
                                 <input type="hidden" name="product-quanity" id="product-quanity" value="1">
                              </li>
                              <li class="list-inline-item"><span class="btn btn-success" id="btn-minus">-</span></li>
                              <li class="list-inline-item"><span class="badge bg-secondary" id="var-value">1</span>
                              </li>
                              <li class="list-inline-item"><span class="btn btn-success" id="btn-plus">+</span></li>
                           </ul>
                        </div>
                     </div>
                     <div class="row pb-3">
                        <div class="col d-grid">
                           <button type="submit" class="btn btn-success btn-lg" name="submit"
                              value="buy">Buy</button>
                        </div>
                        <div class="col d-grid">
                           <button type="submit" class="btn btn-success btn-lg" name="submit" value="addtocard">Add
                              To Cart</button>
                        </div>
                     </div>
                  </form>

               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Close Content -->

<!-- Start Article -->
<section class="py-5">
   <div class="container">
      <div class="row text-left p-2 pb-3">
         <h4>Related Products</h4>
      </div>

      <!--Start Carousel Wrapper-->
      <div id="carousel-related-product">

         <div class="p-2 pb-3">
            <div class="product-wap card rounded-4">
               <div class="card rounded-0">
                  <img class="card-img rounded-0 img-fluid" src="https://picsum.photos/200/300">
               </div>
               <div class="card-body">
                  <a href="shop-single.html" class="h3 text-decoration-none">Red Clothing</a>
                  <li class="list-unstyled">M/L/X/XL</li>
                  <div
                     class="rounded-0 d-flex align-items-center justify-content-center">
                     <ul class="list-unstyled d-flex">
                        <li><a class="btn btn-success text-white m-2" href="shop-single.html"><i
                                 class="far fa-heart"></i></a></li>
                        <li><a class="btn btn-success text-white m-2" href="shop-single.html"><i
                                 class="far fa-eye"></i></a></li>
                        <li><a class="btn btn-success text-white m-2" href="shop-single.html"><i
                                 class="fas fa-cart-plus"></i></a></li>
                     </ul>
                  </div>
                  <p class="text-center mb-0">$20.00</p>
               </div>
            </div>
         </div>

         <div class="p-2 pb-3">
            <div class="product-wap card rounded-4">
               <div class="card rounded-0">
                  <img class="card-img rounded-0 img-fluid" src="https://picsum.photos/200/300">
               </div>
               <div class="card-body">
                  <a href="shop-single.html" class="h3 text-decoration-none">Red Clothing</a>
                  <li class="list-unstyled">M/L/X/XL</li>
                  <div
                     class="rounded-0 d-flex align-items-center justify-content-center">
                     <ul class="list-unstyled d-flex">
                        <li><a class="btn btn-success text-white m-2" href="shop-single.html"><i
                                 class="far fa-heart"></i></a></li>
                        <li><a class="btn btn-success text-white m-2" href="shop-single.html"><i
                                 class="far fa-eye"></i></a></li>
                        <li><a class="btn btn-success text-white m-2" href="shop-single.html"><i
                                 class="fas fa-cart-plus"></i></a></li>
                     </ul>
                  </div>
                  <p class="text-center mb-0">$20.00</p>
               </div>
            </div>
         </div>

         <div class="p-2 pb-3">
            <div class="product-wap card rounded-4">
               <div class="card rounded-0">
                  <img class="card-img rounded-0 img-fluid" src="https://picsum.photos/200/300">
               </div>
               <div class="card-body">
                  <a href="shop-single.html" class="h3 text-decoration-none">Red Clothing</a>
                  <li class="list-unstyled">M/L/X/XL</li>
                  <div
                     class="rounded-0 d-flex align-items-center justify-content-center">
                     <ul class="list-unstyled d-flex">
                        <li><a class="btn btn-success text-white m-2" href="shop-single.html"><i
                                 class="far fa-heart"></i></a></li>
                        <li><a class="btn btn-success text-white m-2" href="shop-single.html"><i
                                 class="far fa-eye"></i></a></li>
                        <li><a class="btn btn-success text-white m-2" href="shop-single.html"><i
                                 class="fas fa-cart-plus"></i></a></li>
                     </ul>
                  </div>
                  <p class="text-center mb-0">$20.00</p>
               </div>
            </div>
         </div>

         <div class="p-2 pb-3">
            <div class="product-wap card rounded-4">
               <div class="card rounded-0">
                  <img class="card-img rounded-0 img-fluid" src="https://picsum.photos/200/300">
               </div>
               <div class="card-body">
                  <a href="shop-single.html" class="h3 text-decoration-none">Red Clothing</a>
                  <li class="list-unstyled">M/L/X/XL</li>
                  <div
                     class="rounded-0 d-flex align-items-center justify-content-center">
                     <ul class="list-unstyled d-flex">
                        <li><a class="btn btn-success text-white m-2" href="shop-single.html"><i
                                 class="far fa-heart"></i></a></li>
                        <li><a class="btn btn-success text-white m-2" href="shop-single.html"><i
                                 class="far fa-eye"></i></a></li>
                        <li><a class="btn btn-success text-white m-2" href="shop-single.html"><i
                                 class="fas fa-cart-plus"></i></a></li>
                     </ul>
                  </div>
                  <p class="text-center mb-0">$20.00</p>
               </div>
            </div>
         </div>

         <div class="p-2 pb-3">
            <div class="product-wap card rounded-4">
               <div class="card rounded-0">
                  <img class="card-img rounded-0 img-fluid" src="https://picsum.photos/200/300">
               </div>
               <div class="card-body">
                  <a href="shop-single.html" class="h3 text-decoration-none">Red Clothing</a>
                  <li class="list-unstyled">M/L/X/XL</li>
                  <div
                     class="rounded-0 d-flex align-items-center justify-content-center">
                     <ul class="list-unstyled d-flex">
                        <li><a class="btn btn-success text-white m-2" href="shop-single.html"><i
                                 class="far fa-heart"></i></a></li>
                        <li><a class="btn btn-success text-white m-2" href="shop-single.html"><i
                                 class="far fa-eye"></i></a></li>
                        <li><a class="btn btn-success text-white m-2" href="shop-single.html"><i
                                 class="fas fa-cart-plus"></i></a></li>
                     </ul>
                  </div>
                  <p class="text-center mb-0">$20.00</p>
               </div>
            </div>
         </div>

         <div class="p-2 pb-3">
            <div class="product-wap card rounded-4">
               <div class="card rounded-0">
                  <img class="card-img rounded-0 img-fluid" src="https://picsum.photos/200/300">
               </div>
               <div class="card-body">
                  <a href="shop-single.html" class="h3 text-decoration-none">Red Clothing</a>
                  <li class="list-unstyled">M/L/X/XL</li>
                  <div
                     class="rounded-0 d-flex align-items-center justify-content-center">
                     <ul class="list-unstyled d-flex">
                        <li><a class="btn btn-success text-white m-2" href="shop-single.html"><i
                                 class="far fa-heart"></i></a></li>
                        <li><a class="btn btn-success text-white m-2" href="shop-single.html"><i
                                 class="far fa-eye"></i></a></li>
                        <li><a class="btn btn-success text-white m-2" href="shop-single.html"><i
                                 class="fas fa-cart-plus"></i></a></li>
                     </ul>
                  </div>
                  <p class="text-center mb-0">$20.00</p>
               </div>
            </div>
         </div>

         <div class="p-2 pb-3">
            <div class="product-wap card rounded-4">
               <div class="card rounded-0">
                  <img class="card-img rounded-0 img-fluid" src="https://picsum.photos/200/300">
               </div>
               <div class="card-body">
                  <a href="shop-single.html" class="h3 text-decoration-none">Red Clothing</a>
                  <li class="list-unstyled">M/L/X/XL</li>
                  <div
                     class="rounded-0 d-flex align-items-center justify-content-center">
                     <ul class="list-unstyled d-flex">
                        <li><a class="btn btn-success text-white m-2" href="shop-single.html"><i
                                 class="far fa-heart"></i></a></li>
                        <li><a class="btn btn-success text-white m-2" href="shop-single.html"><i
                                 class="far fa-eye"></i></a></li>
                        <li><a class="btn btn-success text-white m-2" href="shop-single.html"><i
                                 class="fas fa-cart-plus"></i></a></li>
                     </ul>
                  </div>
                  <p class="text-center mb-0">$20.00</p>
               </div>
            </div>
         </div>

      </div>


   </div>
</section>
<!-- End Article -->