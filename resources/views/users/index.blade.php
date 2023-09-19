@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-lg-12 margin-tb">
    <div class="pull-left">
      <h2>Users Management</h2>
    </div>
    <div class="pull-right">
      <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User </a>
    </div>
  </div>
</div>


@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif


<table class="table table-bordered">
  <tr>
    <th>No</th>
    <th>Name</th>
    <th>Email</th>
    <th>Roles</th>
    <th width="280px">Action</th>
  </tr>
  @foreach ($data as $key => $user)
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>
      @if(!empty($user->getRoleNames()))
      @foreach($user->getRoleNames() as $v)
      <label class="badge badge-success">{{ $v }}</label>
      @endforeach
      @endif
    </td>
    <td>
      <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
      <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
      {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
      {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
      {!! Form::close() !!}
    </td>
  </tr>
  @endforeach
</table>


{!! $data->render() !!}

<script type="text/javascript">
  $(document).ready(function() {
    $("#sendButton").jqxButton({template:"primary",width:"120"});


    var user_group = ["Admin", "Creator", "Admin 2", ];
    var user_lavel = ["Lavel 1", "Lavel 2", "Lavel 3", ];


    var division_name = ["Lavel 1", "Lavel 2", "Lavel 3", ];
    var district_name = ["Lavel 1", "Lavel 2", "Lavel 3", ];
    var designation_name = ["Lavel 1", "Lavel 2", "Lavel 3", ];
    var relegion_name = ["islam", "Hindu", "Jishu", "Others"];
    var gender_name = ["Male", "Female", "Others"];

    // Combo Box Aria 
    var theme = 'classic';
    $("#user_group").jqxComboBox({
      theme: theme,
      autoOpen: false,
      autoDropDownHeight: true,
      promptText: "Select User Group",
      source: user_group,
      width: 310,
      height: 30
    });

    $("#user_lavel").jqxComboBox({
      theme: theme,
      autoOpen: false,
      autoDropDownHeight: true,
      promptText: "Select User Lavel",
      source: user_lavel,
      width: 310,
      height: 30
    });

    $("#division_name").jqxComboBox({
      theme: theme,
      autoOpen: false,
      autoDropDownHeight: true,
      promptText: "Select Division",
      source: division_name,
      width: 310,
      height: 30
    });

    $("#district_name").jqxComboBox({
      theme: theme,
      autoOpen: false,
      autoDropDownHeight: true,
      promptText: "Select District",
      source: district_name,
      width: 310,
      height: 30
    });


    $("#designation_name").jqxComboBox({
      theme: theme,
      autoOpen: false,
      autoDropDownHeight: true,
      promptText: "Select Designation",
      source: designation_name,
      width: 310,
      height: 30
    });

    $("#relegion_name").jqxComboBox({
      theme: theme,
      autoOpen: false,
      autoDropDownHeight: true,
      promptText: "Select Religion",
      source: relegion_name,
      width: 180,
      height: 30
    });
    $("#gender_name").jqxComboBox({
      theme: theme,
      autoOpen: false,
      autoDropDownHeight: true,
      promptText: "Select Gendor",
      source: gender_name,
      width: 180,
      height: 30
    });

    $('#jqxTabs').jqxTabs({
      width: '100%',
      height: 500,
    });

    var user_rules = [{
        input: '#user_id',
        message: 'required!',
        action: 'keyup, blur, change',
        rule: function(input, commit) {
          if (jQuery("#user_id").val() == '') {
            jQuery("#user_id").focus();
            return false;
          } else {
            return true;
          }
        }
      },
      {
        input: '#user_id',
        message: 'more than 50 characters',
        action: 'keyup, blur, change',
        rule: function(input, commit) {
          if (input.val() != '') {
            if (input.val().length > 50) {
              jQuery("#user_id").focus();
              return false;
            }
          }
          return true;

        }
      }

    ];


    $("#in_save_btn").click(function() {
      $('#action_form').jqxValidator({
        rules: user_rules,
        theme: theme
      });
      var validationResult = function(isValid) {
        if (isValid) {
          $("#in_save_btn").hide();
          $("#in_save_loading").show();
          call_ajax_submit();
          clear_form();
        }
      }
      $('#action_form').jqxValidator('validate', validationResult);
    });
  });

  function call_ajax_submit(e) {

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
      }
    });
    e.preventDefault();
    var postdata = $('#action_form').serialize();

    $.ajax({
      type: "POST",
      cache: false,
      url: "{{ url('users') }}",
      data: postdata,
      datatype: "json",
      async: true,
      success: function(response){
        var json = $.parseJSON(response);

      }
    });










  }

  function clear_form() {

  }
  function add(val, indx) {
        EOL.messageBoard.open('' , (jQuery(window).width() - 150), jQuery(window).height(), 'yes');
        return false;
    }
</script>



<div class='default'>
  <div id='jqxTabs'>
    <ul>
      <li style="margin-left: 30px;">From</li>
      <li>Data Grid</li>
    </ul>

    <div style="overflow: hidden;padding:1rem">
      <h2 align="center">User Information </h2>

      <form name="action_form" id="action_form" method="POST" enctype="multipart/form-data">

        <div style="display: flex;">
          <table style="width: 40%;">
            <tr>
              <td><b>User ID:</b> <strong style="color: red;">*</strong></td>
              <td><input name="user_id" type="text" id="user_id" value="" class="form-control" /></td>
            </tr>

            <tr>
              <td><b>Password: </b><strong style="color: red;">*</strong></td>
              <td style="color:#005ce6"><input name="password" type="password" id="password" class="form-control" />
            </tr>

            <tr>
              <td><b>User Name:</b><strong style="color: red;">*</strong></td>
              <td><input name="user_name" type="text" id="user_name" value="" class="form-control" /></td>
            </tr>

            <tr>
              <td><b>User Group:</b><strong style="color: red;">*</strong></td>
              <td>
                <div id="user_group" name="user_group"></div>
              </td>
            </tr>

            <tr>
              <td><b>User Lavel:</b><strong style="color: red;">*</strong></td>
              <td>
                <div id="user_lavel" name="user_lavel"></div>
              </td>
            </tr>

            <tr>
              <td><b>Division :</b><strong style="color: red;">*</strong></td>
              <td>
                <div id="division_name" name="division_name"></div>
              </td>
            </tr>
            <tr>
              <td><b>District :</b><strong style="color: red;">*</strong></td>
              <td>
                <div id="district_name" name="district_name"></div>
              </td>
            </tr>
            <tr>
              <td><b>Designation :</b><strong style="color: red;">*</strong></td>
              <td>
                <div id="designation_name" name="designation_name"></div>
              </td>
            </tr>


          </table>
          <table style="width: 40%; margin-left: 2rem;">
            <tr>
              <td><b>Phone :</b><strong style="color: red;">*</strong></td>
              <td><input name="phone" type="text" id="phone" value="" class="form-control" /></td>
            </tr>
            <tr>
              <td><b>E-Mail :</b><strong style="color: red;">*</strong></td>
              <td><input name="email_address" type="text" id="email_address" value="" class="form-control" /></td>

            </tr>
            <tr>
              <td><b>DOB:</b><strong style="color: red;">*</strong></td>
              <td>

                <input name="date_of_birth" id="date_of_birth" type="text" class="form-control" placeholder="dd/mm/yyyy">
                <script type="text/javascript">
                  datePicker("date_of_birth");
                </script>

              </td>
            </tr>
            <tr>
              <td><b>Relegion :</b><strong style="color: red;">*</strong></td>
              <td>
                <div id="relegion_name" name="relegion_name"></div>

              </td>
            </tr>
            <tr>
              <td><b>Gender:</b><strong style="color: red;">*</strong></td>
              <td>
                <div id="gender_name" name="gender_name"></div>
              </td>
            </tr>
            <tr>
              <td><b>Location :</b><strong style="color: red;">*</strong></td>
              <td><input name="address" type="text" id="address" value="" class="form-control" /></td>
            </tr>
            <tr>
              <td><b>Remarks :</b><strong style="color: red;">*</strong></td>
              <td><input name="remarks" type="text" id="remarks" value="" class="form-control" /></td>
            </tr>
          </table>
        </div>

        <div align="center" style="margin-top:1rem;">
          <button id="in_save_btn" type="button" class="btn btn-success">Save</button>
          <span style="display: none;" id="in_save_loading">Loading... <img src="{{ asset('JqxGrid') }}/images/loadingimage.gif" alt=""></span>
        </div>

      </form>

      <a style="text-decoration:none "
        onclick="javascript:EOL.messageBoard.open(this.href, ($(window).width()-70), $(window).height(), 'yes'); return false;"
        href="" title=""><input type="button" value="Add Loan" id="sendButton" /></a>


    </div>

    <div style="overflow: hidden;">
      <div style="border:none;" id="jqxGrid"></div>
    </div>
  </div>
</div>
@endsection