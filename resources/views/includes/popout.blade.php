<div id="overlay">
    <div id="popout">
        <span id="close-popout">&times;</span>
        <div id="popout-header">
            <h3 style="font-weight: 900;" class="text-white">Subscribe And Get Awesome Freebies!</h3>
        </div>
        <div style="display: flex" class="row">
            <div class="px-5 py-3 col-12 col-md-6 text-center" >
                <img src="{{ URL::to('/') }}/images/popout-img.png">
            </div>
            <div class="col-12 col-md-6">
                <form class="mt-2 pb-4" id="popout-form">
                    <div class="form-group text-center">
                        <input type="text" class="popout-input" name="first_name" placeholder="First Name" required>
                    </div>
                    <div class="form-group text-center">
                        <input type="text" class="popout-input" name="last_name" placeholder="Last Name" required>
                    </div>
                    <div class="form-group text-center">
                        <input type="email" class="popout-input" name="email" placeholder="Email Address" required>
                    </div>
                    <div class="form-group text-center">
                        <button id="popout-subscribe-btn" class="popout-input square-action-button">Subscribe</button>
                    </div>
                </form>
            <div id="subscription-message" class="last-minute-dark-blue">Thank you for subscribing!!</div>
            </div>
        </div>
    </div>
</div>
