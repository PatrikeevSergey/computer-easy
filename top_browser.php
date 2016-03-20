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
    <p id="nav-circuit"><a href="index.php">Главная страница</a> \<a href="for beginners.php"> Компьютер для начинающих</a> \ <span>Топ популярных браузеров</span></p>
    </div>
  <p class="tit">Браузер - программа для просмотра Web - страниц. В стандарте операционных систем семейства Windows установлен браузер Internet Explorer. Но Вы можете сами установить браузер, какой Вам больше нравится. </p>
  <p class="tit">Давайте рассмотрим несколько самых популярных браузеров, их плюсы и минусы, откуда их можно скачать.</p>
  <p id="warning" class="tit">Браузеры, как и все другие программы, качайте только с официальных сайтов. Иначе, можете подхватить вирус или траян на свой компьютер!</p>
  <p class="tit">Первый в нашем списке будет браузер Google Chrome. Адрес <a href="https://www.google.ru/chrome/browser/desktop/index.html"> для скачивания Chrome</a>.</p>
   <p class="tit">Chrome появился в поле зрения пользователей относительно недавно, однако очень быстро получил популярность. Его главные преимущества:
   <li class="ddr">скорость работы (пока не установлено куча плагинов);</li>
   <li class="ddr">удобный поиск (запрос можно ввести в адресную строку браузера);</li>
   <li class="ddr">сайты, которые часто посещает пользователь, отображаются на стартовом окне (очень удобная функция);</li>
   <li class="ddr">дизайн разработан с уклоном на максимум рабочего места на экране (нет ничего лишнего, все компактно и красиво);</li>
   <li class="ddr">автоматический перевод страниц с иностранного языка;</li>
   </p>
   <p class="tit">Firefox. Адрес <a href=""></a></p>
   <p class="tit">По скорости этот браузер немного уступает Chrome, но зато в дополняниях ему нет равных. </p>
   <p class="tit">Дополнений для Firefox в интернете тысячи. Они помогаю пользователю в решении различных задач. Браузер может загружать видео с сайта, блокировать рекламу, автоматически находить картинки нужного формата и многое другое.</p>
   <p class="tit">В Firefox, на мой взгляд, очень удобрая реализация закладок. Чтобы быстро управлять ими (переместить, удались, создать новую) достаточно вызвать боковую понель сочитанием клавиш CTRL+B.</p><br />
  <p class="tit">Яндекс.Браузер. Адрес <a href=""></a>. Подойдет для аудитории пользователей, которая отдает свое предпочтение поисковой системе как <a href="http://www.yandex.ru/">Яндекс</a>. В нем можно быстро искать нужную информацию (через адресную строку, кстати, с подсказками), посмотреть новости, погоду, почту и т.д. Если же не брать сервисы Яндекса, то Яндекс.Браузер обладает рядом следующих преимуществ:
  <li class="ddr">довольно-таки быстрая работа;</li>
  <li class="ddr">у браузера более низкое потребление ресурсов системы (неодноклатно слышал, что Яндекс.Браузер работает быстрее Chrome, особенно через некоторое время, когда добавляется куча плагинов и закладок);</li>
  <li class="ddr">опция турбо-интернет (позволяет экономить трафик, ускоряет загрузку страницы, позволяет открывать страницы, которые были заблокированных Вашим провайдером интернета)</li> <br />
  <p class="tit">Опера. Адрес <a href=""></a></p>
  </p>
   </div>
     <?php include ("include/block-footer.php");?>
    </div>
    </body> 
</html>