adjustment


hi stock




@extends('admin.main_master')




<div class="box_p" style="margin-left:450px" >
    <div class="box-header with-border">
      
    </div>
    <!-- /.box-header -->
    

    <div class="box-body">
      <div class="row">
        <div class="col-6">
      
            <form action="{{route('stock_adj.update')}}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{$stock_adjustment_edit->id}}">
                <h2 class="box-title">Add Stock Adjustment</h2>
                
            <div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">SN</label>
              <div class="col-sm-10">
                <input class="form-control" type="string" value="{{$stock_adjustment_edit->sn}}" name="sn" id="">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-search-input" class="col-sm-2 col-form-label">Reference_No</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" value="{{$stock_adjustment_edit->reference_no}}" name="reference_no" id="">
              </div>
            </div>

{{-- 
    
    
    $table->id();
            $table->string('sn');
            $table->string('reference_no');
            $table->string('date');
            $table->string('unit');
            $table->string('responsible_person');
            $table->string('note');
            $table->string('added_by');
            $table->string('action');
            $table->timestamps();
    stock_adjustment_edit
    
    --}}


            <div class="form-group row">
              <label for="example-email-input" class="col-sm-2 col-form-label">Date</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" value="{{$stock_adjustment_edit->date}}" name="date" id="">
              </div>
            </div>

            <div class="form-group row">
              <label for="example-email-input" class="col-sm-2 col-form-label">unit</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" value="{{$stock_adjustment_edit->unit}}" name="unit" id="">
              </div>
            </div>


            <div class="form-group row">
                <label for="example-email-input" class="col-sm-2 col-form-label">responsible_person</label>
                <div class="col-sm-10">
                  <input class="form-control" type="text" value="{{$stock_adjustment_edit->responsible_person}}" name="responsible_person" id="">
                </div>
              </div>
  
              <div class="form-group row">
                <label for="example-email-input" class="col-sm-2 col-form-label">note</label>
                <div class="col-sm-10">
                  <input class="form-control" type="text" value="{{$stock_adjustment_edit->note}}" name="note" id="">
                </div>
              </div>

              <div class="form-group row">
                <label for="example-email-input" class="col-sm-2 col-form-label">Added_by</label>
                <div class="col-sm-10">
                  <input class="form-control" type="text" value="{{$stock_adjustment_edit->added_by}}" name="added_by" id="">
                </div>
              </div>
  
              



            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.box-body -->
  </div>



      
















































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































