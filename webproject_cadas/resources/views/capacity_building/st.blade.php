@extends('layout')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>DATA</title>
    </head>

    <body>

        <div class="supervisors-training-container">
            <h1>Supervisors Training</h1>

            <!-- Training Information -->
            <div class="supervisors-info">
                <p>
                    Two days training on <strong>Sample Management</strong> using the program <strong>Client Survey
                        DG</strong> was conducted. Survey DG Client is a program recently developed by ISER-N and BITS
                    Solution Pvt. Ltd. for effective data collection through computers. The training primarily focused on
                    using Survey DG for sample management for CAPI.
                </p>
                <p>
                    The goal of the training was to teach supervisors how to use the program to manage samples, including
                    assigning sample lines to interviewers, receiving and reallocating samples, checking records, and
                    reviewing interviews submitted, all using Survey DG.
                </p>
                <p>
                    The resource persons in the training were:
                </p>

                <!-- Resource Persons List -->
                <ul>
                    <li><strong>Mr. Nirmal Subedi</strong>, Programmer</li>
                    <li><strong>Mr. Bishnu Adhikari</strong>, Data Manager</li>
                </ul>
            </div>

            <!-- Navigation Section -->
            <div class="supervisors-links">
                <a href="#" class="supervisors-link">Schedule and Participants</a>
                <a href="#" class="supervisors-link">Gallery</a>
            </div>

        </div>


    </body>

    </html>
@endsection
