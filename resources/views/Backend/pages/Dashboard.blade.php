@extends('backend.layouts.app')
@section('content')
    <h1 class="mt-4">Dashboard</h1>
    <div class = "main-container col-12">
        <div class ="first-container">
            <div class = "cards-container col-12">
                @include('backend.layouts.components.cards.job', [
                    'color' => '#FFEFE7',
                    'title' => 'Available Positions',
                    'num' => '24',
                    'status' => '4 Urgently needed',
                    'text_color' => '#FF5151',
                ])
                @include('backend.layouts.components.cards.job', [
                    'color' => '#E8F0FB',
                    'title' => 'Job opening',
                    'num' => '10',
                    'status' => '4 Active Hiring',
                    'text_color' => '#3786F1',
                ])
                @include('backend.layouts.components.cards.job', [
                    'color' => '#FDEBF9',
                    'title' => 'New Employees',
                    'num' => '24',
                    'status' => '4 Departments',
                    'text_color' => '#EE61CF',
                ])
            </div>
            <div class = "cards-container col-12">
                @include('backend.layouts.components.cards.graph', [
                    'title' => 'Total Employees',
                    'num' => '216',
                    'men' => '120',
                    'women' => '96',
                    'percentage' => '2',
                    'imgss' => asset('assets/pics/Group 4.png'),
                ])
                @include('backend.layouts.components.cards.graph', [
                    'title' => 'Talent Request',
                    'num' => '19',
                    'men' => '6',
                    'women' => '10',
                    'percentage' => '5',
                    'imgss' => asset('assets/pics/5per.png'),
                ])
            </div>
            <div>
                @include('backend.layouts.components.cards.announcments')
            </div>
        </div>
        <div class = "second-container">
            @include('backend.layouts.components.cards.activity')
            @include('backend.layouts.components.cards.schedule')
        </div>
    </div>
@endsection
