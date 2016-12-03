<div class="table-footer">
    <div class="row">
        <div class="col-sm-6">
            <div class="table-actions" style=" padding: 10px 0">

                {!! Form::open(array('url'=>$pageModule.'/filter/','class' => 'form-inline')) !!}
                <?php $pages = array(5,10,20,30,50) ?>
                    <?php $orders = array('asc','desc') ?>
                        <div class="form-group">
                            <select name="rows" data-placeholder="{!! Lang::get('core.grid_show') !!}" class="form-control input-xsmall">
                                <option value=""> {!! Lang::get('core.grid_page') !!} </option>
                                @foreach($pages as $p)
                                <option value="{!! $p !!}" @if(isset($pager[ 'rows']) && $pager[ 'rows']==$p) selected="selected" @endif>{!! $p !!}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <select name="sort" data-placeholder="{!! Lang::get('core.grid_sort') !!}" class="form-control input-small">
                                <option value=""> {!! Lang::get('core.grid_sort') !!} </option>
                                @foreach($tableGrid as $field) @if($field['view'] =='1' && $field['sortable'] =='1')
                                <option value="{!! $field['field'] !!}" @if(isset($pager[ 'sort']) && $pager[ 'sort']==$field[ 'field']) selected="selected" @endif>{!! $field['label'] !!}</option>
                                @endif 
                                @endforeach

                            </select>
                        </div>
                        <div class="form-group">
                            <select name="order" data-placeholder="{!! Lang::get('core.grid_order') !!}" class="form-control input-xsmall">
                                <option value=""> {!! Lang::get('core.grid_order') !!}</option>
                                @foreach($orders as $o)
                                <option value="{!! $o !!}" @if(isset($pager[ 'order']) && $pager[ 'order']==$o) selected="selected" @endif>{!! ucwords($o) !!}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn green"><i class="icon-bubble-right"></i> GO</button>
                            <input type="hidden" name="md" value="{!! (isset($masterdetail['filtermd']) ? $masterdetail['filtermd'] : '') !!}" />
                            <input type="hidden" name="sc" value="{!! @$_GET['search'] !!}" />
                        </div>
                        {!! Form::close() !!}
            </div>
        </div>
        <div class="col-sm-6">
            <p class="text-center" style=" padding: 25px 0">
                Total : <b>{!! $pagination->total() !!}</b>
            </p>
        </div>
        <div class="col-sm-12">
            {!! $pagination->appends($pager)->render() !!}
        </div>
    </div>
</div>