@extends('template.template_admin')

@section('title')
Report
@endSection

@section('content')

<div>
    <table class="items-center bg-transparent w-full border-collapse">
        <thead>
            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                <th>Id</th>
                <th>Report</th>
                <th>Date</th>
                <th>Field 4</th>
                <th>Field 5</th>
                <th>Field 6</th>
            </tr>
        </thead>
        <tbody>
            <!-- foreach($reports as $report) -->
            <tr class="hover:bg-gray-100 focus-within:bg-gray-900 hover:text-gray-800 focus-within:text-gray-800">
                <td></td>
                <td>XD</td>
                <td>XD</td>
                <td>XD</td>
                <td>XD</td>
                <td>XD</td>
            </tr>
            <!-- endforeach -->
        </tbody>
    </table>
</div>

@endSection