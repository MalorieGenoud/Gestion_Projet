@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Page d'édition</div>

                    <div class="panel-body">
                        Modifiez votre projet ici
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<?php

echo "<br>123 -> ".Hash::make('123');
?>
