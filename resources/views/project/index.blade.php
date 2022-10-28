@extends('layout.header')

@section('containt 1')
<div class="jumbotron jumbotron-fluid" style="padding: 150px; margin-top:40px;">
    <div class="container">
      <h1 class="display-4">
        <img src="{{asset('aset/img/smartphone.png')}}" alt="" style="width:100; height:100px;">
        iBox
        </h1>
      <p class="lead">Haii mampir yuk!!</p>
    </div>
  </div>
  @endsection

  @section('containt 2')
  <div class="container">
    <div class="title text-center">
        <h2>Top Populer</h2>
    </div>
    <div class="d-flex flex-row mb-3  mt-4">
        <?php $i = 1 ?>
    @foreach ($dataBarang as $item)
        @if($i < 4)
        <div class="col">
        <div class="card shadow-lg" style="width: 18rem;">
            <img src="{{asset('aset/img_produk')}}/{{$item->foto}}" class="card-img-top img fluid" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$item->nama}}</h5>
                    <p class="card-text">{{$item->jenis}}</p>
                    <h6 class="card-text">Rp.{{$item->harga}},00</h6>
                    <p class="card-text">{{$item->deskripsi_view}}</p>
                    <a href="{{route('view', $item->id)}}" class="btn btn-primary rounded" style="width:70px;"><img src="{{('aset/img/buy.png')}}" class="mx-auto d-block" alt="" style="width: 40px; margin-right:10px;"></a>
                </div> 
            </div>
      </div>
      @endif
      <?php $i++?>
    @endforeach
      
      
    
      </div>
    </div>
    
    </div>
    @endsection

    <?php $dataBarang?>
  