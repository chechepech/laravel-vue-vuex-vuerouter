<template>
	<div id="login" class="login-container">
    <form role="form" method="POST" action="/login">
      <input type="hidden" style="display: none;" name="_token" :value="csrf_token">
      <div class="form-control">
        <input id="email" type="email" name="email" placeholder="Email Address" required autofocus>
      </div>
      <div class="form-control">
        <input id="password" type="password" name="password" placeholder="Password" required>
      </div>
      <div class="form-control">
        <button type="submit">Log in</button>
      </div>
    </form>
  </div>
</template>
<script type="text/javascript">
export default {
    data() {
      return { csrf_token: window.csrf_token }
    }
  }
</script>
<style type="text/css">
	#login form {
    padding-top: 40px;
  }

  @media (min-width: 744px) {
    #login form {
      padding-top: 80px;
    }
  }

  #login .form-control {
    margin-bottom: 1em;
  }

  #login input[type=email],
  #login input[type=password],
  #login button,
  #login label {
    width: 100%;
    font-size: 19px !important;
    line-height: 24px;
    color: #484848;
    font-weight: 300;
  }

  input[type=email]:focus, input[type=password]:focus {
    -webkit-transition: all 0.30s ease-in-out;
    -moz-transition: all 0.30s ease-in-out;
    -ms-transition: all 0.30s ease-in-out;
    -o-transition: all 0.30s ease-in-out;
    transition: all 0.30s ease-in-out;
    outline: none;
    border: 1px solid #f76a3f;
  }

  input[type=email]:focus, input[type=password]:focus {
  box-shadow: 0 0 5px rgba(247, 106, 63, 1);
  border: 1px solid rgba(247, 106, 63, .5);
  }

  #login input {
    background-color: transparent;
    padding: 10px;
    outline: none;
    box-sizing:border-box;
  }

  #login button {
    background-color: #F76A3F;
    color: #ffffff;
    cursor: pointer;
    border: #4fc08d;
    border-radius: 4px;
    padding-top: 12px;
    padding-bottom: 12px;
  }
</style>