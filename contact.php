<section class="classes-section border-top pt-5">
    <div class="container">
        <!--mdp-map end-->
        <div class="mdp-contact">
            <h2 class="h1 mb-3">Our Contact</h2>
            <div class="row">
                <div class="col-lg-8 col-md-7">
                    <div class="comment-area">
                        <form id="contact-form" method="post" action="#">
                            <div class="response"></div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group"><input type="text" name="namefeild" id="name" placeholder="Name"
                                            required=""></div>
                                    <!--form-group end-->
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group"><input type="email" name="emailfeild" id="email"
                                            placeholder="Email" required=""></div>
                                    <!--form-group end-->
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group"><input type="number" placeholder="Mobile Nubmer" name="phonefelid" required=""
                                            id="phoneno"></div>
                                    <!--form-group end-->
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group"><textarea name="message" placeholder="Message"
                                            id="mes"></textarea></div>
                                    <!--form-group end-->
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-submit"><button type="button" onclick="sbmitdata()"
                                            class="btn-default">Send Now</button></div>
                                    <!--form-submit end-->
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--comment-area end-->
                </div>
                <div class="col-lg-4 col-md-5">
                    <div class="mdp-our-contacts">

                        <ul>
                            <li>
                                <div class="d-flex flex-wrap">
                                    <div class="icon-v"><img src="assets/img/icon15.png" alt="">
                                    </div>
                                    <div class="dd-cont">
                                        <h4>Call</h4>
                                        <div> +91 75072 24740</div>
                                        <div>+91 75072 17419</div>
                                        <div>+91 86056 05577</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex flex-wrap">
                                    <div class="icon-v"><img src="assets/img/icon16.png" alt="">
                                    </div>
                                    <div class="dd-cont">
                                        <h4>Work Time</h4>
                                        <div>Mon - Fri 8 AM - 5 PM</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex flex-wrap">
                                    <div class="icon-v"><img src="assets/img/icon17.png" alt="">
                                    </div>
                                    <div class="dd-cont">
                                        <h4>Address</h4>
                                        <div>Gangotri Park Colony, Dighi Road, Near Gavli
                                            Empire, Plot No. 86, Bhosari, Pune</div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--mdp-our-contacts end-->
                </div>
            </div>
        </div>
        <!--mdp-contact end-->
    </div>
</section>

<script>
    function sbmitdata() {
        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var phoneno = document.getElementById("phoneno").value;
        var mes = document.getElementById("mes").value;
        toastr.options.timeOut = 1500;
   if (name == "" && email == "" && phoneno == "" && mes == "") {
            toastr.warning("Fill the following Deatails")
        }
       else{ 
            document.getElementById("contact-form").reset();
                        toastr.success('submited Successfully');
        //   let reqt = new XMLHttpRequest();
        // reqt.open("POST", "./php/contact.php", true)
        // reqt.onload = () => {
        //     if (reqt.readyState === XMLHttpRequest.DONE) {
        //         if (reqt.status == 200) {
        //             let data = reqt.response;
        //             if (data == 'success') {
                        // document.getElementById("contact-form").reset();
                        // toastr.success('submited Successfully');
//                     }
//                     else if (data == "fill") {
//                         toastr.warning("Fill the following Deatails")

//                     }
//                     else {
//                         toastr.error('Something wrong!  Please check');
//                     }
//                 }
//             }
//         }
 }


    }
</script>