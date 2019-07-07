@extends('layouts.master')

@section('body')

    @include('components.php.getLevel')

    <style>
        .skill_icon {
            max-width: 16px;
        }

        .table th, .table td {
            padding: 0.25rem;
            vertical-align: unset;
            border-top: 1px solid #dee2e6;
        }
    </style>

    @foreach ($chars as $char)
    @endforeach

    <div class="row w-100 h-100 p-2 m-0">
        {{--LEFT SIDEBAR WRAPPER--}}
        <div class="col-lg-2 col-md-12 p-0">
            <div class="row m-0">
                <div class="col-12 p-0">
                    <div class="card">
                        <div class="card-header">Add New Data Point</div>
                        <div class="input-group">
                            <form action="/highscores" method="post" class="form-inline p-0 m-0 flex-fill d-block">
                                {{ csrf_field() }}
                                <div class="input-group">
                                    <label for="Character_Name" class="sr-only">Character Name</label>
                                    <input readonly type="text" class="form-control" name="Character_Name"
                                           id="Character_Name" placeholder="Character Name"
                                           value="{{ $char->Character_Name }}" required>
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-primary" type="submit">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
            </div>
        </div>

                <div class="row col-12 m-0 p-0 pt-1">
                    <div class="card w-100">
                        @component('components.mostRecentStats', ['char'=>$char])
                        @endcomponent
                    </div>
                </div>


                <div class="row col-10 m-0 p-0  pl-1">

                    <div class="row col-12 m-0 p-0" style="height: fit-content;">
                        @if (count($charsLast5) > 4 )
                            <div class="card col-12 p-1 m-1">
                                <canvas id="myOverallChart" style="height: 250px;"></canvas>
                                <script>
                                    var ctx = document.getElementById('myOverallChart').getContext('2d');
                                    var myChart = new Chart(ctx, {
                                        type: 'line',
                                        data: {
                                            labels: ['{{$charsLast5[4]->created_at}}', '{{$charsLast5[3]->created_at}}', '{{$charsLast5[2]->created_at}}', '{{$charsLast5[1]->created_at}}', '{{$charsLast5[0]->created_at}}'],
                                            datasets: [{
                                                label: 'Last 5: Overall Experience',
                                                data: [{{$charsLast5[4]->Overall_XP}}, {{$charsLast5[3]->Overall_XP}}, {{$charsLast5[2]->Overall_XP}}, {{$charsLast5[1]->Overall_XP}}, {{$charsLast5[0]->Overall_XP}}],
                                                backgroundColor: [
                                                    'rgba(60,67,255,0.2)',
                                                    'rgba(54, 162, 235, 0.2)',
                                                    'rgba(255, 206, 86, 0.2)',
                                                    'rgba(75, 192, 192, 0.2)',
                                                    'rgba(153, 102, 255, 0.2)',
                                                    'rgba(255, 159, 64, 0.2)'
                                                ],
                                                borderColor: [
                                                    'rgb(138,128,255)',
                                                    'rgba(54, 162, 235, 1)',
                                                    'rgba(255, 206, 86, 1)',
                                                    'rgba(75, 192, 192, 1)',
                                                    'rgba(153, 102, 255, 1)',
                                                    'rgba(255, 159, 64, 1)'
                                                ],
                                                borderWidth: 1
                                            }]
                                        },
                                        options: {
                                            scales: {
                                                yAxes: [{
                                                    ticks: {
                                                        beginAtZero: false
                                                    }
                                                }]
                                            }
                                        }
                                    });
                                </script>
                            </div>
                            <div class="card col-4">
                                <canvas id="myBarChart"></canvas>
                                <script>
                                    var ctx = document.getElementById('myBarChart').getContext('2d');
                                    var myChart = new Chart(ctx, {
                                        type: 'bar',
                                        data: {
                                            labels: ['Attack', 'Defence', 'Runecrafting', 'Ranged', 'Thieving', 'Firemaking'],
                                            datasets: [{
                                                label: '# of Votes',
                                                data: [{{$char->Attack_XP}}, {{$char->Defence_XP}}, {{$char->Runecrafting_XP}}, {{$char->Ranged_XP}}, {{$char->Thieving_XP}}, {{$char->Firemaking_XP}}],
                                                backgroundColor: [
                                                    'rgba(255, 99, 132, 0.2)',
                                                    'rgba(54, 162, 235, 0.2)',
                                                    'rgba(255, 206, 86, 0.2)',
                                                    'rgba(75, 192, 192, 0.2)',
                                                    'rgba(153, 102, 255, 0.2)',
                                                    'rgba(255, 159, 64, 0.2)'
                                                ],
                                                borderColor: [
                                                    'rgba(255, 99, 132, 1)',
                                                    'rgba(54, 162, 235, 1)',
                                                    'rgba(255, 206, 86, 1)',
                                                    'rgba(75, 192, 192, 1)',
                                                    'rgba(153, 102, 255, 1)',
                                                    'rgba(255, 159, 64, 1)'
                                                ],
                                                borderWidth: 1
                                            }]
                                        },
                                        options: {
                                            scales: {
                                                yAxes: [{
                                                    ticks: {
                                                        beginAtZero: false
                                                    }
                                                }]
                                            }
                                        }
                                    });
                                </script>
                            </div>
                            <div class="card col-4">
                                <canvas id="myLineChart"></canvas>
                                <script>
                                    var ctx = document.getElementById('myLineChart').getContext('2d');
                                    var myChart = new Chart(ctx, {
                                        type: 'line',
                                        data: {
                                            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                                            datasets: [{
                                                label: '# of Votes',
                                                data: [12, 19, 3, 5, 2, 3],
                                                backgroundColor: [
                                                    'rgba(255, 99, 132, 0.2)',
                                                    'rgba(54, 162, 235, 0.2)',
                                                    'rgba(255, 206, 86, 0.2)',
                                                    'rgba(75, 192, 192, 0.2)',
                                                    'rgba(153, 102, 255, 0.2)',
                                                    'rgba(255, 159, 64, 0.2)'
                                                ],
                                                borderColor: [
                                                    'rgba(255, 99, 132, 1)',
                                                    'rgba(54, 162, 235, 1)',
                                                    'rgba(255, 206, 86, 1)',
                                                    'rgba(75, 192, 192, 1)',
                                                    'rgba(153, 102, 255, 1)',
                                                    'rgba(255, 159, 64, 1)'
                                                ],
                                                borderWidth: 1
                                            }]
                                        },
                                        options: {
                                            scales: {
                                                yAxes: [{
                                                    ticks: {
                                                        beginAtZero: true
                                                    }
                                                }]
                                            }
                                        }
                                    });
                                </script>
                            </div>
                            <div class="card col-4">
                                <canvas id="myBubbleChart"></canvas>
                                <script>
                                    var ctx = document.getElementById('myBubbleChart').getContext('2d');
                                    var myChart = new Chart(ctx, {
                                        type: 'bubble',
                                        data: {
                                            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                                            datasets: [{
                                                label: '# of Votes',
                                                data: [12, 19, 3, 5, 2, 3],
                                                backgroundColor: [
                                                    'rgba(255, 99, 132, 0.2)',
                                                    'rgba(54, 162, 235, 0.2)',
                                                    'rgba(255, 206, 86, 0.2)',
                                                    'rgba(75, 192, 192, 0.2)',
                                                    'rgba(153, 102, 255, 0.2)',
                                                    'rgba(255, 159, 64, 0.2)'
                                                ],
                                                borderColor: [
                                                    'rgba(255, 99, 132, 1)',
                                                    'rgba(54, 162, 235, 1)',
                                                    'rgba(255, 206, 86, 1)',
                                                    'rgba(75, 192, 192, 1)',
                                                    'rgba(153, 102, 255, 1)',
                                                    'rgba(255, 159, 64, 1)'
                                                ],
                                                borderWidth: 1
                                            }]
                                        },
                                        options: {
                                            scales: {
                                                yAxes: [{
                                                    ticks: {
                                                        beginAtZero: true
                                                    }
                                                }]
                                            }
                                        }
                                    });
                                </script>
                            </div>


                            {{--CONTENT AREA--}}
                            <div class="card p-1 col-12 mt-1">
                                @component('components.table', ['charsLast5'=> $charsLast5])
                                @endcomponent
                            </div>
                    </div>
                </div>
                @else
                    <div class="card col-12">
                        <p>You need a minimum of 5 records to display those gains. You currently only
                            have {{count($charsLast5)}}.</p>
                    </div>

                @endif
            </div>
        </div>
</div>
@endsection
