<!DOCTYPE html>
<html> 
    <head> 
        <title>Serenity</title> 
        <meta charset="UTF-8">
        <meta name="lang" value="ru">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="./img/favicon (1).ico" sizes="16x16" type="image/x-icon">
        <link rel="stylesheet" href="../css/index.css">
        <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Montserrat:300i,400,700&display=swap&subset=cyrillic-ext" rel="stylesheet">
    </head> 
<body>
    
    <!-- Header -->
    <header class="header" id="header">
        <div class="container">
            <div class="header_inner">
                <a class="header_logo" data-scroll="#intro">
                    <img src="../img/logo.png" alt="" height="61" width="230">
                  </a>
    
                <nav class="nav" id="nav">
                    <a class="nav_link" href="../index.html">ГЛАВНАЯ</a>
                    <a class="nav_link" href="../company.html">О НАС</a>
                    <a class="nav_link" href="../product.html">ПРОДУКЦИЯ</a>
                </nav>
                <button class="nav-toggle" id="nav_toggle" type="button">
                    <span class="nav-toggle__item">Menu</span>
                </button>
            </div>
        </div>
    </header>
    <!-- Page -->
    <div class="page">
        <div class="container_company">
            <div class="section_header" id="intro">
                <h2 class="section_title" >О нас</h2>
            </div>

            <div class="regulations_text">
            <p>
                    Кондитерская «Serenity» — мир современных десертов. Здесь готовятся торты, которые не купишь в магазине, не увидишь на прилавках обычной кофейни. Торты, которые повергнут в шок вкусовые рецепторы и подарят настоящее наслаждение.
            </p><p>«Serenity» — уютное место в центре Казани, в котором вы можете отдыхать, решать рабочие задачи или увлечённо болтать с друзьями за чашкой кофе с необычным десертом.
            </p><p>Каждый день с 10:00 до 20:00 наша кондитерская открывает для вас свои двери. А атмосфера вокруг, легкая музыка, цветы и картины помогут вам расслабиться и просто наслаждаться моментом.
            </p><p>Если вы не можете провести с нами время, но очень хотите открыть для себя новый вкус и полакомиться нашими десертами, то мы упакуем ваш заказ с собой.
            </p>
            </div><!-- regulations_text-->

            <div class="section_header">
                <h2 class="section_title">Заказы</h2>
            </div>

            <div class="regulations_text">
            <p>
                Также мы можем сделать вам торт на ваше мероприятие или полностью взять на себя сладкую часть праздника. Для этого вы можете прийти в нашу кондитерскую и обо всем договориться уже там или можете оставить заявку на нашем сайте.
                Желательно обращаться предварительно, т.е. не менее чем за 4-5 дней до мероприятия.
            </p><p>Все торты и десерты мы готовим за день до того, как они попадут на ваш стол, а оформляем за 30-40 минут до выезда, чтобы ягоды, фрукты или цветы были максимально свежими, красивыми и, конечно, вкусными. Вы можете быть уверенными, что заказывая торты или десерты у нас, вы всегда получите продукт самого высокого качества.
            </p>
        </div><!-- regulations_text-->

            <div class="section_header">
                <h2 class="section_title">Условия доставки и оплаты</h2>
            </div>

            <div class="regulations_text">
            <p>
                В день готовности вы либо сам приезжаете и забираете свой заказ, либо мы вам сами доставляем.
                Заказы на сайте принимаются круглосуточно, обрабатываются в рабочее время c 9:00 до 21:00. Сумма минимального заказа 946 руб.
            </p><p>Стоимость торта складывается из стоимости начинки, декора и упаковки. Весь заказ оговаривается со всеми подробностями с самим кондитером или его помощником.
                При заказе будет названа предварительная стоимость торта. Окончательная сумма будет известна только тогда, когда торт будет взвешен. 
            </p><p> Существует система предоплаты в размере 50% от суммы заказа во время заключения договора.
            </p>
        </div><!-- regulations_text-->

            <div class="section_header">
                <h2 class="section_title">Адрес и контакты</h2>
            </div>
            
            <div class="connection">
                <div class="add">
                <p>
                Будем рады видеть вас! </p>
                <p>Ждем вас в кафе с 10:00 до 20:00.</p>
                <p>Каждый день без выходных</p>
                <p>serenitycake@yandex.ru</p>
                <p>Ул. Большая Красная, 50</p>
                <p>Телефон +7(964)878-30-02</p>
                <p> Отдел доставки работает с 8:00 до 22:00</p>
                </div>
                <div class="block">
                    <div class="info">Напишите мне, я с удовольствием отвечу на любые ваши вопросы. 
                        Просто заполните форму:</div>

            <section class="contact_form">
                <div class="contact_wrapper">
                <form id="mailForm" name="newform" method="POST" action="../php/index.php">
                    <div class="form_inputs">
                        <p style="margin-right: 10%;">Name <span class="red">*</span><input type="text" id="name" name="name" placeholder=" ФИО" required></p>
                        
                        <p>Email <span class="red">*</span><input type="email" id="email" name="email" placeholder=" Почта" required></p>
                    
                    </div><!-- form_inputs -->

                    <p>Message <span class="red">*</span></p>
                    <textarea name="message" id="message" placeholder=" Сообщение" required></textarea>
                    
                    <div class="button_block">
                        <button type="submit" name="button" id="sendMail" value="">Отправить</button>
                    </div>
                </form>
                
                </div>
                </section>
        </div><!-- block-->
        </div><!-- connection-->
        </div><!-- container_ 
            <script src="js/form.js"></script>
    <script src="js/serialize.js"></script> 
company-->
    </div><!--page-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
</body> 
</html>  

