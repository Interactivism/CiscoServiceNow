<?php
  include ('includes/shared/html-header.php');
?>
  
<div class="Wrap--center">
  
  <div id="login-wrapper" class="Login">
    
    <article id="login">

        <div class="Login-header">
          <img src="images/Cisco_Logo.svg" />
          <h3 data-text="LOGIN_LOCAL_CONTENT_EXISTING_USER">Log in to Metacloud Service Now</h3>
        </div>
        
        <!-- Remove the sso.cisco.com domain from the action, leaving just the directory -->
        <form id="login-form" class="Login-form" method="post" name="login-form" action="https://sso-test.cisco.com/autho/login/loginaction.html">
          <ul>
            <li>
              <label for="userInput" class="username-label" tabindex="1" data-text="LOGIN_LOCAL_CONTENT_USER_NAME">User Name</label>
              <input id="userInput" class="inptxt username-input" type="text" name="userid" size="33" maxlength="105" autocomplete="off">
            </li>
            <li>
              <label id="password" for="passwordInput" class="password-label" data-text="LOGIN_LOCAL_CONTENT_PASSWORD">Password</label>
              <input id="passwordInput" class="inptxt password-input" type="password" name="password" size="33" maxlength="105">
            </li>
            <input type="hidden" name="target" value="">
            <input type="hidden" name="smauthreason" value="">
            <input type="hidden" name="smquerydata" value="">
            <input type="hidden" name="smagentname" value="">
            <input type="hidden" name="postpreservationdata" value="">
            <input type="hidden" name="SMENC" value="">
            <input type="hidden" name="SMLOCALE" value="">
          </ul>
          <input id="login-button" class="button-cta default-command-button" type="submit" name="login-button" data-value="LOGIN_LOCAL_CONTENT_BTN_LOGIN" value="Log In">
        </form>
        
        <p class="forget">
          <a href="" data-url="LOGIN_LOCAL_CONTENT_FORGOT_PASSWORD_URL" data-text="LOGIN_LOCAL_CONTENT_FORGOT_PASSWORD">
              Forgot your password?
            </a>
          </p>
        <p id="register">
          <a data-url="LOGIN_LOCAL_BTN_REGISTER_NOW_URL" href="">
            <span class="button-cta" data-text="LOGIN_LOCAL_BTN_REGISTER_NOW">
              Register Now
            </span>
          </a>
        </p>

    </article>
      
  </div>
    
</div>
  
<?php
  include ('includes/shared/html-footer.php');
?>