<!DOCTYPE html>
    <head> 
        <title>Компьютер-это просто</title> 
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/> 
        <link href="css/reset.css" rel="stylesheet" type="text/css" />
        
         <script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
         <script type="text/javascript" src="js/jcarousellite_1.0.1.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script> 
        <script type="text/javascript" src="js/comp_script.js"></script>       
        <script type="text/javascript"> 
            $(function() {
                $('#navigation > div').hover(
                function () {
                    var $this = $(this);
					$this.find('a.menu').removeClass('menu').addClass('hovered');
                    $this.find('.images').stop().animate({
                        'width'     :'230px',
                        'height'    :'390px',
                        'opacity'   :'1.0'
                    },400,'easeOutBack',function(){
                        $(this).parent().find('div').fadeIn('fast');
                    });
                },
                function () {
                    var $this = $(this);
					
                    $this.find('div').fadeOut(500);
					
                   $this.find('a.hovered').removeClass('hovered').addClass('menu');
				   
				    $this.find('.images').stop().animate({
                        'width'     :'100px',
                        'height'    :'0px',
                        'top'       :'0px',
                        'left'      :'0px',
                        'opacity'   :'0.9'
                    },600,'easeOutBack'); 
              }
            );
            });
        </script>
    </head> 
    <body> 
    <div id="block-body">
          <?php
    include ("include/block-header.php");
	include ("include/menu.php");
	       ?>
           <div id="right">
           <?php
	include ("include/block-right.php");
    include("include/block-newsc.php")
?>
           </div>
       
    <div id="osn_block" class="osn_block">
    
    <div id="nav">
    <p id="nav-circuit"><a href="index.php">Главная страница</a> \<a href="for_beginners.php"> Компьютер для начинающих</a> \ <span>Виды компьютеров</span></p>
    </div>
  <p class="tit">Давайте начнем с понятия что вообще такое персональный компьютер. ПЭВМ (Персональная электронная вычислительная машины) - это компьютер, предназначенный для одного пользователя, то есть личного использования.</p> 
  <p class="tit">Сам термин появился в 70х годах, когда компания <a href="https://ru.wikipedia.org/wiki/Apple">Apple</a> выпустила первый компьютер, который выпускался серийно.</p>
    <p class="tit"> Приведу несколько видов компьютеров,чтобы было легче понять:</p><br />
    <ul>
    <li>Стационарные ПК</li>
    <img src="img/dekstop_pc.jpg"/>
    <p class="tit"> По сути, стационарный компьютер - это системный блок, монитор, клавиатура, мышь. Плюсы и минусы стационарных компьютеров и ноутбуков напишу в <a href="#">тут.</a></p>
    <li>Мобильные ПК</li>
    <p class="tit">Существует несколько видов мобильных ПК. Расскажу только о самых распространненых: </p>
    <p class="tit"> Ноутбук - это компьютер, в корпусе которого объединены компоненты компьютера, включая клавиатуру, монитор, сенсорную панель (<a href="#">тачпад</a>). Может работать как от сети, так и от аккумуляторной батареи. </p>
    <img src="img/notebook.png" /><br />
    <p class="tit"> Нетбук - ноутбук с относительно небольшой производительсностью, основное назначение - выход в Интернет. Обладает низким энергосбережением, небольшим весом и относительно невыской стоимостью. Размер экрана примерно 7-12 дюймов.</p>
    <img src="img/Netbook.jpg" />
    <p class="tit">Планшентые компьютеры появились в широкой продаже после презентации платформы Microsoft Tablet PC, разработанной Microsoft, в 2002 году. До этого времени устройства такого типа исаользовались на производстве, в медицине, госучреждениях.
    <br /> Планшетные ПК или просто планшеты оборудованы сенсорным экраном, позволяющим работать при помощи стилуча или пальцев.</p>
    <img  src="img/planshet.jpg" width="800" height="538"/>
    <p class="tit">Смартфон - мобильный телефон с функциями корманного персального компьютера. </p>
    <img src="img/smartfon.jpg"width="500" height="400"/>
    </ul>
     <p class="tit"> Я привел примеры компьютеров, которые чаще всего встречаются. Чтож, надеюсь разобрались какие бывают компьютеры и опередлили какой тип компьютера у Вас :-).<br />
     Вот Вы его включили, а там..... Об этом мы поговорим уже в <a href="#"> следующем уроке</a>! Спасибо за внимание!
     p.s. внизу можете оставить свои комментарии, прочитав <a href="">правилa</a> !
    </div>
     <?php
       
	include ("include/block-footer.php");
    ?>

    </div>
    </body> 
</html>