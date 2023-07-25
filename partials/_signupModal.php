<!-- Modal-->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signupModalLabel">Signup for an Discuss Account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/forum/partials/_handleSignup.php" method="post" onsubmit = "return validateform()">
                <div class="modal-body">
                        <div class="form-group">
                            <label for="username">Name</label>
                            <input type="text" maxlength="25" class="form-control" id="username" name="username" Required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email" class="control-label">Email</label>
                            <input type="email" maxlength="100" class="form-control" id="email" name="signupEmail" Required>
                        </div>
                        <div class="form-group">
                            <label for="password" class="control-label">Password</label>
                            <input type="password" maxlength="50" class="form-control" id="password" name="signupPassword" Required>
                        </div>
                        <div class="form-group">
                            <label for="cpassword" class="control-label">Confirm Password</label>
                            <input type="password" maxlength="50" class="form-control" id="cpassword"id="cpassword" name="signupcPassword" Required>
                        </div>
                        <button class="button btn btn-info btn-sm">Create</button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>

                <style>
                #uni_modal .modal-footer {
                    display: none;
                }
                </style>
            </form>
        </div>
    </div>
</div>

<!--<script>
(function() {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
        .forEach(function(form) {
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
})()
</script>
<script>
$('#signup-frm').submit(function(e) {
    e.preventDefault()
    $(".alert").alert('close')
    var NameRegex = /^[a-zA-Z\s]*$/;
    var PasswordRegex = /^[A-Za-z]\w{7,15}$/;
    const signupEmail = $("#signupEmail").val();
    const signupPassword = $("#signupPassword").val()
    if (!NameRegex.test(name)) {
        console.log('not valid')
        $('#signup-frm').prepend(
            '<div class="alert alert-danger">Name should only contain letters </div>')

        return
    }
    if (!PasswordRegex.test(signupPassword)) {
        $('#signup-frm').prepend(
            '<div class="alert alert-danger">Password should contain only characters, numeric digits, underscore and first character must be a letter</div>'
        )
        return

    }
    console.log('pl', password.length)
    if (password.length < 7 or password.length > 16) {
        $('#signup-frm').prepend(
            '<div class="alert alert-danger">Password should be between 7 to 16 characters</div>')
        return

    }
})
</script>-->

<script>
(function() {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
        .forEach(function(form) {
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
})()
</script>
<script>
function validateform() {
    e.preventDefault()
    $(".alert").alert('close')
    var NameRegex = /^[a-zA-Z\s]*$/;
    const name = $("#name").val();
    const password = $("#password").val()
    const cpassword = $("#password").val()
    if (!NameRegex.test(name)) {
        console.log('not valid')
        $('#signup-frm').prepend(
            '<div class="alert alert-danger">Name should only contain letters </div>')

        return
    }
    console.log('pl', password.length)
    if (password.length < 6) {
        $('#signup-frm').prepend(
            '<div class="alert alert-danger">Password must be atleast 6 characters</div>')
        return

    }
    if (password!= cpassword) {
        $('#signup-frm').prepend(
            '<div class="alert alert-danger">Password does not match!! </div>')
        return

    }
})
</script>


<!--
<script>
(function() {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
        .forEach(function(form) {
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
})()
</script>
<script>
$('#signup-frm').submit(function(e) {
    e.preventDefault()
    $(".alert").alert('close')
    var NameRegex = /^[a-zA-Z\s]*$/;
    var ContactRegex = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
    const name = $("#name").val();
    const contact = $("#contact").val();
    const password = $("#password").val()
    if (!NameRegex.test(name)) {
        console.log('not valid')
        $('#signup-frm').prepend(
            '<div class="alert alert-danger">Name should only contain letters </div>')

        return
    }
    if (!ContactRegex.test(contact)) {
        $('#signup-frm').prepend(
            '<div class="alert alert-danger">Contact should not contain any letters</div>')
        return

    }
    console.log('pl', password.length)
    if (password.length < 6) {
        $('#signup-frm').prepend(
            '<div class="alert alert-danger">Password must be atleast 6 characters</div>')
        return

    }
})
</script>-->