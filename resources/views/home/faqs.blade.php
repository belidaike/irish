<!DOCTYPE html>
<!-- Designed by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsive FAQ Accordion | CodingLab </title>-->
    <link href="{{asset('home/css/faqs.css')}}" rel="stylesheet" />
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
    <section class="arrival_section" id="arr">
  <div class="accordion">
    <div class="image-box" id="faq-image">
        <img src="images/faqimg.jpg" alt="">
    </div>
    <div class="accordion-text">
      <div class="title">Frequently Asked Questions</div>
    <ul class="faq-text">
      <li>
        <div class="question-arrow">
          <span class="question">Is renting just for occasionwear?</span>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <p>Even though renting can be done for occasionwear, usually because you might not wear your dress again, it is also a perfect way to try new styles while extending the life cycle of a garment. Nowadays, you can rent just about anything, with rental services available for clothing, bags, shoes and even accessories. </p>
        <span class="line"></span>
      </li>
      <li>
        <div class="question-arrow">
          <span class="question">What happens if I ruin or lose an item I've rented?</span>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <p>Oh no!! I just stained my rented shirt with some tomato juice… Well guess what? You shouldn't even worry about it (usually). Most rental sites have built-in damage protection for their items, these are like an insurance policy to make sure you don't have to pay for the damage done to the clothes.

          However, this does not mean you get to act recklessly with your clothes. The goal of a rental system is to be able to rent out the clothes to other users later on. So make sure you treat your rented clothes exactly the way you would treat your own, with care and loving. </p>
        <span class="line"></span>
      </li>
      <li>
        <div class="question-arrow">
          <span class="question"> How often are items cleaned?</span>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <p>Are you reluctant to rent clothes because you don't know exactly how they are washed and how often? Take that out of your mind. Clothes have to be cleaned between each wear by a different person. And don't forget if you decide to keep an item for a long period of time, you can also wash it to rewear by looking at the care labels. 

          In terms of how the clothes are cleaned, some of us have sensitive skin and wouldn't want to be wearing clothing that has a lot of chemicals from washing. Again, clothing rental sites have to wash their clothes in a way that is safe for everyone to wear them. </p>
        <span class="line"></span>
      </li>
      <li>
        <div class="question-arrow">
          <span class="question">How long before an event should an item be rented?</span>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <p>Now, we know choosing clothes for events can be a bit of a last minute rush. But if you want to go to an event stress-free, you have many options. First, some rental services actually offer in-person try-on. This can enable you to find your perfect fit without the hassle of sending back clothing until you've found what you're looking for. If the item you want is currently in store, we also recommend trying on the clothes in malls. 

          If this isn't a possibility for you, rental services usually offer try-ons at home before choosing your occasionwear. Services like Girl Meets Dress will send you different sizes of your chosen item to also make sure you find the right size for your perfect dress. We recommend renting your clothes for one to two days before the event. This will enable you to make sure you have your item on time and avoid any kinks in the process. </p>
        <span class="line"></span>
      </li>
      <li>
        <div class="question-arrow">
          <span class="question">Can I exchange my selection once I have already reserved my gown?</span>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <p>No, once a reservation is made exchanging it to a different item is not possible. It is however, possible to reschedule the same gown on a different date but subject to availability. please visit our rental policy to learn more.</p>
        <span class="line"></span>
      </li>
    </ul>
    </div>
  </div>


  <script>
    let li = document.querySelectorAll(".faq-text li");
    for (var i = 0; i < li.length; i++) {
      li[i].addEventListener("click", (e)=>{
        let clickedLi;
        if(e.target.classList.contains("question-arrow")){
          clickedLi = e.target.parentElement;
        }else{
          clickedLi = e.target.parentElement.parentElement;
        }
       clickedLi.classList.toggle("showAnswer");
      });
    }
  </script>
</section>
</body>
</html>

