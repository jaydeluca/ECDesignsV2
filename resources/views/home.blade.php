@include('layouts.head')

<div class="home" id="fullpage">

    <div class="section div-1">

        <div class="nav-header">

            <div class="nav-section nav-side">
            </div>

            <div class="nav-section nav-center">
                <a class="nav-item logo" href="/">
                    <img src="{{ asset('images/v1/1.3-logo.png') }}">
                </a>
            </div>

            <div class="nav-section nav-side">
                <a class="header-text" href="#contact">Contact</a>
            </div>
        </div>

        <div class="div-1--content">

            <div class="div-1--main">
                <a class="c-btn c-btn-ctr" href="/portfolio">
                    View Full Portfolio
                </a>
            </div>

            <div class="div-1--bottom">
                <a class="header-text alt-text" href="#contact">Contact</a>
            </div>

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
            <img style="width: 100px;" src="images/svgs/c1-icon.svg">
            <div class="name"><p>Eric Silva</p></div>
            <img style="width: 30px;" src="images/svgs/ec-phone.svg">
            <p>508.431.3920</p>
            <img style="width: 40px;" src="images/svgs/ec-email.svg">
            <p><a href="mailto:ecthedesignguy@gmail.com">ecthedesignguy@gmail.com</a></p>
            <img style="width: 35px;" src="images/svgs/ec-location.svg">
            <p>Boston, MA / Providence, RI</p>

        </div>
    </div>

</div>
<script>
//  $(document).ready(function() {
//    $('#fullpage').fullpage({
//      //Scrolling
////      css3: true,
////      scrollingSpeed: 700,
//      autoScrolling: true,
//      fitToSection: true,
//      fitToSectionDelay: 1000,
//      scrollBar: false,
////      easing: 'easeInOutCubic',
////      easingcss3: 'ease',
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
////      parallax: true,
//    });
//  });
</script>
@include('layouts.footer')
