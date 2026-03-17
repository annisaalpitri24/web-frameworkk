<!DOCTYPE html>
<html lang="en">
<<link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
   <!-- <div class="container">
        <h2>Perulangan For</h2>
        <div class="col-md-6">
            @for ($i = 0; $i < 5; $i++)
                Looping ke- {{ $i }} <br/>
            @endfor
        </div>
    </div> -->
     <!--<div class="container">
        <h2>Perulangan while</h2>
        <div class="col-md-6">
           <?php $i=1; ?>
           @while($i < 5)
              Looping ke- {{ $i }} <br/>
              <?php $i++ ?>
            @endwhile
        </div>
    </div>-->
    <div class="container">
        <h2>Perulangan Foreach</h2>
        <div class="col-md-6">
            <h4>Nama = {{ $nama }}, Nim = {{ $nim }}</h4>
            Nilai =
            @foreach ($total_nilai as $nilai)
                <div class="alert alert-info d-inline-block"> {{ $nilai }} </div>
            @endforeach
        </div>
    </div>
</body>
</html>