@extends('layouts.master')

@section('content')

    <div id="app">
        <div class="row wrapper border-bottom success-bg page-heading">
            <div class="col-lg-10">
                <h2>Dashboard</h2>
                <ol class="breadcrumb">
                    <li>
                        <a>Dashboard</a>
                    </li>
                    <li class="active">
                        <strong>Home</strong>
                    </li>
                </ol>
            </div>
        </div>

        <div class="wrapper wrapper-content animated fadeInRight">

            @include('partials.flash_messages.flashMessages')

            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-content">

                            <div class="table-responsive">
                                <h2>Welcome to CHMSC Student Management System</h2>
                                <h3>Mission</h3>
                                <p>We are a GREEN institution committed to empower the youth and life-long learners who will contribute to nation building and global transformation through quality instruction, inclusive and creative teaching-learning pedagogies, relevant research, social innovation, dynamic partnership, and active civic engagement, in a conducive and fulfilling environment for students, faculty, staff, and partners.
                                </p>

                            </div>
                            <div>
                                <h3>Vision</h3>
                                <p>GREEN CHMSC EXCELS

To be a leading GREEN institution of higher learning in the global community by 2030

GREEN stands for Good governance, Research-oriented, Extension-driven, Education for Sustainable Development and Nation Building</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection()
