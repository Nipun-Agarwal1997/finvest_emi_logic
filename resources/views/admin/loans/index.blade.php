@extends('admin.layout.default')
@section('content')

<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Subheader-->
	<div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
		<div
			class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
			<!--begin::Info-->
			<div class="d-flex align-items-center flex-wrap mr-1">
				<!--begin::Page Heading-->
				<div class="d-flex align-items-baseline flex-wrap mr-5">
					<!--begin::Page Title-->
					<h5 class="text-dark font-weight-bold my-1 mr-5">
						{{ $sectionName }} </h5>
					<!--end::Page Title-->

					<!--begin::Breadcrumb-->
					<ul
						class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
						<li class="breadcrumb-item">
							<a href="{{ route('admin.loansDetails')}}" class="text-muted">Dashboard</a>
						</li>
					</ul>
					<!--end::Breadcrumb-->
				</div>
				<!--end::Page Heading-->
			</div>
			<!--end::Info-->
		</div>
	</div>
	<!--end::Subheader-->

	<!--begin::Entry-->
	<div class="d-flex flex-column-fluid">
		<!--begin::Container-->
        <div class=" container ">
            <div class="row">
                <div class="col-12">
                    <div class="card card-custom card-stretch card-shadowless">
                            <div class="dataTables_wrapper ">
                                <div class="table-responsive">
                                    <table
                                        class="table dataTable table-head-custom table-head-bg table-borderless table-vertical-center"
                                        id="taskTable">
                                        <thead>
                                        <tr class="text-uppercase">

                                                <th>
                                                    {{
                                                        trans("clientID")
                                                    }}
                                                </th>

                                                <th>
                                                    {{
                                                        trans("Number of payment")
                                                    }}
                                                </th>

                                                <th>
                                                    {{
                                                        trans("First payment date")
                                                    }}
                                                </th>

                                                <th>
                                                    {{
                                                        trans("Last payment date")
                                                    }}
                                                </th>
                                                
                                                <th>
                                                    {{
                                                        trans("Last Amount")
                                                    }}
                                                </th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(!$records->isEmpty())
                                                @foreach($records as $result)
                                                    <tr>
                                                        <td>
                                                            <div class="text-dark-75 mb-1 font-size-lg">
                                                                {{ ucfirst($result->clientid) }}
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-dark-75 mb-1 font-size-lg">
                                                                {{ ucfirst($result->num_of_payment) }}
                                                            </div>
                                                        </td>
                                                        
                                                        <td>
                                                            <div class="text-dark-75 mb-1 font-size-lg">
                                                                {{ ucfirst($result->first_payment_date) }}
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-dark-75 mb-1 font-size-lg">
                                                                {{ ucfirst($result->last_payment_date) }}
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-dark-75 mb-1 font-size-lg">
                                                                {{ ucfirst($result->loan_amount) }}
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach  
                                            @else
                                                <tr>
                                                    <td colspan="6" style="text-align:center;"> {{ trans("Record not found.") }}</td>
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Content-->

@stop