
                $(document).ready(function(){
                    $(".form-inscription").focus(function(){
                        $("#status").fadeOut(800);
                    });

                    $("#password").keyup(function(){
                        //On vérifie si le mot de passe est ok
                            if($(this).val().length < 6){
                                $("#output_pass1").css("color", "red").html("<br/>Trop court (6 caractères minimum)");
                            } else if($("#confirmedpass").val() != "" && $("#confirmedpass").val() != $("#password").val()){
                                $("#output_pass1").html("<br/>Les deux mots de passe sont différents");
                                $("#output_pass2").html("<br/>Les deux mots de passe sont différents");
                            } else {
                                $("#output_pass1").html('<img src="../assets/img/check.png" class="small_image" alt="" />');
                            }
                    });
                    function getXhr() {
                                                var xhr = null;
                                                if (window.XMLHttpRequest) // Firefox et autres
                                                    xhr = new XMLHttpRequest();
                                                else if (window.ActiveXObject) { // Internet Explorer 
                                                    try {
                                                        xhr = new ActiveXObject("Msxml2.XMLHTTP");
                                                    } catch (e) {
                                                        xhr = new ActiveXObject("Microsoft.XMLHTTP");
                                                    }
                                                } else { // XMLHttpRequest non support par le navigateur 
                                                    alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest...");
                                                    xhr = false;
                                                }
                                                return xhr;
                                            }
                    $("#email").keyup(function(){
                        //On vérifie si les mots de passe coïncident
                            check_email();
                    });
                    function check_email(){
                    var email=$("#email").val();
                                var xhr = getXhr();
                                                // On dfini ce qu'on va faire quand on aura la rponse
                                                xhr.onreadystatechange = function () {
                                                    // On ne fait quelque chose que si on a tout reu et que le serveur est ok
                                                    if (xhr.readyState == 4 && xhr.status == 200) {

                                                        leselect = xhr.responseText;
                                                        if(leselect==="success"){
                                                         $("#output_email").html('<img src="../assets/img/check.png" class="small_image" alt="" />');
                                                        } 
                                                        else {
                                                        // On se sert de innerHTML pour rajouter les options a la liste
                                                        $("#output_email").css("color", "red");
                                                        document.getElementById('output_email').innerHTML = leselect;
                                                            }

                                                    }
                                                }

                                                // Ici on va voir comment faire du post
                                xhr.open("POST", "../Controller/validationController.php" , true);
                                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                                xhr.send("email_check="+email)
                                


                            /*$.ajax({
                                type: "post",
                                url:  "validationController.php",
                                data: {
                                    'email_check' : $("#email").val()
                                },
                                success: function(data){
                                            if(data == "success"){
                                                $("#output_email").html('<img src="../assests/img/check.png" class="small_image" alt="" />');
                                            } else {
                                                $("#output_email").css("color", "red").html(data);
                                            }
                                         }
                            });*/
                            
                            
                            
                    }
                    

                });
                   