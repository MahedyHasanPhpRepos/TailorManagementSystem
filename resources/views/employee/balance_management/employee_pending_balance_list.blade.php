@extends('.employee.main')

@section('content')
    <div class="page-wrapper">

        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Balance Pending List</h4>
                    <div class="ms-auto text-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Library</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="accordion" id="accordionExample">
                <div class="row">
                    <div class="mt-3">
                        <table id="example" class="display" style="width:100%">
                            <thead class="accordion__heading">
                                <tr>

                                    <th>গ্রাহকের তথ্য</th>
                                    <th>পোশাকের নাম</th>
                                    <th>পোশাকের মূল্য</th>
                                    <th>মজুরি</th>
                                    <th>অর্ডারের তারিখ</th>
                                    <th>ডেলিভারির তারিখ </th>
                                    <th>Action</th>
                                </tr>


                            </thead>
                            <tbody>
                                @foreach ($cloth_orders as $cloth_order)
                                    <tr>

                                        <td>{{ $cloth_order->customer_name }}</td>
                                        <td>

                                            @if ($cloth_order->cloth_name->upper_part_dress_name != null)
                                                <p>
                                                    <span>{{ $cloth_order->cloth_name->upper_part_dress_name }}</span> x
                                                    <span>{{ en2bn((int) $cloth_order->cloth_name->quantity_of_upper_part_dress) }}
                                                    </span>
                                                </p>
                                            @endif

                                            @if ($cloth_order->cloth_name->lower_part_dress_name != null)
                                                <p>
                                                    <span>{{ $cloth_order->cloth_name->lower_part_dress_name }}</span> x
                                                    <span>{{ en2bn((int) $cloth_order->cloth_name->quantity_of_lower_part_dress) }}</span>
                                                </p>
                                            @endif

                                        </td>

                                        <td>
                                            <p>
                                                @if ($cloth_order->cloth_name->total_upper_part_dress != 0)
                                                    {{ en2bn((int) $cloth_order->cloth_name->total_upper_part_dress) }}
                                                @endif
                                            </p>
                                            <p>
                                                @if ($cloth_order->cloth_name->total_lower_part_dress != 0)
                                                    {{ en2bn((int) $cloth_order->cloth_name->total_lower_part_dress) }}
                                                @endif
                                            </p>
                                        </td>

                                        <td>{{ en2bn((int) $cloth_order->cloth_order_delivary->majurir_poriman) }}</td>

                                        <td>{{ $cloth_order->cloth_order_delivary->orderer_tarikh }}</td>
                                        <td>{{ $cloth_order->cloth_order_delivary->delivery_tarikh }}</td>

                                        <td class="action_buttons_in_tablee">

                                            <p>
                                            <form action="{{ route('employee.pending.order.recieved.store') }}"
                                                method="post">
                                                @csrf
                                                <input type="text" name='order_id' value="{{ $cloth_order->id }}"
                                                    hidden>
                                                <input type="text" name='assigned_employee_mobile_number'
                                                    value="{{ $cloth_order->assigned_employee_mobile_number }}" hidden>
                                                <button type="submit" class="btn btn-sm btn-danger w-100">Recieve</button>
                                            </form>
                                            </p>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    @endsection
