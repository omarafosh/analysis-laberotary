<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Laravel</title>
</head>
<style>
    #dropdownMenuButton {
        width: 100px;
        border-radius: 0;
    }
    .close {
  font-size: 20px;
  text-shadow: none;
  color: #000;
  opacity: 1;
  position: absolute;
  right: 0;
  top: 0;
}

.card-title {
  font-size: 18px;
}

.card-subtitle {
  font-size: 11px;
  margin:10px;
}
.card-header{
    width: 250px;
}
</style>

<body class="antialiased">
    <div class="card border-primary mb-3" style="max-width: 18rem;">
        <div class="card-header"><input type="file" multiple name="image" id="image"
                onchange="return validateForm()">
        </div>
        <div class="card-body text-primary">
            <div class="card-header bg-info  border-0 py-3 d-flex align-items-center w-20">
                <img src="http://placehold.it/45x45" class="rounded-circle align-self-start mr-3">
                <div>
                    <h4 class="card-title mb-0">Card title</h4>
                    <h6 class="card-subtitle text-muted">Card subtitle</h6>
                </div>
              </div>
        </div>
    </div>


    <script>
        const p = document.querySelector('img');
        const fileInput = document.getElementById('image')
        fileInput.onchange = () => {
            const selectedFile = [...fileInput.files];
            selectedFile.forEach(el => {
                p.textContent = el["name"];

            });

        }
    </script>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

</body>

</html>
