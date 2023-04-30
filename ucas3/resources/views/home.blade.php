@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Dashboard</h2>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    <p>student Name = {{$s_name}}</p>
    <p>student average = {{$s_avg}}</p>
    <p>____________________________________________________</p>

    <p>user_id ==={{$key1}}</p>
    <p>user_name ==={{$key2}}</p>
    <p>user_email ==={{$key3}}</p>

    @if($key1 == 1)
        <p style="font-weight:bold;">Hello super Admnin</p>
    @else
        <p>Hello user </p>
    @endif
    <p>forloop ________________________________________________________________</p>

    @for ($i = 0; $i < $loop; $i++)
        <p>The current value is {{ $i }}</p> 
    @endfor

    <p>foreach ________________________________________________________________</p>

    @foreach ($my_array as $element)
        <a herf="">This is element: {{ $element }}</a>
        <br><br>
    @endforeach
 
    <p>________________________________________________________________</p>

    <p>my_array={{$my_array[0]}}</p>
    <p>my_array={{$my_array[1]}}</p>
    <p>my_array={{$my_array[2]}}</p>
    <p>my_array={{$my_array[3]}}</p>
    <p>my_array={{$my_array[4]}}</p>

    <table>
        <tr>
            <th>id</th>
            <th>name</th>
        </tr>
        
        @foreach($my_array as $element)

            <tr>
                <td>{{$loop->index}}</td>
                <td>{{$element}}</td>
            </tr>
        @endforeach
    </table>
    
</div>
@endsection

