document.addEventListener("DOMContentLoaded", function () {
    // Below is For Events Checking


    const checkboxes = document.querySelectorAll('.event-checkbox');
    const maxAllowed = 3;

    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function () {
            const checkedCheckboxes = document.querySelectorAll('.event-checkbox:checked');
            if (checkedCheckboxes.length >= maxAllowed) {
                checkboxes.forEach(box => {
                    if (!box.checked) {
                        box.disabled = true;
                    }
                });
            } else {
                checkboxes.forEach(box => {
                    box.disabled = false;
                });
            }
        });
    });


    // Above is For Events Checking
    document.getElementById("registrationForm").addEventListener("submit", function (event) {
        event.preventDefault();
        if (validateForm(this)) {
            this.submit();
        }
    });
});

function validateForm(form) {
    var name = form["name"].value;
    var educationQualification = form["education_qualification"].value;
    var year = form["year"].value;
    var dob = form["dob"].value;
    var gender = form.querySelector('input[name="gender"]:checked').value;
    var collegeName = form["college_name"].value;
    var phoneNo = form["phone_no"].value;
    var emailId = form["email_id"].value;
    var events = form.querySelectorAll('input[name="events[]"]:checked');
    var dateOfRegistration = form["date_of_registration"].value;

    if (name == "" || educationQualification == "" || year == "" || dob == "" || gender == "" || collegeName == "" || phoneNo == "" || emailId == "" || events.length == 0 || dateOfRegistration == "") {
        alert("All fields must be filled out");
        return false;
    }
    return true;
}
