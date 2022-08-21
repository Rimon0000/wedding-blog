@extends('frontend.layouts.master_frontend')
@section('content')

<!-- banner section starts  -->
@include('frontend.post.components.banner')
<!-- banner section ends -->



<!-- posts section main start-->
<section class="container" id="posts">

<!-- posts section  start-->
@include('frontend.post.components.posts')

<!-- posts section  sidebar-->
@include('frontend.post.components.sidebar')

</section>
<!-- posts section main ends -->

@endsection
