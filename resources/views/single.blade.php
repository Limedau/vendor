@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <h3 class="text-center h3 my-2 py-2">{{$post->name}}</h3>
    
    <div class="card card-body ">
        <p class="">
            <?php 
                if (empty($post->status)) {
                    echo "<span class='badge badge-danger'>Ended</span>";
                }else {
                    echo "<span class=' float-right badge badge-success'>Running</span>";
                }
            ?>
        </p>
      <!-- Avatar -->
      <div class="avatar mx-auto white">
        <img src="{{url('/data_file/'.$post->images)}}" class="rounded-circle mr-3 mb-2" height="150px" width="150px" alt="avatar">
      </div>
      <span id="rateMe2"  class="empty-stars mx-auto"></span>
      
      <div class="row ">
          <div class="col-md-6 mt-3 mb-3">
              <div class="card card-body shadow">
                  <h5 class=" h5 my-2 py-2 text-center">Overwiew</h5>
                  <p>Website: <a href="{{$post->website}}">{{$post->website}}</a></p>
                  <p>ICO date: {{$post->ico_date}}</p>
                  <p>ICO price: {{$post->ico_price}}</p>
                  <p>Ticker: {{$post->triker}}</p>
                  <p>Total Supply: {{$post->suplay}} {{$post->triker}}</p>
                  <p>Whitepaper:<a href="{{$post->whitepaper}}" class="btn peach-gradient btn-sm">Download Whitepaper</a></p>
                 
                  
              </div>
          </div>
          <div class="col-md-6 mt-3 mb-3">
              <div class="card card-body shadow">
                  <h5 class=" h5 my-2 py-2 text-center">Project Information</h5>
                  <p><i class="fa fa-link"></i> Airdrop link : <a href="{{$post->link}}" class="btn btn-sm peach-gradient">Go to Airdrop</a></p>
                  <p><i class="fa fa-money-bill"></i> Est vlue : {{$post->est_value}} $</p>
                  <p><i class="fa fa-desktop"></i> platfrom : {{$post->platfrom}} </p>
                  <p><i class="fa fa-clock"></i> End Date :  {{$post->end_date}} </p>
                  <hr>
                  <p><em>{{$post->description}}</em></p>
              </div>
          </div>
      </div>
      <div class="text-center mt-3">
        <a href="{{$post->link}}" class="btn peach-gradient btn-lg">Get Airdrop</a>
      </div>
      <div class="row justify-content-center">
          <div class="col-md-6 mt-3 mb-3">
            <div class="card card-body shadow ">
                <h5 class=" h5 my-2 py-2 ">Step By Step Guide:</h5>

                <ol>
                    <?php
                    
                        if (empty($post->step_1)) {
                            echo '';
                        } else {
                            echo "<li>.$post->step_1.</li>";
                        }
                        if (empty($post->step_2)) {
                            echo '';
                        } else {
                            echo "<li>.$post->step_2.</li>";
                        }
                        if (empty($post->step_3)) {
                            echo '';
                        } else {
                            echo "<li>.$post->step_3.</li>";
                        }
                        if (empty($post->step_4)) {
                            echo '';
                        } else {
                            echo "<li>.$post->step_4.</li>";
                        }
                        if (empty($post->step_5)) {
                            echo '';
                        } else {
                            echo "<li>.$post->step_5.</li>";
                        }
                        if (empty($post->step_6)) {
                            echo '';
                        } else {
                            echo "<li>.$post->step_6.</li>";
                        }
                        if (empty($post->step_7)) {
                            echo '';
                        } else {
                            echo "<li>.$post->step_7.</li>";
                        }
                        if (empty($post->step_8)) {
                            echo '';
                        } else {
                            echo "<li>.$post->step_8.</li>";
                        }
                        if (empty($post->step_9)) {
                            echo '';
                        } else {
                            echo "<li>.$post->step_9.</li>";
                        }
                        if (empty($post->step_10)) {
                            echo '';
                        } else {
                            echo "<li>.$post->step_10.</li>";
                        }
                    ?>
                </ol>
            </div>
          </div>
          <div class="col-md-6 mt-3 mb-3">
            <div class="card card-body shadow ">
                <h5 class=" h5 my-2 py-2 ">Requirements/tools :</h5>
                <p>
                    @php                   
                    if (empty($post->fb)) {
                        // code...
                    }else {
                        echo "<a class='btn-floating btn-sm btn-fb' type='button' role='button'><i class='fab fa-facebook-f'></i></a>";
                    }
                    if (empty($post->tw)) {
                        // code...
                    }else {
                        echo "<a class='btn-floating btn-sm btn-tw' type='button' role='button'><i class='fab fa-twitter'></i></a>";
                    }
                    if (empty($post->tg)) {
                        // code...
                    }else {
                        echo "<a class='btn-floating btn-sm btn-tw' type='button' role='button'><i class='fab fa-telegram-plane'></i></a>";
                    }
                    if (empty($post->email)) {
                        // code...
                    }else {
                        echo "<a class='btn-floating btn-sm btn-email' type='button' role='button'><i class='fas fa-envelope'></i></a>";
                    }
                    if (empty($post->phone)) {
                        // code...
                    }else {
                        echo "<a class='btn-floating btn-sm btn-email' type='button' role='button'><i class='fa fa-phone'></i></a>";
                    }
                    if (empty($post->kyc)) {
                        // code...
                    }else {
                        echo "<a class='btn-floating btn-sm btn-email' type='button' role='button'><i class='fa fa-id-card'></i></a>";
                    }
                    if (empty($post->medium)) {
                        // code...
                    }else {
                        echo "<a class='btn-floating btn-sm btn-email' type='button' role='button'><i class='fa fa-medium'></i></a>";
                    }
                    if (empty($post->reddit)) {
                        // code...
                    }else {
                        echo "<a class='btn-floating btn-sm btn-reddit' type='button' role='button'><i class='fab fa-reddit-alien'></i></a>";
                    }
                    if (empty($post->discord)) {
                        // code...
                    }else {
                        echo "<a class='btn-floating btn-sm btn-email' type='button' role='button'><i class='fab fa-discord'></i></a>";
                    }
                    if (empty($post->youtube)) {
                        // code...
                    }else {
                        echo "<a class='btn-floating btn-sm btn-yt' type='button' role='button'><i class='fab fa-youtube'></i></a>";
                    }
                    @endphp
                </p>
            </div>
          </div>
      </div>
    </div>
    
    <div class="mb-0 mt-3"></div>
        <div class=" d-flex flex-row justify-content-center mb-4">

            <!-- Form -->
            <form class="form-inline justify-content-center">
              <input type="email" class="form-control" placeholder="E-mail">
              <button class="btn btn-primary btn-sm">Subscribe</button>
            </form>
            <!-- Form -->
        </div>
    
    <p class="text-center text-danger">Don't forget to join our Telegram <a href="">channel</a>, follow us on <a href="">Twitter</a> and subscribe our newsletter to receive new airdrops!</p>
</div>

@endsection