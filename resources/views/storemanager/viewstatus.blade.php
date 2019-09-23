@extends('storemanager.layout')
@section('matter')
<?php use App\Http\Controllers\UsersController; 
use Illuminate\Support\Facades\DB;
?>


          <h2>STATUS</h2>
          <br>
          @foreach($indentno as $no)
          <h2>Indent No. <?php echo $no->indentno; ?></h2>
          <?php 
          $h= $no->indentno;
          $items=DB::select('select item, quantity, department from indent where indentno=:indentno', 
          ['indentno' => $h]);
          $i=count($items);
          /*$a=array();
          $a[0]=array();
          $a[1]=array();
        $a=IndentController::indentfaculty($h);
          foreach($a as $b)
          echo $b->quantity;*/
          
          $d= $items[0]->department?>
          <h3>{{UsersController::department($d)}}</h3>
          
          <div class="table-responsive">
            <table class="table table-sm table-hover">
              <thead>
                <tr>
                
                  
                  <th>Requested Item</th>
                  <th>Quantity</th>
                  
                  
                
                </tr>
              </thead>
              <tbody>
              
              
              
                 
              @foreach($items as $item)
                <tr>
                   
                    <td>{{$item->item}}</td>
                    <td><input type="number" value="{{$item->quantity}}"/></td>
                
                  
                </tr>
                
                @endforeach
                
                <tr><td></td><td></td></tr>
            
               
                

              </tbody>
            </table>
                      </div>
                     
                      @endforeach

@endsection
