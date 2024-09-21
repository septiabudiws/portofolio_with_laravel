@extends('layout.blog')

@section('content')

<!-- START SECTION BLOG -->
<section>
	<div class="container">
    	<div class="row">
        	<div class="col-lg-9">
            	<div class="single_post">
                    <div class="blog_img">
                        <a href="#">
                            <img src="{{ asset('foto_blog/'. $detail->foto_blog) }}" alt="blog_img1">
                        </a>
                    </div>
                    <div class="blog_content">
                        <div class="blog_text">
                            <h2>{{ $detail->judul_blog }}</h2>
                            <ul class="list_none blog_meta">
                                <li><a href="#"><i class="ion-calendar"></i>{{ $detail->date }}</a></li>
                            </ul>
                            <p>{{ $detail->deskripsi }}</p>
                        </div>
                    </div>
                </div>
                <div class="border-top border-bottom py-2 py-md-4 post_navigation">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <a href="/">
                                <div class="d-flex align-items-center">
                                    <i class="ion-arrow-left-c mr-2"></i>
                                    <div>
                                        <span>Kembali</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- <div class="col-auto">
                            <a href="#">
                                <div class="d-flex align-items-center flex-row-reverse text-right">
                                    <i class="ion-arrow-right-c ml-2"></i>
                                    <div>
                                        <span>Next Post</span>
                                    </div>
                                </div>
                            </a>
                        </div> -->
                    </div>
                </div>
                <!-- <div class="comment-area">
                    <div class="comment-title mb-2 mb-sm-4">
                        <h5>(03) Comments</h5>
                    </div>
                    <ul class="list_none comment_list">
                        <li class="comment_info">
                            <div class="d-flex">
                                <div class="user_img">
                                    <img src="assets/images/client_img2.jpg" alt="client_img2">
                                </div>
                                <div class="comment_content">
                                    <div class="d-flex align-items-md-center">
                                        <div class="meta_data">
                                            <h6><a href="#">Walter Mark</a></h6>
                                            <div class="comment-time">march 5, 2018, 6:05 PM</div>
                                        </div>
                                        <div class="ml-auto">
                                            <a href="#" class="comment-reply"><i class="ion-reply-all"></i>Reply</a>
                                        </div>
                                    </div>
                                    <p>We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire that the cannot foresee the pain and trouble that.</p>
                                </div>
                            </div>
                        </li>
                        <li class="comment_info reply">
                            <div class="d-flex">
                                <div class="user_img">
                                    <img src="assets/images/client_img4.jpg" alt="client_img4">
                                </div>
                                <div class="comment_content">
                                    <div class="d-flex align-items-md-center">
                                        <div class="meta_data">
                                            <h6><a href="#">Sandhya Rani</a></h6>
                                            <div class="comment-time">april 8, 2018, 5:15 PM</div>
                                        </div>
                                        <div class="ml-auto">
                                            <a href="#" class="comment-reply"><i class="ion-reply-all"></i>Reply</a>
                                        </div>
                                    </div>
                                    <p>We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire that the cannot foresee the pain and trouble that.</p>
                                </div>
                            </div>
                        </li>
                        <li class="comment_info">
                            <div class="d-flex">
                                <div class="user_img">
                                    <img src="assets/images/client_img1.jpg" alt="client_img1">
                                </div>
                                <div class="comment_content">
                                    <div class="d-flex align-items-md-center">
                                        <div class="meta_data">
                                            <h6><a href="#">Laura Sandel</a></h6>
                                            <div class="comment-time">april 15, 2018, 10:30 PM</div>
                                        </div>
                                        <div class="ml-auto">
                                            <a href="#" class="comment-reply"><i class="ion-reply-all"></i>Reply</a>
                                        </div>
                                    </div>
                                    <p>We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire that the cannot foresee the pain and trouble that.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="comment-title mb-2 mb-sm-4">
                        <h5>Write a comment</h5>
                    </div>
                    <form class="field_form">
                        <div class="row">
                        	<div class="form-group col-md-12">
                                <textarea rows="3" name="message" class="form-control" placeholder="Your Comment" required="required"></textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <input name="name" class="form-control" placeholder="Your Name" required="required" type="text">
                            </div>
                            <div class="form-group col-md-6">
                                <input name="email" class="form-control" placeholder="Your Email" required="required" type="email">
                            </div>
                            <div class="form-group col-md-12">
                                <button value="Submit" name="submit" class="btn btn-default rounded-0" title="Submit Your Message!" type="submit">Post comment</button>
                            </div>
                        </div>
                    </form>
                </div> -->
            </div>
            <div class="col-lg-3 mt-lg-0 mt-4">
            	<div class="sidebar">
                	<div class="widget">
                    	<h5 class="widget_title">Recent Posts</h5>
                        <ul class="recent_post border_bottom_dash list_none">
                            @foreach ($blog as $get)
                            <li>
                                <div class="post_footer">
                                    <div class="post_img">
                                        <a href="/blog/{{ $get->token_blog }}"><img src="{{ asset('thumbnail_blog/'. $get->thumbnail_blog) }}" alt="letest_post1" style="width: 60px; height: 60px; object-fit: cover;"></a>
                                    </div>
                                    <div class="post_content">
                                        <h6><a href="/blog/{{ $get->token_blog }}">{{ $get->judul_blog }}</a></h6>
                                        <p class="small m-0">{{ $get->date }}</p>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                    	</ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- END SECTION BLOG -->

@endsection
