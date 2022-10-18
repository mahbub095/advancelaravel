@extends('admin.layouts.master')
@section('page_title', 'User Index')

@push('admin_style')
<link rel="stylesheet" href="http://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<style>
    .current{
        color: #fff !important;
        background-color: #696cff !important;
    }
</style>
@endpush


@section('admin_content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="d-flex justify-content-between align-items-center my-3">
                <h5 class="card-header">User Index / List Page</h5>
                <a href="{{ route('users.create') }}" class="btn btn-primary me-4">Add New</a>
            </div>

            <div class="table-responsive text-nowrap p-3">
                <table class="table table-hover" id="myTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Last Updated</th>
                            <th>User Role</th>
                            <th>User Image</th>
                            <th>User Name</th>
                            <th>User Email</th>
                            <th>User Active</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @forelse ($users as $user)
                        <tr>
                            <td><strong>{{ $users->firstItem() + $loop->index }}</strong></td>
                            <td>{{ $user->updated_at->format('d-M-Y') }}</td>
                            <td>{{ $user->role->role_name }}</td>
                            <td>
                                @if ($user->user_image)
                                <img src="{{ asset('uploads/profile_images/') }}/{{ $user->user_image }}" alt
                                class="w-px-40 h-auto rounded-circle" />
                                @else
                                <img src="{{ asset('admin') }}/assets/img/avatars/1.png" alt
                                    class="w-px-40 h-auto rounded-circle" />
                                @endif
                            </td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td class="">
                                <div class="form-check form-switch">
                                    <input class="form-check-input toggle-class" type="checkbox" role="switch"
                                    data-id="{{ $user->id }}"
                                    id="user-{{ $user->id }}" {{ $user->is_active ? 'checked':'' }}>
                                </div>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ route('users.edit', $user->id) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>

                                        <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="dropdown-item show_confirm" href="">
                                                <i class="bx bx-trash me-1"></i>
                                                Delete
                                            </button>
                                        </form>

                                    </div>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td>No user found yet!</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        {{-- <div class="my-4">
            {{ $permissions->links() }}
        </div> --}}
    </div>
</div>
@endsection

@push('admin_script')
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

<script>
$(document).ready(function(){
    $('#myTable').DataTable();

    $('.show_confirm').click(function(event){
        let form = $(this).closest('form');

        event.preventDefault();
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
                Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
                )
            }
        })
    });

    $('.toggle-class').change(function(){

        var is_active = $(this).prop('checked') == true ? 1 : 0 ;
        var item_id = $(this).data('id');
        //console.log(is_active, item_id); // for debug purpose

        $.ajax({
            type: "GET",
            dataType: "json",
            url: '/admin/check/user/is_active/'+item_id,
            success: function(response){
                console.log(response);
                Swal.fire({
                    title: `${ response.message}`,
                    text: `${ response.message }`,
                    icon: `${response.type}`,
                })
            },
            errro: function(err){
                if(err){
                    console.log(err);
                }
            }
        });


    });

});
</script>
@endpush
