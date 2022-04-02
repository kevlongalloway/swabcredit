<div class="bg-hue-light">
    <form class="p-5 cgray" action="">
        <div class="contactrow">
            <div class="col-25">
                <label for="fname">{{ __('First Name') }}</label>
            </div>
            <div class="col-75">
                <input type="text" id="fname" name="firstname" placeholder="First Name">
            </div>
        </div>
        <div class="contactrow">
            <div class="col-25">
                <label for="lname">{{ __('Last Name') }}</label>
            </div>
            <div class="col-75">
                <input type="text" id="lname" name="lastname" placeholder="Last Name">
            </div>
        </div>
        <div class="contactrow">
            <div class="col-25">
                <label for="serviceType">{{ __('Select a Service') }}</label>
            </div>
            <div class="col-75">
                <select id="serviceType" name="serviceType">
                    <option value="credit_restoration">Credit Restoration</option>
                    <option value="rental_repair">Rental Repair</option>
                    <option value="cpn_rofile">CPN Profile</option>
                    <option value="other">Other</option>
                </select>
            </div>
        </div>
        <div class="contactrow">
            <div class="col-25">
                <label for="message">{{ __('Message') }}</label>
            </div>
            <div class="col-75">
                <textarea id="message" name="message" placeholder="Write something.." style="height:200px"></textarea>
            </div>
        </div>
        <br>
        <div class="contactrow d-flex justify-content-center">
            <input class="btn-warning btn" type="submit" value="Submit">
        </div>
    </form>
</div>