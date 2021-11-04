@extends('admin.app')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/admin/dashboard.css') }}">
@endsection
@section("content")

    <div class="card mb-12">
        <div class="card-header">
            <svg class="svg-inline--fa fa-table fa-w-16 mr-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="table" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M464 32H48C21.49 32 0 53.49 0 80v352c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V80c0-26.51-21.49-48-48-48zM224 416H64v-96h160v96zm0-160H64v-96h160v96zm224 160H288v-96h160v96zm0-160H288v-96h160v96z"></path></svg><!-- <i class="fas fa-table mr-1"></i> Font Awesome fontawesome.com -->
            User Information
        </div>
        <div class="card-body">
            <div class="table-responsive ">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                <thead>
                                    <tr role="row">
                                        <th  aria-controls="dataTable">Name</th>
                                        <th  aria-controls="dataTable">Approval</th>
                                        <th  aria-controls="dataTable">Date</th>
                                        <th aria-controls="dataTable">0-month survey questionnaire</th>
                                        <th  aria-controls="dataTable">3-month survey questionnaire</th>
                                        <th aria-controls="dataTable">6-month survey questionnaire</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr role="row" class="odd">
                                            <td data-label="ID" class="text-left"><a class="dashboard-link" href="{{ route('admin.detail.user', $user->code) }}">{{ $user->name }}</a></td>
                                            <td data-label="Consent date">
                                                {{ ($user->term_of_service != null) ? date('Y-m-d', strtotime($user->term_of_service)) : 'Disagree' }}
                                            </td>
                                            <td data-label="Material shipping date">
                                                {{ $user->join_event != null ? date('Y-m-d', strtotime($user->join_event)) : "Unsent" }}
                                            </td>
                                            <td data-label="0-month survey questionnaire">
                                                {{ $user->join_event != null ? 'Unanswered' : 'Not implemented' }}
                                            </td>
                                            <td data-label="3 participants 3 months">
                                                @if ($user->join_event == null)
                                                    {{ 'Not implemented' }}
                                                @else
                                                    {{
                                                        $currentTime >= date('Y-m-d', strtotime($user->join_event . '+ 3 months')) ? 'Unanswered' : 'Not implemented'
                                                    }}
                                                @endif
                                            </td>
                                            <td data-label="6 participants 6 months">
                                                @if ($user->join_event == null)
                                                    {{ 'Not implemented' }}
                                                @else
                                                    {{
                                                        $currentTime >= date('Y-m-d', strtotime($user->join_event . '+ 6 months')) ? 'duoc tra loi' : 'Not implemented'
                                                    }}
                                                @endif
                                            </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

@endsection
