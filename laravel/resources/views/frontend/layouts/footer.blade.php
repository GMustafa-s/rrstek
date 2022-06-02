<footer id="footer">
    <div class="container">
      <div class="footer-t">
        <div class="col">
          <strong class="sub-logo">
            <a href="/index.html">
              <img src="{{asset('frontend')}}/images/logo.svg" alt="image description" />
            </a>
          </strong>
        </div>
        <div class="col">
          <ul class="links">
            <li>
              <strong class="open">PRODUCTS</strong>
              <ul class="drop">
                <li><a href="#">Products</a></li>
                <li><a href="#">Analitycs</a></li>
                <li><a href="#">Camera</a></li>
                <li><a href="#">Hardware</a></li>
              </ul>
            </li>
            <li>
              <strong class="open">BUSINESS</strong>
              <ul class="drop">
                <li><a href="{{route('/business')}}">Business</a></li>
                <li><a href="{{route('/health_care')}}">Healthcare</a></li>
                <li><a href="{{route('/security')}}">Security</a></li>
                <li><a href="{{route('/work_safety')}}">Work safety</a></li>
              </ul>
            </li>
            <li>
              <strong class="open">SOLUTIONS</strong>
              <ul class="drop">
                <li><a href="{{route('/solutions')}}">Solutions</a></li>
                <li><a href="{{route('/cases')}}">Cases</a></li>
                <li><a href="{{route('/demo')}}">Demo</a></li>
              </ul>
            </li>
            <li>
              <strong class="open">SUPPORT</strong>
              <ul class="drop">
                <li><a href="{{route('/integrations')}}">Integrations</a></li>
                <li><a href="{{route('/camera/compare')}}">Compare Camera</a></li>
              </ul>
            </li>
            <li>
              <strong class="open">ABOUT US</strong>
              <ul class="drop">
                <li><a href="{{route('/aboutus')}}">About rrstek</a></li>
                <li><a href="{{route('/contactus')}}">Contact Us</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <div class="footer-b">
          <div class="col">
              <ul>
                <li>
                  <a href="http://www.instagram.com"
                  ><img
                  src="{{asset('frontend')}}/images/social-icons/Button/Social Icons.png"
                  alt="image description"
                /></a>
                </li>
                <li>
                  <a href="http://www.facebook.com"
                  ><img
                  src="{{asset('frontend')}}/images/social-icons/Button/Social Icons-1.png"
                  alt="image description"
                /></a>
                </li>
                <li>
                  <a href="http://www.twitter.com"
                  ><img
                  src="{{asset('frontend')}}/images/social-icons/Button/Social Icons-2.png"
                  alt="image description"
                /></a>
                </li>
                <li>
                <a href="http://www.youtube.com"
                  ><img
                  src="{{asset('frontend')}}/images/social-icons/Button/Social Icons-3.png"
                  alt="image description"
                /></a>
                </li>
              </ul>
          </div>
        <div class="col">
          <p><a href="#">Privacy policy</a></p>
        </div>
        <div class="col">
          <p><a href="#">Cookie policy</a></p>
        </div>
        <div class="col">
          <p>
            Copyright &copy; 2022 <a href="{{route('/')}}">RRSTEK</a> All rights reserved
          </p>
        </div>
      </div>
    </div>
  </footer>
