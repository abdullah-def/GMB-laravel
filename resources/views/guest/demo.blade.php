@extends('layouts.guest')

@section('meta')
<meta name="description" content="Ziko streamlines Google review responses with instant AI assistance, improving the quality of feedback and boosting online visibility effortlessly.">
@endsection


@section('content')
@include('components.guest.navs')

<section id="demo"
  class="relative z-20 overflow-hidden bg-white  pt-20 pb-12 lg:pt-[120px] lg:pb-[90px]">
  <div class="container mx-auto">
    <div class="-mx-4 flex flex-wrap">
      <div class="w-full px-4">
        <div class="mx-auto mb-[60px] max-w-[510px] text-center">
          <span class="mb-2 block text-lg font-semibold text-primary">
            Get your personal AI Review Response Generator

          </span>
          <h2 class="mb-3 text-3xl font-bold text-dark  sm:text-4xl md:leading-[1.2] md:text-[40px]">
            Take a look at how we respond to reviews
          </h2>
          <p class="text-base text-body-color ">
            React 10x faster to every customer review with individual responses written by your personal AI assistant
          </p>
        </div>
      </div>
    </div>
    <div class="">
      
        <div class="wow fadeInUp " data-wow-delay=".25s">





            
            <style>
                .window {

                background:#fff;

                box-shadow:0 10px 30px 0 rgba(0,0,0,0.2);
                border-radius:10px;
                }
                div.top-bar {
                top:0;
                border-top-left-radius:5px;
                border-top-right-radius:5px;
                background:linear-gradient(#dddddd, #C7C7C7);
                width:100%;
                }
                div.screen {
                width:100%;
                height:100%;
                background:#fff;
                }

                .window-action {
                padding:0 20px;
                ul {
                    position:relative;
                    top:3px;
                    padding:0;
                    display:block;
                list-style:none;
                    li {
                    margin:0 3px;
                    display:block;
                    line-height:50px;
                    background:#333;
                    width:15px;
                    height:15px;
                    border-radius:100px;
                    display:inline-block;
                    transition:all .1s ease;
                    &:nth-of-type(1){
                        background:#E36E6B;
                        &:hover {
                        background:darken(#E36E6B, 10%);
                        }
                    }
                    &:nth-of-type(2){
                        background:#DEBB43;
                        &:hover {
                        background:darken(#DEBB43, 10%);
                        }
                    }
                    &:nth-of-type(3){
                        background:#36D489;
                        &:hover {
                        background:darken(#36D489, 10%);
                        }
                    }
                    }
                }
                }
                .window-right {
                right:0;
                top:0;
                padding:0 20px;
                }

                .grid {
                    text-align: center;
                    grid-template: "Area Area-2"/.25fr 1.5fr;
                    justify-items: center;
                    display: flex;
                    border-bottom-left-radius: 5px;
                    border-bottom-right-radius: 5px;
                }
                .w-layout-grid {
                    grid-row-gap: 16px;
                    grid-column-gap: 16px;
                    
                }

                .div-block-19 {
                    min-width: 65px;
                    display: block;
                    height: 552px;
                    position: relative;
                    overflow-x: auto;
                }
                .div-block-19::-webkit-scrollbar{
                        width: 5px;
                    }
                    

                .div-block-10 {
                    min-width: 0;
                    background-color: #f2f2f2;
                    border-radius: 12px;
                    padding-top: 15px;
                    padding-bottom: 30px;
                    max-height: 555px;

                }

                .div-block-15 {
                    background-color: white;
                    border-left: 5px solid #0052cc;
                    border-radius: 7px;
                    margin-top: 10px;
                    margin-left: 47px;
                    margin-right: 40px
                }
                .paragraph-2 {
                    background-color: white;
                    text-align: left;
                    padding: 10px
                }

                .paragraph-2.text-color-gray-500 {
                    min-height: 235px;
                    background-color: transparent;
                    border-radius: 0;
                }

                .text-color-gray-500 {
                    color: #636c7c;
                }
                @media screen and (max-width: 767px) {

                    .grid {
                        display: block
                    }
                    .div-block-19 {
                        display: flex;
                        height: auto;
                    }
                    .div-block-10 {
                      max-height: none;

                    }

                    .div-block-10.shadow-md {
                        margin-right: 0
                    }
                    .div-block-15 {
                        margin-left: 20px;
                        margin-right: 20px
                    }

                    .paragraph-2.text-color-gray-500 {
                        min-height: 300px
                    }
                    .ava{
                        margin-bottom: 0;
                        margin-left: 10px;
                    }
                }

                

                .circle {
                    line-height: 0;		/* remove line-height */ 
                    display: inline-block;	/* circle wraps image */
                    margin: 5px;
                    border: 1px solid rgba(200,200,200,0.4);
                    border-radius: 50%;	/* relative value */
                    /*box-shadow: 0px 0px 5px rgba(0,0,0,0.4);*/
                    transition: linear 0.25s;
                    height: 50px;
                    width: 50px;
                    background-color: transparent;
                }
                .circle img {
                    border-radius: 50%;	/* relative value for
                                adjustable image size */
                }
                div.circle {
                color: transparent;
                }

                
                .fa-star{
                    color: rgb(143, 143, 143); 
                }
                .checked {
                color: orange;
                }

                .browser-window-2 {
                    min-height: 476px;
                    background-color: var(--background);
                    flex: 1;
                    padding: 1.15em;
                    position: relative
                }
                .div-block-13 {
                grid-column-gap: 16px;
                grid-row-gap: 16px;
                grid-template-rows: auto auto;
                grid-template-columns: 1fr 1fr;
                grid-auto-columns: 1fr;
                align-items: center;
                display: flex;
                margin-left: 50px;
                margin-top: 27px;
            }
            .circles{
                line-height: 0;		/* remove line-height */ 
                    display: inline-block;	/* circle wraps image */
                    
                    border: 1px solid rgba(200,200,200,0.4);
                    border-radius: 50%;	/* relative value */
                    /*box-shadow: 0px 0px 5px rgba(0,0,0,0.4);*/
                    transition: linear 0.25s;
                    height: 50px;
                    width: 50px;
                    background-color: transparent;

            }

            .circles:hover {
                transition: ease-out 0.2s;
                border: 4px solid rgba(0,0,0,0.2);
                -webkit-transition: ease-out 0.2s;
                cursor: pointer;
            }


            .circles img {
                    border-radius: 50%;	/* relative value for
                                adjustable image size */

                    margin-bottom: 10px;
            }

            .ava{
                margin-bottom: 10px;
            }
            .select {
                transition: ease-out 0.2s;
                border: 4px solid rgba(0,0,0,0.2);
                -webkit-transition: ease-out 0.2s;
            }

            

          </style>
          <div class="window mb-8">
                <div class="top-bar">
                  <div class="window-action">
                    <ul>
                        <li>
                      <a href=""></a>
                      </li>
                      <li>
                        <a href=""></a>
                      </li>
                      <li>
                        <a href=""></a>
                      </li>
                    </ul>
                  </div>
                  <div class="window-right">
                  </div>
                </div>

                <div class="browser-window-2">
                    <div class="screen grid w-layout-grid">

                        <div class="div-block-19" >



                          
                            <div class="ava" id="1" onclick="manageAll(this)">
                                <div class="circles select">
                                    <img  height="128" width="128" src="/assets/img/team/2.webp" alt="Cloud Chen">
                                    <span>Laura</span>
                                </div>
                            </div>
                            <div class="ava" id="2" onclick="manageAll(this)">
                                <div class="circles">
                                    <img height="128" width="128" src="/assets/img/team/1.webp" alt="Cloud Chen">
                                    <span>John</span>
                                </div>
                            </div>
                            <div class="ava" id="3" onclick="manageAll(this)">
                                <div class="circles">
                                    <img height="128" width="128" src="/assets/img/team/64.webp" alt="Cloud Chen">
                                    <span>Emily</span>
                                </div>
                            </div>
                            <div class="ava" id="4" onclick="manageAll(this)">
                                <div class="circles">
                                    <img height="128" width="128" src="/assets/img/team/5.webp" alt="Cloud Chen">
                                    <span>Robert</span>
                                </div>
                            </div>
                            <div class="ava" id="5" onclick="manageAll(this)">
                                <div class="circles">
                                    <img height="128" width="128" src="/assets/img/team/63.webp" alt="Cloud Chen">
                                    <span>Sarah</span>
                                </div>
                            </div>
                            <div class="ava" id="6" onclick="manageAll(this)">
                                <div class="circles">
                                    <img height="128" width="128" src="/assets/img/team/12.webp" alt="Cloud Chen">
                                    <span>William</span>
                                </div>
                            </div>
                            <div class="ava" id="7" onclick="manageAll(this)">
                                <div class="circles">
                                    <img height="128" width="128" src="/assets/img/team/71.webp" alt="Cloud Chen">
                                    <span>Olivia</span>
                                </div>
                            </div>
                            <div class="ava" id="8" onclick="manageAll(this)">
                                <div class="circles">
                                    <img height="128" width="128" src="/assets/img/team/23.webp" alt="Cloud Chen">
                                    <span>James</span>
                                </div>
                            </div>
                            <div class="ava" id="9" onclick="manageAll(this)">
                                <div class="circles">
                                    <img height="128" width="128" src="/assets/img/team/32.webp" alt="Cloud Chen">
                                    <span>Sophia</span>
                                </div>
                            </div>
                            <div class="ava" id="10" onclick="manageAll(this)">
                                <div class="circles">
                                    <img height="128" width="128" src="/assets/img/team/58.webp" alt="Cloud Chen">
                                    <span>Richard</span>
                                </div>
                            </div>
                        </div>

                        <div class="div-block-10" >

                            <div class="flex" style=" margin-left: 12px; ">
                                <div>
                                    <div class="circle">
                                        <img height="128" width="128" src="/assets/img/team/2.webp" alt="Cloud Chen" id='imgava'>
                                    </div>

                                </div>
                                <div style="display: grid;text-align: left;margin-top: 8px;margin-bottom: 13px;margin-left: 16px;">
                                    <span id="nameava">Laura Freeman</span>

                                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                                    <div id='starava'>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    
                                </div>

                                {{-- <div>
                                    <p>Review for Tophotel London</p>
                                </div> --}}
                            </div>
                            <div style="width: 80%;margin-left: 47px;text-align: left;margin-bottom: 5px;">
                                <p id="rev">
                                    
                                    This clothing store is just meh. The clothes are kinda trendy, I guess, and the prices are whatever. The checkout process is super slow, and who even cares about that, right? Some items are overpriced, but who has the time to check every tag? I might shop here again if I can't find anything better, but I wouldn't get my hopes up or anything.
                                </p>
                            </div>
                            <div class="div-block-13" style=" margin-top: 15px; ">
                                <img src="/assets/img/icons/63bda2dec1bcd7a2c42d9cb7_reply-fill (1).svg" alt="">
                                <p> Our AI response</p>
                              
                            </div>
                            <div class="div-block-15">
                                <p class="paragraph-2 text-color-gray-500" id="textholder1" style=" overflow-y: auto; max-height: 235px; min-height: 187px; "></p>
                            </div>
                        </div>
                
                    </div>
                </div>
          </div>

            
        </div>

    </div>
  </div>
</section>

<script>

    
    let dd = [
        ['','','','',''],
        ['Laura Freeman','/assets/img/team/2.webp', 3,"This clothing store is just meh. The clothes are kinda trendy, I guess, and the prices are whatever. The checkout process is super slow, and who even cares about that, right? Some items are overpriced, but who has the time to check every tag? I might shop here again if I can't find anything better, but I wouldn't get my hopes up or anything.", "Dear Laura Freeman,<br> <br>Thank you for taking the time to leave a review for Glimmer Retail and for awarding us 3 stars. We appreciate your comments about our trendy clothes but are sorry to hear that some aspects of your experience did not fully meet your expectations. We are actively working to improve our checkout process for a more efficient and pleasant shopping experience. Additionally, we continuously evaluate our pricing to ensure it aligns with the quality and value we aim to provide. Your feedback is invaluable to us as we strive to better serve our customers. We hope to have the opportunity to exceed your expectations in the future.<br> <br>Warm regards,<br>The Glimmer Retail Team"],
        ['John Smith','/assets/img/team/1.webp', 4,"LuxeLock stands out for its extensive beauty treatments, delivered with professionalism in a relaxing ambiance. The salon's commitment to quality is evident, though prices lean towards the higher side. Despite the cost, many find the investment justified, given the exceptional service and luxurious atmosphere. Overall, LuxeLock offers a premium beauty experience with a diverse range of services and a skilled, welcoming staff.","Dear John Smith,<br> <br>Thank you for your generous 4-star review and for taking the time to share your experiences at LuxeLock Salon. We are thrilled to hear that our commitment to quality, extensive beauty treatments, and the professionalism of our staff have contributed to a relaxing and luxurious salon experience for you. <br> <br>We understand your comments regarding our pricing and appreciate your recognition that the value and service provided justify the investment. At LuxeLock, we strive to ensure that every visit is exceptional, offering a premium beauty experience that meets our clients' diverse needs.<br> <br>Thank you once again for your kind words and support. We look forward to continuing to serve you with the same high standards and warm welcome on your next visit.<br> <br>Warmest regards,<br>The LuxeLock Salon Team"],
        ['Emily Johnson','/assets/img/team/64.webp', 5,'The staff at this healthcare facility is truly incredible, demonstrating both professionalism and genuine compassion. They provide cutting-edge healthcare solutions, showcasing a commitment to staying at the forefront of medical advancements. What impressed me the most was the personalized approach to my treatment plan, tailored perfectly to my needs. This individualized care made my recovery process smoother than I ever imagined. The seamless integration of various elements in my treatment plan contributed to a holistic approach that fostered overall well-being. In conclusion, the combination of an incredible staff, cutting-edge healthcare solutions, and personalized treatment makes this facility stand out as a beacon of excellence in healthcare. I highly recommend it for those seeking both medical expertise and compassionate care.',"Dear Emily Johnson,<br> <br>We are deeply grateful for your 5-star review and for taking the time to share your positive experience at HealNext Clinics. It fills us with pride to know that our staff's professionalism and compassion have made a significant impact on your healthcare journey. Our commitment to offering cutting-edge solutions and a personalized approach to treatment is at the core of what we strive for, aiming to provide the best possible care for our patients.<br> <br>Hearing that your recovery process was smoother than anticipated and that you valued the holistic approach we take towards treatment is incredibly rewarding. It motivates us to continue our efforts in delivering healthcare excellence and fostering overall well-being for each individual we have the privilege to serve.<br> <br>Thank you for your recommendation and for trusting us with your care. We look forward to being there for you and others who seek medical expertise combined with compassionate care in the future.<br> <br>Warmest regards,<br>The HealNext Clinics Team"],
        ['Robert Johnson','/assets/img/team/5.webp', 2,'Eager to explore the electric vehicle range, my enthusiasm took a hit due to a disappointing customer service experience. Waiting for weeks for a response to my inquiry was frustrating, and when the answers finally came, they proved unsatisfactory. The lack of detailed information left me uncertain about making an informed decision regarding the electric vehicle I was interested in. While the allure of the electric vehicle range remained, the subpar customer service experience raised concerns about the transition. Improved and more timely customer service would undoubtedly enhance the overall experience for potential buyers like myself.',"Dear Robert Johnson,<br> <br>We sincerely apologize for the disappointing experience you encountered with our customer service at AutoPioneer Motors. We understand how important timely and informative communication is, especially when exploring the exciting possibilities within our electric vehicle range. It's clear we fell short of meeting your expectations and the high standards we set for ourselves.<br> <br>We are taking your feedback seriously and are already implementing measures to ensure our team provides prompt, comprehensive responses to inquiries. Our goal is to make every interaction with AutoPioneer Motors informative and supportive, helping our customers make informed decisions with confidence.<br> <br>We deeply regret the inconvenience and frustration caused and would like to assure you that we are committed to improving. We hope to have the opportunity to provide you with the level of service you expect and deserve in the future.<br> <br>Thank you for bringing this to our attention. Your feedback is invaluable in helping us enhance our service.<br> <br>Warm regards,<br>The AutoPioneer Motors Team"],
        ['Sarah Miller','/assets/img/team/63.webp', 4,'Tucked in a central location, this coffee spot boasts a cozy ambiance and an impressive selection of artisan coffees and teas. The inviting atmosphere makes it a perfect spot for work or leisurely reading. The diverse range of beverages caters to various tastes, ensuring a delightful experience for patrons. However, during the lunchtime rush, the limited space becomes apparent. Expanding the area a bit could enhance the overall experience, making it an even more appealing destination for coffee and tea enthusiasts.',"Dear Sarah Miller,<br> <br>Thank you for your thoughtful 4-star review and for highlighting what you love about AquaBrew Café. We're thrilled to hear that our cozy ambiance, central location, and diverse selection of artisan coffees and teas have created a delightful experience for you, whether for work or leisure.<br> <br>We appreciate your feedback regarding the space constraints during the lunchtime rush. We understand how important comfort and space are to our patrons, and we're actively exploring solutions to enhance the overall experience without losing the inviting atmosphere you've come to enjoy.<br> <br>Your suggestion is invaluable to us as we strive to make AquaBrew Café an even more appealing destination for all coffee and tea enthusiasts. We look forward to welcoming you back soon and hope to exceed your expectations in the future.<br> <br>Warm regards,<br>The AquaBrew Café Team"],    
        ['William Davis','/assets/img/team/12.webp', 5,'BrightMove made our home search a breeze with their professional and attentive service. Their in-depth knowledge of the real estate market provided valuable insights, guiding us through the process seamlessly. What sets them apart is their dedication to clients, ensuring a personalized experience that aligns with individual preferences. Thanks to their efficiency, we found our dream home in record time. BrightMove is a standout choice in the real estate industry, offering not just market expertise but also a commitment to making the home-buying experience enjoyable and stress-free.',"Dear William Davis,<br> <br>Thank you so much for your glowing 5-star review and for taking the time to share your experience with BrightMove Realty. We are delighted to hear that we were able to make your home search a breeze and that our professional service, in-depth market knowledge, and dedication to a personalized experience helped you find your dream home in record time.<br> <br>It's our mission to provide a seamless, enjoyable, and stress-free home-buying experience for each of our clients, and knowing that we have achieved this for you is incredibly rewarding. Your feedback is a testament to the commitment of our team to stand out in the real estate industry not just through our expertise, but through our dedication to our clients.<br> <br>Thank you once again for choosing BrightMove Realty. We wish you all the best in your new home and look forward to the possibility of serving you again in the future.<br> <br>Warm regards,<br>The BrightMove Realty Team"],
        ['Olivia Davis','/assets/img/team/71.webp', 5,"JoyRide is a fantastic destination for families, offering a mix of thrilling rides and fun games suitable for all ages. The venue is notable for its cleanliness, safety measures, and well-maintained facilities, making it an ideal choice for family outings. Whether you're seeking excitement from the rides or looking for family-friendly games, JoyRide provides a diverse and enjoyable experience. It's a must-visit for families looking to create lasting memories in a safe and entertaining environment.","Dear Olivia Davis,<br> <br>Thank you for your wonderful 5-star review and for sharing your experience at JoyRide Amusements. We're thrilled to hear that our mix of thrilling rides, fun games, and commitment to cleanliness and safety made your visit memorable and enjoyable for your entire family. <br> <br>Creating a diverse, entertaining, and safe environment for families to create lasting memories is at the heart of what we do, and we're so glad to have achieved this during your visit. It's fantastic to hear that JoyRide stands out as a must-visit destination for family outings.<br> <br>We look forward to welcoming you and your family back to JoyRide Amusements soon for more fun and excitement. Thank you once again for your kind words and support.<br> <br>Warm regards,<br>The JoyRide Amusements Team"],
        ['James Thompson','/assets/img/team/23.webp', 3,"The gym offers modern equipment and a spacious layout, creating a welcoming environment for individual workouts. It's well-suited for those who prefer exercising independently. However, during peak hours, there's a shortage of trainers, leading to longer waits for assistance. For individuals comfortable with self-guided workouts, this gym is a good option, but addressing the staffing issue during busy times could enhance the overall experience.","Dear James Thompson,<br> <br>Thank you for taking the time to share your feedback and for giving PrimeFit Gyms a 3-star review. We're glad to hear that you appreciate our modern equipment and spacious layout, as we strive to create a welcoming environment for all our members.<br> <br>We acknowledge your concern regarding the availability of trainers during peak hours and understand how this can impact your experience. We're committed to addressing this issue by evaluating our staffing levels and making necessary adjustments to ensure our members receive timely assistance and support when needed.<br> <br>Your satisfaction is important to us, and we're grateful for the opportunity to improve our services. We look forward to enhancing your experience and hope to exceed your expectations in the future.<br> <br>Warm regards,<br>The PrimeFit Gyms Team"],
        ['Sophia Thompson','/assets/img/team/32.webp', 5,"LegalEdge Partners provided exceptional legal advice and service during a complex issue. The team navigated through the intricacies with professionalism, offering clear and strategic solutions. Their commitment to client satisfaction was evident through prompt communication and a personalized approach. I highly recommend LegalEdge Partners for anyone in need of reliable and effective legal assistance.","Dear Sophia Thompson,<br> <br>Thank you for your generous 5-star review and for taking the time to share your experience with LegalEdge Partners. We are delighted to hear that our team was able to provide you with exceptional legal advice and service during a complex issue. Our commitment to professionalism, clear communication, and personalized approaches is at the core of what we strive for, and it's incredibly rewarding to know that this was evident in your experience with us.<br> <br>Client satisfaction is our top priority, and we're glad that our efforts to navigate through the intricacies of your case with strategic solutions were helpful to you. We're grateful for your recommendation and are here to assist you with any future legal needs.<br> <br>Thank you once again for choosing LegalEdge Partners. We look forward to serving you again should the need arise.<br> <br>Warm regards,<br>The LegalEdge Partners Team"],
        ['Richard Anderson','/assets/img/team/58.webp', 4,"TechTrend is a go-to spot for the latest gadgets, featuring a knowledgeable staff that enhances the shopping experience. While some items may be slightly pricier than online options, resulting in a one-star deduction, the store offers an immersive in-store experience for hands-on exploration. The commitment to staying updated on tech trends and providing excellent customer service makes TechTrend a reliable choice. Overall, it remains a worthwhile destination for tech enthusiasts.","Dear Richard Anderson,<br> <br>Thank you for your 4-star review and for taking the time to share your experience at TechTrend Electronics. We're thrilled to hear that our knowledgeable staff and the immersive in-store experience have made us your go-to spot for the latest gadgets. Our commitment to providing hands-on exploration and staying updated on tech trends is designed to offer value beyond just competitive pricing.<br> <br>We understand your concerns regarding the pricing of some items compared to online options. We strive to balance our pricing with the unique, value-added experience of in-store shopping, including personalized service and immediate product interaction.<br> <br>We appreciate your feedback and see it as an opportunity to review our pricing strategy to ensure we continue to meet our customers' expectations while offering the high-quality service and expertise that TechTrend is known for. <br> <br>Thank you again for considering us a worthwhile destination for tech enthusiasts. We look forward to continuing to serve you with the latest gadgets and excellent customer service.<br> <br>Warm regards,<br>The TechTrend Electronics Team"],

    ]

    let textPosition = 0;
    let speed = 5;

    function typeWriter(idx,text){
        var typedText = document.getElementById(idx);
        var textToType = text;

        function typescript(){
            document.getElementById(idx).innerHTML =
            textToType.substring(0, textPosition) +
            "<span id='blinker'>\u25ae</span>";

            if (textPosition++ < textToType.length) {
                setTimeout(typescript, speed);
            } else {
                setTimeout(() => {
                    document.getElementById("blinker").remove();
                }, 3000);
            }
        }

        typescript();

        
    };
    typeWriter(idx="textholder1","Dear Laura Freeman,<br> <br>Thank you for taking the time to leave a review for Glimmer Retail and for awarding us 3 stars. We appreciate your comments about our trendy clothes but are sorry to hear that some aspects of your experience did not fully meet your expectations. We are actively working to improve our checkout process for a more efficient and pleasant shopping experience. Additionally, we continuously evaluate our pricing to ensure it aligns with the quality and value we aim to provide. Your feedback is invaluable to us as we strive to better serve our customers. We hope to have the opportunity to exceed your expectations in the future.<br> <br>Warm regards,<br>The Glimmer Retail Team");



    function manageAll(ele){

        var elems = document.querySelector(".select");
        if(elems !==null){
        elems.classList.remove("select");
        }

        var y =ele.querySelector(".circles");
        y.classList.add("select");

        var sratHtml ='';

        var eleId = ele.id;
        var data = dd[parseInt(eleId)];

        var name = document.getElementById('nameava').innerHTML= data[0];
        var img = document.getElementById('imgava').src = data[1];

        var number = data[2];
        for (let i = 0; i < 5; i++) {

            if (number != 0){


                sratHtml += '<span class="fa fa-star checked"></span>';

                 number -= 1

            }
            else{
                sratHtml += '<span class="fa fa-star"></span>'
            }
            
        }

        var star = document.getElementById('starava').innerHTML= sratHtml;
        var rev = document.getElementById('rev').innerHTML= data[3];

        // resp
        var res =document.getElementById('textholder1').innerHTML= '';
        textPosition = 0;
        typeWriter(idx="textholder1", data[4])
 


        




    }

</script>


@include('components.guest.footer')
@endsection