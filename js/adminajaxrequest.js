//// Admin Login Verfication




function checkAdminLogin() {


    var adminLogEmail = $("#adminLogEmail").val();
    var adminLogPass = $("#adminLogPassword").val();
// console.log(adminLogEmail);
// console.log(adminLogPass);
  

    // Sending to ajax i.e  server
    $.ajax(
        {
              url: 'Admin/admin.php',
            method: "POST",
            //  dataType:"json",
            data: {
                checklogEmail: "CheckLogmail",
                adminLogEmail: adminLogEmail,
                adminLogPass: adminLogPass,
            },

            success:function (data) {
                console.log("OKK");
             console.log(data);
         if(data <=0 ){
            //  $('#statusAdminLogMsg').html('<small class=" alert alert-danger">Invalid Email or Password</small>');
           

         }else if(true){
            $('#statusAdminLogMsg').html('<small class="alert alert-success">Success Loading....</small>');
setTimeout(()=>{
    window.location.href="Admin/adminDashBoard.php";
},1000);

         }


         }
       

            


        });


}