@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-5">
                <div class="card-header bg-transparent">
                    <div class="row">
                        <div class="col-lg-8">
                            <h3 class="mb-0">All Users</h3>
                        </div>
                        <div class="col-lg-4">
                    {!! Form::open(['route' => 'users.index', 'method'=>'get']) !!}
                        <div class="form-group mb-0">
                        {{ Form::text('search', request()->query('search'), ['class' => 'form-control form-control-sm', 'placeholder'=>'Search users']) }}
                    </div>
                    {!! Form::close() !!}
                </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <div>
                            <table class="table table-hover align-items-center">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">create at</th>
                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                                </thead>
                                <tbody class="list">
                                @foreach($users as $user)
                                    <tr>
                                        <th scope="row">
                                            {{$user->first_name}}  {{$user->last_name}}
                                        </th>
                                        <td class="budget">
                                            {{$user->email}}
                                        </td>
                                        <td>
                                            @if(!$user->status)
                                                <span class="badge badge-pill badge-lg badge-success">Active</span>
                                            @else
                                                <span class="badge badge-pill badge-lg badge-danger">Disabled</span>
                                            @endif
                                        </td>
                                        <td>
                                            {{$user->created_at}}
                                        </td>
                                        <td class="text-center">
                                            {!! Form::open(['route' => ['users.destroy', $user],'method' => 'delete',  'class'=>'d-inline-block dform']) !!}
                                                <button type="submit" class="btn delete btn-danger btn-sm m-1" data-toggle="tooltip" data-placement="top" title="Delete user" href="">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot >
                                <tr>
                                    <td colspan="6">
                                        {{$users->links()}}
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        jQuery(document).ready(function(){
            $('.delete').on('click', function(e){
                e.preventDefault();
                let that = jQuery(this);
                jQuery.confirm({
                    icon: 'fas fa-wind-warning',
                    closeIcon: true,
                    title: 'Are you sure!',
                    content: 'You can not undo this action.!',
                    type: 'red',
                    typeAnimated: true,
                    buttons: {
                        confirm: function () {
                            that.parent('form').submit();
                            //$.alert('Confirmed!');
                        },
                        cancel: function () {
                            //$.alert('Canceled!');
                        }
                    }
                });
            })
        })

    </script>
@endpush
