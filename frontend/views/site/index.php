<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>

<!-- BEGIN HOME SLIDER SECTION -->
<div class="revslider-container">
    <div class="revslider" >
        <ul>
            <li data-transition="fade" data-slotamount="7">
                <img src="http://placehold.it/1920x605" alt="" />
                <div class="caption sfr slider-title" data-x="70" data-y="120" data-speed="800" data-start="1300" data-easing="easeOutBack" data-end="9600" data-endspeed="700" data-endeasing="easeInSine">HOME SWEET HOME!</div>
                <div class="caption sfl slider-subtitle" data-x="75" data-y="190" data-speed="800" data-start="1500" data-easing="easeOutBack" data-end="9700" data-endspeed="500" data-endeasing="easeInSine">Cozy it's the perfect Template for Real Estate.</div>
                <a href="#" class="caption sfb btn btn-default btn-lg" data-x="75" data-y="260" data-speed="800" data-easing="easeOutBack" data-start="1600" data-end="9800" data-endspeed="500" data-endeasing="easeInSine">Learn More</a>
            </li>

            <li data-transition="fade">
                <img src="http://placehold.it/1920x605" alt="" />
                <div class="caption sfr slider-title" data-x="450" data-y="120" data-speed="800" data-start="1300" data-easing="easeOutBack" data-end="9600" data-endspeed="500" data-endeasing="easeInSine">EASY TO CUSTOMIZE</div>
                <div class="caption sfl slider-subtitle" data-x="455" data-y="190" data-speed="800" data-start="1500" data-easing="easeOutBack" data-end="9700" data-endspeed="500" data-endeasing="easeInSine">With more than 20 custom HTML pages<br/>available and lots of useful features to<br/>help you promote and sell your properties.</div>
                <a href="#" class="caption sfb btn btn-default btn-lg" data-x="455" data-y="310" data-speed="800" data-easing="easeOutBack" data-start="1600" data-end="9800" data-endspeed="500" data-endeasing="easeInSine">Learn More</a>
            </li>

            <li data-transition="fade">
                <img src="http://placehold.it/1920x605" alt="" />
                <div class="caption sfr slider-title" data-x="70" data-y="120" data-speed="800" data-start="1300" data-easing="easeOutBack" data-end="9600" data-endspeed="500" data-endeasing="easeInSine">FULLY RESPONSIVE<br/>& RETINA READY</div>
                <div class="caption sfl slider-subtitle" data-x="75" data-y="250" data-speed="800" data-start="1500" data-easing="easeOutBack" data-end="9700" data-endspeed="500" data-endeasing="easeInSine">Cozy will fit perfectly in all types<br/>of screens and devices.</div>
                <a href="#" class="caption sfb btn btn-default btn-lg" data-x="75" data-y="340" data-speed="800" data-easing="easeOutBack" data-start="1600" data-end="9800" data-endspeed="500" data-endeasing="easeInSine">Try it out!</a>
                <div class="caption sfr sfl" data-x="800" data-y="140" data-speed="800" data-start="1800" data-easing="easeOutBack" data-end="9800" data-endspeed="500" data-endeasing="easeInSine"><img src="images/qrc.png" alt="Cozy QRC"></div>
            </li>

            <li data-transition="fade">
                <img src="http://placehold.it/1920x605" alt="" />
                <div class="caption sfr slider-title" data-x="450" data-y="150" data-speed="800" data-start="1300" data-easing="easeOutBack" data-end="9600" data-endspeed="500" data-endeasing="easeInSine">BUILT IN HTML5 & CSS3</div>
                <div class="caption sfl slider-subtitle" data-x="455" data-y="220" data-speed="800" data-start="1500" data-easing="easeOutBack" data-end="9700" data-endspeed="500" data-endeasing="easeInSine">Clean and well commented code.</div>
                <a href="#" class="caption sfb btn btn-default btn-lg" data-x="455" data-y="280" data-speed="800" data-easing="easeOutBack" data-start="1600" data-end="9800" data-endspeed="500" data-endeasing="easeInSine">Learn More</a>
                <div class="caption sfl str" data-x="70" data-y="170" data-speed="700" data-start="1000" data-easing="easeOutBack" data-end="9600" data-endspeed="700" data-endeasing="easeInSine"><img src="images/htm-icon.png" alt="html5"></div>
                <div class="caption sfb stt" data-x="220" data-y="230" data-speed="700" data-start="1200" data-easing="easeOutBack" data-end="9700" data-endspeed="500" data-endeasing="easeInSine"><img src="images/plus.png" alt="plus"></div>
                <div class="caption sfr stl" data-x="250" data-y="170" data-speed="700" data-start="1400" data-easing="easeOutBack" data-end="9800" data-endspeed="500" data-endeasing="easeInSine"><img src="images/css-icon.png" alt="css3"></div>
            </li>
        </ul>
    </div>
</div>
<!-- END HOME SLIDER SECTION -->

<!-- BEGIN HOME ADVANCED SEARCH -->
<div id="home-advanced-search" class="open">
    <div id="opensearch"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <form>
                    <div class="form-group">
                        <div class="form-control-large">
                            <input type="text" class="form-control" name="location" placeholder="City, State, Country, etc...">
                        </div>

                        <div class="form-control-large">
                            <select id="search_prop_type" name="search_prop_type" data-placeholder="Type of Property">
                                <option value=""> </option>
                                <option value="residential">Residential</option>
                                <option value="commercial">Commercial</option>
                                <option value="land">Land</option>
                            </select>
                        </div>

                        <div class="form-control-small">
                            <select id="search_status" name="search_status" data-placeholder="Status">
                                <option value=""> </option>
                                <option value="sale">For Sale</option>
                                <option value="rent">For Rent</option>
                            </select>
                        </div>

                        <div class="form-control-small">
                            <select id="search_bedrooms" name="search_bedrooms" data-placeholder="Bedrooms">
                                <option value=""> </option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="5plus">5+</option>
                            </select>
                        </div>

                        <div class="form-control-small">
                            <select id="search_bathrooms" name="search_bathrooms" data-placeholder="Bathrooms">
                                <option value=""> </option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="4plus">4+</option>
                            </select>
                        </div>

                        <div class="form-control-small">
                            <select id="search_minprice" name="search_minprice" data-placeholder="Min. Price">
                                <option value=""> </option>
                                <option value="0">$0</option>
                                <option value="25000">$25000</option>
                                <option value="50000">$50000</option>
                                <option value="75000">$75000</option>
                                <option value="100000">$100000</option>
                                <option value="150000">$150000</option>
                                <option value="200000">$200000</option>
                                <option value="300000">$300000</option>
                                <option value="500000">$500000</option>
                                <option value="750000">$750000</option>
                                <option value="1000000">$1000000</option>
                            </select>
                        </div>

                        <div class="form-control-small">
                            <select id="search_maxprice" name="search_maxprice" data-placeholder="Max. Price">
                                <option value=""> </option>
                                <option value="25000">$25000</option>
                                <option value="50000">$50000</option>
                                <option value="75000">$75000</option>
                                <option value="100000">$100000</option>
                                <option value="150000">$150000</option>
                                <option value="200000">$200000</option>
                                <option value="300000">$300000</option>
                                <option value="500000">$500000</option>
                                <option value="750000">$750000</option>
                                <option value="1000000">$1000000</option>
                                <option value="1000000plus">>$1000000</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-fullcolor">Search</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<!-- END HOME ADVANCED SEARCH -->

<!-- BEGIN PROPERTIES SLIDER WRAPPER-->
<div class="parallax pattern-bg" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50">Featured Properties</h1>

                <div id="featured-properties-slider" class="owl-carousel fullwidthsingle" data-animation-direction="from-bottom" data-animation-delay="250">
                    <div class="item">
                        <div class="image">
                            <a href="properties-detail.html"></a>
                            <img src="http://placehold.it/760x670" alt="" />
                        </div>
                        <div class="price">
                            <i class="fa fa-home"></i>For Sale
                            <span>$950,000</span>
                        </div>
                        <div class="info">
                            <h3><a href="properties-detail.html">Luxury Apartment with great views</a></h3>
                            <p>Curabitur dignissim tortor ut scelerisque consectetur. Praesent pulvinar placerat lorem, et ultricies urna ultrices vel. Praesent eu libero a sapien adipiscing interdum feugiat id lectus.</p>
                            <a href="properties-detail.html" class="btn btn-default">Read More</a>
                        </div>
                    </div>

                    <div class="item">
                        <div class="image">
                            <a href="properties-detail.html"></a>
                            <img src="http://placehold.it/760x670" alt="" />
                        </div>
                        <div class="price">
                            <i class="fa fa-home"></i>For Sale
                            <span>$1,253,000</span>
                        </div>
                        <div class="info">
                            <h3><a href="properties-detail.html">Stunning Villa with 5 bedrooms</a></h3>
                            <p>Praesent eu libero a sapien adipiscing interdum feugiat id lectus. Curabitur dignissim tortor ut scelerisque consectetur. Praesent pulvinar placerat lorem.</p>
                            <a href="properties-detail.html" class="btn btn-default">Read More</a>
                        </div>
                    </div>

                    <div class="item">
                        <div class="image">
                            <a href="properties-detail.html"></a>
                            <img src="http://placehold.it/760x670" alt="" />
                        </div>
                        <div class="price">
                            <i class="fa fa-home"></i>For Rent
                            <span>$850</span>
                        </div>
                        <div class="info">
                            <h3><a href="properties-detail.html">Modern construction with parking space</a></h3>
                            <p>Curabitur dignissim tortor ut scelerisque consectetur. Praesent pulvinar placerat lorem, et ultricies urna ultrices vel. Praesent eu libero a sapien adipiscing interdum feugiat id lectus. Praesent pulvinar placerat lorem, et ultricies.</p>
                            <a href="properties-detail.html" class="btn btn-default">Read More</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- END PROPERTIES SLIDER WRAPPER -->

<!-- BEGIN CONTENT WRAPPER -->
<div class="content">
    <div class="container">
        <div class="row">

            <!-- BEGIN MAIN CONTENT -->
            <div class="main col-sm-8">
                <h1 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50">Recent Properties</h1>

                <div class="grid-style1 clearfix">
                    <div class="item col-md-4" data-animation-direction="from-bottom" data-animation-delay="200">
                        <div class="image">
                            <a href="properties-detail.html">
                                <h3>Luxury Apartment with great views</h3>
                                <span class="location">Upper East Side, New York</span>
                            </a>
                            <img src="http://placehold.it/760x670" alt="" />
                        </div>
                        <div class="price">
                            <i class="fa fa-home"></i>For Sale
                            <span>$950,000</span>
                        </div>
                        <ul class="amenities">
                            <li><i class="icon-area"></i> 2150 Sq Ft</li>
                            <li><i class="icon-bedrooms"></i> 4</li>
                            <li><i class="icon-bathrooms"></i> 3</li>
                        </ul>
                    </div>

                    <div class="item col-md-4" data-animation-direction="from-bottom" data-animation-delay="400">
                        <div class="image">
                            <a href="properties-detail.html">
                                <h3>Stunning Villa with 5 bedrooms</h3>
                                <span class="location">Miami Beach, Florida</span>
                            </a>
                            <img src="http://placehold.it/760x670" alt="" />
                        </div>
                        <div class="price">
                            <i class="fa fa-home"></i>For Sale
                            <span>$1,253,000</span>
                        </div>
                        <ul class="amenities">
                            <li><i class="icon-area"></i> 3470 Sq Ft</li>
                            <li><i class="icon-bedrooms"></i> 5</li>
                            <li><i class="icon-bathrooms"></i> 2</li>
                        </ul>
                    </div>

                    <div class="item col-md-4" data-animation-direction="from-bottom" data-animation-delay="600">
                        <div class="image">
                            <a href="properties-detail.html">
                                <h3>Recent construction with 3 bedrooms</h3>
                                <span class="location">Park Slope, New York</span>
                            </a>
                            <img src="http://placehold.it/760x670" alt="" />
                        </div>
                        <div class="price">
                            <i class="fa fa-home"></i>For Sale
                            <span>$560,000</span>
                        </div>
                        <ul class="amenities">
                            <li><i class="icon-area"></i> 1800 Sq Ft</li>
                            <li><i class="icon-bedrooms"></i> 3</li>
                            <li><i class="icon-bathrooms"></i> 2</li>
                        </ul>
                    </div>

                    <div class="item col-md-4" data-animation-direction="from-bottom" data-animation-delay="200">
                        <div class="image">
                            <a href="properties-detail.html">
                                <h3>Modern construction with parking space</h3>
                                <span class="location">Midtown, New York</span>
                            </a>
                            <img src="http://placehold.it/760x670" alt="" />
                        </div>
                        <div class="price">
                            <i class="fa fa-home"></i>For Rent
                            <span>$850</span>
                        </div>
                        <ul class="amenities">
                            <li><i class="icon-area"></i> 1300 Sq Ft</li>
                            <li><i class="icon-bedrooms"></i> 1</li>
                            <li><i class="icon-bathrooms"></i> 2</li>
                        </ul>
                    </div>

                    <div class="item col-md-4" data-animation-direction="from-bottom" data-animation-delay="400">
                        <div class="image">
                            <a href="properties-detail.html">
                                <h3>Single Family Townhouse</h3>
                                <span class="location">Cobble Hill, New York</span>
                            </a>
                            <img src="http://placehold.it/760x670" alt="" />
                        </div>
                        <div class="price">
                            <i class="fa fa-home"></i>For Sale
                            <span>$846,000</span>
                        </div>
                        <ul class="amenities">
                            <li><i class="icon-area"></i> 1580 Sq Ft</li>
                            <li><i class="icon-bedrooms"></i> 2</li>
                            <li><i class="icon-bathrooms"></i> 2</li>
                        </ul>
                    </div>

                    <div class="item col-md-4" data-animation-direction="from-bottom" data-animation-delay="600">
                        <div class="image">
                            <a href="properties-detail.html">
                                <h3>3 bedroom villa with garage for rent</h3>
                                <span class="location">Bal Harbour, Florida</span>
                            </a>
                            <img src="http://placehold.it/760x670" alt="" />
                        </div>
                        <div class="price">
                            <i class="fa fa-home"></i>For Rent
                            <span>$1,500</span>
                        </div>
                        <ul class="amenities">
                            <li><i class="icon-area"></i> 2000 Sq Ft</li>
                            <li><i class="icon-bedrooms"></i> 3</li>
                            <li><i class="icon-bathrooms"></i> 2</li>
                        </ul>
                    </div>
                </div>


                <h1 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50">Latest News</h1>
                <div class="grid-style1">
                    <div class="item col-md-4" data-animation-direction="from-bottom" data-animation-delay="250">
                        <div class="image">
                            <a href="blog-detail.html">
                                <span class="btn btn-default"><i class="fa fa-file-o"></i> Read More</span>
                            </a>
                            <img src="http://placehold.it/766x515" alt="" />
                        </div>
                        <div class="tag"><i class="fa fa-file-text"></i></div>
                        <div class="info-blog">
                            <ul class="top-info">
                                <li><i class="fa fa-calendar"></i> July 30, 2014</li>
                                <li><i class="fa fa-comments-o"></i> 2</li>
                                <li><i class="fa fa-tags"></i> Properties, Prices, best deals</li>
                            </ul>
                            <h3>
                                <a href="blog-detail.html">How to get your dream property for the best price?</a>
                            </h3>
                            <p>Sed rutrum urna id tellus euismod gravida. Praesent placerat, mauris ac pellentesque fringilla, tortor libero condimen.</p>
                        </div>
                    </div>
                    <div class="item col-md-4" data-animation-direction="from-bottom" data-animation-delay="450">
                        <div class="image">
                            <a href="blog-detail.html">
                                <span class="btn btn-default"><i class="fa fa-file-o"></i> Read More</span>
                            </a>
                            <img src="http://placehold.it/766x515" alt="" />
                        </div>
                        <div class="tag"><i class="fa fa-film"></i></div>
                        <div class="info-blog">
                            <ul class="top-info">
                                <li><i class="fa fa-calendar"></i> July 24, 2014</li>
                                <li><i class="fa fa-comments-o"></i> 4</li>
                                <li><i class="fa fa-tags"></i> Tips, Mortgage</li>
                            </ul>
                            <h3>
                                <a href="blog-detail.html">7 tips to get the best mortgage.</a>
                            </h3>
                            <p>Sed rutrum urna id tellus euismod gravida. Praesent placerat, mauris ac pellentesque fringilla, tortor libero condimen.</p>
                        </div>
                    </div>
                    <div class="item col-md-4" data-animation-direction="from-bottom" data-animation-delay="650">
                        <div class="image">
                            <a href="blog-detail.html">
                                <span class="btn btn-default"><i class="fa fa-file-o"></i> Read More</span>
                            </a>
                            <img src="http://placehold.it/766x515" alt="" />
                        </div>
                        <div class="tag"><i class="fa fa-file-text"></i></div>
                        <div class="info-blog">
                            <ul class="top-info">
                                <li><i class="fa fa-calendar"></i> July 05, 2014</li>
                                <li><i class="fa fa-comments-o"></i> 1</li>
                                <li><i class="fa fa-tags"></i> Location, Price, House</li>
                            </ul>
                            <h3>
                                <a href="blog-detail.html">House, location or price: What's the most important factor?</a>
                            </h3>
                            <p>Sed rutrum urna id tellus euismod gravida. Praesent placerat, mauris ac pellentesque fringilla, tortor libero condimen.</p>
                        </div>
                    </div>
                </div>

                <div class="center"><a href="blog-listing1.html" class="btn btn-default-color" data-animation-direction="from-bottom" data-animation-delay="850">View All News</a></div>
            </div>
            <!-- END MAIN CONTENT -->

            <!-- BEGIN SIDEBAR -->
            <div class="sidebar col-sm-4">

                <!-- BEGIN SIDEBAR ABOUT -->
                <div class="col-sm-12">
                    <h2 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50">About Us</h2>
                    <p class="center" data-animation-direction="from-bottom" data-animation-delay="200">
                        Aliquam faucibus elit sed tempus molestie, aenean sodales venenatis.
                        <strong>Vestibulum pulvinar</strong> arcu suscipit, volutpat velit nec, euismod nibh vestibulum ut
                        sodales lacus, eget mattis arcu. Curabitur quis augue magna.
                        <a href="about.html">Learn More</a>
                    </p>
                </div>
                <!-- END SIDEBAR ABOUT -->

                <!-- BEGIN SIDEBAR AGENTS -->
                <div class="col-sm-12">
                    <h2 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50">Our Agents</h2>
                    <ul class="agency-detail-agents">
                        <li class="col-lg-12" data-animation-direction="from-bottom" data-animation-delay="200">
                            <a href="agent-detail.html"><img src="http://placehold.it/307x307" alt="" /></a>
                            <div class="info">
                                <a href="agent-detail.html"><h3>John Doe</h3></a>
                                <span class="location">Manhattan, New York</span>
                                <p>Curabitur quis augue magna volutpat velit nec, euismod nibh vestibulum.</p>
                                <a href="agent-detail.html">Learn More &raquo;</a>
                            </div>
                        </li>
                        <li class="col-lg-12" data-animation-direction="from-bottom" data-animation-delay="400">
                            <a href="agent-detail.html"><img src="http://placehold.it/307x307" alt="" /></a>
                            <div class="info">
                                <a href="agent-detail.html"><h3>Mary Ipsum Dolor</h3></a>
                                <span class="location">Miami, Florida</span>
                                <p>Curabitur quis augue magna volutpat velit nec, euismod nibh vestibulum.</p>
                                <a href="agent-detail.html">Learn More &raquo;</a>
                            </div>
                        </li>
                        <li class="col-lg-12" data-animation-direction="from-bottom" data-animation-delay="600">
                            <a href="agent-detail.html"><img src="http://placehold.it/307x307" alt="" /></a>
                            <div class="info">
                                <a href="agent-detail.html"><h3>Sarah Donec</h3></a>
                                <span class="location">Beverly Hills, California</span>
                                <p>Curabitur quis augue magna volutpat velit nec, euismod nibh vestibulum.</p>
                                <a href="agent-detail.html">Learn More &raquo;</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- END SIDEBAR AGENTS -->

                <!-- BEGIN AGENCIES -->
                <div id="agencies" class="col-sm-12" data-animation-direction="fade" data-animation-delay="250">
                    <h2 class="section-title">Our Agencies</h2>

                    <div class="mapborder">
                        <div id="map_agency" class="gmap"></div>
                    </div>
                    <select id="agency" name="agency" data-placeholder="Choose an agency">
                        <option value=""> </option>
                        <!-- The list of agencies will be automatically created.
                            Set the list of agencies in the file js/agencies.js -->
                    </select>
                </div>
                <!-- END AGENCIES -->

            </div>
            <!-- END SIDEBAR -->

        </div>
    </div>
</div>
<!-- END CONTENT WRAPPER -->

<!-- BEGIN TESTIMONIALS -->
<div class="parallax dark-bg" style="background-image:url(http://placehold.it/1920x800);" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12" data-animation-direction="from-top" data-animation-delay="50">
                <h2 class="section-title">Testimonials</h2>

                <div id="testimonials-slider" class="owl-carousel testimonials">
                    <div class="item">
                        <blockquote class="text">
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Pellentesque elementum libero enim, eget gravida nunc laoreet et. Nullam ac enim auctor, fringilla risus at, imperdiet turpis.</p>
                        </blockquote>
                        <div class="col-md-5 center">
                            <div class="author">
                                <img src="http://placehold.it/61x61" alt="" />
                                <div>
                                    Mark Maecenas<br>
                                    <span>CEO at Lorem Ipsum Agency</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <blockquote class="text">
                            <p>Pellentesque elementum libero enim, eget gravida nunc laoreet et. Nullam ac enim auctor, fringilla risus at, imperdiet turpis.</p>
                        </blockquote>
                        <div class="col-md-5 center">
                            <div class="author">
                                <img src="http://placehold.it/61x61" alt="" />
                                <div>
                                    John Doe<br>
                                    <span>CTO at Dolor Sit Amet Agency</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <blockquote class="text">
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Pellentesque elementum libero enim, eget gravida nunc laoreet et. Nullam ac enim auctor, fringilla risus at, imperdiet turpis. Nullam ac enim auctor, fringilla risus at, imperdiet turpis.</p>
                        </blockquote>
                        <div class="col-md-5 center">
                            <div class="author">
                                <img src="http://placehold.it/61x61" alt="" />
                                <div>
                                    Mary Smith<br>
                                    <span>UFO at Some Agency</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END TESTIMONIALS -->