@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ isset($task) ? route('task.update', $task->id) : route('task.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="task" class="form-label">Task</label>
                                <input type="text" class="form-control" id="task" name="task" required value="{{ isset($task) ? $task->task : '' }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                        <div class="table-responsive mt-2">
                            <table class="table table-bordered">
                                <thead>
                                <th>SL.</th>
                                <th>Task</th>
                                <th>Status</th>
                                <th>Action</th>
                                </thead>
                                <tbody>
                                @foreach($task_list as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->task }}</td>
                                        <td>
                                            <div class="form-check form-switch">
                                                <input data-id="{{ $item->id }}" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" {{ $item->status == 1 ? 'checked' : '' }}>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="{{ route('task.edit', $item->id) }}" class="btn btn-info">Edit</a>
                                            <a href="{{ route('task.destroy', $item->id) }}" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function () {

            $('#flexSwitchCheckDefault').change(function () {
                var status = $(this).val();
                console.log(status);
            });

        });
    </script>
@endsection
