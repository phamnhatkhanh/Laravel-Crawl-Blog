@extends('backend.dashboard')
@section('manage')
<div class="table-agile-info">
    <div class="panel panel-default">
        @php
            $message =Session::get('message');
            if($message){
                echo $message;
                Session::put('message',null);
            }
        @endphp
        <div class="panel-heading">
            Posts Table
        </div>
        <div class="row w3-res-tb">
            <div class="col-sm-5 m-b-xs">
                <select class="input-sm form-control w-sm inline v-middle">
                    <option value="0">Bulk action</option>
                    <option value="1">Delete selected</option>
                    <option value="2">Bulk edit</option>
                    <option value="3">Export</option>
                </select>
                <button class="btn btn-sm btn-default">Apply</button>
            </div>
            <div class="col-sm-4">
            </div>
            <div class="col-sm-3">
                <div class="input-group">
                    <input type="text" class="input-sm form-control" placeholder="Search">
                    <span class="input-group-btn">
                        <button class="btn btn-sm btn-default" type="button">Go!</button>
                    </span>
                </div>
            </div>
        </div>
        <div class="table-responsive">


            <table class="table table-striped b-t b-light">
                <thead>
                    <tr>
                        <th style="width:20px;">
                            <label class="i-checks m-b-none">
                                <input type="checkbox"><i></i>
                            </label>
                        </th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Description</th>

                        <th>Status</th>
                        <th>Date</th>
                        <th>Action</th>
                        {{-- <th style="width:30px;"></th> --}}
                    </tr>
                </thead>
                <tbody>

                    @foreach ($posts as  $item)

                        <tr>
                            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                            <td>{{ $item->title }}</td>
                            <td>
                                @php
                                    if($item->image==''){
                                        echo '<img src="'. asset("backend/images/null-image.png").'" alt="" width="100" height="100">';
                                    }else{
                                        echo '<img src="'.$item->image. '"alt="" width="100" height="100">';
                                    }
                                @endphp

                            </td>
                            <td><span class="text-ellipsis"> {{ $item->description }}</span></td>

                            <td><span class="text-ellipsis">
                                @php
                                  if($item->status==0){
                                   echo '<a href="/admin/post/update_status/'.$item->id.'"' .'class="active" ui-toggle-class=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>';
                                }else{
                                    echo '<a href="/admin/post/update_status/'.$item->id.'"' .'class="active" ui-toggle-class=""><i class="fa fa-eye" aria-hidden="true"></i></a>';
                                }
                                @endphp
                            </span></td>
                            <td><span class="text-ellipsis">{{ $item->updated_at}}</span></td>
                            <td>
                                {{-- <a href="./products/edit/{{ $item->id }}" class="active" ui-toggle-class="">
                                   <i class="fa fa-pencil-square-o" aria-hidden="true"></i>

                                </a> --}}

                                <a onclick="return confirm('Are you sure delete this product?')" href="/admin/post/delete/{{ $item->id }}" class="active" ui-toggle-class="">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <footer class="panel-footer">
            <div class="row">

                <div class="col-sm-5 text-center">
                    <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
                </div>
                <div class="col-sm-7 text-right text-center-xs">
                    <ul class="pagination pagination-sm m-t-none m-b-none">
                        <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
                        <li><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">4</a></li>
                        <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
</div>
@endsection

