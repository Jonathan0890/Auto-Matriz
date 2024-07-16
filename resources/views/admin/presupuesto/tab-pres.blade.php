@extends('template.template_admin')

@section('title')
    PRESUPUESTO
@endsection

@section('content')
    <h1 class="text-3xl font-medium mb-6">PRESUPESTO</h1>

    <div>
        <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-lg w-full">
            <thead class="bg-[#b1b1b1] text-white">
                <tr>
                    <th class="py-2 px-3 text-left text-xs font-medium uppercase tracking-wider">Id</th>
                    <th class="py-2 px-3 text-left text-xs font-medium uppercase tracking-wider">Fecha</th>
                    <th class="py-2 px-3 text-left text-xs font-medium uppercase tracking-wider">Razon Social</th>
                    <th class="py-2 px-3 text-left text-xs font-medium uppercase tracking-wider">Estado</th>
                    <th class="py-2 px-3 text-left text-xs font-medium uppercase tracking-wider">No. Orden</th>
                    <th class="py-2 px-3 text-left text-xs font-medium uppercase tracking-wider">Vehiculo</th>
                    <th class="py-2 px-3 text-left text-xs font-medium uppercase tracking-wider">Modelo</th>
                    <th class="py-2 px-3 text-left text-xs font-medium uppercase tracking-wider">Año</th>
                    <th class="py-2 px-6 text-left text-xs font-medium uppercase tracking-wider">Placas</th>
                    <th class="py-2 px-3 text-left text-xs font-medium uppercase tracking-wider">Reporte de cliente</th>
                    <th class="py-2 px-3 text-left text-xs font-medium uppercase tracking-wider">Kilometraje</th>
                    <th class="py-2 px-3 text-left text-xs font-medium uppercase tracking-wider">No. Economico</th>
                    <th class="py-2 px-3 text-left text-xs font-medium uppercase tracking-wider">Sub Total</th>
                    <th class="py-2 px-3 text-left text-xs font-medium uppercase tracking-wider">Impuestos</th>
                    <th class="py-2 px-3 text-left text-xs font-medium uppercase tracking-wider">Total</th>
                    <th class="px-2 py-2 text-center text-xs font-medium uppercase tracking-wider">Mostrar</th>
                    <th class="px-2 py-2 text-center text-xs font-medium uppercase tracking-wider">Editar</th>
                    <th class="px-2 py-2 text-center text-xs font-medium uppercase tracking-wider">Eliminar</th>
                </tr>
            </thead>
            <tbody class="text-gray-700 text-sm">
                @foreach ($presupuestos as $presupuesto)
                    
                    <tr class="border-b border-gray-200 hover:bg-gray-100 transition duration-200">
                        <td class="py-2 px-2 whitespace-nowrap">{{ $presupuesto->id }}</td>
                        <td class="py-2 px-2 whitespace-nowrap">{{ $presupuesto->fecha }}</td>
                        <td class="py-2 px-2 whitespace-nowrap">{{ $presupuesto->razon_social }}</td>
                        <td class="py-2 px-2 whitespace-nowrap">{{ $presupuesto->estado }}</td>
                        <td class="py-2 px-2 whitespace-nowrap">{{ $presupuesto->no_orden }}</td>
                        <td class="py-2 px-2 whitespace-nowrap">{{ $presupuesto->vehiculo }}</td>
                        <td class="py-2 px-2 whitespace-nowrap">{{ $presupuesto->modelo }}</td>
                        <td class="py-2 px-2 whitespace-nowrap">{{ $presupuesto->year }}</td>
                        <td class="py-2 px-2 whitespace-nowrap">{{ $presupuesto->placa }}</td>
                        <td class="py-2 px-2 whitespace-nowrap">{{ $presupuesto->kilometraje }}</td>
                        <td class="py-2 px-2 whitespace-nowrap">{{ $presupuesto->kilometraje }}</td>
                        <td class="py-2 px-2 whitespace-nowrap">{{ $presupuesto->no_economico }}</td>
                        <td class="py-2 px-2 whitespace-nowrap">{{ $presupuesto->sub_total }}</td>
                        <td class="py-2 px-2 whitespace-nowrap">{{ $presupuesto->impuestos }}</td>
                        <td class="py-2 px-4 whitespace-nowrap">{{ $presupuesto->total }}</td>
                        <td class="py-2 px-2 whitespace-nowrap">
                            <a href="{{ route('presupuesto.show', $presupuesto->id) }}" class="text-blue-500 hover:text-blue-700">Mostrar</a>
                        </td>
                        <td class="py-2 px-2 whitespace-nowrap">
                            <a href="{{ route('presupuesto.edit', $presupuesto->id) }}" class="text-yellow-500 hover:text-yellow-700">Editar</a>
                        </td>
                        <td class="py-2 px-2 whitespace-nowrap">
                            <form action="{{ route('presupuesto.destroy', $presupuesto->id) }}" method="POST"
                                onsubmit="return confirm('¿Estás seguro de que deseas eliminar este presupuesto? Esta opción no se puede deshacer.');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @push('scripts')
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.flash.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
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
@endsection
