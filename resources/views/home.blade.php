@include('layouts.head')

<div class="home">

    <div class="section div-1">
        @include('layouts.nav')
        <div class="div-1--content">
            <a class="c-btn" href="/portfolio">
                View Full Portfolio
            </a>
        </div>
    </div>

    <div class="section div-2">
        <div class="div-2--content">
            <p>
                Guinness<br>
                By The Numbers
            </p>
            <a class="c-btn">
                View Infographic
            </a>
        </div>
    </div>

    <div class="section div-3">
        <div class="div-3--content">
            <p>
                Veridium
            </p>
            <a class="c-btn">
                View Branding Package
            </a>
        </div>
    </div>

    <div class="section div-4">
        <div class="div-4--content">
            <p>
                Belichick's Patriots<br>
                VS. The NFL
            </p>
            <a class="c-btn">
                View Infographic
            </a>
        </div>
    </div>

    <div class="section div-contact" id="contact">
        <div class="div-contact--content">
            {{--<img src="images/1-Home/5.2-c-logo.png">--}}
            <div class="name"><p>Eric Silva</p></div>
            {{--<img src="images/1-Home/5.3-c-phone.png">--}}
            <p>508.431.3920</p>
            {{--<img src="images/1-Home/5.4-c-email.png">--}}
            <p><a href="mailto:ecthedesignguy@gmail.com">ecthedesignguy@gmail.com</a></p>
            {{--<img src="images/1-Home/5.5-c-location.png">--}}
            <p>North Attleboro, MA 02760</p>

        </div>
    </div>

</div>
<script>
//  $(document).ready(function() {
//    $('#fullpage').fullpage({
//      //Scrolling
//      css3: true,
//      scrollingSpeed: 700,
//      autoScrolling: true,
//      fitToSection: true,
//      fitToSectionDelay: 1000,
//      scrollBar: false,
//      easing: 'easeInOutCubic',
//      easingcss3: 'ease',
//      loopBottom: false,
//      loopTop: false,
//      loopHorizontal: true,
//      continuousVertical: false,
//      continuousHorizontal: false,
//      scrollHorizontally: false,
//      interlockedSlides: false,
//      dragAndMove: false,
//      offsetSections: false,
//      resetSliders: false,
//      fadingEffect: false,
//      normalScrollElements: '#element1, .element2',
//      scrollOverflow: false,
//      scrollOverflowReset: false,
//      scrollOverflowOptions: null,
//      touchSensitivity: 15,
//      normalScrollElementTouchThreshold: 5,
//
//      //Accessibility
//      keyboardScrolling: true,
//
//      //Design
//      controlArrows: true,
//      parallax: true,
//    });
//  });
</script>
@include('layouts.footer')
