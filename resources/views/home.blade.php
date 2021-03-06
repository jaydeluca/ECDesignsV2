@include('layouts.head')

<div class="home" id="app">

    <div class="section div-1">

        @include('layouts.nav')

        <div class="div-1--content">
            <div class="div-1--main">
                <a class="c-btn c-btn-ctr" href="/portfolio">
                    View Full Portfolio
                </a>
            </div>
        </div>
    </div>

    <div class="section matchcut">
        <div class="matchcut--content">
            <p>
                MATCH-CUT ADS
            </p>
            <a class="c-btn" @click="homePageModal('/images/portfolio/matchcut-i.jpg')">
                View Campaign
            </a>
        </div>
    </div>

    <div class="section symphony">
        <div class="symphony--content">
            <p>
                SYMPHONY
            </p>
            <a class="c-btn" @click="homePageModal('/images/portfolio/symphony-i.jpg')">
                View Branding
            </a>
        </div>
    </div>


    <div class="section div-2">
        <div class="div-2--content">
            <p>
                Guinness<br>
                By The Numbers
            </p>
            <a class="c-btn" @click="homePageModal('/images/portfolio/1-guinness.jpg')">
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

    <modal :show-modal="showModal" @close-modal="closeModal">
        <img :src="portfolioURL">
    </modal>

</div>
@include('layouts.footer')
