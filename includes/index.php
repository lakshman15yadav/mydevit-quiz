<?php // Silence is golden ?>
    <div class="outer-form d-flex">
    <div class="milage-calulator">
        <h1 class="calc-heading">Let’s build your annual mileage deduction</h1>

        <form id="estimateForm" action="/submit_form" method="POST">
            <div class="form-content">
                <div class="estimate-build-feild">
                    <label>How do you want to build your estimate?</label><br>
                    <div class="estimate-build-input">
                        <div>
                            <input type="radio" id="miles" name="estimate-method" value="miles">
                            <label for="miles">Miles</label><br>
                        </div>
                        <div>
                            <input type="radio" id="trips" name="estimate-method" value="trips">
                            <label for="trips">Trips</label><br>
                        </div>
                        <div>
                            <input type="radio" id="hours" name="estimate-method" value="hours">
                            <label for="hours">Hours</label><br><br>
                        </div>
                    </div>
                </div>

                <div class="hours-do-you-drive">
                    <label for="hours-do-you-drive">How many (hours do you drive) on average every week?</label><br>
                    <input type="number" id="hours-do-you-drive" name="hours-do-you-drive" placeholder="Please enter your hours..." min="0" max="150" required><br><br>
                </div>

                <div class="gig-work-feild">
                    <label>What kind of gig work do you do?</label><br>
                    <div class="gig-work-input">
                        <div>
                            <input type="radio" id="rideshare" name="gig-work" value="rideshare">
                            <label for="rideshare">Rideshare</label><br>
                        </div>
                        <div>
                            <input type="radio" id="delivery" name="gig-work" value="delivery">
                            <label for="delivery">Delivery</label><br>
                        </div>
                        <div>
                            <input type="radio" id="grocery" name="gig-work" value="grocery">
                            <label for="grocery">Grocery</label><br>
                        </div>
                        <div>
                            <input type="radio" id="courier-parcel" name="gig-work" value="courier-parcel">
                            <label for="courier-parcel">Courier / Parcel</label><br><br>
                        </div>
                    </div>
                </div>

                <div class="tax-year-feild">
                    <label for="tax-year">Tax year</label><br>
                    <select id="tax-year" name="tax-year">
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                    </select><br><br>
                </div>

                <div class="location-feild">
                    <label for="where-do-you-work">Where do you work?</label><br>
                    <input type="text" id="where-do-you-work" name="work-location" placeholder="Enter city name" required><br><br>
                </div>

                <div class="email-feild">
                    <input type="email" id="email" name="email" placeholder="Add your email address" required><br><br>
                </div>

                <div class="calculate-btn">
                    <input type="submit" value="Calculate">
                </div>

            </div>
        </form>
        <p id="successMessage" class="success-message">Form submitted successfully!</p>

    </div>
</div>


<div class="graph-outer">
    <div class="graph-box">
        <dix class="graph-content">
            <div class="topbar">
                <h1 class="title">$####</h1>
                <p>Potential annual deduction with Gridwise mileage tracking</p>
            </div>
            <div class="bottom-bar">
                <h1 class="sub-title">$####</h1>
                <p>Annual deduction without Gridwise mileage tracking</p>
            </div>
        </dix>
        <dix class="graph">
            <div class="circular-progress">
                <div class="inner-circle">
                    <span id="progress-value">0%</span>
                </div>
            </div>

        </dix>

    </div>
</div>