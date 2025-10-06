
<!-- Add Swiper CSS and JS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />



<section class="testimonial-section">
    <div class="container">
        <div class="testimonial-title">
            <h2>What Our Students Say</h2>
            <p>Testimonials from our valued students</p>
        </div>

        <!-- Swiper -->
        <div class="swiper testimonialSwiper">
            <div class="swiper-wrapper">
                <!-- Testimonial 1 -->
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="testimonial-img">
                            <img src="assets/images/instructor/instructor.jpg" alt="Student 1">
                        </div>
                        <div class="testimonial-text">
                            "The courses at Haider Computer Training Centre were exactly what I needed to advance my career in IT. The instructors are knowledgeable and supportive, making complex topics easy to understand."
                        </div>
                        <div class="testimonial-name">Rakib Hassan</div>
                        <div class="testimonial-position">Web Development Student</div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="testimonial-img">
                            <img src="assets/images/instructor/instructor.jpg" alt="Student 2">
                        </div>
                        <div class="testimonial-text">
                            "I learned practical skills that I could immediately apply in my work. The hands-on training approach and real-world projects made all the difference in my learning experience."
                        </div>
                        <div class="testimonial-name">Sadia Islam</div>
                        <div class="testimonial-position">Graphic Design Student</div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="testimonial-img">
                            <img src="assets/images/instructor/instructor.jpg" alt="Student 3">
                        </div>
                        <div class="testimonial-text">
                            "The flexible class schedules and supportive learning environment helped me balance my studies with work. I'm now confident in my technical skills thanks to the excellent training."
                        </div>
                        <div class="testimonial-name">Kamal Ahmed</div>
                        <div class="testimonial-position">Office Applications Student</div>
                    </div>
                </div>

                 <!-- Testimonial 3 -->
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="testimonial-img">
                            <img src="assets/images/instructor/instructor.jpg" alt="Student 3">
                        </div>
                        <div class="testimonial-text">
                            "The flexible class schedules and supportive learning environment helped me balance my studies with work. I'm now confident in my technical skills thanks to the excellent training."
                        </div>
                        <div class="testimonial-name">Kamal Ahmed</div>
                        <div class="testimonial-position">Office Applications Student</div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".testimonialSwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        breakpoints: {
            640: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        }
    });
</script>

