<?php get_header();?>

<?php $actual_link="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>
<script type="text/javascript">jQuery(document).ready(function(a){a(document).bind("em_maps_location_hook",function(f,d,c,b){d.scrollwheel=false})});</script>
<div class="clearfix">
<div id="anchor-about" class="pi-section-w pi-section-white">
    <div class="pi-section pi-padding-top-90 pi-padding-bottom-30">
        <div class="pi-text-center pi-padding-bottom-40">
            <h6 class="pi-uppercase pi-letter-spacing-3 pi-text-base pi-margin-bottom-15">Giới thiệu</h6>
            <h2 class="h1 pi-weight-700 pi-uppercase pi-has-border pi-has-tall-border pi-has-short-border">LIPHA MEDIA</h2>
        </div>
        <div class="pi-row">
            <div class="pi-col-sm-6 pi-padding-bottom-50">
                <div class="pi-slider-wrapper pi-slider-arrows-inside pi-slider-show-arrow-hover">
                    <div class="pi-slider pi-slider-animate-opacity">
                        <div class="pi-slide">
                            <div class="pi-img-w pi-img-round-corners pi-img-shadow pi-img-with-overlay">
                                <a href="#"><img src="http://localhost:8080/liphamedia.com/wp-content/themes/liphamedia/img_external/gallery/office-building.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="pi-slide">
                            <div class="pi-img-w pi-img-round-corners pi-img-shadow pi-img-with-overlay">
                                <a href="#"><img src="<?=$actual_link?>wp-content/themes/liphamedia/img_external/gallery/team-photo.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pi-col-sm-6 pi-padding-bottom-50">
                <p class="lead-26 pi-weight-300 pi-text-base pi-margin-top-minus-10">Giải pháp thiết kế website - thiết kế thương hiệu - cung cấp Hosting/Domain chất lượng.</p>
                <p class="pi-margin-bottom-30" id="about-text">
                    <?php $text=file_get_contents('http://localhost:8080/liphamedia.com/wp-content/themes/liphamedia/front-content/about.txt');echo $text;?>
                </p>
                <h5 class="pi-uppercase pi-weight-700">Giá trị cốt lõi:</h5>
                <div class="pi-row">
                    <div class="pi-col-sm-6">
                        <ul class="pi-list-with-icons pi-list-icons-ok">
                            <li>TÍN: Bảo vệ chữ tín và danh dự.</li>
                            <li>TÂM: Duy trì đạo đức - lấy khách hàng làm trung tâm.</li>
                            <li>TRÍ: LIPHA MEDIA chủ trương một doanh nghiệp luôn học hỏi.</li>
                            <li>Tốc: Tốc độ, hiệu quả trong từng hành động.</li>
                        </ul>
                    </div>
                    <div class="pi-col-sm-6">
                        <ul class="pi-list-with-icons pi-list-icons-ok">
                            <li>Tinh: Con người tinh hoa - sản phẩm/ dịch vụ tinh hoa - cuộc sống tinh hoa - xã hội tinh hoa.</li>
                            <li>Nhân: LIPHA MEDIA coi con người là tài sản quý giá nhất</li>
                            <li>Hòa: Hòa thuận - đoàn kết tạo nên sức mạnh</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="pi-section-w pi-section-parallax" style="background-image:url(<?php bloginfo('template_directory');?>/wp-content/themes/liphamedia/img_external/gallery/modern-skyscraper.jpg)">
    <div class="pi-texture pi-section-overlay-base"></div>
    <div class="pi-section pi-padding-top-50 pi-padding-bottom-20">
        <div class="pi-text-center pi-padding-bottom-20">
            <h6 class="pi-uppercase pi-letter-spacing-3">Những con số</h6>
        </div>
        <div class="pi-row pi-grid-small-margins pi-text-center">
            <div class="pi-col-sm-3 pi-col-2xs-6 pi-padding-bottom-20">
                <div class="pi-counter pi-counter-simple" data-count-from="0" data-count-to="230" data-easing="easeInCirc" data-duration="1000" data-frames-per-second="0">
                    <div class="pi-counter-count pi-counter-count-big pi-text-white pi-weight-600 pi-text-shadow">
                        <p><i class="icon-thumbs-up"></i></p>
                        <div class="pi-counter-number">0</div>
                    </div>
                    <p class="lead-18">Mạng xã hội</p>
                </div>
            </div>
            <div class="pi-col-sm-3 pi-col-2xs-6 pi-padding-bottom-20">
                <div class="pi-counter pi-counter-simple" data-count-from="0" data-count-to="26" data-easing="easeInCirc" data-duration="2000" data-frames-per-second="10">
                    <div class="pi-counter-count pi-counter-count-big pi-text-white pi-weight-600 pi-text-shadow">
                        <p><i class="icon-arrows-ccw"></i></p>
                        $<span class="pi-counter-number">0</span>
                    </div>
                    <p class="lead-18">Giá trị cung cấp</p>
                </div>
            </div>
            <div class="pi-col-sm-3 pi-col-2xs-6 pi-padding-bottom-20">
                <div class="pi-counter pi-counter-simple" data-count-from="0" data-count-to="73" data-easing="easeInCirc" data-duration="3000" data-frames-per-second="10">
                    <div class="pi-counter-count pi-counter-count-big pi-text-white pi-weight-600 pi-text-shadow">
                        <p><i class="icon-compass"></i></p>
                        <span class="pi-counter-number">73</span>%
                    </div>
                    <p class="lead-18">Hệ thống thương hiệu</p>
                </div>
            </div>
            <div class="pi-col-sm-3 pi-col-2xs-6 pi-padding-bottom-20">
                <div class="pi-counter pi-counter-simple" data-count-from="0" data-count-to="59" data-easing="easeInCirc" data-duration="4000" data-frames-per-second="10">
                    <div class="pi-counter-count pi-counter-count-big pi-text-white pi-weight-600 pi-text-shadow">
                        <p><i class="icon-paper-plane"></i></p>
                        <span class="pi-counter-number">59</span>k
                    </div>
                    <p class="lead-18">Tiếp cận khách hàng</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="anchor-services" class="pi-section-w pi-section-white">
    <div class="pi-section pi-padding-top-90 pi-padding-bottom-60">
        <div class="pi-text-center pi-padding-bottom-40">
            <h6 class="pi-uppercase pi-letter-spacing-3 pi-text-base pi-margin-bottom-15">Dịch vụ</h6>
            <h2 class="h1 pi-weight-700 pi-uppercase pi-has-border pi-has-tall-border pi-has-short-border">Những ngành liên quan</h2>
        </div>
        <div class="pi-row">
            <div class="pi-col-xs-6 pi-col-sm-4 pi-padding-bottom-40">
                <div class="pi-icon-box pi-icon-box-hover pi-icon-box-icon-big">
                    <div class="pi-icon-box-icon pi-icon-box-icon-circle"><i class="icon-lamp"></i></div>
                    <div class="pi-icon-box-content-2">
                        <h5 class="pi-uppercase pi-weight-700"><a href="#" class="pi-link-dark">Giải pháp thương hiệu</a></h5>
                        <p class="pi-margin-bottom-10">Tư vấn xây dựng thương hiệu trên internet</p>
                    </div>
                </div>
            </div>
            <div class="pi-col-xs-6 pi-col-sm-4 pi-padding-bottom-40">
                <div class="pi-icon-box pi-icon-box-hover pi-icon-box-icon-big">
                    <div class="pi-icon-box-icon pi-icon-box-icon-circle"><i class="icon-monitor"></i></div>
                    <div class="pi-icon-box-content-2">
                        <h5 class="pi-uppercase pi-weight-700"><a href="#" class="pi-link-dark">Thiết kế in ấn</a></h5>
                        <p class="pi-margin-bottom-10">Thiết kế những ấn phẩm thương hiệu như: Card-visit, brochure, leaflet, catalog...</p>
                    </div>
                </div>
            </div>
            <div class="pi-clearfix pi-visible-xs"></div>
            <div class="pi-col-xs-6 pi-col-sm-4 pi-padding-bottom-40">
                <div class="pi-icon-box pi-icon-box-hover pi-icon-box-icon-big">
                    <div class="pi-icon-box-icon pi-icon-box-icon-circle"><i class="icon-brush"></i></div>
                    <div class="pi-icon-box-content-2">
                        <h5 class="pi-uppercase pi-weight-700"><a href="#" class="pi-link-dark">Thiết kế logo</a></h5>
                        <p class="pi-margin-bottom-10">Thiết kế logo chuyên biệt, sáng tạo cho từng doanh nghiệp đăng ký kinh doanh.</p>
                    </div>
                </div>
            </div>
            <div class="pi-clearfix pi-hidden-xs pi-visible-sm-only"></div>
            <div class="pi-col-xs-6 pi-col-sm-4 pi-padding-bottom-40">
                <div class="pi-icon-box pi-icon-box-hover pi-icon-box-icon-big">
                    <div class="pi-icon-box-icon pi-icon-box-icon-circle"><i class="icon-cog"></i></div>
                    <div class="pi-icon-box-content-2">
                        <h5 class="pi-uppercase pi-weight-700"><a href="#" class="pi-link-dark">Thiết kế website</a></h5>
                        <p class="pi-margin-bottom-10">Thiết kế website hiện đại, tối ưu với giá tốt nhất.</p>
                    </div>
                </div>
            </div>
            <div class="pi-clearfix pi-visible-xs"></div>
            <div class="pi-col-xs-6 pi-col-sm-4 pi-padding-bottom-40">
                <div class="pi-icon-box pi-icon-box-hover pi-icon-box-icon-big">
                    <div class="pi-icon-box-icon pi-icon-box-icon-circle"><i class="icon-mobile"></i></div>
                    <div class="pi-icon-box-content-2">
                        <h5 class="pi-uppercase pi-weight-700"><a href="#" class="pi-link-dark">Giao diện mobile</a></h5>
                        <p class="pi-margin-bottom-10">Thiết kế website trên nền tảng mobile first, chạy trên tất cả mọi thiết bị.</p>
                    </div>
                </div>
            </div>
            <div class="pi-col-xs-6 pi-col-sm-4 pi-padding-bottom-40">
                <div class="pi-icon-box pi-icon-box-hover pi-icon-box-icon-big">
                    <div class="pi-icon-box-icon pi-icon-box-icon-circle"><i class="icon-search"></i></div>
                    <div class="pi-icon-box-content-2">
                        <h5 class="pi-uppercase pi-weight-700"><a href="#" class="pi-link-dark">S.E.O - Quảng cáo google/facebook.</a></h5>
                        <p class="pi-margin-bottom-10">Cung cấp giải pháp SEO từ khóa, quảng cáo google ads, facebook ads nhằm tăng độ tiếp cận người dùng.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="anchor-testimonials" class="pi-section-w pi-section-parallax pi-slider-enabled" style="background-image:url(http://localhost:8080/liphamedia.com/wp-content/themes/liphamedia/img_external/gallery/consulting.jpg)">
    <div class="pi-texture" style="background:rgba(30,35,41,0.8)"></div>
    <div class="pi-section pi-padding-top-70 pi-padding-bottom-70">
        <div class="pi-text-center pi-padding-bottom-20">
            <h6 class="pi-uppercase pi-letter-spacing-3 pi-margin-bottom-15">Những gì chúng tôi nhận được</h6>
        </div>
        <div class="pi-slider-wrapper pi-slider-arrows-inside pi-slider-show-arrow-hover pi-text-center">
            <div class="pi-slider pi-slider-animate-opacity">
                <div class="pi-row">
                    <div class="pi-col-sm-10 pi-col-sm-offset-1">
                        <div class="pi-slide">
                            <div class="pi-img-w pi-img-round"><img src="http://localhost:8080/liphamedia.com/wp-content/themes/liphamedia/img_external/testimonials/localhost:8080/liphamedia.comclientngutruong.jpg" style="width:150px"></div>
                            <p class="lead-32 pi-text-white pi-text-shadow pi-italic"><i class="icon-quote pi-text-base pi-icon-left"></i>Tôi tin tưởng về sự tận tâm và khả năng làm việc của bạn.<i class="icon-quote pi-text-base pi-icon-right"></i></p>
                            <p class="pi-text-base"><i class="icon-star"></i> <i class="icon-star"></i> <i class="icon-star"></i></p>
                            <p class="lead-16 pi-weight-700 pi-text-white pi-text-shadow pi-uppercase pi-letter-spacing pi-margin-bottom-5">Trương Hữu Ngữ</p>
                            <p class="pi-italic">Luật sư. Chuyên kinh tế luật</p>
                        </div>
                        <div class="pi-slide">
                            <div class="pi-img-w pi-img-round"><img src="http://localhost:8080/liphamedia.com/wp-content/themes/liphamedia/img_external/testimonials/phamnhatnam.jpg" style="width:150px"></div>
                            <p class="lead-32 pi-text-white pi-text-shadow pi-italic"><i class="icon-quote pi-text-base pi-icon-left"></i>-------------------------------<i class="icon-quote pi-text-base pi-icon-right"></i></p>
                            <p class="pi-text-base"><i class="icon-star"></i> <i class="icon-star"></i> <i class="icon-star"></i></p>
                            <p class="lead-16 pi-weight-700 pi-text-white pi-text-shadow pi-uppercase pi-letter-spacing pi-margin-bottom-5">Phạm Nhật Nam</p>
                            <p class="pi-italic">Công Ty TNHH Quảng Cáo Hoàng Long Nha Trang.</p>
                        </div>
                        <div class="pi-slide">
                            <div class="pi-img-w pi-img-round"><img src="http://localhost:8080/liphamedia.com/wp-content/themes/liphamedia/img_external/testimonials/phuc1.jpg" style="width:150px"></div>
                            <p class="lead-32 pi-text-white pi-text-shadow pi-italic"><i class="icon-quote pi-text-base pi-icon-left"></i>Sự nhiệt tình và khả năng kỹ thuật là điều tôi đánh giá cao tại đây.<i class="icon-quote pi-text-base pi-icon-right"></i></p>
                            <p class="pi-text-base"><i class="icon-star"></i> <i class="icon-star"></i> <i class="icon-star"></i></p>
                            <p class="lead-16 pi-weight-700 pi-text-white pi-text-shadow pi-uppercase pi-letter-spacing pi-margin-bottom-5">Phạm Hồng Phúc</p>
                            <p class="pi-italic">General Manager. PhuDo JSC.</p>
                        </div>
                        <div class="pi-slide">
                            <div class="pi-img-w pi-img-round"><img src="http://localhost:8080/liphamedia.com/wp-content/themes/liphamedia/img_external/testimonials/localhost:8080/liphamedia.comclient1modano.jpg" style="width:150px"></div>
                            <p class="lead-32 pi-text-white pi-text-shadow pi-italic"><i class="icon-quote pi-text-base pi-icon-left"></i>Tôi luôn đánh giá cao ý tưởng và tinh thần cống hiến của em.<i class="icon-quote pi-text-base pi-icon-right"></i></p>
                            <p class="pi-text-base"><i class="icon-star"></i> <i class="icon-star"></i> <i class="icon-star"></i></p>
                            <p class="lead-16 pi-weight-700 pi-text-white pi-text-shadow pi-uppercase pi-letter-spacing pi-margin-bottom-5">Đỗ Xuân Hòa</p>
                            <p class="pi-italic">Tổng giám đốc. Công ty cổ phần xây dựng Modano.</p>
                        </div>
                        <div class="pi-slide">
                            <div class="pi-img-w pi-img-round"><img src="http://localhost:8080/liphamedia.com/wp-content/themes/liphamedia/img_external/testimonials/localhost:8080/liphamedia.comclient1kien.jpg" style="width:150px"></div>
                            <p class="lead-32 pi-text-white pi-text-shadow pi-italic"><i class="icon-quote pi-text-base pi-icon-left"></i>Tôi thấy rất hài lòng vì tính chuyên nghiệp trong công việc cũng như sự nhiệt tình của bạn đã lấy được sự tin tưởng của tôi.<i class="icon-quote pi-text-base pi-icon-right"></i></p>
                            <p class="pi-text-base"><i class="icon-star"></i> <i class="icon-star"></i> <i class="icon-star"></i></p>
                            <p class="lead-16 pi-weight-700 pi-text-white pi-text-shadow pi-uppercase pi-letter-spacing pi-margin-bottom-5">Nguyễn Trọng Kiên</p>
                            <p class="pi-italic">Chuyên gia đào tạo phát triển con người. CEO laptopxachtay.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="anchor-work" class="pi-section-w pi-section-white">
    <div class="pi-section pi-padding-top-90 pi-padding-bottom-70">
        <div class="pi-text-center pi-padding-bottom-10">
            <h6 class="pi-uppercase pi-letter-spacing-3 pi-text-base pi-margin-bottom-15">Work</h6>
            <h2 class="h1 pi-weight-700 pi-uppercase pi-has-border pi-has-tall-border pi-has-short-border">Dự án hoàn thành</h2>
            <p class="lead-16">Luôn coi trọng dù chỉ là những việc nhỏ nhất.</p>
        </div>
        <div class="pi-pagenav pi-big pi-text-center" data-isotope-nav="isotope">
            <ul>
                <li><a href="#" class="pi-active" data-filter="*">All</a></li>
                <li><a href="#" data-filter=".Beautiful">Webdesign</a></li>
                <li><a href="#" data-filter=".Lifestyle">Card-visit</a></li>
                <li><a href="#" data-filter=".Creation">Brochure</a></li>
                <li><a href="#" data-filter=".Travel">Marketing Banner</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="pi-section-w pi-section-white">
    <div id="isotope" class="pi-row pi-liquid-col-xs-2 pi-liquid-col-lg-3 pi-gallery pi-stacked pi-no-margin-bottom isotope pi-column-fix">
        <div class="Beautiful Travel pi-gallery-item isotope-item">
            <div class="pi-img-w pi-img-hover-zoom">
                <img src="http://localhost:8080/liphamedia.com/wp-content/themes/liphamedia/img_external/gallery/projects/1.png" alt="">
                <div class="pi-img-overlay pi-img-overlay-darker">
                    <div class="pi-caption-centered">
                        <div>
                            <a href="http://localhost:8080/liphamedia.com/wp-content/themes/liphamedia/img_external/gallery/projects/1.png" class="pi-colorbox"><span class="pi-caption-icon pi-caption-scale icon-plus"></span></a>
                            <h4 class="pi-uppercase"><a href="#" class="pi-link-white">Woman at the wall</a></h4>
                            <ul class="pi-caption-links">
                                <li><i class="icon-tag"></i><a href="#">Beautiful</a>, <a href="#">Travel</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="Beautiful Food pi-gallery-item isotope-item">
            <div class="pi-img-w pi-img-hover-zoom">
                <img src="http://localhost:8080/liphamedia.com/wp-content/themes/liphamedia/img_external/gallery/projects/2.jpg" alt="">
                <div class="pi-img-overlay pi-img-overlay-darker">
                    <div class="pi-caption-centered">
                        <div>
                            <a href="http://localhost:8080/liphamedia.com/wp-content/themes/liphamedia/img_external/gallery/projects/2.jpg" class="pi-colorbox"><span class="pi-caption-icon pi-caption-scale icon-search-1"></span></a>
                            <h4 class="pi-uppercase"><a href="#" class="pi-link-white">Healthy food</a></h4>
                            <ul class="pi-caption-links">
                                <li><i class="icon-tag"></i><a href="#">Beautiful</a>, <a href="#">Food</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="Sport Lifestyle pi-gallery-item isotope-item">
            <div class="pi-img-w pi-img-hover-zoom">
                <img src="http://localhost:8080/liphamedia.com/wp-content/themes/liphamedia/img_external/gallery/projects/3.jpg" alt="">
                <div class="pi-img-overlay pi-img-overlay-darker">
                    <div class="pi-caption-centered">
                        <div>
                            <a href="http://localhost:8080/liphamedia.com/wp-content/themes/liphamedia/img_external/gallery/projects/3.jpg" class="pi-colorbox"><span class="pi-caption-icon pi-caption-scale icon-plus"></span></a>
                            <h4 class="pi-uppercase"><a href="#" class="pi-link-white">Golf ball</a></h4>
                            <ul class="pi-caption-links">
                                <li><i class="icon-tag"></i><a href="#">Sport</a>, <a href="#">Lifestyle</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="Travel Lifestyle pi-gallery-item isotope-item">
            <div class="pi-img-w pi-img-hover-zoom">
                <img src="http://localhost:8080/liphamedia.com/wp-content/themes/liphamedia/img_external/gallery/projects/4.jpg" alt="">
                <div class="pi-img-overlay pi-img-overlay-darker">
                    <div class="pi-caption-centered">
                        <div>
                            <a href="http://localhost:8080/liphamedia.com/wp-content/themes/liphamedia/img_external/gallery/projects/4.jpg" class="pi-colorbox"><span class="pi-caption-icon pi-caption-scale icon-plus"></span></a>
                            <h4 class="pi-uppercase"><a href="#" class="pi-link-white">Sailing</a></h4>
                            <ul class="pi-caption-links">
                                <li><i class="icon-tag"></i><a href="#">Travel</a>, <a href="#">Lifestyle</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="pi-section-w pi-section-parallax" style="background-image:url(http://localhost:8080/liphamedia.com/wp-content/themes/liphamedia/img_external/gallery/architecture.jpg)">
    <div class="pi-texture" style="background:rgba(24,28,32,0.8)"></div>
    <div class="pi-section pi-padding-top-90 pi-padding-bottom-80">
        <div class="pi-icon-box-vertical pi-text-center">
            <div class="pi-icon-box-icon pi-icon-box-icon-big pi-icon-box-icon-base"><i class="icon-phone"></i></div>
            <h2 class="h1 pi-has-border pi-has-tall-border pi-has-short-border pi-text-shadow"> ( 0909 ) <span class="pi-weight-700">490 - 619</span></h2>
            <p class="lead-18 pi-text-shadow pi-uppercase pi-weight-700 pi-text-white pi-margin-bottom-5">49 Huỳnh Tịnh Của, Phường 5 quận 3, Hồ Chí Minh</p>
            <p class="lead-18 pi-text-shadow pi-uppercase pi-weight-700 pi-margin-bottom-30"><a href="mailto:phuxuan167@gmail" class="mail-text uppercase oswald">localhost:8080/liphamedia.com@gmail.com</a></p>
        </div>
    </div>
</div>
<script src="http://localhost:8080/liphamedia.com/wp-content/themes/liphamedia/3dParty/jquery-1.11.0.min.js"></script>
<script src="http://localhost:8080/liphamedia.com/wp-content/themes/liphamedia/3dParty/bootstrap/js/bootstrap.min.js"></script>
<script src="http://localhost:8080/liphamedia.com/wp-content/themes/liphamedia/3dParty/jquery.touchSwipe.min.js"></script>
<script src="http://localhost:8080/liphamedia.com/wp-content/themes/liphamedia/3dParty/gauge.min.js"></script>
<script src="http://localhost:8080/liphamedia.com/wp-content/themes/liphamedia/3dParty/inview.js"></script>
<script src="http://localhost:8080/liphamedia.com/wp-content/themes/liphamedia/3dParty/isotope/isotope.js"></script>
<script src="http://localhost:8080/liphamedia.com/wp-content/themes/liphamedia/scripts/pi.googleMapStyles.min.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="http://localhost:8080/liphamedia.com/wp-content/themes/liphamedia/3dParty/jquery.gmap.min.js"></script>
<script src="http://localhost:8080/liphamedia.com/wp-content/themes/liphamedia/3dParty/requestAnimationFramePolyfill.min.js"></script>
<script src="http://localhost:8080/liphamedia.com/wp-content/themes/liphamedia/3dParty/jquery.placeholder.js"></script>
<script src="http://localhost:8080/liphamedia.com/wp-content/themes/liphamedia/3dParty/jquery.scrollTo.min.js"></script>
<script src="http://localhost:8080/liphamedia.com/wp-content/themes/liphamedia/3dParty/colorbox/jquery.colorbox-min.js"></script>
<script src="http://localhost:8080/liphamedia.com/wp-content/themes/liphamedia/scripts/pi.init.scrollSpy.min.js"></script>
<script src="http://localhost:8080/liphamedia.com/wp-content/themes/liphamedia/scripts/pi.global.min.js"></script>
<script src="http://localhost:8080/liphamedia.com/wp-content/themes/liphamedia/scripts/pi.slider.min.js"></script>
<script src="http://localhost:8080/liphamedia.com/wp-content/themes/liphamedia/scripts/pi.init.slider.min.js"></script>
<script src="http://localhost:8080/liphamedia.com/wp-content/themes/liphamedia/scripts/pi.tooltip.min.js"></script>
<script src="http://localhost:8080/liphamedia.com/wp-content/themes/liphamedia/scripts/pi.init.tooltip.min.js"></script>
<script src="http://localhost:8080/liphamedia.com/wp-content/themes/liphamedia/3dParty/jquery.easing.1.3.js"></script>
<script src="http://localhost:8080/liphamedia.com/wp-content/themes/liphamedia/scripts/pi.counter.min.js"></script>
<script src="http://localhost:8080/liphamedia.com/wp-content/themes/liphamedia/scripts/pi.init.counter.min.js"></script>
<script src="http://localhost:8080/liphamedia.com/wp-content/themes/liphamedia/scripts/pi.parallax.min.js"></script>
<script src="http://localhost:8080/liphamedia.com/wp-content/themes/liphamedia/scripts/pi.init.parallax.min.js"></script>
<script src="http://localhost:8080/liphamedia.com/wp-content/themes/liphamedia/scripts/pi.init.isotope.min.js"></script>
<script src="http://localhost:8080/liphamedia.com/wp-content/themes/liphamedia/scripts/pi.init.map.min.js"></script>
<script src="http://localhost:8080/liphamedia.com/wp-content/themes/liphamedia/settings/settings.js"></script>
<?php get_footer();?>