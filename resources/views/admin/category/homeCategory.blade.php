@extends('admin.layout')

@section('body')
    <table class="table">
        <thead>

            <tr>
                <th>id</th>
                <th>name</th>
                <th>desc</th>
                <th>image</th>





            </tr>

        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>
                        {{ $loop->iteration }}
                    </td>
                    <td>{{ $category->name }}</td>
                    <td class="text-right"> {{ $category->desc }} </td>
                    <td class="text-right font-weight-medium">

                        <img src="{{ asset('storage/' . $category->image) }}" alt="image" width="70">


                    </td>
                    {{-- <td class="text-right font-weight-medium"> {{ $category->status }} </td> --}}







                    <td> <a class="nav-link btn w-50 btn-success create-new-button"
                            href="{{ route('showCategory', $category->id) }}">Show</a></td>
                    <td>
                        <a class="nav-link btn w-50 btn-info create-new-button mb-1"
                            href="{{ route('editeCategory', $category->id) }}">Update</a>
                    </td>

                    <td>
                        <form action="{{ url("categories/delete/$category->id") }}" method="POST"
                            style="display:inline-block; width:50%;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger w-100">Delete</button>
                        </form>
                    </td>


                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $categories->links() }}

    <a class="nav-link btn w-10 btn-success create-new-button" href="{{ route('createCategory') }}">+ New Category</a>
@endsection
