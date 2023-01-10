
<!-- I took the some of the code for front end from codepen and make a little
        bit of change to meet the question requirement.-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles2.css">
    <title>Title</title>
    <script defer src="verify_ajax.js" type ="text/javascript"  ></script>


</head>
<body>
<a href="https://github.com/HaziqWahid" class="logo" target="_blank">
    <img src="/pictures/haziwahid.jpg" alt="">

</a>


<div class="section">
    <div class="container">
        <div class="row full-height justify-content-center">
            <div class="col-12 text-center align-self-center py-5">
                <div class="section pb-5 pt-5 pt-sm-2 text-center">
                    <h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
                  <div class="card-3d-wrap mx-auto">
                      <div class="card-3d-wrapper">
                          <div class="card-front">
                              <div class="center-wrap">
                                  <div class="section text-center">
                                      <h4 class="mb-4 pb-3">User Name</h4>
                                      <form id="username-form" method="GET">
                                      <div class="form-group">
                                          <input type="text" name="username" class="form-style" placeholder="Enter 'abc' only" id="username" autocomplete="off">
                                          <i class="input-icon uil uil-at"></i>
                                      </div>
                                      <button  class="btn mt-4" type ="submit"  name="submit">submit</button>
                                          <ul id="form-messages-verified">
                                              <li>
                                                  Verified
                                              </li></ul>
                                          <ul id="form-messages-error">
                                              <li>
                                                  Error
                                              </li></ul>
                                      </form>
                                  </div>
                              </div>
                          </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>