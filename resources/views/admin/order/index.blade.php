<x-app-layout>
    @section('content')
        <div class="m-3">
            <table id="orders" class="table table-bordered table-striped dataTable dtr-inline" >
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Total</th>
                        <th>Customer Name</th>
                        <th>Payment Method</th>
                        <th>Payment Status</th>
                        <th>Order Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
            </table>
        </div>
    @endsection
    @section('scripts')
        <script>
            let table = $('#orders').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{route('admin.ordersTable')}}",
                    method: 'GET'
                }
            })
            
        </script>
    @endsection
</x-app-layout>
