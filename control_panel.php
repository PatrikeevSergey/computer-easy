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
   <script>
    document.createElement('figure');
    document.createElement('figcaption');</script>
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
    <p id="nav-circuit"><a href="index.php">Главная страница</a> \ <span>Панель управления</span></p>
    </div>
    
  <p class="tit">Рассмотрим очень нужную вещь Windows под названием "панель управления" или по-английски "Control Panel".  </p>
       
       <div id="menu_pop">
    <ul id="accordion">
 <li><div class="first"><b>Что такое Панель управления?</b><br/>
 <span class="button_podtext"></span></div>
 <ul>
    <li>
     <p class="tit">Все инструменты по настройке операционной системы и ее элементов объединены в одну гурппу, которая называются Панель управления. Попасть в нее можно через меню "Пуск", выбрав одноименный пункт. Откроется окно панели управления. </p>
	 <p class="tit">По умолчанию все элементы панели управления сгруппированы по категориям, но для удобства можно изменить вид просмотра элементов на: крупные и мелкие значки.</p>
	 <figure><img src="img/control_panel.jpg"width="600" height="500"/><figcaption>Панель управления на примере Windows 7</figcaption></figure>
	 </li>
 </ul>
 </li>
 
    </div>
    
    
    </div>
     <?php
       
	include ("include/block-footer.php");
    ?>

    
    </body> 
</html>