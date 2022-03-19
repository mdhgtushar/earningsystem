<?php 
echo '<section class="create-key">
<form action="" method="post">
  <h2>Add keys</h2>
  <div>
    <select name="lic_grp">
      <option value="file">Select Category</option>
      <option value="text">TextBox</option>
    </select>
  <input type="text" placeholder="Key" name="lic_key"> 
   <span id="fooBar"></span>
    <input type="button" value="add" onclick="add()" />
    <input type="submit" value="submit"/>
  </div>
</form>
<div class="instruction">
<h4>instructions</h4>
<hr>
<ul>
<li>Instruction</li>
<li>Instruction</li>
<li>Instruction</li>
</ul>
</div>

<script>
var i = 0;
function add() {
  //Create an input type dynamically.
  i++;
var element = document.createElement("INPUT");
element.setAttribute("type", "text");
element.setAttribute("name", "lic_key"+i);
element.setAttribute("placeholder", "Key"+i);
  var foo = document.getElementById("fooBar");

  //Append the element in page (in span)
  foo.appendChild(element);
}
</script>
 </section>';

?>