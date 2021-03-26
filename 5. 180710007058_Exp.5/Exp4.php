
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>EXPERIMENT 4</title>
  </head>

<header>
  <h1> Internship Application Form </h1>
</header>


  <body>
    <form method="post"
          action="Exp5.php"
          enctype="multipart/form-data">
      <p><label><sup>*</sup>First Name: <input  type=text name="firstname" required autofocus placeholder="First Name"
	  pattern="[A-Z]*[a-z]]{2,20}" title="First name should contain only letters."></label></p>

      <p><label><sup>*</sup>Last Name: <input type=text name="lastname" required  placeholder="Last Name"
	  pattern="[A-Z]*[a-z]]{2,20}" title="Last name should contain only letters."></label></p>

      <p><label>Contact Number: <input type=tel name="ContNo"
	  pattern="[0-9]{10}" title="Your contact number must be 10 digits" placeholder="Contact number"></label></p>

      <p><label><sup>*</sup>Email id: <input type=email name="emailid" required placeholder="Email id"></label></p>

      <p><label>Personal Website: <input type=text name="website" id="intWebsite" placeholder=" Personal Website"></label></p>

	  <p><label for="address">Address:</label>
                <textarea rows="3" cols="30" name="address" id="address"></textarea></p>

      <p><label>Upload your profile Photo <input type="file" name="fileToUpload" id="fileToUpload" accept="image/*" ></label></p>


      <p><label>Password: <input type=Password name="pwdUserPassword" id="pwd" value="" placeholder=" Password" disabled></label></p>

      <fieldset>
      <label> <sup>*</sup>Course </label>
      <p><label> <input type=radio name="course" required value="B.tech"> B.Tech </label></p>
      <p><label> <input type=radio name="course" required value="B.E.">B.E.</label></p>
      <p><label> <input type=radio name="course" required value="large"> MCA </label></p>
    </fieldset>

    <p><label>Select your Current Semester</label>
    <select name="SelectSem">

        <option>1<sup>st</sup> Semester</option>
        <option>2<sup>nd</sup> Semester</option>
        <option>3<sup>rd</sup> Semester</option>
        <option>4<sup>th</sup> Semester</option>
        <option selected="selected">5<sup>th</sup> Semester</option>
        <option>6<sup>th</sup> Semester</option>
        <option>7<sup>th</sup> Semester</option>
        <option>8<sup>th</sup> Semester</option>
      </select>
    </p>

      <fieldset>
      <label> Domains on which you want to apply for internship ? </label>
      <p><label> <input type=checkbox name="Domain" value="WebDev">Web Development </label></p>
      <p><label> <input type=checkbox name="Domain" value="AppDev"> Android Application Development </label></p>
      <p><label> <input type=checkbox name="Domain" value="ML/AI"> ML & AI </label></p>
      <p><label> <input type=checkbox name="Domain" value="DeepLearning"> Deep Learning </label></p>
      <p><label> <input type=checkbox name="Domain" value="ImageProcessing">Image Processing</label></p>
      <p><label> <input type=checkbox name="Domain" value="CNN">CNN</label></p>
      <p><label> <input type=checkbox name="Domain" value="GAN">GAN</label></p>
      </fieldset>


      <p><label><sup>*</sup>Preferred Internship Starting Date: <input type=date min="05:01:2020" max="12:01:2022" step="900" name="Starting" required></label></p>

      <p><label>For how many days you want to do the Internship? <input name="days" type="number" min="15" max="180" step="15"></label></p>

      <p><label>Any query/Suggestion: <textarea name="comments" maxlength=1000></textarea></label></p>

      <p><label>Commitment: <input type=text name="Icommit" value="Yes, I am commited to give my level best throughout the period of Internship." readonly></label></p>


	  <input type="submit" name="submit" value="Submit">
	  <input type="reset" name="reset" value="Reset">



    </form>
  </body>
</html>
