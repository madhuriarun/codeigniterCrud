<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Users</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
<style type="text/css">
    .container{
        margin-top: 20px;
    }
    .errorbox{
        color: red;
    }
</style>
 


</head>
<body>
<div class="container">
    <!-- Page Heading -->
    <div class="row">
        <div class="col-12">
            <div class="col-md-12">
                <h1>User
                    <small>List</small>
                    <div class="float-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus"></span> Add New</a></div>
                </h1>
            </div>
             
            <table class="table table-striped table-bordered" id="mydata">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>City</th>
                        <th style="text-align: right;">Actions</th>
                    </tr>
                </thead>
                <tbody id="show_data">
                     
                </tbody>
            </table>
        </div>
    </div>
         
</div>
 
        <!-- MODAL ADD -->
            <form>
            <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Name</label>
                            <div class="col-md-10">
                              <input type="text" name="username" id="username" class="form-control" placeholder="Name">
                              <div class="errorbox username"></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Email</label>
                            <div class="col-md-10">
                              <input type="text" name="email" id="email" class="form-control" placeholder="Email">
                              <div class="errorbox email"></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Phone</label>
                            <div class="col-md-10">
                              <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone Number" maxlength="10">
                              <div class="errorbox phone"></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">City</label>
                            <div class="col-md-10">
                              <input type="text" name="city" id="city" class="form-control" placeholder="City" maxlength="10">
                              <div class="errorbox city"></div>
                            </div>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="btn_save" class="btn btn-primary">Save</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL ADD-->
 
        <!-- MODAL EDIT -->
        <form>
            <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <input type="hidden" name="userId" id="userId" class="form-control" value="">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Name</label>
                            <div class="col-md-10">
                              <input type="text" name="username_edit" id="username_edit" class="form-control" placeholder="Name">
                              <div class="errorbox username"></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Email</label>
                            <div class="col-md-10">
                              <input type="text" name="email_edit" id="email_edit" class="form-control" placeholder="Email">
                              <div class="errorbox email"></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Phone</label>
                            <div class="col-md-10">
                              <input type="text" name="phone_edit" id="phone_edit" class="form-control" placeholder="Phone" maxlength="10">
                              <div class="errorbox phone"></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">City</label>
                            <div class="col-md-10">
                              <input type="text" name="city_edit" id="city_edit" class="form-control" placeholder="City">
                              <div class="errorbox city"></div>
                            </div>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="btn_update" class="btn btn-primary">Update</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL EDIT-->
 
        <!--MODAL DELETE-->
         <form>
            <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                       <strong>Are you sure to delete this record?</strong>
                  </div>
                  <div class="modal-footer">
                    <input type="hidden" name="userId_delete" id="userId_delete" class="form-control">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Yes</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL DELETE-->
 
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.5.1.min.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>

 
<script type="text/javascript">
    $(document).ready(function(){
        show_user(); //call function show all user
        $('.errorbox.username').text('');
        $('.errorbox.email').text('');
        $('.errorbox.phone').text('');
        $('.errorbox.city').text('');  

        $('.btn-secondary').on('click', function(){
             $('.errorbox.username').text('');
                $('.errorbox.email').text('');
                $('.errorbox.phone').text('');
                $('.errorbox.city').text('');
        })     
          
        //function show all user
        function show_user(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo site_url('users/usersList')?>',
                async : true,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].id+'</td>'+
                                '<td>'+data[i].name+'</td>'+
                                '<td>'+data[i].email+'</td>'+
                                '<td>'+data[i].phone+'</td>'+
                                '<td>'+data[i].city+'</td>'+
                                '<td style="text-align:right;">'+
                                    '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-userId="'+data[i].id+'" data-username="'+data[i].name+'" data-email="'+data[i].email+'" data-phone="'+data[i].phone+'" data-city="'+data[i].city+'">Edit</a>'+' '+
                                    '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-userId="'+data[i].id+'">Delete</a>'+
                                '</td>'+
                                '</tr>';
                    }
                    $('#show_data').html(html);
                }
 
            });
        }
 
        //Save user
        $('#btn_save').on('click',function(){
            var username = $('#username').val();
            var phone = $('#phone').val();
            var email        = $('#email').val();
            var city        = $('#city').val();
            if (username == '') {
                $('#username').focus();
                $('.errorbox.username').text('Enter Name');
                $('.errorbox.email').text('');
                $('.errorbox.phone').text('');
                $('.errorbox.city').text('');
            }

            else if (email == '') {
                $('#email').focus();
                $('.errorbox.username').text('');
                $('.errorbox.phone').text('');
                $('.errorbox.city').text('');
                $('.errorbox.email').text('Enter Email');
            }

            else if (phone == '') {
                $('#phone').focus();
                $('.errorbox.username').text('');
                $('.errorbox.email').text('');
                $('.errorbox.city').text('');
                $('.errorbox.phone').text('Enter Phone');
            }
            
            else if (city == '') {
                $('#city').focus();
                $('.errorbox.username').text('');
                $('.errorbox.email').text('');
                $('.errorbox.phone').text('');
                $('.errorbox.city').text('Enter City');
            }

            else if(username != '' && email != '' && phone != '' && city != ''){
                $('.errorbox.username').text('');
                $('.errorbox.email').text('');
                $('.errorbox.phone').text('');
                $('.errorbox.city').text('');
                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url('users/save')?>",
                    dataType : "JSON",
                    data : {username:username , email:email, phone:phone,city:city},
                    success: function(data){
                        $('[name="username"]').val("");
                        $('[name="email"]').val("");
                        $('[name="phone"]').val("");
                        $('[name="city"]').val("");
                        $('#Modal_Add').modal('hide');
                        show_user();
                    }
                });
            }
            return false;
        });
 
        //get data for update record
        $('#show_data').on('click','.item_edit',function(){
            var username = $(this).data('username');
            var email = $(this).data('email');
            var phone        = $(this).data('phone');
            var city        = $(this).data('city');
            var userId = $(this).data('userid');
            $('#Modal_Edit').modal('show');
            $('[name="username_edit"]').val(username);
            $('[name="email_edit"]').val(email);
            $('[name="phone_edit"]').val(phone);
            $('[name="city_edit"]').val(city);
            $('[name="userId"]').val(userId);
        });
 
        //update record to database
         $('#btn_update').on('click',function(){
            var username = $('#username_edit').val();
            var email = $('#email_edit').val();
            var phone        = $('#phone_edit').val();
            var city        = $('#city_edit').val();
            var userId        = $('#userId').val();
             if (username == '') {
                $('#username_edit').focus();
                $('.errorbox.username').text('Enter Name');
                $('.errorbox.email').text('');
                $('.errorbox.phone').text('');
                $('.errorbox.city').text('');
            }

            else if (email == '') {
                $('#email_edit').focus();
                $('.errorbox.username').text('');
                $('.errorbox.phone').text('');
                $('.errorbox.city').text('');
                $('.errorbox.email').text('Enter Email');
            }

            else if (phone == '') {
                $('#phone_edit').focus();
                $('.errorbox.username').text('');
                $('.errorbox.email').text('');
                $('.errorbox.city').text('');
                $('.errorbox.phone').text('Enter Phone');
            }
            
            else if (city == '') {
                $('#city_edit').focus();
                $('.errorbox.username').text('');
                $('.errorbox.email').text('');
                $('.errorbox.phone').text('');
                $('.errorbox.city').text('Enter City');
            }

            else if(username != '' && email != '' && phone != '' && city != ''){
                $('.errorbox.username').text('');
                $('.errorbox.email').text('');
                $('.errorbox.phone').text('');
                $('.errorbox.city').text('');
                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url('users/update')?>",
                    dataType : "JSON",
                    data : {userId:userId, username:username , email:email, phone:phone, city:city},
                    success: function(data){
                        $('[name="username_edit"]').val("");
                        $('[name="email_edit"]').val("");
                        $('[name="phone_edit"]').val("");
                        $('[name="city_edit"]').val("");
                        $('#Modal_Edit').modal('hide');
                        show_user();
                    }
                });
            }
            return false;
        });
 
        //get data for delete record
        $('#show_data').on('click','.item_delete',function(){
            var userId = $(this).data('userid');
             
            $('#Modal_Delete').modal('show');
            $('[name="userId_delete"]').val(userId);
        });
 
        //delete record to database
         $('#btn_delete').on('click',function(){
            var userId = $('#userId_delete').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('users/delete')?>",
                dataType : "JSON",
                data : {userId:userId},
                success: function(data){
                    $('[name="userId_delete"]').val("");
                    $('#Modal_Delete').modal('hide');
                    show_user();
                }
            });
            return false;
        });
 
    });
 
</script>
</body>
</html>