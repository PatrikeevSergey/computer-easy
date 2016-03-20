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
    <p class="hdr">Здравствуйте, дорогие посетители! Рад приветствовать Вас на главной странице сайта 
    "<a href="index.php">Компьютер - это просто</a>"!<br />Бесплатный курс на этом сайте поможет как новечку, так и продвинутому пользователю</p>
  <p>Персональный компьютер - неотъемлимая часть соверменной жизни. Современные компьютеры позволяют человеку не только работать на нем, но еще и отдыхать, общаться. Далеко не все люди знают как пользоваться компьютером и боятсья его, как огня.</p>
    </div>
       <?php
       
	include ("include/block-footer.php");
    ?>

    </div>
    </body> 
</html>