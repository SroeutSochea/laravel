<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Create Customers</title>
  </head>
  <body>
    <div class="container-fluid">
        <div class="row">
            <x-header/>

        </div>
        <div class="row">
            <div >
                <x-menu/>
            </div>
            <div class="col-12">
                <h3 class="alert alert-success text-center" role="alert">
                    List of Customers
                </h3>
                @if(Session()->has("create"))
            <div class="alert alert-success text-center" role="alert">
                {{ Session()->get("create")}} is saved!!!
              </div>
              {{Session()->forget("create")}}
              @endif
                <div>
                    <form action="{{route("customer_create_post")}}" method="POST">
                        @csrf
                        <div class="mb-3">
                          <label class="form-label" for="txt_cusname">Customer Name</label>
                          <input type="text" class="form-control" name="txt_cusname" id="txt_cusname" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="txt_gender">Gender</label>
                            <select name="txt_gender" required class="form-control">
                                <option value="">--Gender--</option>
                                <option>Female</option>
                                <option>Male</option>
                            </select>
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="txt_telegram">Telegram</label>
                            <input type="text" class="form-control" name="txt_telegram" id="txt_telegram" required>
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="txt_dob">Date of Birth</label>
                            <input type="date" class="form-control" name="txt_dob" id="txt_dob" required>
                          </div>
                          <div class="mb-3">
                            <button type="submit" class="btn btn-outline-primary">Create</button>
                            <button type="reset" class="btn btn-outline-danger">Reset</button>
                          </div>
                      </form>
                </div>
            </div>
        </div>
        <div class="row">
            <x-footer/>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>