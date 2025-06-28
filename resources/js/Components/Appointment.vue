<template>

    <!-- Our Appointment Section Start -->
    <div class="our-appointment bg-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-1 order-2">
                    <!-- Our Appointment Image Start -->
                    <div class="our-appointment-image">
                        <figure>
                            <img src="/assets/images/appointment-image.png" alt="">
                        </figure>
                    </div>
                    <!-- Our Appointment Image End -->
                </div>

                <div class="col-lg-6 order-lg-2 order-1">
                    <!-- Appointment Form Start -->
                    <div class="appointment-form">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Appointment</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Schedule your consultation today!</h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Contact Us Form Start -->
                        <form id="appointmentForm" action="#" method="POST" data-toggle="validator" class="wow fadeInUp" data-wow-delay="0.2s">
                            <div class="row">
                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="fname" class="form-control" id="fname" placeholder="First Name" required="">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="lname" class="form-control" id="lname" placeholder="Last Name" required="">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Email Address" required="">
                                    <div class="help-block with-errors"></div>
                                </div>
                                
                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone Number" required="">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="date" name="date" class="form-control" id="date" required="">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <select name="doctor" class="form-control form-select" id="doctor" required="">
                                        <option value="" disabled="" selected="">Choose Doctor</option>
                                        <option value="beginner_yoga_classes">Dr.Mommad obeid</option>
                                        <option value="beginner_yoga_classes">Dr.Mommad obeid</option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>                               

                                <div class="col-lg-12">
                                    <div class="contact-form-btn">
                                        <button type="submit" class="btn-default">get appointment</button>
                                        <div id="msgSubmit" class="h3 hidden"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- Contact Us Form End -->
                    </div>
                    <!-- Appointment Form Start -->
                </div>               
            </div>
        </div>
    </div>
    <!-- Our Appointment Section End -->
  </template>
  
  <script setup>
  import { onMounted } from 'vue';
  import { initCarousels } from 'flowbite';
  
  onMounted(() => {
    initCarousels();
  });
  </script>
  
