function addStu(){
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    var stuname = $("#stuname").val();
    var stuemail = $("#stuname").val();
    var stupass = $("#stuname").val();

    //checking for fields on form submission
    if(stuname.trim()==""){
        $("#statusMsg1").html('<small style="color:red;">Please Enter Name!</small>');
        $("#stuname").focus();
        return false;
    } else if (stuemail.trim()==""){
        $("#statusMsg2").html('<small style="color:red;">Please Enter Email!</small>');
        $("#stuemail").focus();
        return false;
    } else if(stuemail.trim() != "" && !reg.test(stuemail)){
        $("#statusMsg2").html('<small style="color:red;">Please Enter Valid Email e.g example@mail.com!</small>');
        $("#stuemail").focus();
        return false;
    } else if (stupass.trim()==""){
        $("#statusMsg3").html('<small style="color:red;">Please Enter Password!</small>');
        $("#stupass").focus();
        return false;
    } else{
        $.ajax({
            url:'Student/addstudent.php',
            method: 'POST',
            dataType:"json",
            data:{
                stusignup:"stusignup",
                stuname = stuname,
                stuemail = stuemail,
                stupass = stupass,
            },
            success:function(data){
                console.log(data);
                if(data=="OK"){
                $('#successMsg').html("<span class='alert alert-success'>Registration Successful!</span>");
                clearStuRegField();
                } else if(data=="Failed"){
                    $('#successMsg').html("<span class='alert alert-danger'>Unable to Register</span>");
                }
            },
        });
    }
}
//Empty all fields 
function clearStuRegField(){
    $("stuRegForm").trigger("reset");
    $("#statusMsg1").html(" ");
    $("#statusMsg2").html(" ");
    $("#statusMsg3").html(" ");
}