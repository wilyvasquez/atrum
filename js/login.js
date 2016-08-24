$(document).ready(function(){

                $("#login_a").click(function(){    
                    $("#shadow").fadeIn("normal");
                    $("#login_form").fadeIn("normal");
                    $("#user_name").focus();
                });

                $("#cancel_hide").click(function(){
                    $("#login_form").fadeOut("normal");
                    $("#shadow").fadeOut();
                });

                $("#login").click(function(){

                    var username=$('#user_name').val();
                    var password=$('#password').val();

                    $.ajax({
                        type: "POST",
                        url: "login.php",
                        data: "name="+username+"&pwd="+password,
                        success: function(html){

                            if(html=='true'){
                                $("#login_form").fadeOut("normal");
                                $("#shadow").fadeOut();
                                $("#profile").html("<a href='logout.php' id='logout'>Logout</a>");
                            }
                            else{
                                $("#add_err").html("*Wrong username or password");
                            }
                        },
                        beforeSend:function(){
                            $("#add_err").html("Loading...")
                        }
                    });
                return false;
                });
            });