<?php 
/* begin smarty init */
require(__DIR__.'/smarty/libs/Smarty.class.php');

$smarty = new Smarty();

$smarty->setTemplateDir(__DIR__.'/smarty/templates');
$smarty->setCompileDir(__DIR__.'/smarty/templates_c');
$smarty->setCacheDir(__DIR__.'/smarty/cache');
$smarty->setConfigDir(__DIR__.'/smarty/configs');
$smarty->assign('config', array('date' => '%d.%m.%Y', 
                                'time' => '%H:%M:%S',
                                'datetime' => '%H:%M:%S %d.%m.%Y'));
$smarty->assign('mainContent', "village.tpl"); //default view
/* end smarty init */
require_once('./class/GameManager.class.php');
session_start();
if(!isset($_SESSION['gm'])) // jeżeli nie ma w sesji naszej wioski
    {
    $gm = new GameManager();
    $_SESSION['gm'] = $gm;
} 
else //mamy już wioskę w sesji - przywróć ją
{
    $gm = $_SESSION['gm'];
}
$v = $gm->v; //niezależnie cyz nowa gra czy załadowana
$gm->sync(); //przelicz surowce
        
        if(isset($_REQUEST['action'])) 
        {
            switch($_REQUEST['action'])
            {
                case 'upgradeBuilding':
                    $v->upgradeBuilding($_REQUEST['building']);
                    $smarty->assign('buildingList', $v->buildingList());
                    $buildingUpgrades = $gm->s->getTasksByFunction("scheduledBuildingUpgrade");
                    $smarty->assign('buildingUpgrades', $buildingUpgrades);
                    $smarty->assign('mainContent', "townHall.tpl");
                break;
                case 'newUnit':
                    if(isset($_REQUEST['spearmen'])) //kliknelismy wyszkol przy włócznikach
                    {
                        $count = $_REQUEST['spearmen']; //ilość nowych włóczników
                        $gm->newArmy($count, 0, 0, $v); //tworz nowy oddział włóczników w wiosce w ilosci $count;
                    }
                    if(isset($_REQUEST['archer']))
                    {
                        $count = $_REQUEST['archer']; 
                        $gm->newArmy(0, $count, 0, $v); 
                    }
                    if(isset($_REQUEST['cavalry']))
                    {
                        $count = $_REQUEST['cavalry']; 
                        $gm->newArmy(0, 0, $count, $v); 
                    }
                    $smarty->assign('armyList', $gm->getArmyList());
                    $smarty->assign('mainContent', "townSquare.tpl");
                break;
                case 'townHall':
                    $smarty->assign('buildingList', $v->buildingList());
                    $buildingUpgrades = $gm->s->getTasksByFunction("scheduledBuildingUpgrade");
                    $smarty->assign('buildingUpgrades', $buildingUpgrades);
                    $smarty->assign('mainContent', "townHall.tpl");
                break;
                case 'townSquare':
                    $smarty->assign('armyList', $gm->getArmyList());
                    $smarty->assign('mainContent', "townSquare.tpl");
                break;
                default:
                    
                    $gm->l->log("Nieprawidłowa zmienna \"action\"", "controller", "error");
            }
        } 
$smarty->assign('wood', $v->showStorage("wood"));      
$smarty->assign('iron', $v->showStorage("iron"));        
$smarty->assign('food', $v->showStorage("food"));       

$smarty->assign('logArray', $gm->l->getLog());
$smarty->display('index.tpl');     
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

<div id="kontener"   style=" width: 1920px; height: 1080px; background-image: url(72.png); " >

<div id="navi" style=" background-image: url(nav.png);  width: 1920px; height: 50px; ">
<div class="btn-group" style=" margin-top: 7px;">
  <div>
  <div class="btn-group">
  

  <a style=" background-image: url(ramka.png); color: white; margin-left: 580px; height: 40px; width: 150px; text-align: center;  " href="index.php?action=townHall"  >
 Ratusz
  </a>
 
</div>
  <ul class="dropdown-menu">
 
  </div>
  
  <div>
  
  <div class="btn-group">
  <a style=" background-image: url(ramka.png); color: white; margin-left: 30px; height: 42px; width: 150px; text-align: center; " href="index.php?action=townSquare">
   Plac
  </a>
  
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
    <a class="dropdown-item" href="#">Action</a>
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
  <a  class="dropdown-item" href="#" style="background-color:   rgb(248, 211, 132);"><img src="woods.png" style="width: 16px; height: 16px; ">Drewno: <?php echo $v->showStorage("wood"); ?></a> 
 </div>
 <div id="name1" style="float:   left; border: 2px solid brown; position: relative;">
<p class="card-text">
  <a  class="dropdown-item" href="#" style="background-color:   rgb(248, 211, 132);"><img src="ingot.png" style="width: 16px; height: 16px;"> Zelanzo: <?php echo $v->showStorage("iron"); ?></a> 
 </div>
 <div id="name2" style="float:   left; border: 2px solid brown ; position: relative;">
<p class="card-text">
  <a  class="dropdown-item" href="#" style="background-color:   rgb(248, 211, 132);"> <img src="harvest.png" style="width: 16px; height: 16px;">Zniwo: <?php echo $v->showStorage("food"); ?></a> 
 </div>
</div>
</div>

<div id="box" style="width: 1930px;  ">

<div id="budynek" style="float: right; width: 165px; position: relative; margin-right: 400px; margin-top: 120px;  border: 4px solid brown; background-color:   rgb(248, 211, 132); " >

        <a><b>Rozbuduj Tartak:</b></a>
      <p class="card-text"> 
      poziom <?php echo $v->buildingLVL("woodcutter"); ?> <br>
        Zysk/h: <?php echo $v->showHourGain("wood"); ?><br>
        <?php if($v->checkBuildingUpgrade("woodcutter")) : ?>
        <a href="index.php?action=upgradeBuilding&building=woodcutter">
            <button type="button"  class="btn btn-warning">Rozbuduj drwala</button>
        </a>
        <?php else : ?>
          
            <button onclick="missingResourcesPopup()" type="button"  class="btn btn-warning">Rozbuduj drwala</button>
        </a>
        <?php endif; ?></p>
        <a><b>Rozbuduj Kopalnie:</b></a>
        <p class="card-text">
        poziom <?php echo $v->buildingLVL("ironMine"); ?> <br>
        Zysk/h: <?php echo $v->showHourGain("iron"); ?><br>
        <?php if($v->checkBuildingUpgrade("ironMine")) : ?>
        <a href="index.php?action=upgradeBuilding&building=ironMine">
            <button type="button" class="btn btn-warning">Rozbuduj kopalnie żelaza</button>
        </a>
        <?php else : ?>
          
            <button onclick="missingResourcesPopup()" type="button" class="btn btn-warning">Rozbuduj kopalnie żelaza</button>
        </a>
        <?php endif; ?></p>
        
   
    
</div>

<div id="wioska" style="float: left; width: 100px; ">


<img src="plemiona2.png" alt="wioska" style=" margin-left: 530px; margin-right: auto; margin-top: 100px;  border: 5px solid brown;   width: 800px; position: relative; ">

<div class="centered" style=" position: absolute; top: 165px; left: 377px; transform: translate(200px, 29px);"> <?php echo $v->buildingLVL("ironMine");?></div>
<div class="centered" style=" position: absolute; top: 595px; left: 1067px; transform: translate(200px, 29px);"> <?php echo $v->buildingLVL("woodcutter");?></div>
</div>


</div>






</div>




<footer class="row">
            <div class="col-12">
            <table class="table table-bordered">
            <?php
            
                
                    
                
            
            foreach ($gm->l->getLog() as $entry) {
                $timestamp = date('d.m.Y H:i:s', $entry['timestamp']);
                $sender = $entry['sender'];
                $message = $entry['message'];
                $type = $entry['type'];
                echo "<tr>";
                echo "<td>$timestamp</td>";
                echo "<td>$sender</td>";
                echo "<td>$message</td>";
                echo "<td>$type</td>";
                echo "</tr>";
            }
            
            ?>
            </table>
            </div>
        </footer>
<script>
function missingResourcesPopup(){
    window.alert("Brakuje zasobów");
}
<?php
if(isset($_REQUEST['action'])) 
{
    switch($_REQUEST['action'])
    {
        case 'upgradeBuilding':
            if($v->upgradeBuilding($_REQUEST['building']))
            {
                echo "Ulepszono budynek: ".$_REQUEST['building'];
            }
          else
          {
                echo "Nie udało się ulepszyć budynku: ".$_REQUEST['building'];
            }
            
      break;
        default:
            echo 'Nieprawidłowa zmienna "action"';
    }
}
?>
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

   </body>
</html>