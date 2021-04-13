{include file="header.tpl"}

<div id="kontener"   style=" width: 1920px; height: 1080px; background-image: url(72.png); " >

<div id="navi" style=" background-image: url(nav.png);  width: 1920px; height: 50px; ">
<div class="btn-group" style=" margin-top: 7px;">
  <div>
  <div class="btn-group">
  <button style=" background-image: url(ramka.png); color: white; margin-left: 580px; height: 40px; width: 150px; text-align: center;  " onclick="window.location.href='index.php?action=townHall'"  ><a  >
 Ratusz
  </a> </button>

 
</div>
  <ul class="dropdown-menu">
 
  </div>
  
  <div>
  
  <div class="btn-group">
  <button style=" background-image: url(ramka.png); color: white; margin-left: 30px; height: 40px; width: 150px; text-align: center; " onclick="window.location.href='index.php?action=townSquare'"  ><a>
   Plac
  </a> </button>
 
</div>
  <ul class="dropdown-menu">
  </ul>
   
  </div>
  <div>
  <div class="btn-group">
  <button style=" background-image: url(ramka.png); color: white; margin-left: 161px; height: 42px; width: 150px; " type="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Gildia
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
    <div class="dropdown-divider"></div>
    
  </div>
</div>
  <ul class="dropdown-menu">
  </ul>
      
  </div>
  <div>
  <div class="btn-group">
  <button style=" background-image: url(ramka.png);  color: white; margin-left: 30px; height: 42px; width: 150px; " type="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Profil
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item"  href="index.php?action=townSquare">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
    <div class="dropdown-divider"></div>
    
  </div>
</div>
  <ul class="dropdown-menu">
  </ul>
      
  </div>
  <a href="sandbox/resetSesji.php">Reset</a>
  
</div>

</div>
<img src="73.png" alt="wioska" style=" margin-left: 460px; margin-right: auto;    width: 1100px; position: absolute; ">

<div id="osd" style=" float: left; margin-top: 7px; margin-left: 560px; border: 2px solid brown; position: relative;">
<a class="dropdown-item" style="background-color:   rgb(248, 211, 132);"><img src="village.png" style="width: 16px; height: 16px; ">Wioska: Jebaka</a>
</div>
<div id="pudlo" style="width: 1920px; margin-top: 7px; ">

<div id="jo">
<div id="name" style="float:  left; margin-left: 260px; border: 2px solid brown; position: relative;">
<p class="card-text">
  <a  class="dropdown-item" href="#" style="background-color:   rgb(248, 211, 132);"><img src="woods.png" style="width: 16px; height: 16px; ">Drewno: {$wood}</a> 
 </div>
 <div id="name1" style="float:   left; border: 2px solid brown; position: relative;">
<p class="card-text">
  <a  class="dropdown-item" href="#" style="background-color:   rgb(248, 211, 132);"><img src="ingot.png" style="width: 16px; height: 16px;"> Żelazo: {$iron}</a> 
 </div>
 <div id="name2" style="float:   left; border: 2px solid brown ; position: relative;">
<p class="card-text">
  <a  class="dropdown-item" href="#" style="background-color:   rgb(248, 211, 132);"> <img src="harvest.png" style="width: 16px; height: 16px;">Zniwo:  {$food} </a> 
 </div>
</div>
</div>

<div id="box" style="width: 1930px;  ">

<div id="budynek" style="float: right; width: 165px; position: relative; margin-right: 400px; margin-top: 120px;  border: 4px solid brown; background-color:   rgb(248, 211, 132); " >

        <a><b>Rozbuduj Tartak:</b></a>
     
          
       
        <a><b>Rozbuduj Kopalnie:</b></a>
       
        
   
    
</div>

<div id="wioska" style="float: left; width: 100px; ">


<img src="plemiona2.png" alt="wioska" style=" margin-left: 530px; margin-right: auto; margin-top: 100px;  border: 5px solid brown;   width: 800px; position: relative; ">

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
                {include file="$mainContent"}
            </div>
           
        </main>
        
    </div> <!-- /container -->
{include file="footer.tpl"}



