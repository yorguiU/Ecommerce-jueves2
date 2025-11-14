@extends("admin.layouts.dashboard")

@section("content")

<div class="card">

    <div class="card-header pb-0">
        <h6>Products Table</h6>
    </div>
    <div class="card-body px-0 pt-0 pb-2">
        <div class="table-responsive p-0">
        <table class="table align-items-center mb-0">
            <thead>
            <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                ID
                </th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                Name
                </th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                Price
                </th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                Category
                </th>
                <th class="text-secondary opacity-7"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
            <tr>
                <td>
                <p class="text-xs font-weight-bold mb-0">{{ $product->id }}</p>
                </td>
                <td>
                <p class="text-xs font-weight-bold mb-0">{{ $product->name }}</p>
                </td>
                <td class="align-middle text-center text-sm">
                <span class="text-xs font-weight-bold">{{ $product->price }}</span>
                </td>
                <td class="align-middle text-center">
                <span class="text-xs font-weight-bold">{{ $product->category->name }}</span>
                </td>
                <td class="align-middle">
                <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                    data-original-title="Edit product">
                    Edit
                </a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        </div>
    </div>

</div>

@endsection
