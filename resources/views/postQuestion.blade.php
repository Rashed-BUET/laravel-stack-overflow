@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <!-- Display Validation Errors -->
                    @include('common.errors')

                    <!-- New Task Form -->
                        <form action="{{ url('postQuestion') }}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- Task Name -->
                            <div class="form-group">
                                <label for="task-name" class="col-sm-3 control-label">Title</label>

                                <div class="col-sm-6">
                                    <input type="text" name="title" id="task-name" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="question-body" class="col-sm-3 control-label">body</label>

                                <div class="col-sm-6">
                                    <textarea type="text" name="body" id="question-body" class="form-control"></textarea>
                                </div>
                            </div>

                            <!-- Add Task Button -->
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-6">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fa fa-plus"></i> Post Question
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
