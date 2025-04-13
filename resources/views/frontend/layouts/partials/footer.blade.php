<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
   <style>
      .logo{
         border-radius: 10px !important;
         width: 150px !important;
         height: 80px !important;
      }
   </style>
</head>


<footer class="py-16 text-center text-sm text-black dark:text-white/70">

         <div class="container">
            <div class="row">
               <div class="col-md-4">
                   <div class="full">
                      <div class="logo_footer">
                        <a href="#"><img class="logo" src="{{asset('assets/images/logo1.png')}}" alt="ned logo" /></a>
                      </div>
                      <div class="information_f">
                        <p><strong>ADDRESS:</strong> Mojed tower, Street Name Dhaka City, Bangladesh</p>
                        <p><strong>TELEPHONE:</strong> +880 154 123 4567</p>
                        <p><strong>EMAIL:</strong> jhh@gmail.com</p>
                      </div>
                   </div>
               </div>
               <div class="col-md-8">
                  <div class="row">
                  <div class="col-md-7">
                     <div class="row">
                        <div class="col-md-6">
                     <div class="widget_menu">
                        <h3>Menu</h3>
                        <ul>
                           <li><a href="{{route('f.index')}}">Home</a></li>
                           <li><a href="{{route('f.about')}}">About</a></li>
                           <li><a href="{{route('f.services')}}">Services</a></li>
                           <li><a href="{{route('f.products')}}">Products</a></li>
                           <li><a href="{{route('f.blog')}}">Blog</a></li>
                           <li><a href="{{route('f.contact')}}">Contact</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="widget_menu">
                        <h3>Account</h3>
                        <ul>
                           <li><a href="#">Account</a></li>
                           <li><a href="#">Checkout</a></li>
                           <li><a href="#">Login</a></li>
                           <li><a href="#">Register</a></li>
                           <li><a href="#">Shopping</a></li>
                           <li><a href="#">Widget</a></li>
                        </ul>
                     </div>
                  </div>
                     </div>
                  </div>     
                  <div class="col-md-5">
                     <div class="widget_menu">
                        <h3>Newsletter</h3>
                        <div class="information_f">
                          <p>Subscribe by our newsletter and get update protidin.</p>
                        </div>
                        <div class="form_sub">
                           <form>
                              <fieldset>
                                 <div class="field">
                                    <input type="email" placeholder="Enter Your Mail" name="email" />
                                    <input type="submit" value="Subscribe" />
                                 </div>
                              </fieldset>
                           </form>
                        </div>
                     </div>
                  </div>
                  </div>
               </div>
            </div>
         </div>
</footer>