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
                    height: 503px;
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
                    max-height: 503px;

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
        ['Laura Freeman','/assets/img/team/2.webp', 3,"This clothing store is just meh. The clothes are kinda trendy, I guess, and the prices are whatever. The checkout process is super slow, and who even cares about that, right? Some items are overpriced, but who has the time to check every tag? I might shop here again if I can't find anything better, but I wouldn't get my hopes up or anything.", "Dear Laura,<br> <br> Thank you for taking the time to share your thoughts with us. Your feedback is invaluable, and we appreciate your honest review. We are actively addressing the concerns you raised and working to enhance our services. We hope to have the opportunity to provide you with an improved experience in your future visits."],
        ['John Smith','/assets/img/team/1.webp', 4, "LuxeLock stands out for its extensive beauty treatments, delivered with professionalism in a relaxing ambiance. The salon's commitment to quality is evident, though prices lean towards the higher side. Despite the cost, many find the investment justified, given the exceptional service and luxurious atmosphere. Overall, LuxeLock offers a premium beauty experience with a diverse range of services and a skilled, welcoming staff.","Dear John, <br> <br>Thank you for sharing your positive experience at LuxeLock. We appreciate your recognition of our commitment to providing extensive beauty treatments in a professional and relaxing ambiance. Your acknowledgment of the salon's dedication to quality is gratifying, and we understand that our prices may be on the higher side. We're thrilled to hear that many still find the investment justified, appreciating the exceptional service and luxurious atmosphere we aim to offer.<br> <br>Our team takes pride in delivering a premium beauty experience, and your feedback reaffirms that our diverse range of services and skilled, welcoming staff contribute to creating a satisfying visit for our customers. We value your patronage and look forward to continuing to meet your expectations in future visits."],
        ['Emily Johnson','/assets/img/team/64.webp', 5,'The staff at this healthcare facility is truly incredible, demonstrating both professionalism and genuine compassion. They provide cutting-edge healthcare solutions, showcasing a commitment to staying at the forefront of medical advancements. What impressed me the most was the personalized approach to my treatment plan, tailored perfectly to my needs. This individualized care made my recovery process smoother than I ever imagined. The seamless integration of various elements in my treatment plan contributed to a holistic approach that fostered overall well-being. In conclusion, the combination of an incredible staff, cutting-edge healthcare solutions, and personalized treatment makes this facility stand out as a beacon of excellence in healthcare. I highly recommend it for those seeking both medical expertise and compassionate care.',"Dear Emily,<br> <br>Thank you for your positive review. We're delighted that you had a good experience with our healthcare facility. Your kind words about our staff, commitment to cutting-edge healthcare solutions, and personalized treatment approach mean a lot to us.<br> <br>We appreciate your recommendation and look forward to continuing to provide excellent care for you and others in our community. If you have any further feedback or if there's anything we can do for you, please feel free to let us know."],
        ['Robert Johnson','/assets/img/team/5.webp', 2,'Eager to explore the electric vehicle range, my enthusiasm took a hit due to a disappointing customer service experience. Waiting for weeks for a response to my inquiry was frustrating, and when the answers finally came, they proved unsatisfactory. The lack of detailed information left me uncertain about making an informed decision regarding the electric vehicle I was interested in. While the allure of the electric vehicle range remained, the subpar customer service experience raised concerns about the transition. Improved and more timely customer service would undoubtedly enhance the overall experience for potential buyers like myself.','Dear Robert,<br> <br>Thank you for sharing your experience, and we apologize for any frustration you encountered with our customer service. Your feedback is important, and we are actively working to improve response times and the quality of information provided. We appreciate your patience and value your interest in our electric vehicle range. If you have further feedback or specific details to share, please feel free to reach out. We are committed to enhancing the overall experience for potential buyers like yourself.'],
        ['Sarah Miller','/assets/img/team/63.webp', 4,'Tucked in a central location, this coffee spot boasts a cozy ambiance and an impressive selection of artisan coffees and teas. The inviting atmosphere makes it a perfect spot for work or leisurely reading. The diverse range of beverages caters to various tastes, ensuring a delightful experience for patrons. However, during the lunchtime rush, the limited space becomes apparent. Expanding the area a bit could enhance the overall experience, making it an even more appealing destination for coffee and tea enthusiasts.',"Dear Sarah,<br> <br>Thank you for your positive review and insightful feedback. We're glad you enjoyed the cozy ambiance, artisan coffees, and teas at our coffee spot. Your suggestion to expand the area during the lunchtime rush is noted, and we appreciate your input. We look forward to continuing to provide a delightful experience for you and our patrons."],
        ['William Davis','/assets/img/team/12.webp', 5,'BrightMove made our home search a breeze with their professional and attentive service. Their in-depth knowledge of the real estate market provided valuable insights, guiding us through the process seamlessly. What sets them apart is their dedication to clients, ensuring a personalized experience that aligns with individual preferences. Thanks to their efficiency, we found our dream home in record time. BrightMove is a standout choice in the real estate industry, offering not just market expertise but also a commitment to making the home-buying experience enjoyable and stress-free.',"Dear William,<br> <br>Thank you for your stellar review! We're delighted to have played a role in making your home search seamless and efficient. Your appreciation of our dedication to clients and commitment to a personalized experience is truly gratifying.<br> <br>We're thrilled that you found your dream home with us. If you ever need further assistance or have any feedback to share, feel free to reach out. Congratulations on your new home, and thank you for choosing BrightMove!<br> <br>Best regards,<br>BrightMove Team"],
        ['Olivia Davis','/assets/img/team/71.webp', 5,"JoyRide is a fantastic destination for families, offering a mix of thrilling rides and fun games suitable for all ages. The venue is notable for its cleanliness, safety measures, and well-maintained facilities, making it an ideal choice for family outings. Whether you're seeking excitement from the rides or looking for family-friendly games, JoyRide provides a diverse and enjoyable experience. It's a must-visit for families looking to create lasting memories in a safe and entertaining environment.","Dear Olivia,<br> <br>Thank you for the fantastic 5-star review! We're thrilled to hear that JoyRide provided an enjoyable experience for your family. Your appreciation of our diverse offerings, cleanliness, and safety measures is truly valued. We look forward to welcoming you back for more family fun. If you have any specific feedback or suggestions, feel free to share. Thank you for choosing JoyRide!<br> <br>Best regards,<br>JoyRide Management"],
        ['James Thompson','/assets/img/team/23.webp', 3,"The gym offers modern equipment and a spacious layout, creating a welcoming environment for individual workouts. It's well-suited for those who prefer exercising independently. However, during peak hours, there's a shortage of trainers, leading to longer waits for assistance. For individuals comfortable with self-guided workouts, this gym is a good option, but addressing the staffing issue during busy times could enhance the overall experience.","Dear James,<br> <br>Thank you for your feedback. We appreciate your positive comments about our gym's modern equipment, spacious layout, and welcoming environment for individual workouts.<br> <br>We've noted your observation about the shortage of trainers during peak hours, and we are actively working to address this issue to enhance the overall experience, especially during busy times.<br> <br>Your input is valuable, and we thank you for being part of our fitness community. If you have any specific suggestions or further feedback, feel free to share."],
        ['Sophia Thompson','/assets/img/team/32.webp', 5,"LegalEdge Partners provided exceptional legal advice and service during a complex issue. The team navigated through the intricacies with professionalism, offering clear and strategic solutions. Their commitment to client satisfaction was evident through prompt communication and a personalized approach. I highly recommend LegalEdge Partners for anyone in need of reliable and effective legal assistance.","Dear Sophia,<br> <br>Thank you for the fantastic 5-star review! We're thrilled that LegalEdge Partners met your expectations by providing exceptional legal advice and service during your complex issue.<br> <br>Your recognition of our professionalism and commitment to client satisfaction is greatly appreciated. We are honored by your high recommendation for anyone in need of reliable and effective legal assistance.<br> <br>If you ever require further assistance or have additional feedback, please feel free to reach out. Thank you for choosing LegalEdge Partners.<br> <br>Best regards,<br>LegalEdge Partners Team"],
        ['Richard Anderson','/assets/img/team/58.webp', 4,"TechTrend is a go-to spot for the latest gadgets, featuring a knowledgeable staff that enhances the shopping experience. While some items may be slightly pricier than online options, resulting in a one-star deduction, the store offers an immersive in-store experience for hands-on exploration. The commitment to staying updated on tech trends and providing excellent customer service makes TechTrend a reliable choice. Overall, it remains a worthwhile destination for tech enthusiasts.","Dear Richard,<br> <br>Thank you for choosing TechTrend and sharing your thoughts. We're thrilled to be your go-to spot for the latest gadgets, and we appreciate your positive comments about our knowledgeable staff.<br> <br>We've noted your feedback on pricing and are committed to offering competitive prices. Your preference for our immersive in-store experience and recognition of our commitment to tech trends are motivating.<br> <br>Your 4-star rating is valued, and we look forward to serving you as a reliable choice for tech enthusiasts.<br> <br>Best regards,<br>TechTrend Management"],

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
    typeWriter(idx="textholder1","Dear Laura Freeman,<br> <br>  Thank you for taking the time to share your thoughts with us. Your feedback is invaluable, and we appreciate your honest review. We are actively addressing the concerns you raised and working to enhance our services. We hope to have the opportunity to provide you with an improved experience in your future visits.");



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