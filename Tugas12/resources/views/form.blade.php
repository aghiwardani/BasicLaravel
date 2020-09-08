<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ url('/')}}/css/bootstrap.min.css">
    </head>
    <body>
        <div class="col-md-3">
            <form action="{{ Route('welcome') }}" method="post">
                @csrf
                <h2>Buat Account Baru!</h2>
                <h3>Sign Up Form</h3>
                <div class="form-group">
                    <label for="" >First name:</label>
                    <input type="text" class="form-control col-md-12" name="first_name" required>
                </div>
                <div class="form-group">
                    <label for="">Last name:</label>
                    <input type="text" class="form-control col-md-12" name="last_name" required>
                </div>
                <div class="form-group">
                    <label for="">Gender:</label>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2" checked>
                        <label class="form-check-label" for="exampleRadios2">
                          Male
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                          Female
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                          Other
                        </label>
                      </div>
                </div>
                <div class="form-group">
                    <label for="">Nationality:</label>
                    <select id="inputState" class="form-control" required>
                        {{-- <option value=""></option> --}}
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Language Spoken:</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" checked>
                        <label class="form-check-label" for="exampleRadios2">
                          Bahasa Indonesia
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label" for="exampleRadios2">
                          English
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label" for="exampleRadios2">
                          Other
                        </label>
                      </div>
                </div>
                <div class="form-group">
                    <label for="">Bio:</label>
                    <textarea name="" id="" cols="30" rows="10" class="form-control" required></textarea>
                </div>
                <button>Sign Up</button>
            </form>
        </div>

        {{-- <script src="{{ url('/')}}/js/bootstrap.min.js"></script> --}}
        <script src="{{ url('/')}}/js/variousCountryListFormats.js"></script>
        <script>
            // $(document).ready(function() {
                console.log(countryListAllIsoData);
                var myParent = document.body;
                var array = countryListAllIsoData;
                var selectList = document.getElementById("inputState");
                // selectList.id = "inputState";
                // myParent.appendChild(selectList);

                //Create and append the options
                for (var i = 0; i < array.length; i++) {
                    var option = document.createElement("option");
                    option.value = array[i]['number'];
                    option.text = array[i]['name'];
                    // console.log(option);
                    selectList.appendChild(option);
                    // $("#inputState").append(option);
                }
            // });
        </script>
    </body>
</html>