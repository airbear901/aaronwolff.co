<?php

?>

<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend></legend>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="betagainst">Who are you betting against?</label>
  <div class="col-md-4">
    <select id="betagainst" name="betagainst" class="form-control">
      <option value="1">name one</option>
      <option value="2">name two</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Text Input</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="thebet">Whats the bet?</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="thebet" name="thebet"></textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="wager">Wager</label>  
  <div class="col-md-8">
  <input id="wager" name="wager" type="text" placeholder="ex. $10 or If I win, I get a pony. If Tom wins, he names my first child." class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="reminddate">Date to remind</label>  
  <div class="col-md-4">
  <input id="reminddate" name="reminddate" type="text" placeholder="2014-08-09" class="form-control input-md">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-success">Submit</button>
  </div>
</div>

</fieldset>
</form>
