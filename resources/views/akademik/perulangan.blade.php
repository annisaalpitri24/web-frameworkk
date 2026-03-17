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
           <?php $i = 1; ?>
           @while($i < 5)
              Looping ke- {{ $i }} <br/>
              <?php $i++ ?>
            @endwhile
        </div>
    </div>-->
        <div class="container">
            <h2>Perulangan Foreach</h2>
            <div class="col-md-6">
                <!-- <h4>Nama = {{ $nama }}, Nim = {{ $nim }}</h4>
            Nilai =
            @foreach ($total_nilai as $nilai)
                <div class="alert alert-info d-inline-block"> {{ $nilai }} </div>
            @endforeach -->

                <h4>Nama = {{ $nama }}, Nim = {{ $nim }}</h4>
                Nilai = |
            @forelse ($total_nilai as $val)
                @if (($val >= 0) and ($val <50))
                    <div class="alert alert-warning d-inline-block"> {{$val}} </div>
               @elseif (($val >= 50) and ($val <100))
                    <div class="alert alert-success d-inline-block">  {{$val}} </div>
    
                @endif
                @empty
              <div class="alert alert-danger d-inline-block"> Data tidak valid </div>
            @endforelse
            </div>
        </div>
    </body>

</html>