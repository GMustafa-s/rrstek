@extends('frontend.index')
@section('content')

<div id="promo-business" class="promo product">
    <div class="frame">
        <div class="holder">
            <div class="container ">
                <div class="box">
                    <ul  class="breadcrumbs viewport-holder slideDown">
                        <li><a href="../index.html">Main</a></li>
                        <li><a href="#">Products</a></li>
                        <li><a href="#">Analitys</a></li>
                        <li><a href="index.html">Business</a></li>
                    </ul>
                    <div id="#text-banner-overview" class="text">
                        <h1 class="viewport-holder slideDown delay-1">Business</h1>
                        <p class="viewport-holder slideDown delay-2">
                            Confidence and security without constant control on your
                            part, the stability of all processes in the company - that
                            is what RRSTEK intelligent systems are all about.
                        </p>
                        <ul class="viewport-holder slideDown delay-3">
                            <li><a href="#" class="btn sec">Watch Video</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="link-holder col2-tab">
    <div class="container">
        <ul class="links viewport-holder slideDown">
            <li><a href="{{route('workspace_detector')}}">Workspace Detector</a></li>
            <li><a href="{{route('staff_tracker')}}">Staff Tracker</a></li>
            <li><a href="{{route('heat_map')}}">Heat Map on Map</a></li>
            <li><a href="{{route('queue_counter')}}">Queue Counter</a></li>
            <li><a href="{{route('active_post')}}">ActivePOS</a></li>
            <li><a href="{{route('shelf_detector')}}">Shelf Detector</a></li>
            <li><a href="{{route('neuro_counter')}}">Neuro Counter</a></li>
        </ul>
    </div>
</div>
<main id="main">
    <div class="article-holder">
        <div class="container">
            <article class="article">
                <div class="img-box viewport-holder slideDown delay-1">
                    <img src="{{ asset('frontend') }}/images/Business/workspace-detector-Image.png"
                        alt="image description" />
                </div>
                <div class="text-box">
                    <h2 class="viewport-holder slideDown delay-2">
                        <span><i>OUR PRODUCT</i></span> Workspace Detector
                    </h2>
                    <p class="viewport-holder slideDown delay-3">
                        Neural network intelligent module that works only on RRSTEK
                        Neuro Station series video recorders. Supports Offload
                        analytics. TRASSIR Workplace Detector is designed to monitor
                        and track employees' working time.
                    </p>
                    <a class="viewport-holder slideDown delay-4 more" href="workspace-detector.html"><span>Read
                            More</span></a>
                </div>
            </article>
            <article class="article">
                <div class="img-box viewport-holder slideDown delay-1">
                    <img src="{{ asset('frontend') }}/images/Business/active-pos-Image.png" alt="image description" />
                </div>
                <div class="text-box">
                    <h2 class="viewport-holder slideDown delay-2">
                        <span><i>OUR PRODUCT</i></span> ActivePOS
                    </h2>
                    <p class="viewport-holder slideDown delay-3">
                        The intelligent module for monitoring cash and banking
                        operations, weighing and calculating machines is a reliable
                        and highly effective tool for automatic and manual detection
                        and prevention of personnel fraud and shoppers theft in real
                        time and offline.
                    </p>
                    <a href="active-post.html" class="viewport-holder slideDown delay-4 more"><span>Read More</span></a>
                </div>
            </article>
            <article class="article">
                <div class="img-box viewport-holder slideDown delay-1">
                    <img src="{{ asset('frontend') }}/images/Business/staff-tracker-Image.png"
                        alt="image description" />
                </div>
                <div class="text-box">
                    <h2 class="viewport-holder slideDown delay-2">
                        <span><i>OUR PRODUCT</i></span> Staff Tracker
                    </h2>
                    <p class="viewport-holder slideDown delay-3">
                        The analytics module helps to control the quality of staff
                        work in offline retail. The module monitors the availability
                        of the required number of employees in service areas, keeps
                        records of serviced and left unattended visitors, generates a
                        report on the speed and quality of service, in case of
                        violation of the service standards by personnel, it sends
                        notifications in real time.
                    </p>
                    <a href="staff-tracker.html" class="viewport-holder slideDown delay-4 more"><span>Read
                            More</span></a>
                </div>
            </article>
            <article class="article">
                <div class="img-box viewport-holder slideDown delay-1">
                    <img src="{{ asset('frontend') }}/images/Business/shelf-detector-Image.png"
                        alt="image description" />
                </div>
                <div class="text-box">
                    <h2 class="viewport-holder slideDown delay-2">
                        <span><i>OUR PRODUCT</i></span> Shelf Detector
                    </h2>
                    <p class="viewport-holder slideDown delay-3">
                        The module for analyzing the fullness of the shelves is used
                        to timely inform about empty shelves with goods. In the event
                        of voids exceeding the specified value, the module sends
                        notifications to the store employees. The module also
                        generates reports on the status of shelves at specified
                        intervals.
                    </p>
                    <a href="shelf-detector.html" class="viewport-holder slideDown delay-4 more"><span>Read
                            More</span></a>
                </div>
            </article>
            <article class="article">
                <div class="img-box viewport-holder slideDown delay-1">
                    <img src="{{ asset('frontend') }}/images/Business/heat-map-Image.png" alt="image description" />
                </div>
                <div class="text-box">
                    <h2 class="viewport-holder slideDown delay-2">
                        <span><i>OUR PRODUCT</i></span> Heat Map on Map
                    </h2>
                    <p class="viewport-holder slideDown delay-3">
                        Multi-camera map of the movement of people, working on the
                        basis of a neural network detector of people (superimposed on
                        the map of the room). Three types of map: static (highlighting
                        the places where visitors stay the longest), traffic amount
                        map, traffic direction map.
                    </p>
                    <a href="heat-map.html" class="viewport-holder slideDown delay-3 more"><span>Read More</span></a>
                </div>
            </article>
            <article class="article">
                <div class="img-box viewport-holder slideDown delay-1">
                    <img src="{{ asset('frontend') }}/images/Business/neuro-counter-Image.png" alt="image description"
                        di />
                </div>
                <div class="text-box">
                    <h2 class="viewport-holder slideDown delay-2">
                        <span><i>OUR PRODUCT</i></span> Neuro Counter
                    </h2>
                    <p class="viewport-holder slideDown delay-3">
                        Counter of objects - people, cars, bicycles. With high
                        precision detects and counts objects entering or leaving a
                        specified area or crossing a virtual line. You can count
                        objects by category, for example, by the color of clothing,
                        and exclude certain categories from the report, for example,
                        employees
                    </p>
                    <a href="neuro-counter.html" class="viewport-holder slideDown delay-4 more"><span>Read
                            More</span></a>
                </div>
            </article>
            <article class="article">
                <div class="img-box viewport-holder slideDown delay-1">
                    <img src="{{ asset('frontend') }}/images/Business/qeue-counter-Image.png" alt="image description" />
                </div>
                <div class="text-box">
                    <h2 class="viewport-holder slideDown delay-2">
                        <span><i>OUR PRODUCT</i></span> Queue Counter
                    </h2>
                    <p class="viewport-holder slideDown delay-3">
                        Queue detection module based on a neural network. Includes a
                        reporting module and alerts on exceeding the queue length.
                        When used in conjunction with the TRASSIR ActivePOS module, it
                        allows you to enable alerts based on the number of operating
                        cash registers.
                    </p>
                    <a href="queue-detector.html" class="viewport-holder slideDown delay-4 more"><span>Read
                            More</span></a>
                </div>
            </article>
        </div>
    </div>
    <div class="our-work">
        <div class="container">
            <div class="heading">
                <div class="text viewport-holder slideDown">
                    <h2>
                        <span><i>OUR WORK</i></span> See Our Product in Action
                    </h2>
                </div>
                <div class="btn-holder viewport-holder slideDown delay-1">
                    <a class="see-all" href="#">See All</a>
                </div>
            </div>
            <div class="slick-slider-add">
                <div class="slide viewport-holder slideDown delay-1">
                    <div class="img">
                        <img src="{{ asset('frontend') }}/images/img-12.jpg" alt="image description" />
                    </div>
                    <div class="txt">
                        <h3>Almaty International Airport</h3>
                        <h4>
                            <i class="ico"><img src="{{ asset('frontend') }}/images/ico-location-solid.svg"
                                    alt="image description" /></i>
                            Almaty Airport Turkey
                        </h4>
                    </div>
                </div>
                <div class="slide viewport-holder slideDown delay-2">
                    <div class="img">
                        <img src="{{ asset('frontend') }}/images/img-12.jpg" alt="image description" />
                    </div>
                    <div class="txt">
                        <h3>Almaty International Airport</h3>
                        <h4>
                            <i class="ico"><img src="{{ asset('frontend') }}/images/ico-location-solid.svg"
                                    alt="image description" /></i>
                            Almaty Airport Turkey
                        </h4>
                    </div>
                </div>
                <div class="slide viewport-holder slideDown delay-3">
                    <div class="img">
                        <img src="{{ asset('frontend') }}/images/img-12.jpg" alt="image description" />
                    </div>
                    <div class="txt">
                        <h3>Almaty International Airport</h3>
                        <h4>
                            <i class="ico"><img src="{{ asset('frontend') }}/images/ico-location-solid.svg"
                                    alt="image description" /></i>
                            Almaty Airport Turkey
                        </h4>
                    </div>
                </div>
                <div class="slide viewport-holder slideDown delay-1">
                    <div class="img">
                        <img src="{{ asset('frontend') }}/images/img-12.jpg"
                            alt="image description" />
                    </div>
                    <div class="txt">
                        <h3>Almaty International Airport</h3>
                        <h4>
                            <i class="ico"><img
                                    src="{{ asset('frontend') }}/images/ico-location-solid.svg"
                                    alt="image description" /></i>
                            Almaty Airport Turkey
                        </h4>
                    </div>
                </div>
                <div class="slide viewport-holder slideDown delay-2">
                    <div class="img">
                        <img src="{{ asset('frontend') }}/images/img-12.jpg"
                            alt="image description" />
                    </div>
                    <div class="txt">
                        <h3>Almaty International Airport</h3>
                        <h4>
                            <i class="ico"><img src="{{ asset('frontend') }}/images/ico-location-solid.svg"
                                    alt="image description" /></i>
                            Almaty Airport Turkey
                        </h4>
                    </div>
                </div>
                <div class="slide viewport-holder slideDown delay-3">
                    <div class="img">
                        <img src="{{ asset('frontend') }}/images/img-12.jpg" alt="image description" />
                    </div>
                    <div class="txt">
                        <h3>Almaty International Airport</h3>
                        <h4>
                            <i class="ico"><img src="{{ asset('frontend') }}/images/ico-location-solid.svg"
                                    alt="image description" /></i>
                            Almaty Airport Turkey
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="booking-area">
        <div class="container">
            <div class="holder">
                <div class="text-box viewport-holder slideDown">
                    <h2><span>GET DEMO</span> Try RRSTEK in Your Business</h2>
                    <p>
                        Learn more about how RRSTEK analytic modules work! Demo mode
                        is an opportunity to see for yourself how the system operates,
                        and also check the interface and test all the functions
                    </p>
                </div>
                <div class="form-area viewport-holder slideDown delay-1">
                    <div class="frame">
                        <h3>Book a Demo</h3>
                        <p>
                            Book a Demo for your facility for demotrastion of camera
                            operation.
                        </p>
                        <form onsubmit="demoEmail(); reset(); return false" method="POST" class="user-form">
                            <input class="form-control" id="name" type="text" placeholder="Your Name" name="name"
                                required>
                            <input class="form-control" id="email" type="email" placeholder="Your Email" name="emai"
                                required>
                            <input class="login-btn" type="submit" value="Book Now">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
