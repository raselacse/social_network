<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped middle-align" >
        <thead>
        <tr class="center">
            <th> <input type="checkbox" id="checkall" /></th>
            <th>Sl No.</th>
            @foreach($keyword_settings as $value)
                <th class="text-center">{!! $value->name !!}</th>
            @endforeach
            <th class="text-center">Operator</th>
        </tr>
        </thead>
        <tbody id="recordsTable">
        @if (!empty($targetArr))
            <?php $i=1; ?>
            @foreach($targetArr as $value)
                <?php
                $operators=\App\Operator::select('name')->whereIn('id',explode(',',$value->operators))->get();
                $table_check=\Illuminate\Support\Facades\Schema::hasTable('keyword_content_'.$slug);

                ?>
                <tr class="contain-center">
                    <td><input type='checkbox' value="<?php echo $value->id; ?>" @if(in_array($value->id,$operator_to_keyword)) checked="checked" @endif  name="selected_keywords[]" ></td>
                    <td> {!! $i++ !!} </td>

                    @foreach($keyword_settings as $values)
                        <?php
                        $object=str_replace(' ','_',strtolower($values->name));

                        if ($object == 'client'){
                            $client=\App\Client::where('id',$value->client)->first();
                            $keyword_value=$client != null ? $client->name:null;
                        }else if ($object == 'service_type'){
                            $service_type=\App\ServiceType::where('id',$value->service_type)->first();
                            $keyword_value=$service_type != null ? $service_type->name:null ;

                        }else if($object == 'short_code'){
                            $short_code=\App\ShortCode::where('id',$value->short_code)->first();
                            $keyword_value=$short_code!=null ? $short_code->code:null;
                        }else{

                            $keyword_value=$value->$object;
                        }


                        ?>
                        <td >{!! $keyword_value !!}</td>
                    @endforeach

                    <td> @foreach($operators as $operator) {!! $operator->name !!}, @endforeach</td>
                    </tr>
            @endforeach
        @else
            <tr>
                <td colspan="{!! count($keyword_settings)+4 !!}">{!!trans('english.EMPTY_DATA')!!}</td>
            </tr>
        @endif
        </tbody>
    </table><!---/table-responsive-->
</div>
<script>
    $('#checkall').click(function() {

        var checked = $(this).prop('checked');

        $('#recordsTable').find('input:checkbox').prop('checked', checked);
    });
</script>
