<form action='send.php' method='post' enctype='multipart/form-data'>
  <!--
    input
    textarea
    file
    select
    radio
    checkbox
    multiple select
    button
  -->
  Name: <br>
  <input type='text' name='name'>
  <br>
  <hr>
  About:<br>
  <textarea required name='about' rows='5' cols='50' placeholder='Tell me something..'></textarea>
  <hr>
  Job:<br>
  <select name='job'>
    <option>-- Select --</option>
    <option value='web-developer'>Web Developer</option>
    <option value='front-end-developer'>Front-end Developer</option>
    <option value='back-end-developer'>Back-end Developer</option>
  </select>
  <hr>
  Gender:<br>
  <label>
    <input type="radio" name="gender" value="men" checked> Men
  </label>

  <label>
    <input type="radio" name="gender" value="women"> Women
  </label>
  <hr>
  Hobbies:<br>
  <label>
    <input type='checkbox' name='hobbies[]' value='php'> PHP
  </label>
  <label>
    <input type='checkbox' name='hobbies[]' value='html'> HTML
  </label>
  <label>
    <input type='checkbox' name='hobbies[]' value='css'> CSS
  </label>
  <hr>
  Picture: <br>
  <input type='file' name='picture'>
  <hr>
  Job:<br>
  <select name='job2[]' multiple size='5'>
    <option>-- Select --</option>
    <option value='web-developer'>Web Developer</option>
    <option value='front-end-developer'>Front-end Developer</option>
    <option value='back-end-developer'>Back-end Developer</option>
  </select>
  <hr>
  <button type='submit'>SEND</button>
</form>

  <!--
  <label for='input'>Click Here</label>
  <input type="text" id="input" name="" value="">
-->
