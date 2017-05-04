@include('layouts.head')

<div id="app" class="home">

    <div class="section div-1">
        @include('layouts.nav')
        <div class="div-1--content">
            <a class="c-btn">
                View Full Portfolio
            </a>
        </div>
    </div>

    <div class="section div-2" id="guinness">
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

    <div class="section div-contact">
        <div class="div-contact--content">
            <img src="images/1-Home/5.2-c-logo.png">
            <div class="name"><p>Eric Silva</p></div>
            <img src="images/1-Home/5.3-c-phone.png">
            <p>508.431.3920</p>
            <img src="images/1-Home/5.4-c-email.png">
            <p><a href="mailto:ecthedesignguy@gmail.com">ecthedesignguy@gmail.com</a></p>
            <img src="images/1-Home/5.5-c-location.png">
            <p>North Attleboro, MA 02760</p>

        </div>
    </div>

</div>

@include('layouts.footer')