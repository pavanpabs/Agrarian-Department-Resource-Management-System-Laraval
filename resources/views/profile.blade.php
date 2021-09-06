@extends('layouts.master')
@include('layouts/header')
<div class="wrapper">
   <div class="col-10 d-flex justify-content-center align-items-center p-0 m-0" style="height: 100%;">
      <div class="row p-0 m-0">
         <div class="col-lg-4">
            <div class="card">
               <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                     <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
                     <div class="mt-3">
                        <h4>John Doe</h4>
                        <p class="text-secondary mb-1">Full Stack Developer</p>
                        <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                        <button class="btn btn-primary">Follow</button>
                        <button class="btn btn-outline-primary">Message</button>
                     </div>
                  </div>


               </div>
            </div>
         </div>
         <div class="col-lg-8">
            <div class="card">
               <div class="card-body">
                  <div class="row mb-3">
                     <div class="col-sm-3">
                        <h6 class="mb-0">Full Name</h6>
                     </div>
                     <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" value="John Doe">
                     </div>
                  </div>
                  <div class="row mb-3">
                     <div class="col-sm-3">
                        <h6 class="mb-0">Email</h6>
                     </div>
                     <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" value="john@example.com">
                     </div>
                  </div>
                  <div class="row mb-3">
                     <div class="col-sm-3">
                        <h6 class="mb-0">Phone</h6>
                     </div>
                     <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" value="(239) 816-9029">
                     </div>
                  </div>
                  <div class="row mb-3">
                     <div class="col-sm-3">
                        <h6 class="mb-0">Mobile</h6>
                     </div>
                     <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" value="(320) 380-4539">
                     </div>
                  </div>
                  <div class="row mb-3">
                     <div class="col-sm-3">
                        <h6 class="mb-0">Address</h6>
                     </div>
                     <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" value="Bay Area, San Francisco, CA">
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-3"></div>
                     <div class="col-sm-9 text-secondary">
                        <input type="button" class="btn btn-primary px-4" value="Save Changes">
                     </div>
                  </div>
               </div>
            </div>

         </div>
      </div>

      <!--Footer End-->
   </div>
   <footer class="footer p-0 pt-3">
      <div class="w-100 d-flex flex-column align-items-center">
         <img width="150" class="mb-2" src="images/agro.png" alt="">
         <div class="text-white mb-3">ADRMS Devs</div>
      </div>
   </footer>
</div>