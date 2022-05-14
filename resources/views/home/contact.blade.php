@extends('layouts.frontbase')

@section('title', 'Contact | '. $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon) ) 

 @section('content')
 <div id="breadcrumb">
     <div class="container">
         <ul class="breadcrumb">
             <li><a href="{{route('home')}}">Home / </a></li>
             <li class="active"> Contact</li>
         </ul>
    </div>
</div>  

<div class="section">

<div class="container">

<div class="row">
   <form id="checkout-form" class="clearfix">
       <div class="col-md-4">
           <div class="section-title">
               <h3 class="title">Contact Form</h3>
            </div>
            <div class="form-group">
                <input class="input" type="text" name="first-name" placeholder="First Name">
            </div>
            <div class="form-group">
                <input class="input" type="text" name="last-name" placeholder="Last Name">
            </div>
            <div class="form-group">
                <input class="input" type="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input class="input" type="tel" name="tel" placeholder="Telephone">
            </div>
           </div>
           </div>

           <div class="col-md-8">
           <div class="shiping-methods">
               <div class="section-title">
                   <h3 class="title">Contact Information</h3>
               </div>
               <div class="input-checkbox">
               {!! $setting->contact !!}
               </div>
               
</div>
</div>
</div>
</div>
</div>


@endsection