<?php
include "layouts/header.php";
?>

<style>
    .form-container{
        display:flex;
        flex-wrap:wrap;
        gap: 10px;
    }
    .form-group{
        flex:1 0 280px;
    }
    #goalball-registration{
        margin:30px auto;
    }
    h3{
        margin: 10px auto;
    }
</style>

<section>
    <div class="w-100 pt-100 black-layer opc5 pb-80 position-relative">
        <div class="fixed-bg" style="background-image: url(assets/images/pag-top-bg.jpg);"></div>
        <div class="container">
            <div class="page-title-wrap text-center w-100">
                <div class="page-title-inner d-inline-block">
                    <h1 class="mb-0">About Us</h1>
                    <ol class="breadcrumb mb-0 justify-content-center">
                        <li class="breadcrumb-item"><a href="index" title="">Home</a></li>
                        <li class="breadcrumb-item ">Athletes</li>
                    </ol>
                </div>
            </div><!-- Page Title Wrap -->
        </div>
    </div>
</section>
<section id="goalball-registration">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="form-buttons">
                    <button type="button" class="btn btn-primary" id="show-goalball-athlete-form">Goalball Athlete
                        Registration</button>
                    <button type="button" class="btn btn-primary" id="show-goalball-volunteer-form">Goalball Volunteer
                        Registration</button>
                    <button type="button" class="btn btn-primary" id="show-support-sponsorship-form">Support &
                        Sponsorship Form</button>
                </div>

                <!-- Goalball Athlete Registration Form -->
                <div id="athlete-registration-form" class="goalball-form" style="display:none;">
                    <h3>Goalball Athlete Registration Form</h3>
                    <form id="athlete-form" enctype="multipart/form-data">
                        <div class="form-container">
                        <div class="form-group">
                            <label for="full-name">Full Name</label>
                            <input type="text" class="form-control" id="full-name" name="full_name" required>
                        </div>
                        <div class="form-group">
                            <label for="age">Age</label>
                            <input type="number" class="form-control" id="age" name="age" required>
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <select class="form-control" id="gender" name="gender">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="city-state">City & State</label>
                            <input type="text" class="form-control" id="city-state" name="city_state" required>
                        </div>
                        <div class="form-group">
                            <label for="visual-impairment">Type of Visual Impairment</label>
                            <select class="form-control" id="visual-impairment" name="visual_impairment">
                                <option value="Total">Total</option>
                                <option value="Partial">Partial</option>
                                <option value="Low Vision">Low Vision</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="mobile-number">Mobile Number</label>
                            <input type="text" class="form-control" id="mobile-number" name="mobile_number" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="played-before">Have you played Goalball before?</label>
                            <select class="form-control" id="played-before" name="played_before">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="playing-level">Playing Level</label>
                            <select class="form-control" id="playing-level" name="playing_level">
                                <option value="School">School</option>
                                <option value="District">District</option>
                                <option value="State">State</option>
                                <option value="National">National</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="disability-certificate">Upload Disability Certificate</label>
                            <input type="file" class="form-control" id="disability-certificate"
                                name="disability_certificate" accept=".pdf,.jpg" required>
                        </div>
                        <div class="form-group">
                            <label for="passport-photo">Upload Passport-size Photo</label>
                            <input type="file" class="form-control" id="passport-photo" name="passport_photo"
                                accept=".jpg,.jpeg,.png" required>
                        </div>
                        </div>
                        <div style="
                        display:flex;
                        margin:10px auto;
                        margin: 10px auto;

                        padding: 0;
                        flex-direction: column;
                        " class="form-group form-check ">
                            <input type="checkbox" class="form-check-input" id="declaration-athlete" required>
                            <label class="form-check-label" for="declaration-athlete">I confirm that the information
                                provided is true and I am willing to participate under the rules of Goalball Federation
                                of India.</label>
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>

                <!-- Goalball Volunteer Registration Form -->
                <div id="volunteer-registration-form" class="goalball-form" style="display:none;">
                    <h3>Goalball Volunteer Registration Form</h3>
                    <form id="volunteer-form" enctype="multipart/form-data">
                        <div class="form-container">
                            
                        <div class="form-group">
                            <label for="volunteer-name">Full Name</label>
                            <input type="text" class="form-control" id="volunteer-name" name="volunteer_name" required>
                        </div>
                        <div class="form-group">
                            <label for="volunteer-age">Age</label>
                            <input type="number" class="form-control" id="volunteer-age" name="volunteer_age" required>
                        </div>
                        <div class="form-group">
                            <label for="volunteer-gender">Gender</label>
                            <select class="form-control" id="volunteer-gender" name="volunteer_gender">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="volunteer-city-state">City & State</label>
                            <input type="text" class="form-control" id="volunteer-city-state"
                                name="volunteer_city_state" required>
                        </div>
                        <div class="form-group">
                            <label for="volunteer-mobile">Mobile Number</label>
                            <input type="text" class="form-control" id="volunteer-mobile" name="volunteer_mobile"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="volunteer-email">Email Address</label>
                            <input type="email" class="form-control" id="volunteer-email" name="volunteer_email">
                        </div>
                        <div class="form-group">
                            <label for="preferred-role">Preferred Role</label>
                            <select class="form-control" id="preferred-role" name="preferred_role">
                                <option value="Athlete Assistance">Athlete Assistance</option>
                                <option value="Event Support">Event Support</option>
                                <option value="Registration">Registration</option>
                                <option value="Technical Help">Technical Help</option>
                                <option value="Media (Photo/Video)">Media (Photo/Video)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="availability">Availability</label>
                            <select class="form-control" id="availability" name="availability">
                                <option value="Full Day">Full Day</option>
                                <option value="Half Day">Half Day</option>
                                <option value="As Needed">As Needed</option>
                            </select>
                        </div>
                        </div>
                        <div style="
                        display:flex;
                        margin:10px auto;
                        margin: 10px auto;

                        padding: 0;
                        flex-direction: column;
                        " class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="declaration-volunteer" required>
                            <label class="form-check-label" for="declaration-volunteer">I agree to volunteer with the
                                Goalball Federation of India and follow all instructions given during the
                                event/camp.</label>
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>

                <!-- Support & Sponsorship Form -->
                <div id="support-sponsorship-form" class="goalball-form" style="display:none;">
                    <h3>Support & Sponsorship Form</h3>
                    <form id="support-form" enctype="multipart/form-data">
                        <div class="form-container">
                            
                        <div class="form-group">
                            <label for="support-name">Full Name / Organization Name</label>
                            <input type="text" class="form-control" id="support-name" name="support_name" required>
                        </div>
                        <div class="form-group">
                            <label for="contact-person">Contact Person (if applicable)</label>
                            <input type="text" class="form-control" id="contact-person" name="contact_person">
                        </div>
                        <div class="form-group">
                            <label for="support-mobile">Mobile Number</label>
                            <input type="text" class="form-control" id="support-mobile" name="support_mobile" required>
                        </div>
                        <div class="form-group">
                            <label for="support-email">Email Address</label>
                            <input type="email" class="form-control" id="support-email" name="support_email" required>
                        </div>
                        <div class="form-group">
                            <label for="support-city-state">City & State</label>
                            <input type="text" class="form-control" id="support-city-state" name="support_city_state"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="nature-of-interest">Nature of Interest</label>
                            <select class="form-control" id="nature-of-interest" name="nature_of_interest">
                                <option value="Sponsorship">Sponsorship</option>
                                <option value="Donation">Donation</option>
                                <option value="In-kind Support">In-kind Support</option>
                                <option value="Collaboration">Collaboration</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="area-of-interest">Area of Interest</label>
                            <select class="form-control" id="area-of-interest" name="area_of_interest">
                                <option value="Branding">Branding</option>
                                <option value="Advertisement">Advertisement</option>
                                <option value="Supporting Athletes">Supporting Athletes</option>
                                <option value="Training Camps">Training Camps</option>
                                <option value="Events">Events</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="support-message">Message</label>
                            <textarea class="form-control" id="support-message" name="support_message"
                                rows="1"></textarea>
                        </div>
                        </div>
                        <div style="
                        display:flex;
                        margin:10px auto;
                        margin: 10px auto;

                        padding: 0;
                        flex-direction: column;
                        " class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="declaration-support" required>
                            <label class="form-check-label" for="declaration-support">I/we are interested in supporting
                                the Goalball Federation of India and look forward to further discussion.</label>
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include 'layouts/footer.php';
?>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Form navigation
    document.getElementById('show-goalball-athlete-form').addEventListener('click', function() {
        toggleForms('athlete-registration-form');
    });

    document.getElementById('show-goalball-volunteer-form').addEventListener('click', function() {
        toggleForms('volunteer-registration-form');
    });

    document.getElementById('show-support-sponsorship-form').addEventListener('click', function() {
        toggleForms('support-sponsorship-form');
    });

    function toggleForms(activeFormId) {
        const allForms = document.querySelectorAll('.goalball-form');
        allForms.forEach(function(form) {
            form.style.display = 'none';
        });

        document.getElementById(activeFormId).style.display = 'block';
    }

    // Form submission with AJAX
    const athleteForm = document.getElementById('athlete-form');
    const volunteerForm = document.getElementById('volunteer-form');
    const supportForm = document.getElementById('support-form');

    if (athleteForm) {
        athleteForm.addEventListener('submit', function(event) {
            event.preventDefault();
            submitForm(athleteForm, 'athlete-registration');
        });
    }

    if (volunteerForm) {
        volunteerForm.addEventListener('submit', function(event) {
            event.preventDefault();
            submitForm(volunteerForm, 'volunteer-registration');
        });
    }

    if (supportForm) {
        supportForm.addEventListener('submit', function(event) {
            event.preventDefault();
            submitForm(supportForm, 'support-sponsorship');
        });
    }

    function submitForm(form, formType) {
        const formData = new FormData(form);
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'submit_form.php', true);
        xhr.onload = function() {
            if (xhr.status === 200) {
                alert(formType + ' submitted successfully');
                form.reset();
            } else {
                alert('Error submitting form');
            }
        };
        xhr.send(formData);
    }
    toggleForms('athlete-registration-form')
});
</script>