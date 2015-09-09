@extends('layouts.default')

@section('content')
    <div class='row'>
        <div class='col-md-6'>
            <!-- Box -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Randomly Generated Tasks</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    @foreach($tasks as $task)
                        <h5>
                            {{ $task['name'] }}
                            <small class="label label-{{$task['color']}} pull-right">{{$task['progress']}}%</small>
                        </h5>
                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-{{$task['color']}}" style="width: {{$task['progress']}}%"></div>
                        </div>
                    @endforeach

                </div><!-- /.box-body -->
                <div class="box-footer">
                    <form action='#'>
                        <input type='text' placeholder='New task' class='form-control input-sm' />
                    </form>
                </div><!-- /.box-footer-->
            </div><!-- /.box -->
        </div><!-- /.col -->
        <div class='col-md-6'>
            <!-- Box -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Second Box</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    A separate section to add any kind of widget. Feel free
                    to explore all of AdminLTE widgets by visiting the demo page
                    on <a href="https://almsaeedstudio.com">Almsaeed Studio</a>.
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->

    </div><!-- /.row -->

    <section class="content" >
                    <div class="box box-primary">
                <div class="row">
                    <div class="col-md-2">
                        <select class="form-control" id="mysize">
                          <option value="small">Small</option>
                          <option value="standart">Standart</option>
                          <option value="large">Large</option>
                        </select>
                    </div>
                </div><br/>
 
                 <div class="row">
                    <div class="col-md-4">
                        <button type="button" class="btn btn-primary btn-lg" onClick="open_container();" > Launch demo modal</button>
                    </div>
                </div>
                <!-- Modal form-->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog ">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel"></h4>
                      </div>
                      <div class="modal-body" id="modal-bodyku">
                      </div>
                      <div class="modal-footer" id="modal-footerq">
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end of modal ------------------------------>
                    </div> 
 
                </section><!-- /.content -->
                <script language="javascript">
                    function open_container()
                    {
                        var size=document.getElementById('mysize').value;

                        var content = '<form role="form"><div class="form-group"><label for="exampleInputEmail1">Email address</label><input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email"></div><div class="form-group"><label for="exampleInputPassword1">Password</label><input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"></div><div class="form-group"><label for="exampleInputFile">File input</label><input type="file" id="exampleInputFile"><p class="help-block">Example block-level help text here.</p></div><div class="checkbox"><label><input type="checkbox"> Check me out</label></div><button type="submit" class="btn btn-default">Submit</button></form>';
                        var title = 'My dynamic modal dialog form with bootstrap';
                        var footer = '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button><button type="button" class="btn btn-primary">Save changes</button>';


                        setModalBox(title,content,footer,size);
                        $('#myModal').modal('show');
                    }
                    function setModalBox(title,content,footer,$size)
                    {
                        document.getElementById('modal-bodyku').innerHTML=content;
                        document.getElementById('myModalLabel').innerHTML=title;
                        document.getElementById('modal-footerq').innerHTML=footer;
                        if($size == 'large')
                        {
                            $('#myModal').attr('class', 'modal fade bs-example-modal-lg')
                                         .attr('aria-labelledby','myLargeModalLabel');
                            $('.modal-dialog').attr('class','modal-dialog modal-lg');
                        }
                        if($size == 'standart')
                        {
                            $('#myModal').attr('class', 'modal fade')
                                         .attr('aria-labelledby','myModalLabel');
                            $('.modal-dialog').attr('class','modal-dialog');
                        }
                        if($size == 'small')
                        {
                            $('#myModal').attr('class', 'modal fade bs-example-modal-sm')
                                         .attr('aria-labelledby','mySmallModalLabel');
                            $('.modal-dialog').attr('class','modal-dialog modal-sm');
                        }
                    }
                </script>
@endsection