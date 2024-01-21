<html>
    <head>
    <title>blade</title>
    </head>
    
    <body>belajar balde
        <p>
            halo {{$nama}}
        </p>
        <p>
            contoh foreach
            <ul>
             @foreach($daftar_hewan as $key=>$value)
             <li>{{$key+1}}.{{$value}}</li>
             @endforeach   
            </ul>

            contoh for
            <ul>
             @for($i=0;$i<3;$i++)
             <li>{{$i+1}}.{{$daftar_hewan[$i]}}</li>
             @endfor  
            </ul>

            contoh if
            <ul>
             @for($i=0;$i<3;$i++)
             @if(($i+1)%2==1)
             <li>{{$i+1}}.{{$daftar_hewan[$i]}}</li>
             @endif
             @endfor  
            </ul>
        </p>
    </body>
    </html>