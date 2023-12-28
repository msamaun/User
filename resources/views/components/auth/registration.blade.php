@extends('layouts.app')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-lg-10 center-screen">
            <div class="card w-100 p-3">
                <div class="card-body">
                    <h6>Sign Up</h6>
                    <hr/>
                    <div class="container-fluid m-0 p-0">
                        <div class="row m-0 p-0">
                            <div class="col-md-4 p-2">
                                <label>Email Address</label>
                                <input id="email" placeholder="User Email" class="form-control form-control-sm" type="email"/>
                            </div>
                            <div class="col-md-4 p-2">
                                <label>First Name</label>
                                <input id="first_name" placeholder="First Name" class="form-control form-control-sm" type="text"/>
                            </div>
                            <div class="col-md-4 p-2">
                                <label>Last Name</label>
                                <input id="last_name" placeholder="Last Name" class="form-control form-control-sm" type="text"/>
                            </div>
                            <div class="col-md-4 p-2">
                                <label>Mobile Number</label>
                                <input id="phone" placeholder="Mobile" class="form-control form-control-sm" type="text"/>
                            </div>
                            <div class="col-md-4 p-2">
                                <label>Password</label>
                                <input id="password" placeholder="User Password" class="form-control form-control-sm" type="password"/>
                            </div>
                        </div>
                        <div class="row m-0 p-0">
                            <div class="col-md-4 p-2">
                                <button onclick="Save()" class="btn mt-3 btn-sm w-100 btn-success">Complete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    async function Save()
    {

      let first_name = document.getElementById('first_name').value;
      let last_name = document.getElementById('last_name').value;
      let email = document.getElementById('email').value;
      let phone = document.getElementById('phone').value;
      let password = document.getElementById('password').value;


      let PostObj={
        first_name:first_name,
        last_name:last_name,
        email:email,
        phone:phone,
        password:password
      };

      let response = await axios.post('/registration', PostObj,{headers:{"Content-Type" : "application/json"}});
        hideLoader();


      if(response.data.status == 'success')
      {
        alert(response.data.message);
        window.location.href = '/login';
      }
      else
      {
        alert(response.data.message);
      }


    }
</script>
