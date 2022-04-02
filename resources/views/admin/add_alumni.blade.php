
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <style type="text/css">

    label{
      display: inline-block;

      width: 200px;
    }
    </style>
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">

              <button id="bannerClose" class="btn border-0 p-0">

              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
    <div class="container" align="center" style="padding-top:100px; ">
      <form action="{{url('upload_alumni')}}" method="GET" enctype="multipart/form-data">

@csrf

        <div style="padding:15px;">
<label>Alumni Name</label>
<input type="text" name="name" style="color:black; placeholder="Write the name" />
        </div>

        <div style="padding:15px;">
<label>Phone</label>
<input type="number" name="number" style="color:black; placeholder="Write the number" />
        </div>

        <div style="padding:15px;">
<label>Specialisation</label>
<select name="Specialisation" style="color:black; width: 200px;">
  <option>
    --Select--
  </option>
<option value="CSE">CSE</option>
<option value="ECE">ECE</option>
<option value="IT">IT</option>
<option value="ME">ME</option>

</select>

        <div style="padding:15px;">
<label>Branch</label>
<input type="text" name="Branch" style="color:black; placeholder="Write the branch" />
        </div>

        <div style="padding:15px;">
<label>Alumni Image</label>
<input type="file" name="file" />
        </div>

        <div style="padding:15px;">

        <input type="submit" class="btn btn-success" />
        </div>

      </form>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
