

                        


                        window.fbAsyncInit = function () {
                            FB.init({
                                appId: '1745416802412446',
                                xfbml: true,
                                version: 'v2.7'
                            });

                            FB.getLoginStatus(function (response) {
                                if (response.status === 'connected') {
                                    document.getElementById('themeConfig').style.visibility = 'hidden';

                                    //document.getElementById('login').style.visibility = 'hidden';
                                } else if (response.status === 'not_authorized') {
                                    //document.getElementById('status').innerHTML = 'We are not logged in.'
                                } else {
                                    //document.getElementById('status').innerHTML = 'You are not logged into Facebook.';
                                }
                            });
                        };

                        (function (d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) {
                                return;
                            }
                            js = d.createElement(s);
                            js.id = id;
                            js.src = "//connect.facebook.net/en_US/sdk.js";
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));

                        function login() {
                            FB.login(function (response) {
                                if (response.status === 'connected') {
                                    $(".content-area").load("Views/search.php");
                                    getInfo();

                                } else if (response.status === 'not_authorized') {
                                    //document.getElementById('status').innerHTML = 'We are not logged in.'
                                } else {
                                    //document.getElementById('status').innerHTML = 'You are not logged into Facebook.';
                                }
                            }, {scope: 'publish_actions'});
                        }

                        // getting basic user info
                        function getInfo() {
                            FB.api('/me', 'GET', {fields: 'first_name,last_name,email,gender,birthday,bio,hometown,education,quotes,cover,work,devices'}, function (response) {
                                var fa = $('<i />')
                                        .addClass('fa fa-user');
                                $('last_name').append(fa);
                                if (window.XMLHttpRequest) {
                                    // code for IE7+, Firefox, Chrome, Opera, Safari
                                    xmlhttp = new XMLHttpRequest();
                                } else {
                                    // code for IE6, IE5
                                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                                }
                                
                                xmlhttp.open("GET", "Controller/session.php?moyen=" + 'facebook' + "&id=" + response.id + "&last_name=" + response.last_name + "&first_name=" + response.first_name + "&email=" + response.email + "&gender=" + response.gender + "&birthday=" + response.birthday + "&bio=" + response.bio + "&hometown=" + response.hometown + "&education=" + response.education + "&quotes=" + response.quotes + "&cover=" + response.cover + "&work=" + response.work + "&devices=" + response.devices, true);
                                xmlhttp.send();
                                document.getElementById('last_name').innerHTML = response.last_name + "  " + response.first_name;




                            });
                        }

                        // posting on user timeline
                        function post() {
                            FB.api('/me/feed', 'post', {message: 'my first status...'}, function (response) {
                                //document.getElementById('status').innerHTML = response.id;
                            });
                        }


                        function inscription_makook() {
                            

                            var $this = $(this);
                            var status = $("#status"); // L'objet jQuery du formulaire  confirmedpass  password region numphone email
                            var name = $('#nam').val();
                            var confirmedpass = $('#confirmedpass').val();
                            var password = $('#password').val();
                            var password2= $('#confirmedpass').val();
                            var region = $('#region').val();
                            var numphone = $('#numphone').val();
                            var email = $('#email').val();
                            var id = Math.floor((1000000)*Math.random()+1);
                            if(name == "" || numphone == "" || region == "" || password == "" || password2 == "" || email == "" ){
                            status.html("Veuillez remplir tous les champs").fadeIn(400);
                            }
                            else if(password != password2) {
                            status.html("Les deux mots de passe sont différents").fadeIn(400);
                            }
                            else {
                                if (window.XMLHttpRequest) {
                                xmlhttp = new XMLHttpRequest();
                            } else {
                                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                            }
                            xmlhttp.open("GET", "../Controller/session.php?moyen=" + 'makook' + "&id=" + id + "&last_name=" + name + "&first_name=" + name + "&email=" + email + "&numphone=" + numphone + "&region=" + region + "&password=" + password, true);
                            xmlhttp.send();
                            window.location = "";

                            }
                            


                        }

                  