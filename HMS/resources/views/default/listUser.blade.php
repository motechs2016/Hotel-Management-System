@extends('layout')
@section('title')
{{ $title }}
@stop
@section('content')

	 <button class="button primary" onclick="pushMessage('info')"><span class="mif-plus"></span> Create...</button>
	 <table class="dataTable border bordered" data-role="datatable" data-auto-width="false">
                    <thead>
                    <tr>                      
                        <td class="sortable-column sort-asc" style="width: 100px">ID</td>
                        <td class="sortable-column">Name</td>
                         <td class="sortable-column">Phone</td>
                        <td class="sortable-column">Role</td>
                        <td class="sortable-column" style="width: 20px">Created_at</td>
                        <td style="width: 90px">Action</td>
                    </tr>
                    </thead>
                    <tbody>
                   
                    <tr>
                        <td >
                            <label class="input-control checkbox small-check no-margin">
                                <input type="checkbox">
                                <span class="check"></span>
                            </label>
                        </td>
                        <td>123890723212</td>
                        <td>Machine number 2</td>
                        <td><a href="http://virtuals.com/machines/123890723212">link</a></td>
                        <td class="align-center"><span class="mif-stop fg-red"></span></td>
                        <td>
                         <a href="" style="margin-right: 10px;"> <span class="mif-pencil" title="edit"></span> </a>
                          <a href=""> <span class="mif-cross" title="Delete"></span> </a> 
                        </td>
                    </tr>
                    </tbody>
                </table>
@stop