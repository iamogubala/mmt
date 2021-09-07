<html>

<body>
  <form action="#" method="POST">
    <label for="firstname"><b>FIRST NAME</b></label>
    <input type="text" id="first" placeholder="" required>
    <label for="sirname"><b>SIR NAME</b></label>
    <input type="text" id="sir" placeholder="" required>
    <label for="othername"><b>OTHER NAME</b></label>
    <input type="text" id="other" placeholder="" required><br>
    <br>
    <label for="country"><b>COUNTRY</b></label>
    <input type="text" placeholder="" required><br>
    <br>

    <label for="state"><b>STATE</b></label>
    <input type="text" placeholder="" required><br>
    <br>


    <fieldset required>
      <legend>contact details</legends>
        <label>Email Address:<input type="email" name="email" required></label>
        <label>Phone Number:<input type="number" name="phone" required></label>
    </fieldset>


    <label for="gender"><b>GENDER</b></label>
    <select name="gender" id="gender" required>
      <option value="male">MALE</option>
      <option value="female">FEMALE</option>
    </select><br><br>
    <input type="submit" value="submit">

    <!--input type="reset" value="reset"-->
  </form>

</body>

</html>