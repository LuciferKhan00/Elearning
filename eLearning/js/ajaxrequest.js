$(document).ready(function () {
    //ajax call from already exists email verification
    $("#stuemail").on("keypress blur", function () {

        var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
        var stuemail = $("#stuemail").val();
        $.ajax({
            url: "Student/addstudent.php",
            method: "POST",
            data: {
                checkemail: "checkemail",
                stuemail: stuemail,
            },
            success: function (data) {
                if (data != 0) {
                    $("#statusMsg2").html('<h6 style="color:red;">Email already used!</h6>');
                    $("#signup").attr("disabled", true);

                }
                else if (data == 0 && reg.test(stuemail)) {
                    $("#statusMsg2").html('<h6 style="color:green;">There You GO!</h6>');
                    $("#signup").attr("disabled", false);
                }
                else if (!reg.test(stuemail)) {
                    $("#statusMsg2").html('<h6 style="color:red;">Please Enter Valid Email e.g. example@gmail.com</h6>');
                    $("#signup").attr("disabled", false);

                }
            },
        });
    });


});


function addStu() {

    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    var stuname = $("#stuname").val();
    var stuemail = $("#stuemail").val();
    var stupass = $("#stupass").val();

    ///checking form fields on form submission

    if (stuname.trim() == "") {
        $("#statusMsg1").html('<h6 style="color:red;">Please Enter Name!</h6>');

        $("#stuname").focus();
        return false;

    }

    else if (stuemail.trim() == "") {
        $("#statusMsg2").html('<h6 style="color:red;">Please Enter Email!</h6>');

        $("#stuemail").focus();
        return false;
    }
    else if (stuemail.trim() != "" && !reg.test(stuemail)) {
        $("#statusMsg2").html('<h6 style="color:red;">Please Enter Valid Email e.g. example@gmail.com</h6>');

        $("#stuemail").focus();
        return false;
    }

    else if (stupass.trim() == "") {
        $("#statusMsg3").html('<h6 style="color:red;">Please Enter Password!</h6>');

        $("#stupass").focus();
        return false;
    }
    else {
        $.ajax({
            url: 'Student/addstudent.php',
            method: 'POST',
            dataType: "json",
            data: {
                // stusignup: "stusignup",
                stuname: stuname,
                stuemail: stuemail,
                stupass: stupass
            },
            success: function (data) {
                console.log(data);
                if (data == "OK") {
                    $('#successMsg').html("<span class='alert alert-success'>Registration Successful!</span>");
                    clearStuRegField();
                }

                else if (data == "Failed") {
                    $('#successMsg').html("<span class='alert alert-danger'>Unable to Register</span>");
                }
            },
        });
    }



}

//empty all fields
function clearStuRegField() {
    $("#stuRegForm").trigger("reset");

    $("#stuname").val("");   // Clear the value of the name field
    $("#stuemail").val("");  // Clear the value of the email field
    $("#stupass").val("");
    $("#successMsg").val("");
    $("#statusMsg1").html(" ");
    $("#statusMsg2").html(" ");
    $("#statusMsg3").html(" ");
    $("#successMsg").val("");

}

//ajax call for student login verification
function checkStuLogin() {

    var stuLogEmail = $("#stuLogemail").val();
    var stuLogPass = $("#stuLogpass").val();
    $.ajax({
        url: 'Student/addstudent.php',
        method: "POST",
        data: {
            checkLogemail: "checklogmail",
            stuLogEmail: stuLogEmail,
            stuLogPass: stuLogPass,
        },
        success: function (data) {

            if (data == 0) {
                $("#statusLogMsg").html('<small class="alert alert-danger">Invalid Email ID or Password !</small>');
            }
            else if (data == 1) {
                $("#statusLogMsg").html(
                    '<div class="spinner-border text-success" role="status"></div>');
                setTimeout(() => {
                    window.location.href = "index.php";
                }, 1000);
            }

        },

    });

}
