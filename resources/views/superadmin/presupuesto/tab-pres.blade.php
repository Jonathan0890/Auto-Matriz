@extends('template.template_super-admin')

@section('title')
    Report
@endsection

@section('content')
<h1 class="text-3xl font-medium">Presupuesto</h1>

    <div>
        <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-lg">
            <thead class="bg-[#b1b1b1] text-white">
                <tr>
                    <th class="py-3 px-6 text-left text-xs font-medium uppercase tracking-wider">Id</th>
                    <th class="py-3 px-6 text-left text-xs font-medium uppercase tracking-wider">Report</th>
                    <th class="py-3 px-6 text-left text-xs font-medium uppercase tracking-wider">Date</th>
                    <th class="py-3 px-6 text-left text-xs font-medium uppercase tracking-wider">Field 4</th>
                    <th class="py-3 px-6 text-left text-xs font-medium uppercase tracking-wider">Field 5</th>
                    <th class="py-3 px-6 text-left text-xs font-medium uppercase tracking-wider">Field 6</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                <!-- foreach($reports as $report) -->
                <tr class="border-b border-gray-200 hover:bg-gray-100 transition duration-200">
                    <td class="py-4 px-6 whitespace-nowrap">1</td>
                    <td class="py-4 px-6">Sample Report</td>
                    <td class="py-4 px-6">2022-01-01</td>
                    <td class="py-4 px-6">Field 4</td>
                    <td class="py-4 px-6">Field 5</td>
                    <td class="py-4 px-6">Field 6</td>
                </tr>
                <!-- endforeach -->
            </tbody>
        </table>

        @push('scripts')
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.flash.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>
            <!-- DataTables Initialization Script -->
            <script>
                $(document).ready(function() {
                    $('table').DataTable({
                        dom: '<"flex flex-wrap items-center mb-4"<"w-full md:w-1/3 mb-2 md:mb-0"l><"w-full md:w-1/3 mb-2 md:mb-0"B><"w-full md:w-1/3"f>>t<"flex flex-wrap items-center mt-4"<"w-full md:w-1/2"i><"w-full md:w-1/2"p>>',
                        buttons: [{
                                extend: 'copy',
                                className: 'btn-copy',
                                text: 'Copy'
                            },
                            {
                                extend: 'csv',
                                className: 'btn-csv',
                                text: 'CSV'
                            },
                            {
                                extend: 'excel',
                                className: 'btn-excel',
                                text: 'Excel'
                            },
                            {
                                extend: 'pdf',
                                className: 'btn-pdf',
                                text: 'PDF'
                            },
                            {
                                extend: 'print',
                                className: 'btn-print',
                                text: 'Print'
                            }
                        ]
                    });
                    // Añade las clases de Tailwind CSS a los botones
                    $('.btn-copy').addClass('bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700');
                    $('.btn-csv').addClass('bg-green-500 text-white py-2 px-4 rounded hover:bg-green-700');
                    $('.btn-excel').addClass('bg-yellow-500 text-white py-2 px-4 rounded hover:bg-yellow-700');
                    $('.btn-pdf').addClass('bg-red-500 text-white py-2 px-4 rounded hover:bg-red-700');
                    $('.btn-print').addClass('bg-purple-500 text-white py-2 px-4 rounded hover:bg-purple-700');
                });
            </script>
        @endpush
    </div>
@endsection
