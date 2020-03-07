@extends('layouts.manifesting.app', ['pageSlug' => 'dashboard'])
@section('title','Index')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Dropzone Gear Sets</h4>
                        <!--<p class="card-category"> Here is a subtitle for this table</p>-->
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th></th>
                                    <th>Name</th>
                                    <th>Service <br />Status</th>
                                    <th>Date </br>Status</th>
                                    <th>Cycle </br>Status</th>
                                    <th>Inherit Cycles</th>
                                    <th>Serial Number</th>
                                    <th>Whereabouts</th>
                                    <th>Cycle count</th>
                                    <th>Actions</th>
                                </thead>
                                <tbody>
                                    <tr>

                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection