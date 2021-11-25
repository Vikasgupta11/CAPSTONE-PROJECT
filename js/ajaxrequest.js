
$(document).ready(function () {
    //Ajax Call from Already Exits Email Verification iccurs after blur i.e when user leaves
    // below functio will run only when key prees 
    $('#stuEmail').on("keypress blur", function () {
        var reg = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

        //   input value from textfeild
        var stuemail = $('#stuEmail').val();

        $.ajax(
            {
                url: 'Student/addStudent.php',
                method: 'POST',
                data: {
                    checkemail: 'Checkmail',
                    stuemail: stuemail,

                },
                success: function (data) {
                    console.log(data);
                    console.log(data);
                    if (data >  0) {
                        $('#statusMsg2').html('<small style="color:red;">This Email Id is Already Used !</small>');
                        $("#signup").attr("disabled", true);

                    } else
                        if (data == 0) {
                            $('#statusMsg2').html('<small style="color:green;">There you go  !</small>');
                            $("#signup").attr("disabled", false);
                        }
                    if (!reg.test(stuemail)) {

                        $('#statusMsg2').html('<small style="color:red;">Enter Valid Email Id  eg. example@gmail.com</small>');


                    }


                },
            }
        );


    });

});












// This funnction is for get data from sign up page  after clicking sign up button
function addStu() {
    var reg = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    var stuname = $("#stuName").val() // val is used to get the value from that #stuname
    var stuemail = $("#stuEmail").val()
    var stupassword = $("#stuPassword").val()

    // checking from Field ar filled or empty.
    if (stuname.trim() == "") {
        $('#statusMsg1').html('<small style="color:red;">Please Enter Name !</small>');
        $('#stuName').focus();
        return false;
    }
    else if (stuemail.trim() == "") {
        $('#statusMsg2').html('<small style="color:red;">Please Enter Email Id !</small>');
        $('#stuEmail').focus();
        return false;
    } else if (!reg.test(stuemail)) {
        $('#statusMsg2').html('<small style="color:red;">Please Enter Valid Email  eg. example@gmail.com !</small>');
        $('#stuEmail').focus();
        return false;
    }

    else if (stupassword.trim() == "") {
        $('#statusMsg3').html('<small style="color:red;">Please Enter Password !</small>');
        $('#stuPassword').focus();
        return false;
    }
    else {
        // Below method is to add data into addstudent.php file from abbove varables 
        $.ajax({

            url: 'Student/addStudent.php',
            method: 'POST',
            dataType:'json',    
            data: {
                signup: "Stusignup",
                stuName: stuname,//<  -- this is local variable
                stuEmail: stuemail,
                stuPassword: stupassword,
            },
            // below funtcion will run only when data is succesfully send to server
            success:function(data){
                console.log("OK");
                if(data=="OK"){
                  
                   $('#successMsg').html("<span class='alert alert-success'>Registration Successfull !</span>");
                   clearStuRegField();
                  
                }
                else {
                    if (data == 'FAILED') {
                        $('#successMsg').html("<span class='alert alert-success'>Registration Failed !</span>");
                    }
                }
            },
        });

    }
}
///Emptyall feilds 

function clearStuRegField() {

    $('#stuRegForm').trigger("reset");
    $('#statusMsg1').html('');
    $('#statusMsg2').html('');
    $('#statusMsg3').html('');

}




///------------Ajax call for  Student Login Verfication--------------------///

// This function will run onli when login button is pressed in define in footer.php unedr login section

function checkStuLogin() {


    var stuLogEmail = $("#stuLogEmail").val();
    var stuLogPass = $("#stuLogPassword").val();
    // console.log(stuLogPass);
    // console.log(stuLogEmail);

    // Sending to ajax i.e  server

    $.ajax(
        {
            url: 'Student/addStudent.php',
              dataType:"json",
            method: "POST",
            data: {
                checklogEmail: "CheckLogmail",
                stuLogEmail: stuLogEmail,
                stuLogPass: stuLogPass,
            },
            success: function (data) {
             console.log(data);
         if(data==0){
             $('#statusLogInBtn').html('<small class=" alert alert-danger">Invalid Email or Password</small>');
         }else if(data==1){
            $('#statusLogInBtn').html('<div class="spinner-border text-success" role="status"> </div>');
setTimeout(()=>{
    window.location.href="index.php";
},1000);

         }
       

            }


        });


}


