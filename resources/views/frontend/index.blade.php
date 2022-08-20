@extends('frontend.master_frontend')
@section('content')

<!-- header section ends -->

<!-- banner section starts  -->

<section class="banner" id="banner">

    <div class="content">
        <h3>explore the nature</h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, laboriosam?</p>
        <a href="#" class="btn">my blogs</a>
    </div>

</section>

<!-- banner section ends -->

<!-- posts section starts  -->

<section class="container" id="posts">

    <div class="posts-container">

        <div class="post">
            <img src="{{ asset("frontend/assets/images/blog-1.jpg") }}" alt="" class="image">
            <div class="date">
                <i class="far fa-clock"></i>
                <span>1st may, 2021</span>
            </div>
            <h3 class="title">blog title goes here</h3>
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum molestias rerum numquam, quos aut est culpa quisquam excepturi sed a inventore dicta tempore consequuntur possimus magnam corporis cum doloremque quasi fugiat exercitationem aliquid cupiditate pariatur. Dolor laboriosam voluptatem ex praesentium magni error debitis maxime alias autem distinctio. Fuga, esse velit!</p>
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, reiciendis fugiat quas nemo quia omnis repellat obcaecati quaerat voluptates fuga error dicta cupiditate pariatur soluta dolorum quis eum quibusdam quam?</p>
            <div class="links">
                <a href="#" class="user">
                    <i class="far fa-user"></i>
                    <span>by admin</span>
                </a>
                <a href="#" class="icon">
                    <i class="far fa-comment"></i>
                    <span>(45)</span>
                </a>
                <a href="#" class="icon">
                    <i class="far fa-share-square"></i>
                    <span>(29)</span>
                </a>
            </div>
        </div>

        <div class="post">
            <img src="{{ asset("frontend/assets/images/blog-2.jpg") }}" alt="" class="image">
            <div class="date">
                <i class="far fa-clock"></i>
                <span>1st may, 2021</span>
            </div>
            <h3 class="title">blog title goes here</h3>
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum molestias rerum numquam, quos aut est culpa quisquam excepturi sed a inventore dicta tempore consequuntur possimus magnam corporis cum doloremque quasi fugiat exercitationem aliquid cupiditate pariatur. Dolor laboriosam voluptatem ex praesentium magni error debitis maxime alias autem distinctio. Fuga, esse velit!</p>
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, reiciendis fugiat quas nemo quia omnis repellat obcaecati quaerat voluptates fuga error dicta cupiditate pariatur soluta dolorum quis eum quibusdam quam?</p>
            <div class="links">
                <a href="#" class="user">
                    <i class="far fa-user"></i>
                    <span>by admin</span>
                </a>
                <a href="#" class="icon">
                    <i class="far fa-comment"></i>
                    <span>(45)</span>
                </a>
                <a href="#" class="icon">
                    <i class="far fa-share-square"></i>
                    <span>(29)</span>
                </a>
            </div>
        </div>

        <div class="post">
            <img src="{{ asset("frontend/assets/images/blog-3.jpg") }}" alt="" class="image">
            <div class="date">
                <i class="far fa-clock"></i>
                <span>1st may, 2021</span>
            </div>
            <h3 class="title">blog title goes here</h3>
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum molestias rerum numquam, quos aut est culpa quisquam excepturi sed a inventore dicta tempore consequuntur possimus magnam corporis cum doloremque quasi fugiat exercitationem aliquid cupiditate pariatur. Dolor laboriosam voluptatem ex praesentium magni error debitis maxime alias autem distinctio. Fuga, esse velit!</p>
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, reiciendis fugiat quas nemo quia omnis repellat obcaecati quaerat voluptates fuga error dicta cupiditate pariatur soluta dolorum quis eum quibusdam quam?</p>
            <div class="links">
                <a href="#" class="user">
                    <i class="far fa-user"></i>
                    <span>by admin</span>
                </a>
                <a href="#" class="icon">
                    <i class="far fa-comment"></i>
                    <span>(45)</span>
                </a>
                <a href="#" class="icon">
                    <i class="far fa-share-square"></i>
                    <span>(29)</span>
                </a>
            </div>
        </div>

    </div>

    <div class="sidebar">

        <div class="box">
            <h3 class="title">about me</h3>
            <div class="about">
                <img src="{{ asset("frontend/assets/images/user.png") }}" alt="">
                <h3>Add Your Photo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, officia.</p>
                <div class="follow">
                    <a href="https://facebook.com/freewebsitecode/" class="fab fa-facebook-f"></a>
                    <a href="https://freewebsitecode.com/" class="fab fa-twitter"></a>
                    <a href="https://freewebsitecode.com/" class="fab fa-instagram"></a>
                    <a href="https://freewebsitecode.com/" class="fab fa-linkedin"></a>
                    <a href="https://www.youtube.com/channel/UC9HlQRmKgG3jeVD_fBxj1Pw/videos" class="fab fa-youtube"></a>
                </div>
            </div>
        </div>

        <div class="box">
            <h3 class="title">categories</h3>
            <div class="category">
                <a href="#"> travel <span>42</span></a>
                <a href="#"> photography <span>75</span> </a>
                <a href="#"> technology <span>22</span> </a>
                <a href="#"> fashion <span>17</span> </a>
                <a href="#"> study <span>48</span> </a>
                <a href="#"> science <span>39</span> </a>
                <a href="#"> music <span>59</span> </a>
                <a href="#"> public <span>12</span> </a>
                <a href="#"> business <span>32</span> </a>
                <a href="#"> sports <span>18</span> </a>
            </div>
        </div>

        <div class="box">
            <h3 class="title">popular posts</h3>
            <div class="p-post">
                <a href="#">
                    <h3>01. blog title goes here</h3>
                    <span><i class="far fa-clock"></i>1st may, 2021</span>
                </a>
                <a href="#">
                    <h3>02. blog title goes here</h3>
                    <span><i class="far fa-clock"></i>1st may, 2021</span>
                </a>
                <a href="#">
                    <h3>03. blog title goes here</h3>
                    <span><i class="far fa-clock"></i>1st may, 2021</span>
                </a>
                <a href="#">
                    <h3>04. blog title goes here</h3>
                    <span><i class="far fa-clock"></i>1st may, 2021</span>
                </a>
            </div>
        </div>

        <div class="box">
            <h3 class="title">popular tags</h3>
            <div class="tags">
                <a href="#">travel</a>
                <a href="#">photo</a>
                <a href="#">science</a>
                <a href="#">biology</a>
                <a href="#">aliens</a>
                <a href="#">nature</a>
                <a href="#">mountain</a>
                <a href="#">river</a>
                <a href="#">camp</a>
                <a href="#">landscape</a>
                <a href="#">world</a>
            </div>
        </div>

    </div>

</section>

<!-- posts section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

    <form action="">
        <h3>contact me</h3>
        <div class="inputBox">
            <input type="text" placeholder="name">
            <input type="email" placeholder="email">
        </div>
        <div class="inputBox">
            <input type="number" placeholder="number">
            <input type="text" placeholder="subject">
        </div>
        <textarea name="" placeholder="message" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="send message" class="btn">
    </form>

</section>

<!-- contact section ends -->
@endsection


























<!-- custom js file link  -->
<script src="{{ asset('frontend/assets/js/script.js') }}"></script>
    
</body>
</html>