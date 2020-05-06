<?php 
    $mytextfield=null; 
    if (!empty($_REQUEST['mytextfield'])) { 
        $mytextfield=$_REQUEST['mytextfield']; 
    } 
     
    $multicars = array(); 
    if (!empty($_REQUEST['multicars'])) { 
        $multicars = $_REQUEST['multicars']; 
    } 
     
    $cars=''; 
    if (!empty($_REQUEST['cars'])) { 
        $cars = $_REQUEST['cars']; 
    } 
     
    $rcar=''; 
    if (!empty($_REQUEST['rcar'])) { 
        $rcar = $_REQUEST['rcar']; 
    } 
     
    $cbox0 = !empty($_REQUEST['cbox0']); 
    $cbox1 = !empty($_REQUEST['cbox1']); 
    $cbox2 = !empty($_REQUEST['cbox2']); 
    $cbox3 = !empty($_REQUEST['cbox3']); 
     
    // Pressing return or enter will press the most upper left button 
    $message = ''; 
    if (!empty($_REQUEST['button'])) { 
    $message = $_REQUEST['button'] . ' was pressed.'; 
} 
?> 



<html><title>My Window Title</title> 
    <!-- html comment --> 
    <!-- The form tag is needed if you with to send form values to the server  --> 
    <form action="example.php" method="POST"> 
        Text Field:&nbsp;&nbsp; 
        <input type="text" name="mytextfield" value="<? echo($mytextfield); ?>" size = 30 maxlength=10> 
        <hr size ="1" /> 

        Drop Down:&nbsp;&nbsp; 
          <select name="cars"> 
            <option value="volvo">Volvo</option> 
            <option value="saab" <? echo($cars=='saab' ? 'selected' : ''); ?> >Saab</option> 
            <option value="fiat" <? echo($cars=='fiat' ? 'selected' : ''); ?> >Fiat</option> 
            <option value="audi" <? echo($cars=='audi' ? 'selected' : ''); ?> >Audi</option> 
        </select> 
        <hr size ="1" /> 

        Multi-Drop Down:&nbsp;&nbsp; 
          <select name="multicars[]" multiple size = 8> 
            <option value="volvo" <? echo(in_array('volvo',$multicars) ? 'selected' : ''); ?> >Volvo</option> 
            <option value="saab" <? echo(in_array('saab',$multicars) ? 'selected' : ''); ?> >Saab</option> 
            <option value="fiat" <? echo(in_array('fiat',$multicars) ? 'selected' : ''); ?> >Fiat</option> 
            <option value="audi" <? echo(in_array('audi',$multicars) ? 'selected' : ''); ?> >Audi</option> 
        </select> 
        <hr size ="1" /> 

        Radio:&nbsp;&nbsp; 
          <input type="radio" name="rcar" value="volvo" <? echo($rcar=='volvo' ? 'checked' : ''); ?> >Volvo&nbsp;&nbsp; 
        <input type="radio" name="rcar" value="saab" <? echo($rcar=='saab' ? 'checked' : ''); ?> >Saab&nbsp;&nbsp; 
        <input type="radio" name="rcar" value="fiat" <? echo($rcar=='fiat' ? 'checked' : ''); ?> >Fiat&nbsp;&nbsp; 
        <input type="radio" name="rcar" value="audi" <? echo($rcar=='audi' ? 'checked' : ''); ?> >Audi&nbsp;&nbsp; 

        <hr size ="1" /> 
        Check Box:<br> 
        <input type="checkbox" name="cbox0" value="volvo" <? echo($cbox0 ? 'checked' : ''); ?> >Volvo<br> 
        <input type="checkbox" name="cbox1" value="saab" <? echo($cbox1 ? 'checked' : ''); ?> >Saab<br> 
        <input type="checkbox" name="cbox2" value="fiat" <? echo($cbox2 ? 'checked' : ''); ?> >Fiat<br> 
        <input type="checkbox" name="cbox3" value="audi" <? echo($cbox3 ? 'checked' : ''); ?> >Audi<br> 

        <hr size ="1" /> 
        <input type="submit" name="button" value="Button One">&nbsp; 
        <input type="submit" name="button" value="Button Two">&nbsp; 
        <?=$message?> 

        <hr size ="1" /> 
        <a href="example.php">My Hyperlink</a> 



    </form> 
</html>
