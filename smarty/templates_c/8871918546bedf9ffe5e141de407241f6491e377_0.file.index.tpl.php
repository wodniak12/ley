<?php
/* Smarty version 3.1.39, created on 2021-04-11 17:08:05
  from 'C:\xampp\htdocs\ley\smarty\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_607310d526ce47_03175615',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8871918546bedf9ffe5e141de407241f6491e377' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ley\\smarty\\templates\\index.tpl',
      1 => 1618153682,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_607310d526ce47_03175615 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);



?>

<div id="kontener"   style=" width: 1920px; height: 1080px; background-image: url(72.png); " >

<div id="navi" style=" background-image: url(nav.png);  width: 1920px; height: 50px; ">
<div class="btn-group" style=" margin-top: 7px;">
  <div>
  <div class="btn-group">
  <button style=" background-image: url(ramka.png); color: white; margin-left: 580px; height: 40px; width: 150px; text-align: center; color: rgb(248, 211, 132); " onclick="window.location.href='index.php?action=townHall'"  ><a  >
 Ratusz
  </a> </button>

 
</div>
  <ul class="dropdown-menu">
 
  </div>
  
  <div>
  
  <div class="btn-group">
  <button style=" background-image: url(ramka.png); color: white; margin-left: 30px; height: 40px; width: 150px; text-align: center; color: rgb(248, 211, 132); " onclick="window.location.href='index.php?action=townSquare'"  ><a>
   Plac
  </a> </button>
 
</div>
  <ul class="dropdown-menu">
  </ul>
   
  </div>
  <div>
  <div class="btn-group">
  <button style=" background-image: url(ramka.png); color: white; margin-left: 161px; height: 40px; width: 150px; color: rgb(248, 211, 132); " onclick="window.location.href='index.php'" >
    Mapa
  </button>
  
</div>
  <ul class="dropdown-menu">
  </ul>
      
  </div>
  <div>
  <div class="btn-group">
  <button style="color:   rgb(248, 211, 132); background-image: url(ramka.png);  color: white; margin-left: 30px; height: 40px; width: 150px; color: rgb(248, 211, 132); " >
    Profil
  </button>
  
</div>
  <ul class="dropdown-menu">
  </ul>
      
  </div>
 <button onclick="window.location.href='sandbox/resetSesji.php'" style="background-color:  rgb(248, 211, 132); height: 40px; width: 100px; margin-left: 50px; border: 2px solid brown;">Reset  </button>
  
</div>

</div>
<img src="73.png" alt="wioska" style=" margin-left: 460px; margin-right: auto;    width: 1100px; position: absolute; ">

<div id="osd" style=" float: left; margin-top: 100px; margin-left: 560px; border: 2px solid brown; position: relative;">
<a class="dropdown-item" style="background-color:   rgb(248, 211, 132);"><img src="village.png" style="width: 16px; height: 16px; ">Wioska: Jebaka</a>
</div>
<div id="pudlo" style="width: 1920px; margin-top: 100px; ">

<div id="jo">
<div id="name" style="float:  left; margin-left: 260px; border: 2px solid brown; position: relative;">
<p class="card-text">
  <a  class="dropdown-item" href="#" style="background-color:   rgb(248, 211, 132);"><img src="woods.png" style="width: 16px; height: 16px; ">Drewno: <?php echo $_smarty_tpl->tpl_vars['wood']->value;?>
</a> 
 </div>
 <div id="name1" style="float:   left; border: 2px solid brown; position: relative;">
<p class="card-text">
  <a  class="dropdown-item" href="#" style="background-color:   rgb(248, 211, 132);"><img src="ingot.png" style="width: 16px; height: 16px;"> Żelazo: <?php echo $_smarty_tpl->tpl_vars['iron']->value;?>
</a> 
 </div>
 <div id="name2" style="float:   left; border: 2px solid brown ; position: relative;">
<p class="card-text">
  <a  class="dropdown-item" href="#" style="background-color:   rgb(248, 211, 132);"> <img src="harvest.png" style="width: 16px; height: 16px;">Zniwo:  <?php echo $_smarty_tpl->tpl_vars['food']->value;?>
 </a> 
 </div>
</div>
</div>

<div id="box" style="width: 1930px;  ">

<div id="budynek" style="float: right; width: 165px; position: relative; margin-right: 400px; margin-top: 120px;  " >

    
       
        
   
    
</div>

<div id="wioska" style=" width: 100px; ">


<img src="plemiona2.png" alt="wioska" style=" margin-left: 600px; margin-right: auto; margin-top: 50px;  border: 5px solid brown;   width: 800px; position: relative; ">

<div class="centered" style=" position: absolute; top: 165px; left: 377px; transform: translate(200px, 29px);"> </div>
<div class="centered" style=" position: absolute; top: 595px; left: 1067px; transform: translate(200px, 29px);"> </div>



</div>


</div>






</div>
    <div class="container">
        <header class="row border-bottom">
          
        </header>
        <main class="row border-bottom">
           
            <div class="col-12 col-md-8">
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['mainContent']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            </div>
           
        </main>
        
    </div> <!-- /container -->
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php }
}
